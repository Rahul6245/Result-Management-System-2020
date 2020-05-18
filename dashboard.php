<?php
session_start();
$con = mysqli_connect('localhost', 'root' );
$db = mysqli_select_db($con, 'admit1');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
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
        button{
            padding: 5px 15px;
            font-weight: bold;
            margin-top: 1%;
        }
        input[type = "text"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid darkcyan;
  padding: 14px 10px;
  width: 300px;
  outline: none;
  color: black;
}
input[type = "submit"]{
    padding: 5px 15px;
            font-weight: bold;
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 40%;
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
</style>
</head>
<body>
    <nav>
    <header class="nav1">
<h2 style="float: left;">St Plaza School</h2>
<a class="btn" href="logout.php" style="float: right"><button>Logout</button></a>
    </header>
    </nav>
    <center>
    <div class="1">
    <a href="dashboard.php"><button>Dashboard</button></a>
    <a href="insert.php"><button>Student</button></a>
    <a href="printresult.php"><button>Result</button></a>
    <a href="feedback.php"><button>Feedback</button></a>
    </div>
    <form action="" method="POST">
    <input type="text" name="reg" placeholder="Enter the Registration Number"><br>
    <input type="submit" name="search" value="Search Result">
    </form>
    <?php

$connection = mysqli_connect("localhost","root","");

$db = mysqli_select_db($connection,'admit1');

if(isset($_POST['search'])){

    $reg = $_POST['reg'];
$query="SELECT * FROM student where reg='$reg'";

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

    </center>
</body>
</html>
