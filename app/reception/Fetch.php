<?php
namespace App\reception;

use App\classes\Database;

class Fetch
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

            if ($result->num_rows > 0) {
                // Fetching data as an associative array
                return $result->fetch_assoc();
            } else {
                return false; // No data found for the given Aadhaar number
            }
        } else {
            return false; // Error in preparing the statement
        }
    }


}