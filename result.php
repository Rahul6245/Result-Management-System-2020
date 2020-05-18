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
        input{
            width: 40%;
            height: 5%;
            border: 2px;
            border-color: darkcyan;
            border-radius: 5px;
            padding: 8px 15px 8px 15px;
           margin: 50px 0px 15px 0px;
           box-shadow: 1px 2px 1px 1px darkcyan;
        }
        
</style>
</head>
<body>
    <nav>
    <header class="nav1">
<h2 style="float: left;">ST Plaza School</h2>
<a class="btn" href="#"><button>Circular</button></a>
    </header>
</nav>
<center>
<h2>Class 5 Addmission Test Result 2020</h2>
<form action="" method="POST">
    <input type="text" name="name"><?php echo $res['name'];?> <br>
    <input type="text" name="reg"><?php echo $res['reg'];  ?><br>
    <b><input type="text" name="mark"></b> <?php echo $res['mark'];  ?><br>
    <b><input type="text" name="status"></b> <?php echo $res['status'];  ?><br>
    </form>
   </center>


       
</body>
</html> 