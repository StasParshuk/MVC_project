<?php
const MAINDIR = __DIR__ . "/..";
const APPDIR = MAINDIR . '/app';
const CONTROLLERDIR = APPDIR . '/controller';
const MODELDIR = APPDIR . '/model';
const WIEVDIR = APPDIR . '/view';
const COREDIR = MAINDIR . '/core';
const CONFIGDIR = MAINDIR . '/config';
const ROUTDIR = MAINDIR . '/routers';
const LAYOUTDIR = WIEVDIR . '/layout';



//FILES
const HEADERDIRFILE = LAYOUTDIR . '/header.php';
const FOOTERDIRFILE = LAYOUTDIR . '/footer.php';


//site url
define("SERVERPORT", (!empty($_SERVER["SERVER_PORT"]) ? ":" . $_SERVER['SERVER_PORT'] : "")) ;
define("SITEURL" ,$_SERVER["REQUEST_SCHEME"] . "://" .$_SERVER["SERVER_NAME"] . SERVERPORT );
define("ASSETSURL" ,SITEURL . '/assets');



