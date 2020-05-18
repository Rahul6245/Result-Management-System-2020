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
            float:right;
            font-weight: bold;
        }
        .vertical-menu {
            width: 200px;
          }
        .vertical-menu a {
            background-color: #eee;
            color: black;
            display: block;
            padding: 12px;
            text-decoration: none;
          }
          
          .vertical-menu a:hover {
            background-color: #ccc;
          }
          
          .vertical-menu a.active {
            background-color: #4CAF50;
            color: white;
          }
          .ver{
            margin-left: 1%;
            margin-top: 1%;
          }
         

          #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 80%;
}
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 7px;
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
.table{
    margin-left: 300px;
}
</style>
</head>
<body>
    <nav>
    <header class="nav1">
<h2 style="float: left;">St Plaza School</h2>
<a class="btn" href="logout.php"><button>Logout</button></a>
    </header>
    </nav>
    <div class="ver">
    <div class="vertical-menu">
            <a href="dashboard.php">DashBoard</a>
            <a href="insert.php">Student</a>
            <a href="printresult.php">Result</a>
            <a href="feedback.php">Feedback</a>
    </div>
    </div>
    <div class="table">
    <table id="customers">
        <tr>
          <th style="text-align:center">Name</th>
          <th style="text-align:center">Email</th>
          <th style="text-align:center">Phone</th>
          <th style="text-align:center">Subject</th>
          <th style="text-align:center">Replay</th>
        </tr>
    
      <?php

$connection = mysqli_connect("localhost","root","");

$db = mysqli_select_db($connection,'admit1');

 $q = "select * from feedback ";

 $query = mysqli_query($connection,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td style="text-align:center"> <?php echo $res['name'];  ?> </td>
 <td style="text-align:center"> <?php echo $res['email'];  ?> </td>
 <td style="text-align:center"> <?php echo $res['phone'];  ?> </td>
 <td style="text-align:center"> <?php echo $res['subject'];  ?> </td>
     <td style="text-align:center">  <a href="#?id=<?php echo $res['id']; ?>" ><i class="fas fa-reply"></i></a>  </td>

 <?php 
 }
  ?>
          </table>
      </div>    
</body>
</html>
