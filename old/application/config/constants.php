<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESCTRUCTIVE') OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

/*
|--------------------------------------------------------------------------
| COMPANY INFO Codes
|--------------------------------------------------------------------------
*/
defined('CMP_OWNER')        OR define('CMP_OWNER', 'BRIGHTEN'); // no errors
defined('CMP_NAME')          OR define('CMP_NAME', 'VENUS MODULAR'); // generic error
defined('CMP_ADD')         OR define('CMP_ADD', 'KOLAPPAKAM'); // configuration error
defined('CMP_AREA')         OR define('CMP_AREA', 'MANAPAKKAM'); // configuration error
defined('CMP_CITY')   OR define('CMP_CITY', 'CHENNAI'); // file not found
defined('CMP_STATE')   OR define('CMP_STATE', 'TAMILNADU'); // file not found
defined('CMP_PIN')   OR define('CMP_PIN', '600122'); // file not found
defined('CMP_URL')   OR define('CMP_URL', 'pocketfurniture.in'); // file not found
defined('CMP_EMAIL')   OR define('CMP_EMAIL', 'brighton@venuskitchen.com'); // file not found
defined('CMP_CONT')   OR define('CMP_CONT', '9444088579'); // file not found

defined('INI_FILE')             OR define('INI_FILE', '/config/myappconfig.ini'); // file not found
defined('CMP_user')   OR define('CMP_user', 'admin_id'); // file not found
defined('CMP_log')   OR define('CMP_log', 'comp_id'); // file not found
defined('CMP_loc')   OR define('CMP_loc', 'comp_aloc'); // file not found
defined('CMP_own')   OR define('CMP_own', 'comp_siracs'); // file not found
defined('CMP_domain')   OR define('CMP_domain', ''); // file not found
defined('FOPEN')   OR define('FOPEN', 'WRITE_CREATE'); // file not found
defined('CMP_sessionid')   OR define('CMP_sessionid', 'modular'); // file not found
/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code
/*
|--------------------------------------------------------------------------
| COMPANY INFO Codes
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| COMPANY INFO Codes
|--------------------------------------------------------------------------
*/
defined('CMP_OWNER')        OR define('CMP_OWNER', 'BRIGHTEN'); // no errors
defined('CMP_NAME')          OR define('CMP_NAME', 'VENUS MODULAR'); // generic error
defined('CMP_ADD')         OR define('CMP_ADD', 'KOLAPPAKAM'); // configuration error
defined('CMP_AREA')         OR define('CMP_AREA', 'MANAPAKKAM'); // configuration error
defined('CMP_CITY')   OR define('CMP_CITY', 'CHENNAI'); // file not found
defined('CMP_STATE')   OR define('CMP_STATE', 'TAMILNADU'); // file not found
defined('CMP_PIN')   OR define('CMP_PIN', '600122'); // file not found
defined('CMP_URL')   OR define('CMP_URL', 'pocketfurniture.in'); // file not found
defined('CMP_EMAIL')   OR define('CMP_EMAIL', 'brighton@venuskitchen.com'); // file not found
defined('CMP_CONT')   OR define('CMP_CONT', '9444088579'); // file not found
/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code
/*
|--------------------------------------------------------------------------
| COMPANY INFO Codes
|--------------------------------------------------------------------------
*/
defined('CMP_OWNER')        OR define('CMP_OWNER', 'BRIGHTEN'); // no errors
defined('CMP_NAME')          OR define('CMP_NAME', 'VENUS MODULAR'); // generic error
defined('CMP_ADD')         OR define('CMP_ADD', 'KOLAPPAKAM'); // configuration error
defined('CMP_AREA')         OR define('CMP_AREA', 'MANAPAKKAM'); // configuration error
defined('CMP_CITY')   OR define('CMP_CITY', 'CHENNAI'); // file not found
defined('CMP_STATE')   OR define('CMP_STATE', 'TAMILNADU'); // file not found
defined('CMP_PIN')   OR define('CMP_PIN', '600122'); // file not found
defined('CMP_URL')   OR define('CMP_URL', 'http://pocketfurniture.in'); // file not found
defined('CMP_EMAIL')   OR define('CMP_EMAIL', 'brighton@venuskitchen.com'); // file not found
defined('CMP_CONT')   OR define('CMP_CONT', '9444088579'); // file not found
/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code
