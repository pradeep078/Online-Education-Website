<?php
  $posted = true;
  if( $_POST ) {
    $posted = false;

    // Database stuff here...
    // $result = mysql_query( ... )
    $result = $_POST['name'] == "danny"; // Dummy result
  }
?>

<html>
  <head></head>
  <body>

  <?php
    if( $posted ) {
      if( $result ) 
        echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
      else
        echo "<script type='text/javascript'>alert('failed!')</script>";
    }
  ?>
  </body>
</html>