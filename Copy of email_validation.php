<?php

if(isset($_POST["btn"])){  
    $email=$_POST["email"];

    if(preg_match("/^[a-zA-Z]+[a-zA-Z0-9]+[@][a-zA-Z0-9]+[.][a-z]{2,4}$/",$email)){     
        echo "Valid";
    }else{
       echo "Invalid";
    }    

}

?>

<form action="#" method="post">
    Enter email:<input type="text" name="email" /><br>
    <input type="submit" value="Submit" name="btn" />
</form>