<?php
require 'header.php';
?>
<!--  Header End -->

<div class="container-fluid">
  <!--  Row 1 -->

  <div class="row">

    <div class="col-lg-6">
      <div class="card w-100">
        <div class="card-body p-4">
          <h5 class="card-title fw-semibold mb-4">By Aadhaar</h5>
          <form action="createNewAppointment" method="POST">
            <div class="mb-3">
              <label for="adhaar_number" class="form-label">Aadhaar Number</label>
              <input type="text" class="form-control" name="adhaar_no" id="adhaar_number">
            </div>
            <div class="mb-3">
              <label for="adhaar_number" class="form-label">Dept</label>
              <select name="dept" id="dept" class="form-select" required>
                <option selected value="">Dept</option>
                <option value="1">Doctor</option>
                <option value="2">Receptionist</option>
                <option value="3">Lab</option>
                <option value="4">Chemist</option>
              </select>
            </div>
            <div class="mb-3" id="user_data"></div>
            <div id="add-details" style="display: none;">
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="mb-3">
                <label for="dob" class="form-label">Date Of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob">
              </div>
              <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" id="gender" class="form-select">
                  <option value="" selected>Select Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>
              <input type="submit" class="btn btn-primary" value="Create New" name="create-user" />
            </div>

            <input type="submit" class="btn btn-primary" value="Submit" id="apponitment" style="display:none;"
              name="Craete-new-Appointment" />
          </form>
        </div>
      </div>
    </div>
    <!-- <div class="col-lg-6">
      <div class="card w-100">
        <div class="card-body p-4">
          <h5 class="card-title fw-semibold mb-4">Without Aadhaar</h5>
        </div>
      </div>
    </div> -->
  </div>
</div>

<?php
require 'footer.php';
?>
<script>
  $(document).ready(function () {
    $('#adhaar_number').on('input', function () {
      var adhaarNumber = $('#adhaar_number').val().trim();
      // Validate if input is 12 digits long
      if (adhaarNumber.length === 12 && !isNaN(adhaarNumber)) {
        // Make AJAX request to fetch user data
        $.ajax({
          url: 'ajex/fetchDetailsByAdhaar.php', // Assuming this is the URL to your PHP script
          method: 'POST',
          data: { adhaar_number: adhaarNumber },
          dataType: 'json',
          success: function (response) {
            if (response.success) {
              var userDataHtml = '<p>Name: ' + response.data.name + '</p>';
              userDataHtml += '<p>Date of Birth: ' + response.data.dob + '</p>';
              userDataHtml += '<p>Gender: ' + response.data.gender + '</p>';

              // Update user data section with the HTML markup
              $('#user_data').html(userDataHtml);
              $('#add-details').hide();
              $('#apponitment').show();

            } else {
              $('#user_data').html('No user found for the provided Aadhaar number.');
              $('#add-details').show();
              $('#apponitment').hide();
            }
          },
          error: function (xhr, status, error) {
            console.error(xhr.responseText);
            $('#user_data').html('An error occurred while processing your request.');
          }
        });
      }
    });
  });
</script>