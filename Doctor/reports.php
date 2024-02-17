<?php
require 'header.php';
?>
<!--  Header End -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient List Page</title>
    <!-- Include Bootstrap CSS for styling -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
    <h5 class="card-title fw-semibold mb-4">Patient List</h5>
    
    <!-- Patient Table -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>001</td>
                <td>John Doe</td>
                <td>1980-01-01</td>
                <td>Male</td>
                <td><button class="btn btn-primary" onclick="viewReport('John Doe')">View Report</button></td>
            </tr>
            <tr>
                <td>002</td>
                <td>Jane Doe</td>
                <td>1985-05-15</td>
                <td>Female</td>
                <td><button class="btn btn-primary" onclick="viewReport('Jane Doe')">View Report</button></td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

<!-- Patient Report Modal -->
<div class="modal" id="patientReportModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="patientReportModalTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="patientReportModalBody">
                <!-- Patient Report Details -->
                <h6>Report Details:</h6>
                <p><strong>Test Name:</strong> <span id="testName"></span></p>
                <p><strong>Result:</strong> <span id="result"></span></p>
                <p><strong>Reference Range:</strong> <span id="referenceRange"></span></p>
                <!-- Add more details as needed -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and jQuery for modal functionality -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    // Function to open the patient report modal
    function viewReport(patientName) {
        // Set the title in the modal
        document.getElementById('patientReportModalTitle').innerHTML = "Patient Report for " + patientName;

        // Set report details (replace with dynamic data from your system)
        document.getElementById('testName').innerHTML = "Blood Test";
        document.getElementById('result').innerHTML = "Normal";
        document.getElementById('referenceRange').innerHTML = "Normal Range: 4.0 - 10.0";

        // Show the modal
        $('#patientReportModal').modal('show');
    }
</script>

</body>
</html>


