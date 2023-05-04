<?php
    defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
    defined('SITE_ROOT') ? null : define('SITE_ROOT', dirname(__FILE__) . DS . '..' . DS);

    //load config files
    require_once(SITE_ROOT . 'includes' . DS . 'config.php');

    //core classes
    require_once(SITE_ROOT . 'core' . DS . 'post.php');

?>
