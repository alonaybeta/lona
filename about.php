<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

      
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 30%;
  margin-bottom: 10px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 5px;
  text-align: center;
  color: #474e5d;
}

.container {
  padding: 0 10px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: blue;
}


@media screen and (max-width: 500px) {
  .column {
    width: 80%;
    display: block;
  }
}
</style>

<body>
<?php include 'navbar.php' ?>

<div class="about-section">
  <h3 style="color:maroon">My Bestfriend</h3>
</div>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="loren.JPG." alt="Loren" style="width:100%">
      <div class="container">
        <h2>Loren</h2>
        <br><h5>Course:BACHELOR OF SCIENCE INFORMATION SYSTEM</h5></br>
        <p class="title">Bestfriend</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="ethel.jpg" alt="Ethel" style="width:100%">
      <div class="container">
        <h1>Ethel</h1>
        <h5>Course:BACHELOR OF SCIENCE INFORMATION SYSTEM</h5>
        <h5>Mother: Mary Jane S. Anosa<h5>
        <h5>Father: Ricardo C. Anosa<h5>
        <p class="title">Bestfriend</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="daniela.jpg." alt="Daniela" style="width:100%">
      <div class="container">
        <h2>Daniela</h2>
        <h5>Course:BACHELOR OF SCIENCE INFORMATION SYSTEM</h5>
        <h5>Mother:Mitche Bresolda<h5>
        <h5>Father:Danny Bresolda<h5>
        <p class="title">Bestfriend</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
