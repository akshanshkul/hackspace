<?php
require 'header.php';
?>
<!--  Header End -->
<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Report Section</h5>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">PRESCRIPTION</th>
      <th scope="col">REPORTS</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <th scope="row">XXXXXXXXXX</th>
      <td>Madhur Krishna</td>
      <td>Mathura</td>
      <td>NA</td>
      <td>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open</button></td>
    </tr>
  </tbody>
</table>
    </div>
  </div>
</div>
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open</button> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal with PDF Upload</title>
    <!-- Add Bootstrap CSS and JS links -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Patient:</label>
                         <p>madhur</p>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Prescription:</label>
                           <p>NA</p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-secondary">Proceed</a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pdfUploadModal">
                        Upload PDF
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- PDF Upload Modal -->
    <div class="modal fade" id="pdfUploadModal" tabindex="-1" role="dialog" aria-labelledby="pdfUploadModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pdfUploadModalLabel">Upload PDF</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="pdf-file">Choose a PDF file:</label>
                            <input type="file" class="form-control-file" id="pdf-file" name="pdf-file" accept=".pdf" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js (if needed) links -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



<?php
require 'footer.php';
?>