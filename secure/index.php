<!DOCTYPE html>
<html lang="en">
<head>
  <title>Attributes received from IDP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
  .border {
    display: inline-block;
    margin: 6px;
  }
  </style>


<script>
var j = 0;
var txt2 = 'Success! You have been signed in successfully!! Associated Attributes are listed here...';
var speed = 20;

function typeWriter() {
  if (j < txt2.length) {
    document.getElementById("text2").innerHTML += txt2.charAt(j);
    j++;
    setTimeout(typeWriter, speed);
  }
}
</script>


</head>
<body onload="typeWriter()" id="body">

<div class="jumbotron text-center" >
  <p id="text2"></p>
</div>

<button class="btn btn-info btn-lg" onclick="window.print()">Print this page</button>
<a href="https://checkiam.kln.ac.lk/Shibboleth.sso/Logout" class="btn btn-info btn-lg">Logout</a>


<iframe src="https://checkiam.kln.ac.lk/Shibboleth.sso/Session" name="iframe_a" height="300px" width="100%" title="Iframe Example"></iframe>
 

 <div class="container bcontent" id="dataset">
   <table class="table table-striped">
     <tr>
       <td>key</td>
       <td>value</td>
     </tr>
     <tr>
         <?php

         foreach ($_SERVER as $key => $value){
		 echo "<tr><td> ".$key." </td><td> ".$value."</td></tr>";
         }

         ?>
     </tr>
   </table>
</div>


</body>
</html>

