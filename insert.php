<?php
    $server="5.181.218.118";
    $user="u199615871_fatfox";
    $password="Fat1Fox!";
    $dbname="u199615871_thefatfox";


    $conn = new mysqli($server,$user,$password,$dbname);
  
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
        
    }

    $sql= "INSERT INTO contactform(contact_name,contact_email,contact_message) VALUES ('$_POST[c_name]','$_POST[c_email]','$_POST[c_message]')";

    if($conn->query($sql)===TRUE){
        echo "<script>
               alert('Thank you for the Feedback!');
            </script>";
        header("refresh:1;url=index.php");
        
    }else{
        echo "Error".$conn->error;
    }
    $conn->close();

?>