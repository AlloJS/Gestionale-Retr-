<?php 

class DB {

    public static function conn ()
    {
        $hostname = 'localhost';
        $dbname = 'pharmacy';
        $user= 'root';
        $pass = 'root';
        try {
            return $connection = new PDO("mysql:host=$hostname;dbname=$dbname",$user, $pass);
        } catch (PDOException $e){
            echo "Errore connession DB" . $e->getMessage();
        }
    }

    public static function querySelect($query)
    {
        $connection = DB::conn ();

        try{
            $statement = $connection->query($query,PDO::FETCH_ASSOC);
        } catch (PDOException $e){
            echo "LA query non ha funzionato";
        }
        return $statement->fetchAll();
    }

    public static function queryRegister ($query,$array)
    {
        $connection = DB::conn ();
        try {
            $statement = $connection->prepare($query);
            $statement->execute($array);
        } catch (PDOException $e){
            echo "Query non riuscita" . $e->getMessage();
        }

    }
    public static function redirect ($path)
    {
        header('Location: ' .$path);
    }
    public static function isNotLogged ($path)
    {
        if(!isset($_SESSION['login'])){
            DB::redirect($path);
        }
    }
    public static function test ()
    {
        echo "Test";
    }
   
}
