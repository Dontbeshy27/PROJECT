<?php
require_once "includes/util.php";

session_start();

session_destroy();

redirect("Login.php");
exit;
    