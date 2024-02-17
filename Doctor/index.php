<?php
require 'header.php';
?>
<!--  Header End -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Page</title>
    <!-- Include Bootstrap CSS for styling -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Appointment Page</h5>

            <!-- Patient List Table -->
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Patient ID</th>
                        <th>Patient Name</th>
                        <th>Appointment Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Patient Data (Replace with dynamic data from your database) -->
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>2024-02-17</td>
                        <td>
                            <!-- Add onclick event to open the pop-up -->
                            <button class="btn btn-primary" onclick="openPopup(1, 'John Doe', '2024-02-17')">Select</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>2024-02-18</td>
                        <td>
                            <button class="btn btn-primary" onclick="openPopup(2, 'Jane Smith', '2024-02-18')">Select</button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            <!-- End Patient List Table -->

        </div>
    </div>
</div>

<!-- Pop-up Modal -->
<div class="modal" id="appointmentModal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Schedule Appointment</h4>
                <button type="button" class="close" data-dismiss="modal" onclick="closeModal()">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p id="selectedPatientInfo"></p>
                <div class="mb-3">
                    <label for="prescription">Disease:</label>
                    <textarea class="form-control" id="Disease" name="Disease" rows="2"></textarea>
                </div>

                <!-- Prescription Textbox -->
                <div class="mb-3">
                    <label for="prescription">Prescription:</label>
                    <textarea class="form-control" id="prescription" name="prescription" rows="6"></textarea>
                </div>

                <!-- Medical History Table -->
                <div class="mb-3">
                    <label for="medicalHistory">Medical History:</label>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Event</th>
                                <th>Disease</th>
                                <!-- Add more columns as needed -->
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example Medical History Data (Replace with dynamic data from your database) -->
                            <tr>
                                <td>2023-01-01</td>
                                <td>Initial consultation</td>
                                <td>Cold</td>
                                <!-- Add more rows as needed -->
                            </tr>
                            <tr>
                                <td>2023-03-15</td>
                                <td>Follow-up visit</td>
                                <td>cold</td>
                            </tr>
                            
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>

                <!-- Submit Button -->
                <button type="button" class="btn btn-success" onclick="submitForm()">Submit</button>

                <!-- Add additional form fields or content for scheduling the appointment -->
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <!-- Add additional buttons or actions here -->
            </div>

        </div>
    </div>
</div>



<!-- Include Bootstrap JS and jQuery for modal functionality -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    // Function to open the pop-up with selected patient information
    function openPopup(patientId, patientName, appointmentDate) {
        // Set the selected patient information in the modal
        document.getElementById('selectedPatientInfo').innerHTML = `Patient ID: ${patientId}<br>Patient Name: ${patientName}<br>Appointment Date: ${appointmentDate}`;

        // Show the modal
        $('#appointmentModal').modal('show');
    }

    // Function to close the modal when clicking the close button
    function closeModal() {
        $('#appointmentModal').modal('hide');
    }

    // Function to submit the form (you can replace this with your backend logic)
    function submitForm() {
        var prescription = document.getElementById('prescription').value;
        var medicalHistory = document.getElementById('medicalHistory').value;

        // Add logic to send the prescription and medical history to the server
        // Example: You can use AJAX to send data to the server

        // After submitting, you may want to close the modal
        closeModal();

        // You can add additional logic or redirect to another page if needed
    }
</script>

</body>
</html>





</div>
</div>
<?php
require 'footer.php';
?>