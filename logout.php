<?php
session_unset();
session_destroy();
session_unset();
header("Location:home.php");
?>