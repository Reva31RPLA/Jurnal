<?php
require 'admin/coneksi.php';
session_start();

session_unset();
session_destroy();
header("Location: index.php");
?>