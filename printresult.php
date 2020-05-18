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
        button{
            padding: 5px 15px;
            font-weight: bold;
            margin-top: 2%;
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
    margin-top: 60px;
}
</style>
</head>
<body>
    <center>
    <div class="table">
        <h1>St Plaza Addmission Test Result</h1>
    <table id="customers">
        <tr>
            <th colspan="5" style="text-align: center"><h2>Result Details</h2></th>
        </tr>
        <tr>
          <th style="text-align:center">ID</th>
          <th style="text-align:center">Name</th>
          <th style="text-align:center">Reg No</th>
          <th style="text-align:center">Marks</th>
          <th style="text-align:center">Status</th>
        </tr>
    
      <?php

$connection = mysqli_connect("localhost","root","");

$db = mysqli_select_db($connection,'admit1');

 $q = "select * from student ";

 $query = mysqli_query($connection,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td style="text-align:center"> <?php echo $res['id'];  ?> </td>
 <td style="text-align:center"> <?php echo $res['name'];  ?> </td>
 <td style="text-align:center"> <?php echo $res['reg'];  ?> </td>
 <td style="text-align:center"> <?php echo $res['mark'];  ?> </td>
 <td style="text-align:center"> <?php echo $res['status'];  ?> </td>
 <?php 
 }
  ?>
          </table>
      </div>    
    <a href="dashboard.php"><button>Back</button></a>
    <button onclick="window.print()">Print</button>
    </center>
</body>
</html>
