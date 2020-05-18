<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
        *{
            padding: 0%;
            margin: 0%;
            box-sizing: border-box;
            font-family: monospace;
            font-weight: bold;
        }
        nav{
            width: 100%;
            height: 40px;
            background-color: darkcyan;
        }
        .nav1{
            padding:5px 15px;
        }
        input[type=text],[type=phone],[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
    input[type=submit] {
  background-color:darkcyan;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
    input[type=submit]:hover {
  background-color: darkcyan;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
     width: 30%;
        margin-left: 35%;
}
footer{
    margin-top: 100px;
}
</style>
</head>
<body>
    <nav>
    <header class="nav1">
<h2 style="float: left;">ST Plaza School</h2>
    </header>
</nav>
   
<h1 style="text-align: center;color: darkcyan">Contact Form</h1>

<div class="container">
  <form action="contact.php" method="POST">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Enter Your Name">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Enter Your Email">

    <label for="phone">Phone</label>
    <input type="phone" id="phone" name="phone" placeholder="Enter Your Phone">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write Your Query.." style="height:200px"></textarea>

      <input type="submit" name="done" value="Submit">
  </form>
</div>

        <footer>
            <p style="text-align: center;padding-top: 1%;color:darkcyan"><b>This project is made by Rahul Biswas.CopyRights &#169; 2020</b> </p>
        </footer>
</body>
</html> 
<?php

$connection = mysqli_connect("localhost","root","");

$db = mysqli_select_db($connection,'admit1');

if(isset($_POST['done'])){

 $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $subject = $_POST['subject'];
     $query="INSERT INTO `feedback`(`id`, `name`, `email`, `phone`, `subject`) VALUES ('$id','$name','$email','$phone','$subject')";

 $query_run = mysqli_query($connection,$query);
}
?>