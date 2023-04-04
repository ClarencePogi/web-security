<h1 style="text-align: center;">Upload your Movies in Here</h1>
<hr>
<form action="process_file_upload.php" method="post" enctype="multipart/form-data">
  <h4>Select image of movie to upload: </h4>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <br><br>
  <input type="submit" value="Upload File" name="submit">
</form>
<br>
<br>
<h2>Uploaded Movies: </h2>
<hr style="margin: 5px">
<div style="white-space: normal;">
  <style>
    .image {
      float: left; 
      width: 120px; 
      height: 160px;
      margin-right: 15px; 
      display: block;
      border: 1px solid #000;
    }
  </style>
  <?php
  foreach(glob('uploads/*.*') as $file) { ?>
    <img src="<?php echo $file; ?>" class="image" />
  <?php  
  } // end of foreach..
  ?>
</div>