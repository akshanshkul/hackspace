<?php
require_once '../vendor/autoload.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
use App\classes\Session;
use App\classes\reception;

if (isset($_POST['Craete-new-Appointment'])) {
    $adminReg = new App\reception\CreateNewAppointment();
    $txt = $adminReg->newAppointment($_POST);
    Session::set('returnMsg', $txt);
    exit();
}
// if (isset($_POST['Craete-new-Appointment'])) {
//     $adminReg = new App\reception\CreateNewAppointment();
//     $txt = $adminReg->newAppointment($_POST);
//     Session::set('errorMsg', $txt);
//     header("location:thank_you.php");
//     exit();
// }