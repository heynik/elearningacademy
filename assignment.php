<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: index.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP login system!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Php Login System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>
<header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>Elearning </h1>
                    <p>Think Smart, Learn Smart, Be Smart!!!</p>
                    <br>

                </div>
            </div>
        </div>

    </header>

    <div class="col-12 col-sm-6">
    <h2> Assignments Files </h2>
</div>
    <div class="container my-4">
        <div class="row mb-2 __web-inspector-hide-shortcut__">
            <div class="col-md-6">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">New</strong>
                        <h3 class="mb-0">Assignment File 1  </h3>
                        <div class="mb-1 text-muted">Aug 13</div>
                        <p class="card-text mb-auto"></p>
                        
                        
                        <a href ="resources/1.pdf" target ="_blank"  class="stretched-link"> View here </a> 
                    </div>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">New</strong>
                        <h3 class="mb-0">Assignment File 1</h3>
                        <div class="mb-1 text-muted">Aug 13</div>
                        <p class="mb-auto"></p>
                        <a href="downloadpdf.php?file=1" target="_blank"
                            class="stretched-link">Download Here</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-6">
    <h2> Assignments Videos </h2>
</div>


    <div class="container my-4">
        <div class="row mb-2 __web-inspector-hide-shortcut__">
            <div class="col-md-6">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">New</strong>
                        <h3 class="mb-0">Assignment Video 1</h3>
                        <div class="mb-1 text-muted">Jul 25</div>
                        <p class="card-text mb-auto">
                        </p>
                        <a href="resources/1.mp4"
                            class="stretched-link">Watch Here</a>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">New</strong>
                        <h3 class="mb-0">Assignment Video 1</h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-auto"></p>
                        <a href="downloadvideo.php?file=1" target="_blank"
                            class="stretched-link">Download Here</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>













    <footer class="footer  p-3 bg-dark text-white">
    <div class="container">
        <div class="row">

            <div class="col-7 col-sm-5">
                
                <address>
                    <br>


                    <i class="fa fa-envelope fa-lg"></i> Email: <a
                        href="mailto:cyberxerx@gmail.com">elearning@gmail.com</a>
                </address>
            </div>
            <div class="col-12 col-sm-4 align-self-center">
                <div class="text-center">

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto"><br>
                <p>© Copyright 2020 Elearning</p>
            </div>
        </div>
    </div>
    
    


</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
