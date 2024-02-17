<?php
namespace App\doctor;

use App\classes\Database;

class fetchData
{
    private $db;

    public function __construct()
    {
        $this->db = Database::db();
    }

    public function fetchByDept($dept)
    {
        $query = "SELECT * FROM appointment WHERE dept_name = ?";
        $stmt = $this->db->prepare($query);

        if ($stmt) {
            $stmt->bind_param("s", $dept); // Assuming 'dept' is a string
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                $stmt->close();


                return $result;
            } else {
                return false; // Error in executing the statement
            }
        } else {
            return false; // Error in preparing the statement
        }
    }
}
?>