<?php
session_start();
session_destroy();

?>
<script>
    alert('Logout Success');
    window.location = 'login.php';
</script>