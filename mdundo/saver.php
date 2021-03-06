<?php
    $allowedExts = array("pdf", "mp3");
    $extension = end(explode(".", $_FILES["file"]["name"]));
    if ((($_FILES["file"]["type"] == "pdf")
    || ($_FILES["file"]["type"] == "mp3")
    && ($_FILES["file"]["size"] < 20000)
    && in_array($extension, $allowedExts))
      {
      if ($_FILES["file"]["error"] > 0)
        {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
        }
      else
        {
            echo "Upload: " . $_FILES["file"]["name"] . "<br />";
            echo "Type: " . $_FILES["file"]["type"] . "<br />";
            echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
            echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
            if (file_exists("upload/" . $_FILES["file"]["name"]))
              {
                  echo $_FILES["file"]["name"] . " already exists. ";
              }
            else
              {
                  move_uploaded_file($_FILES["file"]["tmp_name"],
                  "upload/" . $_FILES["file"]["name"]);
                  echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
              }
        }
      }
    else
      {
      echo "Invalid file";
      }
    ?>