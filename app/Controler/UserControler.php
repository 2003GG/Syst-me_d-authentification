<?php
namespace App\Controler;
use App\Services\ServiceSingUp;

class UserControler
{
    private $ServiceSingUp;

    public function __construct()
    {
        $this->ServiceSingUp = new ServiceSingUp();
    }
    public function register()
    {
        $nom = $_POST["fullName"];
        $email = $_POST["Email"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

        $find = $this->ServiceSingUp->Find($nom, $email);
        if (empty($find)) {
            $this->ServiceSingUp->CreatUser($nom, $email, $password);
            header("Location: ../view/dashbord.php");
        } else {
          echo "ERROR";
        }
    }
    public function logIn(){
        $email = $_POST["EmailLog"];
        $password = $_POST["passwordLog"];
// You need to fetch the user first, then verify the password
        $find=$this->ServiceSingUp->findLogIn($email,$password);
        if(!empty($find)){
            echo "correct";  
        }else{
            echo"not correct";
        }

    }
}


