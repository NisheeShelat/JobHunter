<?php
$link = mysqli_connect("sql213.unaux.com", "unaux_28624983", "3l7frqlrv", "unaux_28624983_jobhunting");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error()); 
    echo "<script>window.alert('Hi!')</script>";
}

    ?>