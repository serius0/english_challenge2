<?php
session_start();
if (!isset($_SESSION['id'])) $_SESSION['id'] = '';
require_once "../app/functions/index.php";
require_once "../app/routes/index.php";
