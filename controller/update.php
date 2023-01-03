<?php

    if(isset($_POST['update'])){
        echo $_POST['name'];
        require_once($_SERVER['DOCUMENT_ROOT'] .'/require/require.php'); 
        $lastname = addslashes($_POST['lastname']);
        $name = addslashes($_POST['name']);
        $query = "UPDATE users SET Name= '$name',Lastname = '$lastname',FiscalCode= '$_POST[fiscalcode]',Role= '$_POST[role]',Contract= '$_POST[contract]' WHERE id = '$_GET[id]'";
    
        DB::querySelect($query);
        DB::redirect('/index.php');
    }
   