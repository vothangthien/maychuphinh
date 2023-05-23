<?php
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
  if(!isset($_COOKIE['user_type']) ? (base64_decode($_COOKIE['user_type']) === 'administration') : false){
    header('location: http://localhost/shopping/index.php?page=SigNin');
    exit;
  }
  ?>

<?php
    include __DIR__ . '/../../models/ConnectSQl.php';
?>

<head>
  <link rel="stylesheet" href="./public/style/dashboard/pageHome.css"/>
</head>

<div class="Container-pageHome-form">
  <div class="page-Home">
    <div> <h1 class="font-h1-pagehome"> THIS IS Edit HOME PAGE</h1></div>
    <form id="form-addproduct" method="post" action="././page/dashboard/API/ApipageHome.php">
      <div class="form-imgeSilder">
        <label for="imgeSilder">Image Slider:</label>
        <input type="file" class="imgeSilder" id="imgeSilder" name="imgeSilder"/>
        <div class="imgeSilde-image">
          <img id="imgeSilde-preview" class="input-img" src="" alt="Image Preview" />
        </div>
      </div>
      <div class="form-content-1">
        <label for="content-1">Content 1:</label>
        <input type="text" id="content-1" class="content-1" name="content-1">
      </div>
      <div class="form-img-menu">
        <label for="img-menu">Image Menu:</label>
        <input type="file" id="img-menu" class="img-menu" name="img-menu">
        <div class="img-menu-image">
          <img id="img-menu-preview" class="input-img" src="" alt="Image Preview" />
        </div>
      </div>
      <div class="form-content-imge">
        <label for="content-imge">Content Image:</label>
        <input type="text" id="content-imge" class="content-imge" name="content-imge">
      </div>
      <div class="form-Contact">
        <label for="Contact">Contact:</label>
        <input type="file" id="Contact" class="Contact" name="Contact">
        <div class="contact-image">
          <img id="contact-preview" class="input-img" src="" alt="Image Preview" />
        </div>
      </div>
      
      <button type="submit">Update Home PAGE</button>
    </form>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
      // Handle file input change event
      $('#imgeSilder, #img-menu, #Contact').on('change', function() {
        var file = this.files[0];
        var previewId = $(this).attr('id') + '-preview';
        var previewImage = $('#' + previewId);
        if (file) {
          var reader = new FileReader();
          reader.onload = function(e) {
            previewImage.attr('src', e.target.result);
          }
          reader.readAsDataURL(file);
        } else {
          previewImage.attr('src', '');
        }
      });

      // Handle form submit event
      $('#form-addproduct').submit(function(event) {
        event.preventDefault();

        var formData = new FormData(this);
        formData.append('imgeSilder', $('#imgeSilder')[0].files[0]);
        formData.append('img-menu', $('#img-menu')[0].files[0]);
        formData.append('Contact', $('#Contact')[0].files[0]);

        $.ajax({
          url: 'http://localhost/shopping/page/dashboard/API/ApipageHome.php',
          type: 'POST',
          data: formData,
          contentType: false,
          processData: false,
          success: function(response) {
            if (response === 'success') {
              window.location.reload();
            } else {
              $('#error-message span').text(response);
            }
          },
          error: function() {
            $('#error-message span').text('There was a problem with the server, please try again later.');
          }
        });
      });
    });
</script>
