<?php
// Load Config
require_once 'config/config.php';

// Load Libraries
/* require_once 'libraries/core.php';
require_once 'libraries/controller.php';
require_once 'libraries/database.php'; */


// Autoload Core Libraries (for this to work the class inside the library file needs to have the same name of the file);

spl_autoload_register(function ($className) {
    require_once 'libraries/' . $className . '.php';
});
