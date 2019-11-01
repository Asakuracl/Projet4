<?php
session_start();
unset($_SESSION['id'], $_SESSION['nickname']);
header('Location: /projet4/index.php');