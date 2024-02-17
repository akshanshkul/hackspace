<?php
namespace App\patient;

use App\classes\Database;

class getDetails
{
    private $db;
    public function __construct()
    {
        $this->db = Database::db();
    }
    public function fetchByAdhaar($adhaar_no)
    {
        $query = "SELECT * FROM user_data_info WHERE adhaar_no = ?";
        $stmt = $this->db->prepare($query);

        if ($stmt) {
            $stmt->bind_param("s", $adhaar_no); // Assuming 'adhaar' is a string
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();

            return $result;
        } else {
            return false; // Error in preparing the statement
        }
    }


}