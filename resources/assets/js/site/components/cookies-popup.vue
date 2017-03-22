<template>
    <div class="cookies-message-wrapper">
        <div class="cookies-content">{{message}}</div>
        <button id="close-cookie" aria-label="Close" aria-hidden="true" @click="closeCookie">&times;</button>
    </div>
</template>

<script>
    export default {
        props : {
             message : {required : true},
        },
        created(){
            console.info('cookies created');
            //-- lets check user does not already have the cookie, if yes do nothing...
            this.checkForCookie();
            //-- no cookie set, lets create it and set it
            this.setCookie();
            //-- once set lets now display the cookie once mounted
            this.createCookie();
        },
        mounted() {
            console.info('cookies mounted');
            
        },
        methods : {
            closeCookie(evt){
                console.info('close me');
            },
            checkForCookie(){
                console.info('check cookie');
            },
            setCookie(){
                console.info('set cookie');
            },
            createCookie() {
                console.info('create and display');
            }
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
