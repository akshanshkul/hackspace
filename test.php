<?php
require_once 'vendor/autoload.php';

session_start();
use App\classes\Session;
use App\classes\AddDoctor;

// if (isset($_POST['add-user'])) {
//     $adminReg = new App\classes\AddDoctor();
//     $txt = $adminReg->addUser($_POST);
//     Session::set('errorMsg', $txt);
//     exit();
// }


// Create demo data for user creation
$demoUserData = array(
    'name' => 'John Doe',
    'email' => 'johndoe@example.com',
    'phone' => '1234567890',
    'role' => '4',
    'password' => 'password123',
    'status' => 1 // Assuming you want to set status to active by default
);

// Simulate form submission and user creation
$adminReg = new App\classes\AddDoctor();
$txt = $adminReg->addUser($demoUserData);
echo $txt; // Display the result of user creation
?>