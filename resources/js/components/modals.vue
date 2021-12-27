<template>
    <div class="modals">
        <!-- Sign in Modal -->
        <div id="signinmodal" class="my_modal">
            <div class="modalContent">
                <span id="closeBtn" class="closeBtn">&times;</span><br><br>
                <div class="container-fluid">
                    <div class="subscribeButtons" style='display:flex;'>
                        <button v-on:click="sign_in" class="signBtn" type="button" id="loginBtn" style="width:50%;background-color:rgb(92, 92, 92);">Connexion</button>
                        <button v-on:click="sign_up" class="signBtn" type="button" id="subBtn" style="flex:1;">Inscription</button>
                    </div>
                    
                    <form id="login_form" action="" method="">
                        <input type="text" placeholder="Username or Email" />
                        <input type="password" placeholder="Password" />
                        <br><br>
                        <button type="submit" id="sign_inBtn" class="btn btn-success">Sign In</button>
                    </form>

                    <form id="inscription_form" action="" method="" style="display:none;">
                        <input type="text" placeholder="Email" />
                        <input type="text" placeholder="Username" />
                        <input type="password" placeholder="Password" />
                        <br><br>
                        <button type="submit" id="sign_upBtn" class="btn btn-success">Sign Up</button><br><br>
                        <div style="text-align:center;"><small>By creating an account you will subscribe to our newsletter.</small></div>
                    </form>
                </div>
            </div>
        </div>

        <!-- subscribe Modal -->

        <div id="subscribemodal">
            <div class="modalContent">
                <span id="closeSubscribe_modal" class="closeBtn">&times;</span><br><br>
                <div class="container-fluid">
                    <p>Subscribe to get my latest news in your inbox</p>

                    <form id="subscribe_form" action="" method="">
                        <input type="text" placeholder="Your Email goes here" />
                        <br><br>
                        <button type="submit" id="subscribe_button" class="btn btn-success">Subscribe</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            modal_display:'none',
            subscribe_modal_display:'none',
            login_form_display:'none',
            inscription_form_display:'none',
            activeButton:'rgb(92, 92, 92)',
            deactiveButton:'grey'
        }
    },
    methods:{
        /* Close modal */
        close_modal(e){
            if(e.target === this.modal)
                {this.modal.display = 'none';}
            if(e.target === this.subscribe_modal)
                {this.subscribe_modal.display='none';}
        },
        changeToLoginBtn(){
            this.subscribeButton[0].backgroundColor='rgb(92, 92, 92)';
            this.subscribeButton[1].backgroundColor='grey';
        },
        changeToSubscriptionBtn(){
            this.subscribeButton[0].backgroundColor='grey';
            this.subscribeButton[1].backgroundColor='rgb(92, 92, 92)';
        }
    }
}
</script>