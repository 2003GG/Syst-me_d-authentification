<?php 
namespace UserReopsitory;
use DataConection;
class UserRepository{
    private $connection;
    public function __construct(){
    $this->connection = Database::getInstance()->getConnection();
    }
    public function Creat($user){
      try{
        $query='INSERT INTO Users(nom,email,password)VALEUS(:nom,:email,:password)';
        $stmt=$this->connection->prepare($query);
        $stmt->bindParam(':nom',$user->nom);
        $stmt->bindParam(':email',$user->email);
        $stmt->bindParam(':password',$user->password);
        $stmt->execute();
          }
          catch(PDOException $e){
        echo "Failed to save".$e->getMessage();
          }
    }
    public function findUser($nom,$email,$password){
        try{
        $query='SELECT * FROM Users WHERE email=:email AND password=:password AND nom=:nom' ;
        $stmt=$this->connection->prepare($query);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':password',$password);
        $stmt->bindParam(':nom',$nom);


        $stmt->execute();
        }
        catch(PDOException $e){
        echo "Failed to find".$e->getMessage();

        }


    }

}
