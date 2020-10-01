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

if(isset($_POST['submit']))
{
    foreach ($_POST['attendance_status'] as $id => $attendance_status)
    {
        $roll_no = $_POST['roll_no'][$id];
        $student_name = $_POST['student_name'][$id];
        $date_created = date('Y-m-d H:i:s');
        $date_modified = date('Y-m-d H:i:s');
         
        $attendance = $conn->prepare("INSERT INTO store (roll_no, student_name, date_created, date_modified, attendance_status) VALUES (?, ?, ?, ?, ?)");
        $attendance->bind_param("issss", $roll_no, $student_name, $date_created, $date_modified, $attendance_status);
        $attendance->execute();
    }
     
    if ($conn->affected_rows==1) {
        $msg = "Attendance has been added successfully";
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
    <style type="text/css">
table {
width: 800px;
height: 200px;
}



</style>

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
                    <h1>Elearn Academy </h1>
                    <p>Think Smart, Learn Smart, Be Smart!!!</p>
                    <br>

                </div>
            </div>
        </div>

    </header>

<div>
<br><br>
<div class="container my-4">
        <div class="row mb-2 __web-inspector-hide-shortcut__">
            <div class="col">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary"></strong>
                        <h3 class="mb-0" align="center">Attendance List</h3>
                        <div class="mb-1 text-muted"></div>
                        <p class="card-text mb-auto"></p>
<br>
                        <div>
                        <form action="" method="post">
    <table border="1" cellspacing="3" align="center">
        <tbody>
            <tr>
                <td align="center">ID</td>
                <td align="center"> Time</td>
                <td align="center"> Name</td>
                <td align="center">Attendance</td>
            </tr>
            <tr>
                <td align="center">1</td>
                <td align="center">
                    123
                    <input type="hidden" name="roll_no[]" value="123" />
                </td>
                <td align="center">
                    Raj Shekhar
                    <input type="hidden" name="student_name[]" value="Raj Shekhar" />
                </td>
                <td align="center">
                    <label for="present0">
                        <input type="radio" id="present0" name="attendance_status[0]" value="Present"> Present
                    </label>
                    <label for="absent0">
                        <input type="radio" id="absent0" name="attendance_status[0]" value="Absent"> Absent
                    </label>
                </td>
            </tr>
            <tr>
                <td align="center">2</td>
                <td align="center">
                    231
                    <input type="hidden" name="roll_no[]" value="231" />
                </td>
                <td align="center">
                    Pankaj Kumar
                    <input type="hidden" name="student_name[]" value="Pankaj Kumar" />
                </td>
                <td align="center">
                    <label for="present1">
                        <input type="radio" id="present1" name="attendance_status[1]" value="Present"> Present
                    </label>
                    <label for="absent1">
                        <input type="radio" id="absent1" name="attendance_status[1]" value="Absent"> Absent
                    </label>
                </td>
            </tr>
            <tr>
            <td align="center">3</td>
            <td align="center">
                    345
                    <input type="hidden" name="roll_no[]" value="345" />
                </td>
                <td align="center">
                    Amit Singh
                    <input type="hidden" name="student_name[]" value="Amit Singh" />
                </td>
                <td align="center">
                    <label for="present2">
                        <input type="radio" id="present2" name="attendance_status[2]" value="Present"> Present
                    </label>
                    <label for="absent2">
                        <input type="radio" id="absent2" name="attendance_status[2]" value="Absent"> Absent
                    </label>
                </td>
            </tr>
            <tr>
            <td align="center">4</td>
            <td align="center">
                    456
                    <input type="hidden" name="roll_no[]" value="456" />
                </td>
                <td align="center">
                    Arjun Kumar
                    <input type="hidden" name="student_name[]" value="Arjun Kumar" />
                </td>
                <td align="center">
                    <label for="present3">
                        <input type="radio" id="present3" name="attendance_status[3]" value="Present"> Present
                    </label>
                    <label for="absent3">
                        <input type="radio" id="absent3" name="attendance_status[3]" value="Absent"> Absent
                    </label>
                </td>
            </tr>
            <tr>
            <td align="center">5</td>
            <td align="center">
                    567
                    <input type="hidden" name="roll_no[]" value="567" />
                </td>
                <td align="center">
                    Amit Kumar
                    <input type="hidden" name="student_name[]" value="Amit Kumar" />
                </td>
                <td align="center">
                    <label for="present4">
                        <input type="radio" id="present4" name="attendance_status[4]" value="Present"> Present
                    </label>
                    <label for="absent4">
                        <input type="radio" id="absent4" name="attendance_status[4]" value="Absent"> Absent
                    </label>
                </td>
            </tr>
            <tr>
            <td align="center">6</td>
            <td align="center">
                    789
                    <input type="hidden" name="roll_no[]" value="789" />
                </td>
                <td align="center">
                    Suraj Tiwari
                    <input type="hidden" name="student_name[]" value="Suraj Tiwari" />
                </td>
                <td align="center">
                    <label for="present5">
                        <input type="radio" id="present5" name="attendance_status[5]" value="Present"> Present
                    </label>
                    <label for="absent5">
                        <input type="radio" id="absent5" name="attendance_status[5]" value="Absent"> Absent
                    </label>
                </td>
            </tr>
             
        </tbody>
    </table>
     
    <br/>
    <div align="center">
    <input type="submit" name="submit" value="Mark Attendance" />
    </div>
</form>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            
      </div>
    </div>



<br><br>
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
