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
          .insert{
            width: 900px;
            height: 400px;
            background-color: #eee;
            margin-left: 330px;
          }



          input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
          }
            input[type=number] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
          }
          select{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
          }
          .opt{
            margin-top:3% ;
            text-align: center;
            margin-right: 308px;
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
          <div class="insert">
          <h2 style="text-align:center">Update Student</h2>
                <form method="post" action="">
                        <label>Id</label>
                        <input type="number"  name="id" placeholder="Update ID" required><br>
                        <label>Student Name</label>
                        <input type="text" name="name" placeholder="Update the name" required><br>
                        <label>Registration No</label>
                        <input type="text" name="reg" placeholder="Update the Reg no" required><br>
                        <label>Marks</label>
                        <input type="text" name="mark" placeholder="Update the marks" required><br>
                        <label>Status</label>
                        <input type="text" name="status" placeholder="Update the Status" required><br>
                        <button type="submit" name="done" value="UPDATE DATA" style="background-color:#4CAF50">Update Student</button>
              
            </form>
            </div>
            <div class="opt">
             <a href="display.php"> <button style="background-color:#4CAF50">View Student</button></a>
             <a href="insert.php"> <button style="background-color:#4CAF50">Add Student</button></a>
        </div>
            
</body>
</html>
<?php

$connection = mysqli_connect("localhost","root","");

$db = mysqli_select_db($connection,'admit1');

if(isset($_POST['done'])){
     $id=$_POST['id'];
     $name = $_POST['name'];
     $reg = $_POST['reg'];
     $mark = $_POST['mark'];
     $status= $_POST['status'];
 $q = "update student set id='$id',name='$name',reg='$reg',mark='$mark',status='$status' where id=$id";
 $query = mysqli_query($connection,$q);
}
?>