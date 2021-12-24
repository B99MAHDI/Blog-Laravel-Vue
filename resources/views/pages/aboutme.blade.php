<!doctype html>
<html lang="en">
  <head>
    <title>About BEM</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/aboutme.css">
    <link rel="stylesheet" href="css/modals.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css"> 


{{-- 
<style>

</style>    
 --}}


</head>
<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



@include('NavBars.navbar')
    

<div class="content container">
    <h1>More About Me</h1>
    <section class="intro">
        <small>14 December 2021, 1 min . BEM</small>
        <p>
            I am a junior Systems engineer (Devops engineer). I am passionate about computer science, and most interested in systems administration and operations, equally in algorithms and data structures.            
        </p>
        
        <p>
            Moreover, I love programming, and I wrote a good amount of code in Python, C/C++, Go, PHP, and javascript (Node too) … Not to mention that I am always open to learn new programming concepts and paradigms.
        </p>

        <p>
            Besides computer science, I am interested in startups, education, and new technologies. I am also a FOSS advocate and a blogger.
        </p>

        <p>
            I love nature, food, and travel and if it wasn't for computer science, I would have been a world traveling chef, who writes movie reviews from time to time.
        </p>
    </section>

    <div class="title"><h1 style="color:green;">My </h1><h1>Skills</h1></div>
    <section class="skills">
        <!-- Cards Skills -->
        <div class="skillBox">
            <div class="skillHeader">
                <img src="images/logo-html.png" style='width:100%; border-radius:2em;' />
            </div>
            <div class="skillContent">
                <h6>HTML</h6>
            </div>
        </div>
    </section>

    <div class="title"><h1 style="color:green;">My </h1><h1>Education</h1></div>
    <section class="education">
        <div class="educationBox">
            <div class="educationHeader">
                <img src="images/education-icon.jpg" />
                <div class="date">2019 - 2020</div>
            </div>
            <div class="educationContent">
                <div class="vertical-line">
                    <div class="verticaLine"></div>
                </div>
                <div class="content">
                    <div class="educationtitle">
                        Informatic engineer ENSEM 
                    </div>
                    <div class="educationdesc">
                        hello im the education content hello im the education content
                    </div>
                </div>                
            </div>
        </div>
        <div class="educationBox">
            <div class="educationHeader">
                <img src="images/education-icon.jpg" />
                <div class="date">2019 - 2020</div>
            </div>
            <div class="educationContent">
                <div class="vertical-line">
                    <div class="verticaLine"></div>
                </div>
                <div class="content">
                    <div class="educationtitle">
                        Informatic engineer ENSEM 
                    </div>
                    <div class="educationdesc">
                        hello im the education content hello im the education content
                    </div>
                </div>            
            </div>
        </div>
        <div class="educationBox">
            <div class="educationHeader">
                <img src="images/education-icon.jpg" />
                <div class="date">2019 - 2020</div>
            </div>
            <div class="educationContent">
                <div class="vertical-line">
                    <div class="verticaLine"></div>
                </div>
                <div class="content">
                    <div class="educationtitle">
                        Informatic engineer ENSEM 
                    </div>
                    <div class="educationdesc">
                        hello im the education content hello im the education content
                    </div>
                </div>            
            </div>
        </div>
        <div class="educationBox">
            <div class="educationHeader">
                <img src="images/education-icon.jpg" />
                <div class="date">2019 - 2020</div>
            </div>
            <div class="educationContent">
                <div class="vertical-line">
                    <div class="verticaLine"></div>
                </div>
                <div class="content">
                    <div class="educationtitle">
                        Informatic engineer ENSEM 
                    </div>
                    <div class="educationdesc">
                        hello im the education content hello im the education content
                    </div>
                </div>            
            </div>
        </div>
        <div class="educationBox">
            <div class="educationHeader">
                <img src="images/education-icon.jpg" />
                <div class="date">2019 - 2020</div>
            </div>
            <div class="educationContent">
                <div class="vertical-line">
                    <div class="verticaLine"></div>
                </div>
                <div class="content">
                    <div class="educationtitle">
                        Informatic engineer ENSEM 
                    </div>
                    <div class="educationdesc">
                        hello im the education content hello im the education content
                    </div>
                </div>            
            </div>
        </div>
    </section>
</div>



@include('NavBars.footer')

@include('Modals.LogModal')
@include('Modals.SubModal')

<script src="/js/modal.js"></script>
<noscript>you need to activate Javascript in your browser</noscript>
</body>
</html>
