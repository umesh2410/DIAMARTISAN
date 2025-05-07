<?php

session_start();
session_unset();
session_destroy();
header("Location: /video%2021/index.php");

?>