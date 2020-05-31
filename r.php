<?php
session_start()
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
        *{
            padding: 0%;
            margin: 0%;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
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
        button{
            padding: 5px 15px;
            font-weight: bold;
            float: right;
        }
        #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
  margin-top: 6%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: darkcyan;
  color: white;
}
input[type=text] {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid darkcyan;
  padding: 14px 40px;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
input[type = "submit"]:hover{
  background: darkcyan;
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
<a class="btn" href="#"><button onclick="window.print()">Download</button></a>
    </header>
</nav>
<center>

<form action="" method="POST">
    <input type="text" name="reg" style="text-align:center" placeholder="Enter The Registration No"><br>
    <input type="text" name="name" style="text-align:center"  placeholder="Enter The Name"><br>
    <input type="submit" name="search" value="View Result">
    </form>
<?php

$connection = mysqli_connect("localhost","root","");

$db = mysqli_select_db($connection,'admit1');

if(isset($_POST['search'])){

    $reg = $_POST['reg'];
    $name = $_POST['name'];
$query="SELECT * FROM student where reg='$reg' and name='$name' ";

$query_run = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($query_run))
{
?>
<center>
<table id="customers">
  <tr>
    <th>Name:</th>
    <td><?php echo $row['name'] ?></td>
  </tr>
  <tr>
    <th>Registration:</th>
    <td><?php echo $row['reg'] ?></td>
  </tr>
  <tr>
    <th>Marks:</th>
    <td><?php echo $row['mark'] ?></td>
  </tr>
<tr>
    <th>Status:</th>
    <td style="color: red"><?php echo $row['status'] ?></td>
  </tr>
</table>
</center>
    <?php
    
}
}
?>

<footer>
            <p style="text-align: center;padding-top: 1%;"><b>This project is made by Rahul Biswas.CopyRights &#169; 2020</b> </p>
        </footer>
</center>
</body>
</html> 
