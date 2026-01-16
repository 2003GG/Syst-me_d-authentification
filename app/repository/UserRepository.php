<?php 
namespace App\repository;
use App\config\Database;
use PDOException;
class UserRepository{
    private $connection;
    public function __construct(){
    $this->connection = Database::getInstance()->getConnection();
    }
    public function Creat($user){
      try{
        $query='INSERT INTO Users(nom,email,password) VALUES(:nom,:email,:password)';
        $stmt=$this->connection->prepare($query);
        $stmt->bindParam(':nom',$user->nom);
        $stmt->bindParam(':email',$user->email);
        $stmt->bindParam(':password',$user->password);
        
        $stmt->execute();
        return $user;
          }
          catch(PDOException $e){
        echo "Failed to save".$e->getMessage();
          }
    }
    public function findUser($nom,$email){
        try{
        $query='SELECT * FROM Users WHERE nom=:nom AND email=:email' ;
        $stmt=$this->connection->prepare($query);
        $stmt->bindParam(':nom',$nom);
        $stmt->bindParam(':email',$email);
        $stmt->execute();
        }
        catch(PDOException $e){
        echo "Failed to find".$e->getMessage();

        }
    }
    public function findLog($email,$password){
      try{
        $query='SELECT * FROM Users Where emai=:email AND password=:password';
        $stmt=$this->connection->prepare($query);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":password",$password);
        $stmt->execute();
      }
      catch(PDOException $e){
         echo "Failed to find".$e->getMessage();
      }

    }

}
