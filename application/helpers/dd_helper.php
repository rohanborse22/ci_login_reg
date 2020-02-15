  
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
if (!function_exists('dd_helper')) {
    function dd_helper($value)
    {
        echo '<pre>';
        print_r($value);die();
    }
}

?>