<?php
    $db_user = 'root';
    $db_password = 'packageHut';
    $db_name = 'scandiWeb';

    $db = new PDO('mysql:host=localhost:3306;dbname=' . $db_name . ';charset=utf8', $db_user, $db_password);

    //db attributes
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);

    define('APP_NAME', 'SCANDI WEB JUNIOR DEVELOPER TEST')
?>