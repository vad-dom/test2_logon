<?php

    define('DIR_ROOT', __DIR__.DIRECTORY_SEPARATOR);
    define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR);

    // classes path
    set_include_path(
        get_include_path().PATH_SEPARATOR.DIR_ROOT.'db'.PATH_SEPARATOR.DIR_ROOT.
        'core'.PATH_SEPARATOR.DIR_ROOT.'controller'.PATH_SEPARATOR.DIR_ROOT.
        'captcha'.PATH_SEPARATOR.DIR_ROOT.'pages'
    );
    spl_autoload_extensions('_class.php');
    spl_autoload_register();
    
    define('MAIN_LAYOUT', 'main');
    
    // files path
    define('DIR_TMPL', __DIR__.DIRECTORY_SEPARATOR.'tmpl'.DIRECTORY_SEPARATOR);
    define('DIR_SERVICE_IMG', 'img'.DIRECTORY_SEPARATOR.'service_img'.DIRECTORY_SEPARATOR);
    
?>