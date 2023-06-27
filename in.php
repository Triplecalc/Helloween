<?php
$in = ?$_GET['id']&$_GET['first_name']&$_GET['username']&$_GET['photo_url'];
header('Refresh: 0; URL=http://likebot.hostingem.ru/crypt/register.php$in');
?>