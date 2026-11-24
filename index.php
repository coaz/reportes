<?php
/*
 * File:        index.php
 *
 * Top level index file resets to admin login page
 *
 * @link http://www.reportico.org/
 * @copyright 2010-2014 Peter Deed
 * @author Peter Deed <info@reportico.org>
 * @package Reportico
 * @version $Id: index.php,v 1.8 2014/05/17 15:12:31 peter Exp $
 */

// Include the Reportico library
require __DIR__.'/start.php';

date_default_timezone_set('America/Guatemala');


$script_tz = date_default_timezone_get();



echo $script_tz;
echo  ini_get('date.timezone');

if (strcmp($script_tz, ini_get('date.timezone'))){
    echo 'La zona horaria del script difiere de la zona horaria de la configuracion ini.';
} else {
    echo 'La zona horaria del script y la zona horaria de la configuración ini coinciden.';
}


?>
