<?php
    include("admin/connection.php");

    $conn = openCon();

    if(isset($_POST["name"])){
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];

        $query = "INSERT INTO quote (full_name, mobile, email, description)
                    VALUES('$name', '$mobile', '$email', '$desc')";
        
        $result = mysqli_query($conn, $query);
        
        if($result){
            $_SESSION['message'] = "Successfully Saved!";
            header("Location: index.php");
        }else{
            $_SESSION['message'] = "Something went wrong! Try again";
            header("Location: index.php");
        }
    }

    closeCon($conn);
?>