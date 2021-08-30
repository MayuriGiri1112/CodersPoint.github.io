<?php
if(isset($_GET['cprog'])){
    $fi=$_GET['cprog'];
    if(file_exists($fi)){
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.basename($fi).'');
        header('Content-Length: '.filesize($fi));
        readfile($fi);
        exit;
    }
  }
?>