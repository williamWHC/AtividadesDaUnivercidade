<?php
/**
 * Created by PhpStorm.
 * User: william-cirino
 * Date: 23/11/18
 * Time: 13:00
 */

namespace Forseti\exemplocrawler\src;

use GuzzleHttp\Client;

class PageObject //classe que busca a pagina
{
    private $cliente;

        public function __construct()
        {
            $this->cliente = new Client();
        }
        public function getPagina()
        {
            $response = $this->cliente->get("http://uol.com.br");

            return $response->getBody()->getContents();
        }
}