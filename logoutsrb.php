<?php
session_start();
session_destroy();
header("Location: indexsrb.php");
?>