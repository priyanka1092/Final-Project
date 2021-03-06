<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task manager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    body{
      background-color: mediumpurple;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 650px}
    
    /* Set gray background color and 100% height */
    /*.sidenav {
      background-image: url("/1.jpg");
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
*/    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    .img-responsive{
      height:400px;
    }

    .btn-primary{
     background-color: purple;
     border: none; 
    }
    
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="#">Home</a></li> -->
        
      </ul>
      
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    <img class="img-responsive" src="2.jpg" alt="">
    </div>
    
    <div class="col-sm-8 text-center"> 
      
      <h1>To-Do Task Application</h1>
    
      <hr>

      
      <form action="index.php?page=accounts&action=login" method="POST">

      <!--<div class="container">-->
      <!-- <h5><b>Username</b></h5> -->
      <div class="form-group">
        <label name="uname">Username:</label>
        <input type="email" placeholder="Enter Username" name="uname" required><br>
      </div>
      

      <!-- <h5><b>Password</b></h5> -->
      <div class=form-group>
        <label name="psw">Password:</label>
        <input type="password" placeholder="Enter Password" name="psw" required><br><br>  
      </div>
      

      <button type="submit" class="btn btn-primary">Login</button>
      <a class="btn btn-primary" href="index.php?page=accounts&action=register">Register</a>
    
</form>
  <h5><a href="index.php?page=accounts&action=register">Register</a></h5>
    </div>
    <div class="col-sm-2 sidenav">
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
 
</footer>

</body>
</html>
