<template>
    <transition name="fade">
        <div class="cookies-message-wrapper" v-show="isActive">
            <div class="cookies-content">I use cookies on this site. Carry on surfing if you're happy with this, or visit my cookies page for <a class="" href="/cookies">more details</a>.</div>
            <button id="close-cookie" aria-label="Close" aria-hidden="true" @click="closeCookiesMessage">&times;</button>
        </div>
    </transition>
</template>

<script>
    import {generateGUID} from '../services/helpers';

    export default {
        name : 'coookies-pop-up',
        data() {
            return {
                isActive : false,
                cookie_name : 'siteCookiesMessage',
                cookie_value : generateGUID()
            }
        },
        mounted() {
            
            //-- check users browser for our set cookie
            let cookieSet = this.checkForCookie();
            
            //-- if no cookie has been set lets set one and activate message
            if(!cookieSet) {
                
                this.setCookie(this.cookie_value, 30);
                
                this.displayCookiesMessage();
            }

        },
        methods : {
            /**
             * display the cookie message on the browser
             */
            displayCookiesMessage(){

                this.isActive = true;
            
            },
            /**
             * close and remove the cookies message
             */
            closeCookiesMessage(evt){

                this.isActive = false;

            },
            /**
             * check to see if the users browser has our cookie
             */
            checkForCookie(){

                this.cookie_name = this.cookie_name + "=";

                let cookies = document.cookie.split(';');

                for(var i = 0; i <cookies.length; i++) {
                    let cookie = cookies[i];
                    while (cookie.charAt(0)==' ') {
                        cookie = cookie.substring(1);
                    }
                    if (cookie.indexOf(this.cookie_name) == 0) {
                        return cookie.substring(this.cookie_name.length,cookie.length);
                    }
                }
                
                return false;

            },
            /**
             * set our cookies expiry date
             */
            setCookieExpireDate(){

                let date = new Date();
                
                date.setTime(date.getTime() + (this.days_to_expire*24*60*60*1000));

                var expires = "expires="+ date.toUTCString();

            },
            /**
             * completley delete the entire cookie
             */
            setCookie(value, days_to_expire) {
                let cookie_value = value,
                    cookie_expires = this.setCookieExpireDate();

                document.cookie = this.cookie_name + "=" + cookie_value + "; " + days_to_expire;

            },
            /**
             * completley delete the entire cookie
             */
            removeCookie(){

                document.cookie = this.cookie_name + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;'

            },
        }
    }
</script>

<style lang="scss" scoped>
    .cookies-message-wrapper {
        margin: 0 auto;
        padding: 0;
        position: fixed;
        top: 10px;
        right: 0;
        z-index: 5000;
        display: flex;
        justify-content: center;
        align-items: center;
        width: auto;
        max-width: 340px;
        border-radius: 4px 0 0 4px;
        overflow: hidden;
        background-color: rgba(17,17,17, .6);
        box-shadow: 0 0 10px rgba(17,17,17, .9);
        opacity : 1;
        &.fade-enter-active{
            transition: opacity 1000ms 1s, right 600ms 1s;
        }
        &.fade-leave-active {
            transition: opacity 600ms, right 600ms;
        }
        &.fade-enter, 
        &.fade-leave-to {
            opacity: 0;
            right: -360px
        }
        .cookies-content {
            margin: 0 auto;
            padding: 10px 20px;
            flex: 1 1 86%;
            color: rgba(white, .8);
            text-align: left;
            font-size: 12px;
            line-height: 18px;
            a:link,
            a:active,
            a:visited {
                font-size: inherit;
                line-height: inherit;
                color: #f27032;
            }
            a:hover,
            a:hover:visited {
                color: white;
            }
        }
        button {
            margin: 0;
            padding: 0;
            flex: 1 1 14%;
            border: none;
            background: none;
            position: relative;
            top: -4px;
            font-size: 30px;
            line-height: 30px;
            font-weight: 300;
            color: rgba(#f27032, .5);
            cursor: pointer;
            transition: color 600ms;
            &:hover {
                color: rgba(#f27032, .9);
            }
        }
    }
</style>
