<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>CS 313 Lucia Mata</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
         <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="assignments.php">Assignments</a></li>
				</ul>
      </div>
      </div>
    </nav>
    </header>
    <main>
      <div class="introdiv">
        <h1>Hello</h1>
        <h2>My name is Lucia</h2>
        <img src="images/lucia.png" alt="lucia">
        <p>I'm a student at Brigham Young University - Idaho, and I'm majoring in Web Design and Development with an emphasis in Development. While my interest is in backend development and databases, I enjoy playing and designing sites on the front end too.</p>
        <p>In this page I will be posting the projects I work on for CS 313 Web Engineering during fall semester 2019. You can see the latest assignments below. </p>
      </div> 
        <div class="linkdiv">
            <a href="assignments.php">Assignments</a>
            <img src="images/code.png" alt="codeicon" class="icon">
        </div>
    </main>
    <footer>
      <?php
      echo "<div class='footer'>";
      echo "Today is " . date("Y.m.d") . "<br>";
      echo "The time is " . date("h:i:sa");
      echo "</div";
      ?>
    </footer>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>