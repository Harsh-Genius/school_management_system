<?php

function check_login($con)
{
    if(isset($_SESSION['email_id']))
    {
        $id = $_SESSION['email_id'];
        $query= "select * from teacher where email_id = '$id' limit 1";

        $result = mysqli_query($con,$query);

        if($result && mysqli_num_rows($result)>0)
        {
            $user_data = mysqli_fetch_assoc($result);     //assoc  :- sort cut for associated array
            return $user_data;
        
        }  
    }
    
}