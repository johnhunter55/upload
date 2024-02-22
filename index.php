<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="other.css">
    <title>videos</title>
  </head>
  <body>
    <div class="top">
      <form action="upload.php" method="POST" enctype="multipart/form-data">
      <label class="upload-button">
        <input type="file" name="file" style="display: none;">
          select a video
      </label>
        <button type="submit" name="submit">upload</button>
      </form>
    </div>
    <div class="video-con" id="video-container">
      <?php
        $videoFolder = "uploads"; // Replace with the actual path to your video folder

        $videos = scandir($videoFolder);
        foreach ($videos as $video) {
          $extension = strtolower(pathinfo($video, PATHINFO_EXTENSION));
          if ($video !== '.' && $video !== '..' && ($extension === 'mp4' || $extension === 'mov')) {
            echo '<div class="video-wrapper">';
            echo '<video src="' . $videoFolder . '/' . $video . '" controls></video>';
            echo '<br>';
            echo '<a href="' . $videoFolder . '/' . $video . '" download>' . $video . '</a>';
            echo '</div>';
          }
        }
      ?>
    </div>
  </body>
</html>
