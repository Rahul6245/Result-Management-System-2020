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
        .main{
            margin-left: 22%;
            margin-top: 5%;
        }
        input{
            background-color: darkcyan;
            border-radius: 5px;
            margin-top: 2%;
        }
        button{
            padding: 5px 15px;
            float:right;
            font-weight: bold;
        }
        input[type=submit]{
  background-color: darkcyan;
  border: none;
  color: white;
  padding: 10px 20px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
footer{
    margin-top: 300px;
    color: darkcyan;
}

</style>
</head>
<body>
    <nav>
    <header class="nav1">
<h2 style="float: left;">ST Plaza School</h2>
<a class="btn" href="contact.php"><button>Contact Us</button></a>
    </header>
</nav>
<center>
<h1>Class 5 Addmission Test Result 2020</h1>
</center>
<div class="main">
<h2 style="color: red;">Please read the rules very clearly</h2><br>
<h3>1.The student who passed the exam please kindly report to the school authority by 5 january to 8 january 2020 without loss.</h3>
<h3>2.The student who are in waiting list have to wait 10 january 2020</h3>
<h3>3.If the waiting list student will be select,you will see the Result in the website on 10 january 2020</h3>
<h3>4.Click in the done button and go the Result site and search by student registration number.</h3>
<h3>5.Use the web browser only Google chrome or Mozilla Firefox.</h3>
<h3>6.For more information send mail "infostplaza@gmail.com" or Click on "contact us" button on top right navigation bar</h3>

<SCRIPT language=JavaScript>    
    function checkCheckBox(f){
    if (f.agree.checked == false )
    {
    alert('Please check the box to continue.');
    return false;
    }else
    return true;
    }
    </SCRIPT>
    
    <form action="student.php" method="GET" onsubmit="return checkCheckBox(this)">
    <input type="checkbox" value="0" name="agree">I Understand all the rules
    <input type="submit" value="Submit" >
    </form>
</div>
<footer>
            <p style="text-align: center;padding-top: 1%;"><b>This project is made by Rahul Biswas.CopyRights &#169; 2020</b> </p>
        </footer>
</body>
</html>
