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
                    <h1>Elearning </h1>
                    <p>Think Smart, Learn Smart, Be Smart!!!</p>
                    <br>

                </div>
            </div>
        </div>

    </header>

    <br><br>
    <H1><FONT COLOR="purple"><CENTER><u>TIME TABLE</u></FONT></H1>
<br><br><br>
<table border="2" cellspacing="3" align="center" bordercolor="brown">
<tr>
 <td align="center">
 <td>8:30-9:30</td>
 <td>9:30-10:30</td>
 <td>10:30-11:30</td>
 <td>11:30-12:30</td>
 <td>12:30-2:00</td>
 <td>2:00-3:00</td>
 <td>3:00-4:00</td>
 <td>4:00-5:00</td>
</tr>
<tr>
 <td align="center">MONDAY</td>
 <td align="center">---<td align="center"><font color="blue">SUB1<br></td>
 <td align="center"><font color="pink">SUB2<br></td>
 <td align="center"><font color="red">SUB3<br></td>
 <td rowspan="6" align="center">L<br>U<br>N<br>C<br>H</td>
 <td align="center"><font color="maroon">SUB4<br></td>
 <td align="center"><font color="brown">SUB5<br></td>
 <td align="center">counselling class</td>
</tr>
<tr>
 <td align="center">TUESDAY</td>
 <td align="center"><font color="blue">SUB1<br></td>
 <td align="center"><font color="red">SUB2<br></td>
 <td align="center"><font color="pink">SUB3<br></td>
 <td align="center">---</td>
 <td align="center"><font color="orange">SUB4<BR></td>
 <td align="center"><font color="maroon">SUB5<br></td>
 <td align="center">library</td>
</tr>
<tr>
 <td align="center">WEDNESDAY</td>
 <td align="center"><font color="pink">SUB1<br></td>
 <td align="center"><font color="orange">SUB2<BR></td>

 <td align="center"><font color="brown">SUB3<br></td>
 <td align="center">---</td>
 <td colspan="3" align="center"><font color="green"> lab</td>
</tr>
<tr>
 <td align="center">THURSDAY</td>
 <td align="center">SUB1<br></td>
 <td align="center"><font color="brown">SUB2<br></td>
 <td align="center"><font color="orange">SUB3<BR></td>
 <td align="center">---</td>
 <td align="center"><font color="blue">SUB4<br></td>
 <td align="center"><font color="red">SUB5<br></td>
 <td align="center">library</td>
</tr>
<tr>
 <td align="center">FRIDAY</td>
 <td align="center"><font color="orange">SUB1<BR></td>
 <td align="center"><font color="maroon">SUB2<br></td>

 

 <td align="center"><font color="blue">SUB3<br></td>
 <td align="center">---</td>
 <td align="center"><font color="pink">SUB4<br></td>
 <td align="center"><font color="brown">SUB5<br></td>
 <td align="center">library</td>
</tr>
<tr>
 <td align="center">SATURDAY</td>
 <td align="center"><font color="red">SUB1<br></td>
 <td colspan="3" align="center">seminar</td>
 <td align="center"><font color="pink">SUB4<br></td>
 <td align="center"><font color="brown">SUB5<br></td>
 <td align="center">library</td>
</tr>
</table>
<br><br><br><br><br><br><br>
<div></div>



   
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
