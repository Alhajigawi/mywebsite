<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav test-Contact</title>
</head>
<body>
 <ul>
 <?php  include_once('inc/nav.inc.php');?>
</ul>

<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="bg-img1 size1 overlay1" style="background-image: url('images/bg9.jfif');">
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color:black;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 2px;
  background-color:##f2f2f2;
  padding: 10px;
  color:Orange;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
  color:#fff;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.hey{
	text-align:center;
	color:#C0C0C0;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<div class="hey">
<h2>Contact Us</h2>
    <p> leave us a message:</p>
</div>
  </div>
  
  <div class="row">
    <div class="column">
      <img src="images/pex1.jpg" style="width:150%" style="height:%">
    </div>
    <div class="column">
    <form action= "page.php" method="post">
        <label for="firstName">First Name</label>
        <input type="text" class="form-control id="firstName" name="firstName" placeholder="Your name..">
        <label for="lastName">LastName</label>
        <input type="text" class="form-control id="lastName" name="lastName" placeholder="Your last name..">
        <label for="country">Country</label>
        <input type="text" class="form-control id="country" name="country" placeholder="Your Country..">
        <label for="subject">Subject</label>
        <textarea class="form-control  id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>
</html>



