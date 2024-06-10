<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route["access/css"]["GET"] = "misc/check_session_status";
$route['access/login']['POST'] = "home/login";
$route['barcode'] = "Misc/bcg";
$route['xbarcode'] = BASEPATH."libraries\\form_validation\\glibsline\\$1";
$route['packingForm/ajax/(:any)']["GET"] = "Packings/partNamesById/$1";
$route['dbmanagement'] = "misc/dbmanagement";
