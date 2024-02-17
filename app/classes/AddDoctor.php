<?php

namespace App\classes;

use App\classes\Database;
use App\classes\Send;

use Exception;

class AddDoctor
{

    public static function addUser($data)
    {
        $conn = Database::db();
        $name = $data['name'];
        $email = $data['email'];
        $mobile = $data['phone'];
        $role = $data['role'];
        $status = $data['status'];

        if ($status != 1) {
            $status = 0;
        }

        date_default_timezone_set('Asia/Kolkata');
        $added_on = date('Y-m-d H:i:s');

        // Initialize variables outside of try block
        $stmtAdminDetails = null;
        $stmtAdminPassword = null;
        $successMessages = "";

        // Begin transaction
        $conn->begin_transaction();

        try {
            // Insert into admin_details table
            $sqlAdminDetails = "INSERT INTO `admin_details` (`name`, `email`, `phone_no`, `role` ,`status`) VALUES (?, ?, ?, ?, ?)";
            $stmtAdminDetails = $conn->prepare($sqlAdminDetails);
            $stmtAdminDetails->bind_param("sssii", $name, $email, $mobile, $role, $status);

            // Execute admin_details query
            if (!$stmtAdminDetails->execute()) {
                throw new Exception("Failed to insert admin details.");
            }

            // Get the last inserted ID from admin_details table
            $adminId = $stmtAdminDetails->insert_id;

            // Insert into admin_password table
            $passwordText = $data['password'];
            $password = password_hash($data['password'], PASSWORD_DEFAULT);
            $sqlAdminPassword = "INSERT INTO `admin_passwords` (`admin_id`, `admin_password`,create_at) VALUES (?, ?, ?)";
            $stmtAdminPassword = $conn->prepare($sqlAdminPassword);
            $stmtAdminPassword->bind_param("sss", $adminId, $password, $added_on);

            // Execute admin_password query
            if (!$stmtAdminPassword->execute()) {
                throw new Exception("Failed to insert User password.");
            }

            // Commit the transaction if all queries succeed
            $conn->commit();

            $successMessages = "Add details successfully.";
        } catch (Exception $e) {
            // Rollback the transaction on any exception
            $conn->rollback();
            $successMessages = $e->getMessage();
        } finally {
            // Close statements if they were initialized
            if ($stmtAdminDetails) {
                $stmtAdminDetails->close();
            }
            if ($stmtAdminPassword) {
                $stmtAdminPassword->close();
            }
        }

        return $successMessages;
    }


    public function __construct()
    {
    }
}