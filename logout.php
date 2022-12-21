<?php
//This includes the session_start() to resume the session on this page. It identifies the session that needs to be destroyed.
include_once'includes/session.php'?>
<?php
//Session destroy() destroys the session. Then the header() function redirects to the homepage.
session_destroy();
header('Location: index.php');
?>
