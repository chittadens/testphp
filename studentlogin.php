<?php
include ("db_connect.php");
?>
<?php
if (isset($_POST['submit']))  
   {
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM students WHERE student_username ='$username' and password ='$password'";
    $query=mysqli_query($conn,$sql);
    $num =mysqli_num_rows($query);

    if($num >0){
       header("location:create.php");
    }
    else{
        echo '<script>alert("username and password is not matching")</script>';

    }

    
   } 
   ?> 
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> STUDENT LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">

 </head>
 <style>
    body{
    background-color: grey;
    /* align-items: center; */
    display: flex;
}
form{
    width: 400px;
    height: 400px;
    border: 3px solid rgb(181, 159, 202);
    padding: 20px;
   margin-top: 100px;
   margin-left: 450px;
   display: inline-block;
   border-radius: 2px;
   background-color: aliceblue;

}
input{
    display: block;
    border: 2px solid #ccc; 
    width: 95%;
    padding: 10px;
    border-radius: 2px;
}
button{
    margin-left: 150px;
}
 </style>
<body>
   <form  action="login.php" method="post">
    <h2> STUDENT LOGIN</h2>
    
     <label for=""> User Name:</label>
     <input type="text" name="username" placeholder="User Name">
     <br><br>
     <label for="">Password:</label>
     <input type="password" name="password" placeholder="Password"> 
     <br>
     <br>
     <button type="submit" name="submit"> Login</button>
   </form> 
</body>
</html> 