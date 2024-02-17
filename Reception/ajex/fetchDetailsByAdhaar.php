<?php
require_once '../../vendor/autoload.php';

header('Content-Type: application/json');
$fetchDetails = new App\reception\Fetch;
if (isset($_POST['adhaar_number'])) {
    $adhaar = $_POST['adhaar_number'];
    $userData = $fetchDetails->fetchByAdhaar($adhaar);
    if ($userData) {


        $response = [
            'success' => true,
            'data' => $userData // Assuming fetchByAdhaar returns false if no data found
        ];
    } else {
        $response = [
            'success' => false,
        ];
    }
} else {
    $response = [
        'success' => false,
        'message' => 'Aadhaar number not provided'
    ];
}

echo json_encode($response);
exit;
