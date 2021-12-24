<!doctype html>
<html lang="en">
  <head>
    <title>BEM Blog</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/blog.css">
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



@include('NavBars.navbar')
    

<div class="content container">
	<div class="title">
		<h1>Blog</h1>
	</div>
	<div class="grid">
		<br>
			<div class="grid-item">
				<div class="grid-header">
					<h4>Grid Header</h4>
				</div>
				<div class="grid-content">
					<p>Grid Content</p>
				</div>
				<div class="grid-footer">
					<small>02 October 2021</small>
				</div>
			</div>
		
	</div>
</div>

    
@include('NavBars.footer')

@include('Modals.LogModal')
@include('Modals.SubModal')

<script src="/js/modal.js"></script>
<noscript>you need to activate Javascript in your browser</noscript>
</body>
</html>
