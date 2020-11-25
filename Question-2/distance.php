<?php
     $dist = $_POST['dist'];
     $units = $_POST['units'];
     if($units=='kms'){
          $miles = $dist / 1.609;
          echo 'The' .$dist. 'is equivalent to' .round($miles). 'miles.';
     }else{
        $kms = $dist * 1.609;
        echo 'The' .$dist. 'is equivalent to' .round($kms). 'kilometers.';  
     }
?>