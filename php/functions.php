<?php
    function check_login($mysqli)
    {
    
        if(isset($_SESSION['id']))
        {
    
            $id = $_SESSION['id'];
            $query = "select * from users where id = '$id' limit 1";
    
            $result = mysqli_query($mysqli,$query);
            if($result && mysqli_num_rows($result) > 0)
            {
    
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
        }
    
        //redirect to login
        header("Location: login.php");
        die;
    
    }
    
?>