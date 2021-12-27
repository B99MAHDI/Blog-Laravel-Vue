/* Get the sign in form */
var login_form = document.getElementById('login_form');
/* Get the sign up form */
var inscription_form = document.getElementById('inscription_form');
//Get modalelements
var modal = document.getElementById('signinmodal');
var subscribe_modal = document.getElementById('subscribemodal');

// Get open modal button
var modalBtn = document.getElementById('subscribeBtn');
var modalBtn_footer = document.getElementById('subscribeButton-footer');
// Get clode button
var closeBtn = document.getElementById('closeBtn');
var closeSubscribe_modal = document.getElementById('closeSubscribe_modal');
/* Get the subscription buttons */
var subscribeButton = document.getElementsByClassName('signBtn');
/* Get the sign in button */
var sign_inBtn = document.getElementById('sign_inBtn');
/* Get the sign up button */
var sign_upBtn = document.getElementById('sign_upBtn');


// Listen for Click
modalBtn.addEventListener("click" , () => {modal.style.display="block"});
modalBtn_footer.addEventListener("click" , () => {subscribe_modal.style.display="block"});
closeBtn.addEventListener('click' , () => {modal.style.display = 'none';});
closeSubscribe_modal.addEventListener('click' , () => {subscribe_modal.style.display = 'none';});

subscribeButton[0].addEventListener('click' , changeToLoginBtn);
subscribeButton[1].addEventListener('click' , changeToSubscriptionBtn);
// Click outside
window.addEventListener('click' , close_modal);



//sign_inBtn.addEventListener('click' , sign_in_up);
//sign_upBtn.addEventListener('click' , sign_in_up);

/* Close modal */
function close_modal(e){
    if(e.target === modal)
        {modal.style.display = 'none';}
    if(e.target === subscribe_modal)
        {subscribe_modal.style.display='none';}
}
function sign_in(){
    login_form.style.display="";
    inscription_form.style.display="none";
}
function sign_up(){
    login_form.style.display="none";
    inscription_form.style.display="";
}

function changeToLoginBtn(){
    subscribeButton[0].style.backgroundColor='rgb(92, 92, 92)';
    subscribeButton[1].style.backgroundColor='grey';
}

function changeToSubscriptionBtn(){
    subscribeButton[0].style.backgroundColor='grey';
    subscribeButton[1].style.backgroundColor='rgb(92, 92, 92)';
}

