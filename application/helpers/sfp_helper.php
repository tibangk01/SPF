<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/** 
|--------------------------------------------------------------------------
| spf Helpers 
 * @author : KOMLANI Tibang Tibang'bé
 * @version : 0.1
 * @since : 01 Febrary 2021
|
| Méthods list
|   1.  loadViews : dinamically loads views
|   2.  sendMail : sends mail,
|   3.
|
|--------------------------------------------------------------------------
 */

if (!function_exists('loadViews')) {
    
    /**
     * @method Load Views
     * This method is used to dynamically load the views, 
     * @param {array} $paths : array of strings representing the paths to the views, 
     * @param {array} $datas : array of data arrays,
     * @return {null} $result : null.
     */
    function loadViews($paths = [], $datas = [])
    {
        $CI = &get_instance();
        $CI->load->helper('url');

        if (sizeof($paths) != sizeof($datas)) show_error(LOADVIEWS_ERROR);
        foreach ($paths as $key => $path) {
            $data = $datas[$key];
            $CI->load->view($path, $data);
        }
    }
}


/**
 * @method Send Mail
 * This method is used to send mail
 * @param
 */
function sendMail()
{
    # code...
}
