<?php
namespace App\classes;

use App\classes\Database;

class Login
{
    public static function userLogin($data)
    {
        session_start();
        $type = $data['type'];
        $email = $data['email'];
        $password = $data['password'];
        $email = stripcslashes($email);
        $password = stripcslashes($password);

        $sql = "SELECT admin_details.id, admin_details.role, admin_passwords.admin_id, admin_passwords.admin_password
            FROM admin_details
            INNER JOIN admin_passwords ON admin_details.id = admin_passwords.admin_id 
            WHERE email='$email' And role='$type'";

        $result = mysqli_query(Database::db(), $sql);

        if ($result) {
            $row = mysqli_num_rows($result);
            $user_data = mysqli_fetch_assoc($result);

            if ($row == 1 && password_verify($password, $user_data['admin_password'])) {
                $adminId = $user_data['id'];
                $user_role = $user_data['role'];

                $_SESSION['admin-login-success'] = true;
                $_SESSION['admin-id'] = $adminId;
                $_SESSION['admin-role'] = $user_role;

                // Redirect based on user role
                switch ($user_role) {
                    case 1:
                        $url = 'Doctor/';
                        break;
                    case 2:
                        $url = 'Reception/';
                        break;
                    case 3:
                        $url = 'Lab/';
                        break;
                    case 4:
                        $url = 'Store';
                        break;
                    default:
                        $url = 'error.php';
                        break;
                }

                header("location: $url");
                $error_text = 'Successful Login';
                return $error_text;
            } else {
                $error_text = 'Invalid Username or Password';
                return $error_text;
            }
        } else {
            echo 'SQL problem : )';
        }
    }




    /**
     */
    public function __construct()
    {
    }
}
