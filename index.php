<?php

/**
 * WRITEN BY STEVEN LEO(李书东)
 */

//Debug model switch, Default 'DEBUGM':false;Using Exception Error Method;
define('DEBUGM',true);

//open session or close session.
define('SESSION_SWITCH',flase);

define('BASIC','v1.0');
define('D',DIRECTORY_SEPARATOR);

//mvc path
define('V_PATH',D.'views'.D);
define('M_PATH',D.'models'.D);
define('C_PATH',D.'controllers'.D);

//public path
define('P_PATH',D.'public'.D);
define('ROOT',dirname(__FILE__));
/**
 * see path 'core/' to read more about encapsulation and configs. It includes:
 * 1. db configs;
 * 2. render methods;
 */

include 'nano'.D.'nano.init.php';


