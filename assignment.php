<?php

session_start();

$localhost = "localhost"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "login";  #database name
 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: index.php");
}


if (isset($_POST["submit"]))
 {
     #retrieve file title
        $title = $_POST["title"];
     
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = './img';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    #sql query to insert into database
    $sql = "INSERT into fileup(title,image) VALUES('$title','$pname')";
 
    if(mysqli_query($conn,$sql)){
 
        echo "File Sucessfully uploaded";
        }
        else{
            echo "Error";
        }
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
                       <a class="dropdown-item" href="./feedback.php">Forms</a>
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

<header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>Elearn Academy</h1>
                    <p>Think Smart, Learn Smart, Be Smart!!!</p>
                    <br>

                </div>
            </div>
        </div>

    </header>
    
    <div class="container my-4">
        <div class="row mb-2 __web-inspector-hide-shortcut__">
            <div class="col">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary"></strong>
                        <h3 class="mb-0">Assignments Files</h3>
                        <div class="mb-1 text-muted"></div>
                    </div>
                    
                </div>
            </div>
            
    </div>

    <div class="container my-4">
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7">
                <h2 class="featurette-heading"> </h2>
                <p class="lead"></p>
            </div>
        </div>
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

    </div>
   
 <div class="container my-4">
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7">
                <h2 class="featurette-heading"> </h2>
                <p class="lead"></p>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="row mb-2 __web-inspector-hide-shortcut__">
            <div class="col">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary"></strong>
                        <h3 class="mb-0">Assignments Videos</h3>
                        <div class="mb-1 text-muted"></div>
                
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


</div>
<div class="container my-4">
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7">
                <h2 class="featurette-heading"> </h2>
                <p class="lead"></p>
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="row mb-2 __web-inspector-hide-shortcut__">
            <div class="col">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary"></strong>
                        <h3 class="mb-0">Upload Assignments</h3>
                        <div class="mb-1 text-muted"></div>
                
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
                        <strong class="d-inline-block mb-2 text-primary"></strong>
                        <h3 class="mb-0">Upload Your Assignment Here:</h3>
                        <div class="mb-1 text-muted">Deadline: Oct 25</div>
                        <p class="card-text mb-auto">
                        </p>
                       <div>
                       <h5><h/5>
                       <br>
                        <form method="post" enctype="multipart/form-data">
                       <div class="form-group row">
    
    
    <label>Title : </label> 
    <input type="text" name="title"></div> 
    <div class="form-group row">
    <label>File Upload : </label><br>
    <input type="File" name="file"></div>

    <div class="form-group row">
    <input type="submit" name="submit"></div>
   


 
 
</form></div>
                    </div>
                    
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
            <h2>Conatct Us At</h2>
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
