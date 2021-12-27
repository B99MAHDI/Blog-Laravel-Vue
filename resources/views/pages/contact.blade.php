<!doctype html>
<html lang="en">
<head>
    <title>BEM - Contact</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/modals.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css"> 

{{-- <style>

</style> --}}

</head>
<body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Import NavrBar -->
    @include('NavBars.navbar')
    
<div class="content container">
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

<!-- Import Footer -->
    @include('NavBars.footer')
<!-- Import Modals -->
    @include('Modals.LogModal')
    @include('Modals.SubModal')
    <script src="/js/modal.js"></script>

<noscript><strong>you need to activate Javascript in your browser</strong></noscript>
</body>
</html>