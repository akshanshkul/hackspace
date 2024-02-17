<?php
require 'header.php';
?>
<!--  Header End -->


<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Prescription Data</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">ADDRESS</th>
                        <th scope="col">PRESCRIPTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">XXXXXXXXXX</th>
                        <td>Akshansh</td>
                        <td>Mathura</td>
                        <td><button style="width:75px;height:35px" onclick="openPrescriptionModal('Akshansh')" class="btn btn-primary">Open</button></td>  
                    </tr>
                    <tr>
                        <th scope="row">XXXXXXXXXX</th>
                        <td>Astha Rathore</td>
                        <td>Mathura</td>
                        <td><button style="width:75px;height:35px" onclick="openPrescriptionModal('Astha Rathore')" class="btn btn-primary">Open</button></td>  
                    </tr>
                    <tr>
                        <th scope="row">XXXXXXXXXX</th>
                        <td>Akash Sharma</td>
                        <td>Mathura</td>
                        <td><button style="width:75px;height:35px" onclick="openPrescriptionModal('Akash Sharma')" class="btn btn-primary">Open</button></td>  
                    </tr>
                    <tr>
                        <th scope="row">XXXXXXXXXX</th>
                        <td>Abhay gupta</td>
                        <td>Mathura</td>
                        <td><button style="width:75px;height:35px" onclick="openPrescriptionModal('Abhay gupta')" class="btn btn-primary">Open</button></td>  
                    </tr>
                    <tr>
                        <th scope="row">XXXXXXXXXX</th>
                        <td>Madhur Krishna</td>
                        <td>Mathura</td>
                        <td><button style="width:75px;height:35px" onclick="openPrescriptionModal('Madhur Krishna')" class="btn btn-primary">Open</button></td>  
                    </tr>             
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Prescription Modal -->
<div class="modal" id="prescriptionModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Prescription for <span id="patientName"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Content of the prescription goes here -->
                <p>Prescription details for <span id="patientNameContent"></span> will be displayed here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Given</button>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and jQuery for modal functionality -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    // Function to open the prescription modal
    function openPrescriptionModal(patientName) {
        // Set the patient name in the modal
        document.getElementById('patientName').innerHTML = patientName;
        document.getElementById('patientNameContent').innerHTML = patientName;

        // Show the modal
        $('#prescriptionModal').modal('show');
    }
</script>

<?php
require 'footer.php';
?>