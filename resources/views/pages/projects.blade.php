<!doctype html>
<html lang="en">
  <head>
    <title>BEM - Projects</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/projects.css">
    <link rel="stylesheet" href="css/modals.css">
	<link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">

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
        <h1>My Projects</h1>
    </div>
    <div class="projects-box">
        <div class="projects-item">
            <div class="project-header">
                <img src="images/projects-image.jpg" width="100%"/>
            </div>
            <div class="project-content">
                <div class="project-title">
                    Project Title
                </div>
                <div class="project-desc">
                    <p>this is the project description</p>
                    <p>this project is my first project that i realized</p>
                    <p>it tooks me two months to complete it</p>
                    <p>its an application dedicated to manage the stock in such an entreprise</p> 
                </div>
                <div class="three-points">...</div>
            </div>
            <div class="project-footer">
                <div class="date">
                    <small>Edited : 2 Dec 2021</small>
                </div>
                <button type="button" class="learn-more-button">More Details</button>
            </div>
        </div>

        
    </div>
</div>


@include('NavBars.footer')

@include('Modals.LogModal')
@include('Modals.SubModal')

<script src="/js/modal.js"></script>
<noscript><strong>you need to activate Javascript in your browser</strong></noscript>
</body>
</html>