<!DOCTYPE html>
<html lang="en">
<head>
  <title>Check IAM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  -->
  <script src="./index.js"></script>
  <script src="./index.css"></script>

</head>

<script>
var i = 0;
var txt = 'Click the Check SSO login to initiate the login process. \n Enter your login credentials (username and password) when prompted.';
var speed = 33;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("text").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
</script>

<script>
var k = 0;
function move() {
  if (k == 0) {
    k = 1;
    var elem = document.getElementById("myBar");
    var width = 10;
    var id = setInterval(frame, 10);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        k = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
  setTimeout("window.open('https://checkiam.kln.ac.lk/secure','_self')",3000);

}
</script>


<body onload="typeWriter()">
<p > </p>
<div class="jumbotron text-center" >
  <h1>Check IAM</h1>
  <p>  Welcome to the Identity and access management (IAM) Single Sign-On (SSO) attributes and login check!</p>
  <p id="text"> </p>
</div>

 <div class="row text-center">
   <button type="button" class="btn btn-info btn-lg " onclick="move()">Check SSO login</button>
</div>
<div class="progress">
  <div id="myBar" class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" >
  </div>
</div>

</body>
</html>

