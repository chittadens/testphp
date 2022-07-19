<?php

include ("db_connect.php");
?>
<?php
if (isset($_POST['register']))
{
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];

    $sql ="SELECT * FROM students WHERE student_username ='$username'";
    $result=mysqli_query($conn,$sql);
    $num =mysqli_num_rows($result);

    if($num >0){
        echo '<script> alert("username alredy exist")</script>';
    }
    else{
        $insert= "INSERT INTO students(student_name,student_username,password,confirm_password) VALUES('$name','$username','$password','$confirmpassword')";
        mysqli_query($conn,$insert);
        echo '<script>alert("data added successfully")</script>';
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<style>
body{
  background-color:skyblue;
}
form{
    background-color: aliceblue;
    width:500px;
    height:300px;
    margin-top:100px;
    margin-left:450px;
}
label{
   width:150px;
   display:inline-block;
   margin-left:20px;
}

h4{
    margin-left:230px;
    margin-top:20px;
}
#btn3{
    margin-left:90px; 
    margin-top:30px;
}
#btn3:hover{
    background-color: green;
}
h2{
   color:red; 
}
#btn1{
    /* padding-right:30px; */
}
#btn1:hover{
    background-color: red;
}
#btn2{
    /* padding-left:10px;  */
}
#btn2:hover{
    background-color: blue;
}


</style>
<body>
  <h1>welcome admin!!!</h1>

<center>
  <h2 ><u> add student (admin)</u></h2>
  </center>
    <form action="" method="post">
   
  <h4> add student</h4>
  <label for="">Name:</label>
  <input type="text" name="name" placeholder="name">
  <br><br>
  <label for="">User Name:</label>
  <input type="text" name="username" placeholder="user name">
  <br><br>
  <label for="">Password:</label>
  <input type="password" name="password" placeholder="password">
  <br><br>
  <label for=""> Confirm password:</label>
  <input type="password" name="confirmpassword" placeholder="confirm password">
  <br><br>
  <button  id="btn3" type="submit" name="register">Register</button>
  
  <a href="login.php"><button id="btn1" >Logout</button> </a>

<a href="create.php"><button id="btn2" >create exam</button> </a>
  
  </form>


</body>
</html>
