<!DOCTYPE html>
<html lang="en">
<head>
  <title>Manage your To-Do Tasks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
   
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    
    .row.content {height: 650px}
    
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    
    .glyphicon {
    height:42px;
    font-size: 18px;
    }
    label{
      width:100px;
    }

 /* .btn {
    background-color: transparent;
    border-color: transparent;
    color:white;
    }*/

  form{
  display: inline-block;
  } 

  .btn-default {
    color: #333;
    background-color: transparent;
    border-color: none;
    color: white;
  }
  </style>
</head>


<body text-align:center>

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
        <li class="active"><a href="index.php?page=accounts&action=back1">Home</a></li>
        <li class="active"><a href="index.php?page=tasks&action=all">Tasks</a></li>
      </ul>
      
      <ul class="navbar-form navbar-right">
        <form action="index.php?page=accounts&action=show" method="POST">
          <button type="submit" class="btn btn-default">Profile</button>
      </form>
      <form action="index.php?page=accounts&action=logout" method="POST">
        <button type="submit" class="btn btn-default">Logout</button>
        </form>  
      </ul>
      
    </div>
  </div>
</nav>

<p><H2>Hello,</H2></p>
<p> <H3>Welcome to Task Manager!! We provide a convenient way of managing tasks for our Users<H3><p>
  <p> <h3>Sign up now to manage your Tasks. $10 Amazon gift card for New Users!! </h3></p>


<script src="js/scripts.js"></script>
</body>
</html>