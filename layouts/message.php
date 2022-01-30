<?php
if (isset($_SESSION['message'])) {
    echo '<script type="text/javascript">';
    echo 'setTimeout(function () { 
        swal({
            position: "center",
            icon: "success",
            title: "Your message has been sent successfully",
             timer: 4000
        });';
    echo '}, 500);</script>';
    unset($_SESSION['message']);
} ?>
