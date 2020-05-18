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
            float:right;
            font-weight: bold;
        }
        .box{
  width: 500px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  background: #191919;
  text-align: center;
    opacity: 0.8;
}
.box h3{
  color: white;
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type = "text"],.box input[type = "password"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid darkcyan;
  padding: 14px 10px;
  width: 300px;
  outline: none;
  color: white;
}
 .box input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid darkcyan;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type = "submit"]:hover{
  background: darkcyan;
}
footer{
    margin-top: 500px;
}
</style>
</head>
<body>
    <nav>
    <header class="nav1">
<h2 style="float: left;">ST Plaza School</h2>
<a class="btn" href="home.php"><button>Back</button></a>
    </header>
</nav>
    <div class="from">
        <form class="box" method="POST" action="server.php">
              <h3>Class 5 Addmission Test Result 2020</h3>
              <input type="text" name="reg" id="reg" placeholder="Enter The Registration Number" >
              <input type="submit" name="submit " id="btn" value="Submit" >
            </form>
        </div>


        <footer>
            <p style="text-align: center;padding-top: 1%;"><b>This project is made by Rahul Biswas.CopyRights &#169; 2020</b> </p>
        </footer>
</body>
</html> 