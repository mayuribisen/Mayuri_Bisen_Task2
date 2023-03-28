<html>
  <head>
  <style>
  img {
 width: 420px;
 height: 320px;
 border-radius: 10px;
 margin-left: 50px;
 margin-bottom: 5px;
border-color: black;
border-style: double;
  }
  h1{
    text-align: center;
    color: red;
  }
 </style>
  </head>
  <body bgcolor="lightgreen">
<?php

 
  if(isset($_POST['Submit']))
  {
   
    echo "<h1>Your Booking For Autonomous Aerial Videography Tourist deastination Has Been Booked Successfully!!! </h1>";
    echo'<table width="100%">
    <tr>
      <td><a href="drone.html"><img src="drone.jfif" /></a></td>
      <td><a href="hindu.html"><img src="hindu.jfif" /></a></td>
      <td><a href="ronald.html"><img src="ronald.jfif" /></a></td>
    </tr>
    <tr>
          <td><a href="aerial.html"><img src="aerial.jfif" /></a></td>
          <td><a href="usa.html"><img src="USA.jfif" /></a></td>
          <td><a href="newyork.html"><img src="new york.jfif" /></a></td>
        </tr>
    </table>';
    
  }
?>
  </body>
</html>