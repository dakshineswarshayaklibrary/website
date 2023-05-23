<?php

    $username = filter_input(INPUT_POST,'username');
    $email = filter_input(INPUT_POST,'email');
    $password = filter_input(INPUT_POST,'password');
    if(!empty($username)){
        if(!empty($password)){
            if(!empty($email)){
                $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "record";

            //create connection
            $conn = new mysqli ($host,$dbusername,$dbpasswordm,$dbname);
            if(mysqli_connect_error()){
                die('Connect Error('.mysqli_connect_errno().')'
                . mysqli_connect_error());
            }
            else{
                $sql = "INSERT INTO record(username,email,password)
                values ('$username','$email';'$password')";
                if($cann->query($sql)){
                    echo "New record is inserted sucessfully";
                }
                else{
                    echo "Error: ".$sql ."<br>".$cann->error;
                }
                $cann->close();
            }
        }
        else{
            echo "Password should not be empty";
            die();
        }
    }
    else{
        echo "Username should not be empty";
        die();
    }
            }
            
?>