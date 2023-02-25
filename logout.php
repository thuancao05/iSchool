<?php
session_start();
session_destroy();
echo "<script> location.herf='index.php'; </script>";
?>