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

    <title>Elearn Academy</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Elearn Academy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>
          <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="./learning" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Learning
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./assignment.php">Assignment</a>
                        <a class="dropdown-item" href="./quiz.php">Quiz</a>
                        <a class="dropdown-item" href="./attendance.php">Attendance</a>
                        <a class="dropdown-item" href="./timetable.php">Time Table</a>
                        
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./feedback.php">Forums</a>
                        <a class="dropdown-item" href="./link.php">Resource links</a>
                    </div>
                </li>
      
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="welcome.php"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>


    <div id="carouselExampleCaptions" class="carousel slide carousel-fade " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/4.jpg" class="img-fluid d-block w-10" alt="CyberXERX">
                <div class="carousel-caption d-none d-md-block">
                    <h1><?php echo "Welcome ". $_SESSION['username']?>!</h1>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/5.jpg" class="img-fluid d-block w-10" alt="CyberXERX">
                <div class="carousel-caption d-none d-md-block">
                    

                </div>
            </div>

            <div class="carousel-item">
                <img src="./img/1.jpg" class="img-fluid d-block w-10" alt="CyberXERX">
                <div class="carousel-caption d-none d-md-block">
                   
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>Elearn Academy </h1>
                    <p>Think Smart, Learn Smart, Be Smart!!!</p>
                    <br>

                </div>
            </div>
        </div>

    </header>

    <div class="container my-4">
        <div class="row mb-2 __web-inspector-hide-shortcut__">
            <div class="col-md-6">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Updated</strong>
                        <h3 class="mb-0">Time Table </h3>
                        <div class="mb-1 text-muted">Sep 28</div>
                        <p class="card-text mb-auto"></p>
                        <a href="timetable.php"
                            class="stretched-link">Open</a>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">New</strong>
                        <h3 class="mb-0">Assignments</h3>
                        <div class="mb-1 text-muted">Sep 28</div>
                        <p class="mb-auto"></p>
                        <a href="assignment.php"
                            class="stretched-link">View</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="row mb-2 __web-inspector-hide-shortcut__">
            <div class="col-md-6">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Latest</strong>
                        <h3 class="mb-0">Attendance</h3>
                        <div class="mb-1 text-muted">Sep 28</div>
                        <p class="card-text mb-auto">
                        </p>
                        <a href="attendance.php"
                            class="stretched-link">See Here</a>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">New</strong>
                        <h3 class="mb-0">Quiz</h3>
                        <div class="mb-1 text-muted">Sep 28</div>
                        <p class="mb-auto"></p>
                        <a href="quiz.php"
                            class="stretched-link">Take Quiz</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="row mb-2 __web-inspector-hide-shortcut__">
            <div class="col-md-6">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">Compulsory</strong>
                        <h3 class="mb-0">Feedback Form</h3>
                        <div class="mb-1 text-muted">Sep 28</div>
                        <p class="card-text mb-auto"></p>
                        <a href="feedback.php"
                            class="stretched-link">Fill Feedback Form Here </a>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">New</strong>
                        <h3 class="mb-0">Resources Links</h3>
                        <div class="mb-1 text-muted">Sep 28</div>
                        <p class="mb-auto">
                        </p>
                        <a href="link.php"
                            class="stretched-link">Get</a>
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
                        href="mailto:cyberxerx@gmail.com">ElearnAcademy@gmail.com</a>
                </address>
            </div>
            <div class="col-12 col-sm-4 align-self-center">
                <div class="text-center">

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto"><br>
                <p>© Copyright 2020 Elearn Academy</p>
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
