<?php
    include 'dbconnection.php';
    if(isset($_POST['submit']))
    {
        $userName = $_POST['user'];
        $passWord = $_POST['pass'];

        if(empty($userName) || empty($passWord))
        {
            echo 'Please Fill in the Blanks';
        }
        else
        {
            $query = "SELECT * FROM user_login WHERE user = '$userName'";
            $result = mysqli_query($con,$query);

            if($row = mysqli_fetch_assoc($result))
            {
                $db_connection = $row['pass'];

                if(md5($passWord) == $db_connection)
                {
                    header("location:adminLogin.php")
                }
                else
                {
                    echo 'Incorrect Password';
                }
            }
            else
            {
                echo 'Please Check Your Query';
            }
        }
    }
?>