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
            background-color: darkcyan;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
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

footer{
    margin-top: 500px;
}
</style>
</head>
<body>
    <nav>
    <header class="nav1">
<h2 style="float: left;">ST Plaza School</h2>
    </header>
</nav>
<center>
    <div class="box">
<a href="login.php"> <button>Admin Login</button></a>
<a href="rules.php"> <button>Result Search</button></a>

</div>

        <footer>
            <p style="text-align: center;padding-top: 1%;"><b>This project is made by Rahul Biswas.CopyRights &#169; 2020</b> </p>
        </footer>
       </center>
</body>
</html> 
