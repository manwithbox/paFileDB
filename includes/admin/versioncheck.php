<?php

/***************************************************************
* paFileDB 3.6                                                 *
*                                                              *
* Author: PHP Arena <http://www.phparena.net>                  *
* File Version 3.6                                             *
* Copyright ©2005-2007 PHP Arena. All Rights Reserved.         *
*                                                              *
* THIS FILE MAY NOT BE REDISTRIBUTED.                          *
* For more information, please see the PHP Arena license at:   *
* http://www.phparena.net/license.html                         *
***************************************************************/

//The next code had been requesting updates from phparena.net
//It was stabbed because of useless

//$new_version = file('http://www.phparena.net/versioncheck.php?s=pafiledb');
//$new_version = $new_version[0];

$new_version = "3.6";
$smarty->assign('new_version', $new_version);
?>