<template>
    <div class="content">
        <div class="title"><h1>Get in touch</h1></div>
        <div class="contact-info">
            <div class="fullname">
                <div class="firstname-contact">
                    <h5 for="firstname">First Name :</h5>
                    <p>El Mahdi</p>
                </div>
                <div class="vertical-line"></div>
                <div class="lastname-contact">
                    <h5 for="lastname">Last Name :</h5>
                    <p>Bahou</p>
                </div>
            </div>
            <br>
            <div class="contacts">
                <div class="email-contact">
                    <h5 for="email">E-Mail :</h5>
                    <p>hck.bm17@gmail.com</p>
                </div>
                <div class="vertical-line"></div>
                <div class="phone-contact">
                    <h5 for="phone">Phone Number :</h5>
                    <p>0666666666</p>
                </div>
            </div>
        </div>
        <h1>Send Me A Message</h1>
        <div class="contact-form">
            
            <form method="" action="">
                <div class="name">
                    <label for="fullname">Full Name :</label>
                    <input type="text" placeholder="Your Name"/>
                </div>
                <br>
                <div class="email">        
                    <label for="email">E-Mail :</label>
                    <input type="email" placeholder="Your E-Mail"/>
                </div>
                <br>
                <div class="subject">        
                    <label for="subject">Subject :</label>
                    <input type="subject" placeholder="Your Subject"/>
                </div>
                <br>
                <div class="message">
                    <label for="yourmessage">Your Message :</label>
                    <textarea type="text" placeholder="Your Message"></textarea>
                </div>
                <br>
                <button class="btn btn-outline-primary" type="button" style="float:right;">Send</button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>