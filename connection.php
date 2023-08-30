<?php

$username = "root";
$password = "";
$server = "localhost";
$db = "main";

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    ?>
    <!--<script>
    alert("Connection successful");
    </script> -->
    <?php
}else{
    //echo " No connection";
    die("No connection : " . mysqli_connect_error());
}

?>