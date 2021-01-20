<?php

$username = "root";
$pass = "";
$server = 'localhost';
$db = 'jobloc';

$con = mysqli_connect($server,$username,$pass,$db);

if($con) {

?>
<script>
    alert('Connected');
</script>

<?php
}
else {

    echo "Not connected!";
}

?>