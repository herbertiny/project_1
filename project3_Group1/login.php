<?php
    include('database.php');
    
    $id  = mysqli_real_escape_string($conn, $_POST['stId']);
    $passcode = md5($_POST['stPin']) ;//for securoty purposes

    // php validation
    //checking weather he is a user ot not
    $fetchUsers = "SELECT * FROM `students` WHERE id = '$id'  LIMIT  1 ";
    $run_fetchUsers = mysqli_query($conn, $fetchUsers) or die (mysqli_error($conn));
    $countUsers = mysqli_num_rows($run_fetchUsers);
    if($countUsers == 1){
        // echco "<span class = "alert alert-danger">User already exists</span>";
        echo "<span class=\"alert alert-success\">Log in Successful</span>";
        echo "<br/><br/> <a href='main.php'>Continue</a>";
        //console.log('User already exists');
        
       //header('Location: main.php');
    }
    else{
       
             echo"<span class =\"alert alert-danger \">Invalid ID or Pin</span>";
             //console.log('Failed to sign User up');
    } 
?>