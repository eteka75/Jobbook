<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function autoload($class)
{
require '../modeles/class/'. str_replace ( '\\ ', '/', $class ).'.class.php ';
}
if(function_exists("spl_autoload_register"))
{
    spl_autoload_register('autoload');
    $t=new jlogin();
}
return;
//$t->$dirh = opendir($dirname);
if ($dirh) {
    while (($dirElement = readdir($dirh)) !== false) {
        
    }
    closedir($dirh);
}
//require '../modeles/class/jlogin.class.php';

