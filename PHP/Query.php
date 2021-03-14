<?php
require_once('ConnectionDB.php');

class Query
{
    private $connexion;

    public function __construct()
    {
        $constants = new ConnectionDB();
        $this->connexion = $constants->getConnexion();
    }
    function addUserAccount($email,$password,$name,$lastName){
        try{
            $request = "INSERT INTO user_account VALUES(NULL,NULL,'".$email."','".$password."',0,0,'".$name."','".$lastName."')";
            $result = $this->connexion->exec($request);
            return "Le compte à bien été ajouté";
          
        }
        catch(PDOException $e) {
            return $e;
        }
       }
    

}