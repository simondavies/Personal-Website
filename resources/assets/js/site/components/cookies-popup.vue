<template>
    <div>
        <transition name="fade">
            <div class="cookies-message-wrapper" v-show="isActive">
                <div class="cookies-content">
                    I use cookies on this site. Carry on surfing if you're happy with this, or to view way, click on the details tab on the right.
                </div>
                <div class="cookies-options">
                    <button class="close-cookie" aria-label="Close" aria-hidden="true" @click="closeCookiesMessage">&times;</button>
                    <button class="cookies-details" aria-label="Open" aria-hidden="true" @click="viewCookiesDetails">Details</button>
                </div>
            </div>
        </transition>
        <div class="cookies-details-wrapper" :class="{ 'is-selected' : isSelected }">
            <div class="cookies-details-content">

                <h3>Cookies On My Site</h3>
                <button class="close-cookie-details" aria-label="Close" aria-hidden="true" @click="closeCookiesDetails">&times;</button>
            
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse adipisci fuga cumque nobis quisquam autem, vel consectetur, quae nam soluta aliquid earum. Perferendis voluptas reprehenderit quis, nesciunt facere blanditiis pariatur!</p>
            
            </div>
        </div>
    </div>
</template>

<script>
    import {generateGUID} from '../services/helpers';

    export default {
        name : 'coookies-pop-up',
        data() {
            return {
                isActive : false,
                isSelected : false,
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
            /**
             * lets display the cookies details sa the user has requested to see them
             */
            viewCookiesDetails(){
                this.isActive = false;

                this.isSelected = true;

            },
            /**
             * close the cookeis details pop toUTCString
             */
            closeCookiesDetails(){
                this.isSelected = false;

            }
        }
    }
</script>

<style lang="scss" scoped>

    $orange : #f27032;
    $backgroundColour : #111;
    $popOutWidth : 360px;
    $detailsWidth : 600;

    .cookies-message-wrapper {
        margin: 0 auto;
        padding: 0 10px;
        position: fixed;
        top: 10px;
        right: 0;
        z-index: 5000;
        display: flex;
        justify-content: center;
        align-items: center;
        width: auto;
        max-width: $popOutWidth;
        border-radius: 4px 0 0 4px;
        overflow: hidden;
        background-color: rgba($backgroundColour, .6);
        box-shadow: 0 0 10px rgba($backgroundColour, .9);
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
            right: -$popOutWidth
        }
        .cookies-content {
            margin: 0 auto;
            padding: 10px 10px 10px 10px;
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
                color: $orange;
            }
            a:hover,
            a:hover:visited {
                color: white;
            }
        }
        .cookies-options {
            margin: 0;
            padding: 0;
            flex: 1 1 14%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            button {
                margin: 0;
                padding: 0;
                flex: 1 1 auto;
                border: none;
                background: none;
                position: relative;
                //top: -4px;
                width: 100%;
                height: 32px;
                font-size: 30px;
                line-height: 30px;
                font-weight: 300;
                color: rgba($orange, .5);
                cursor: pointer;
                outline: none;
                transition: color 600ms;
                &.cookies-details {
                    font-size: 12px;
                    line-height: 14px;
                    text-transform: uppercase;
                }
                &:hover {
                    color: rgba($orange, .9);
                }
            }// eo:btn
        }// eo:cookies-options
    }// eo:cookies-message-wrapper
    .cookies-details-wrapper {
        margin: 0 auto;
        padding: 0 10px;
        position: fixed;
        top: 0;
        bottom: 0;
        right: -53%;
        z-index: 5000;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        width: 50%;
        max-width: #{$detailsWidth}px;
        overflow: hidden;
        background-color: rgba($backgroundColour, .8);
        box-shadow: 0 0 10px rgba($backgroundColour, .9);
        opacity : 0;
        transition: opacity 1000ms 1s, right 600ms 1s;
        &.is-selected {
            opacity : 1;
            right: 0;
        }
        .cookies-details-content {
            margin: 0 auto;
            padding: 20px;
            color: rgba(white, .8);
            text-align: left;
            font-size: 14px;
            line-height: 18px;
            h3 {
                margin: 0 auto;
                padding: 0;
                color: rgba(white, .8);
                text-align: left;
                font-size: 24px;
                line-height: 26px;
            }
            button.close-cookie-details {
                margin: 0;
                padding: 0;
                border: none;
                background: none;
                position: absolute;
                right: 10px;
                top: 10px;
                width: 32px;
                height: 32px;
                font-size: 30px;
                line-height: 30px;
                font-weight: 300;
                color: rgba($orange, .5);
                cursor: pointer;
                outline: none;
                transition: color 600ms;
                &:hover {
                    color: rgba($orange, .9);
                }
            }// eo:btn
            a:link,
            a:active,
            a:visited {
                font-size: inherit;
                line-height: inherit;
                color: $orange;
            }
            a:hover,
            a:hover:visited {
                color: white;
            }
        }
    } // eo:cookies-details-wrapper
</style>
