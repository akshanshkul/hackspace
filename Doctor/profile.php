<?php
require 'header.php';
?>

<div class="container-fluid">
    <div class="card" style="width:500px">
        <div class="card-body">
            <div class="mb-4"><img src="../assets/images/profile/user-1.jpg"
                    class="card-img-top profile-img img-thumbnail" alt="Profile Picture" style="width:50%;">
            </div>
            <h5 class="card-title">Dr.John Doe</h5>
            <p class="card-text">mob: 7906282226</p>
            <p class="card-text">ad : Krishna Nagar, Mathura </p>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">Department : Optometry</li>
                <li class="list-group-item">Post : Doctor</li>
                <li class="list-group-item">Experience : 10 yrs</li>
                <li class="list-group-item">Email: john.doe@example.com</li>
                <li class="list-group-item">Location : Comunity Health Center, Mathura</li>
            </ul>
            <!-- <div class="card-body">
        <a href="#" class="btn btn-info me-md-3">View Profile </a>
        <a href="#" class="btn btn-info ">Edit Profile</a>
      </div> -->
        </div>
    </div>
 <!-- Button to trigger first modal -->
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1"> 
    Open First Popup
  </button>

  <!-- First Modal -->
  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal1Label">First Popup</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Content of First Popup
          <br>
          <!-- Button to trigger second modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2">
            Open Second Popup
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Second Modal -->
  <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal2Label">Second Popup</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Content of Second Popup
        </div>
      </div>
    </div>
  </div>
<?php
require 'footer.php';
?>