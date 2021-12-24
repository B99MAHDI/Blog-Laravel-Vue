<!doctype html>
<html lang="en">
  <head>
    <title>BEM-Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/modals.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">

<style>

</style>

</head>
<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

{{-- @include('NavBars.navbar') --}}

<div id="navbar">
	<navbarcomponent></navbarcomponent>
</div>

<section class="content">
	<div class="container" style="color:white;">
		<img src="images/hacker.jpg" width="200px"/>
		<h1>BEM</h1>
		<p>Email:hck.bm17@gmail.com</p>
		<p>A WEB developper guy with a high tendency to write code.</p>
	</div>
</section>


	{{-- @include('NavBars.footer') --}}

<div id="footer">
    <footercomponent></footercomponent>
</div>

<div id="modals">
	<logmodal></logmodal>
	<submodal></submodal>
</div>
	{{-- @include('Modals.LogModal')
	@include('Modals.SubModal')
  <script src="/js/app.js"></script> 
  --}}
	<script src="{{ asset('js/app.js') }}" ></script>
<noscript>you need to activate Javascript in your browser</noscript>
</body>
</html>