<?php
include ("db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add questions</title>
</head>
<style>
body{
        background-color:  skyblue;
    }
    /* form{
        width:300px;
        height:200px;
        border: 3px solid rgb(300, 100, 285);
        margin-top:250px;
    } */
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
        <h2>ADD QUESTIONS</h2>
        <label for="">Choose Your Exams:</label>
        <select name="" id="Title">
            <option value="">select Your Exam</option>
            <option value="">Python</option>
            <option value="">PHP</option>
            <option value="">JAVA</option>
            <option value="">Angular</option>
            <option value="">Flutter</option>

        </select>
        <BR>
    </BR>
        <label for="">Questions:</label>
        <textarea name="" id="" cols="30" rows="10"> </textarea>
        <br>
        <br>
        <label for="">option 1</label>
        <input type="text" placeholder="option 1">
        <br>
        <br>
        <label for="">option 2</label>
        <input type="text" placeholder="option 2">
        <br>
        <br>
        <label for="">option 3</label>
        <input type="text" placeholder="option 3">
        <br>
        <BR>
   
        <label for="">option 4</label>
        <input type="text" placeholder="option 4">
        <br>
        <br>
        <button>  NEXT</button>
        <button>  FINISH</button>
        

        
</center>
</body>
</html>
