<?php
include ("db_connect.php");

?>
<?php
if (isset($_POST['create'])) 
{
    $title=$_POST['title'];
    
    $sql="SELECT * FROM exams WHERE exam_title ='$title'";
    $result=mysqli_query($conn,$sql);
    $num =mysqli_num_rows($result);

    if($num >0){
        echo '<script> alert("Title alredy exist")</script>';
} 

else{
    $insert= "INSERT INTO exams(exam_title) VALUES('$title')";
    mysqli_query($conn,$insert);
    echo '<script>alert("Title added successfully")</script>';
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<style>
    body{
        background-color:  skyblue;
    }
    form{
        width:300px;
        height:200px;
        border: 3px solid rgb(300, 100, 285);
        margin-top:250px;
    }
    button{
        margin-top:25px;
    }
    button:hover{
        background-color: blue;
    }
</style>
<body>
    <center>
    <form action="" method="post">
        <h2>CREATE  EXAM</h2>
        <label for="">Title:</label>
        <input type="text" name="title" placeholder="Title">
        <br>
        <br>
        <button type="submit" name="create">Create</button>
</form>
</center>
</body>
</html>