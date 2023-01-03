<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'/require/require.php'); 
$query = "DELETE FROM users WHERE id = '$_GET[delete]'";
DB::querySelect($query);
DB::redirect('/index.php');
