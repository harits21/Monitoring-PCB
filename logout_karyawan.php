<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();
    echo "<script>alert('Anda telah logout');</script>";
    echo "<script>location='Raftech_Kpcb.php';</script>";
    ?>

</body>

</html>