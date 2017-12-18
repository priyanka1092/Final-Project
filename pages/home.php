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
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 650px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
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
          <button type="submit" class="btn btn-default">Your Profile</button>
      </form>
      <form action="index.php?page=accounts&action=logout" method="POST">
        <button type="submit" class="btn btn-default">Logout</button>
        </form>  
      </ul>
      
    </div>
  </div>
</nav>

<p>Home Page</p>

<script src="js/scripts.js"></script>
</body>
</html>