<?php
/**
 * Created by PhpStorm.
 * User: joao-silva
 * Date: 07/12/18
 * Time: 11:45
 */

require_once "vendor/autoload.php";

use Forseti\crawlerPost\src\PageObject\PageObject;
use GuzzleHttp\Client;


$pageObject = new PageObject(new Client());

$parser = $pageObject->postLogin('abc', 'test');

var_dump($parser->getHtml());



