<?php
if(isset($_GET['s'])){
    echo $_GET['s']." = ".password_hash($_GET['s'], PASSWORD_DEFAULT);
} ?>