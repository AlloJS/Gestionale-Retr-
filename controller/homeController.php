<?php
    $message = "";
    
    if(isset($_POST['insert'])){
        
        //FILTER INPUT 
        $rookie = filter_var($_POST['rookie'], FILTER_VALIDATE_INT);
        $name = filter_var($_POST['name'], FILTER_UNSAFE_RAW);
        $lastname = filter_var($_POST['lastname'], FILTER_UNSAFE_RAW);
        $fiscalcode =  $_POST['fiscalcode'];
        $role = filter_var($_POST['role'], FILTER_UNSAFE_RAW);
        $typeContract = filter_var($_POST['type-contract'], FILTER_UNSAFE_RAW);
        // IF FISCAL CODE IS CORRECT WRITE TO DB
        if(preg_match("/[A-Z0-9]+$/", $_POST['fiscalcode']) && $rookie != ""  && $name != "" && $lastname != "" && $role != "" && $typeContract != ""){
            $birthday = strtotime($_POST['birthday']);
            $birthday = date("y-m-d", $birthday);
            $startcontract = strtotime($_POST['birthday']);
            $startcontract = date("y-m-d", $startcontract);
            $query = "INSERT INTO users (id,Name,Lastname,FiscalCode,Role,Contract,Birthday,StartContract) VALUE (?,?,?,?,?,?,?,?)";
            $array = [
                $rookie,
                $name,
                $lastname,
                $fiscalcode,
                $role,
                $typeContract,
                $birthday,
                $startcontract
            ]; 
            DB::queryRegister ($query,$array);
        } else {
            $message = "Inserire un codice fiscale corretto e/o compila tutti i capi";
        }
    }
//SELECT ID LAST REGISTERED
$query = "SELECT MAX(id) AS max FROM users";
$id = DB::querySelect($query);

//SELECT USERS FOR SEARCH ENGINE
$query = "SELECT * FROM users ORDER BY id ASC";
$users = DB::querySelect($query);
//GET REQUEST
if(isset($_GET['search'])){
    $query = "SELECT * FROM users WHERE Name LIKE '$_GET[text]%' OR  Lastname LIKE '$_GET[text]%' OR  FiscalCode LIKE '$_GET[text]%' OR  Role LIKE '$_GET[text]%' OR  Contract LIKE '$_GET[text]%' ORDER BY id ASC";
    $users = DB::querySelect($query);
}
