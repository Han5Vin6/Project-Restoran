<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css">
    
    <title>contact please </title>
</head>
<body>

<nav class="navbar navbar-expand-xl navbar-light   ">
 <a class="navbar-brand" href="welcome.php">Rasa Nusantara</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarNav">
   <ul class="navbar-nav ml-auto">
    <li class="nav-item"><a class="nav-link Anmol" style="color:black;" href="welcome.php">Home</a></li>
    <li class="nav-item"><a class="nav-link Anmol" style="color:black;" href="menu.php">Menu</a></li>
    <li class="nav-item"><a class="nav-link Anmol" style="color:black;" href="contact.php">contact Us</a></li>
    <li class="nav-item"><a class="nav-link Anmol" style="color:black;" href="logout.php">Logout</a></li>
   </ul>
 </div>
</nav>

    <h1 style="text-align: center;"> Contact</h1><br>
    <div class="container">
        <div class="container">
    <form action="contac.php">
        <div class="form-group">
          <label for="exampleInputEmail1"><h4>Email address</h4></label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group"><br>
          <label for="exampleInputPassword1"><h4>Phone number</h4></label>
          <input type="number" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
          
        </div>
        <button type="submit" class="btn btn-primary" >Submit</button>
     
      </form>
    </div>
</div>
</body>
</html>
