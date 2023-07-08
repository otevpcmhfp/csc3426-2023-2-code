<?php
      if(isset($_POST['submit'])){
        if(!empty($_POST['info'])) {
          //echo '  ' . $_POST['info'].": <br>";
          $test = $_POST['info'];
          if ($_POST['info'] == "xdebug"){
              echo xdebug_info();
          }
          elseif($_POST['info'] == "php"){
              echo phpinfo();
          }
          elseif($_POST['info'] == "path"){
            $path_parts = pathinfo('/htdocs/xdebug/xdebug.php');
            echo "dirname: ". $path_parts['dirname'], "<br>";
            echo "basename: ". $path_parts['basename'], "<br>";
            echo "extension: ". $path_parts['extension'], "<br>";
            echo "filename: ". $path_parts['filename'], "<br>";            
          }

        } else {
          echo 'Please select the value.';
        }
      }
?>
