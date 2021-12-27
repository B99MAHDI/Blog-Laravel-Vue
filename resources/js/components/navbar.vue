<template>
    <div class="navBar">
        <div class="container">
            <ul id="nav" class="nav">
                <!-- Menu Lines --->
                <li id="menu_lines">
                    <a class="menu_lines">
                        <div id="one" class="lines one"></div>
                        <div id="two" class="lines two"></div>
                        <div id="three" class="lines three"></div>
                    </a>
                </li>
                <li id="logo-name" title="Home"><a>BEM</a></li>
                <li id="navlinks">
                    <ul>
                        <li><a href="/home" title="Home">Home</a></li>
                        <li><a href="/blog" title="Posts">Blog</a></li>
                        <li><a href="/projects" title="Examples of Projects">Projects</a></li>
                        <li><a href="/til" title="What i learned today">TIL</a></li>
                        <li><a href="/about" title="About me">About me</a></li>
                        <li><a href="/contact" title="Contacts">Contact</a></li>
                        <li id="subscribe">
                            <button v-on:click="showsigninmodal()" id="subscribeBtn" title="Subscribe to receive my latest news">Sign in</button>
                        </li>
                    </ul>
                </li>
            </ul> 
        </div>
    </div>
</template>


<script>

import logmodal from './logmodal';

export default {
    components:{
        logmodal
    },
    data(){
        return{

        }
    },
    methods:{
        showsigninmodal(){
            this.signinmodal_display='';
        },
        sign_in(){
            this.login_form_display="";
            this.inscription_form_display="none";
        },
        sign_up(){
            this.login_form_display="none";
            this.inscription_form_display="";
        }
    }
}
</script>

