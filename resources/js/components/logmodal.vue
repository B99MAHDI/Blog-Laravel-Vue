<template>
    <!-- Sign in Modal -->

    <div id="signinmodal" class="my_modal">
        <div class="modalContent">
            <span id="closeBtn" class="closeBtn">&times;</span><br><br>
            <div class="container-fluid">
                <div class="subscribeButtons" style='display:flex;'>
                    <button onclick="sign_in()" class="signBtn" type="button" id="loginBtn" style="width:50%;background-color:rgb(92, 92, 92);">Connexion</button>
                    <button onclick="sign_up()" class="signBtn" type="button" id="subBtn" style="flex:1;">Inscription</button>
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
</template>