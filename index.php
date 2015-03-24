<?php
error_reporting(-1);
Defined('BASE_DIRECTORY')|| Define('BASE_DIRECTORY', RealPath(DirName(__FILE__) . ''));
Define('SYSTEM_DIRECTORY',BASE_DIRECTORY . '/SYSTEM');
date_default_timezone_set("America/New_York");

Set_Include_Path
(
	RealPath("./") . PATH_SEPARATOR.
	BASE_DIRECTORY . DIRECTORY_SEPARATOR . "Application" . DIRECTORY_SEPARATOR . PATH_SEPARATOR .
	BASE_DIRECTORY . DIRECTORY_SEPARATOR . "Library" . DIRECTORY_SEPARATOR . PATH_SEPARATOR .
	BASE_DIRECTORY . DIRECTORY_SEPARATOR . "Framework" . DIRECTORY_SEPARATOR . PATH_SEPARATOR .
	BASE_DIRECTORY . DIRECTORY_SEPARATOR . "Framework/Library/PEAR/" . PATH_SEPARATOR .
	Get_Include_Path()
);

Require_Once("TheFreeIntellectual.php");
Print TheFreeIntellectual::Initialize();
