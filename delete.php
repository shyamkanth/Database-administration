<?php

include 'connection.php';

$id=$_GET['id'];
$deletequery = " delete from user where id=$id";
$query=mysqli_query($con,$deletequery);
if($query){
    ?>
<script>
    alert("Data deleted successfully.");
    window.location= "display.php";
</script>

<?php
}else{
    ?>
<script>
    alert("Data not deleted.");
    window.location= "display.php";
</script>

<?php
}

?>