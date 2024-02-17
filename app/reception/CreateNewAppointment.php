<?php
namespace App\reception;

use App\classes\Database;
use Exception;

class CreateNewAppointment
{
      private $db;
      public function __construct()
      {
            $this->db = Database::db();
      }
      public function newUser($data)
      {
            try {
                  $query = "INSERT INTO user_data_info (adhaar_no, name, dob, address, phone_no, gender) VALUES (?, ?, ?, ?, ?, ?)";
                  $statement = $this->db->prepare($query);

                  // Binding parameters
                  $statement->bind_param('isssis', $data['adhaar_no'], $data['name'], $data['dob'], $data['address'], $data['phone_no'], $data['gender']);

                  if ($statement->execute()) {
                        return "User and Appointment created successfully";
                  } else {
                        return "Failed to create new appointment";
                  }
            } catch (Exception $e) {
                  return $e->getMessage();
            }
      }
      public function newAppointment($data)
      {
            try {
                  $date = Date("Y-m-d");
                  $query = "INSERT INTO appointment (adhaar_no, dept_name,date) VALUES (?, ?, ?)";
                  $statement = $this->db->prepare($query);

                  // Binding parameters
                  $statement->bind_param('sss', $data['adhaar_no'], $data['dept'], $date);

                  if ($statement->execute()) {
                        return "Appointment created successfully";
                  } else {
                        return "Failed to create new appointment";
                  }
            } catch (Exception $e) {
                  return $e->getMessage();
            }
      }

}