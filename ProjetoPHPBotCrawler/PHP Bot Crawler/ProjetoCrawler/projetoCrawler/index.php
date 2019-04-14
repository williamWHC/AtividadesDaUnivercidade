<?php
/**
 * Created by PhpStorm.
 * User: william-cirino
 * Date: 23/11/18
 * Time: 13:15
 */

require_once "vendor/autoload.php";

use Forseti\exemplocrawler\src\PageObject;

$pageObject = new PageObject();

var_dump($pageObject->getPagina());