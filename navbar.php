<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    h1{
        text-align: center;
        font-size: 10em !important;
    }
    body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #800020;
  overflow: auto;
}
.avatar {
  
  width: 1500px;
  height: 600px;
  border-radius: 0%;
}

.navbar a {
  float: left;
  padding: 12px;
  color: yellow;   
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #04AA6D;
}

.active {
  background-color: #04AA6D;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #04AA6D;
  color: green;
}

.header a.active {
  background-color:#ED872D;
  color: greenyellow;
}

.header-right {
  float: right;
}
</style>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="header">
    <div class="navbar">
    <a href="#default" class="logo">Fake</a>
    </div>
    <div class="header-right">
    <a href="home.php">Home</a>  
  <a href="about.php">About</a>  
  <a href="contact.php"> Contact</a> 
  <a href="login.php">Logout</a>
    </ul>
  </div>
</nav>
</body>
</html>
