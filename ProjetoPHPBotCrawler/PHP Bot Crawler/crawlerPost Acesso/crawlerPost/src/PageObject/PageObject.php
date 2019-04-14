<?php
/**
 * Created by PhpStorm.
 * User: joao-silva
 * Date: 07/12/18
 * Time: 11:40
 */

namespace Forseti\crawlerPost\src\PageObject;

use Forseti\crawlerPost\src\Parser\Parser;
use GuzzleHttp\Client;

class PageObject
{
    private $http;
    
    public function __construct(Client $client)
    {
        $this->http = $client;
        
    }


    public function getHtml()
    {
        $response = $this->http->get('http://testphp.vulnweb.com/login.php');

        return $response->getBody()->getContents();

    }

    public function postLogin($login, $senha)
    {
        $this->createUser($login, $senha);

        $response =  $this->http->request('POST','http://php.thedemosite.co.uk/login.php',[
            'form_params' => [
                'username' => $login,
                'password' => $senha
            ]
        ]);

        return new Parser($response->getBody()->getContents());
    }

    private function createUser($login, $senha)
    {
        $response =  $this->http->request('POST','http://php.thedemosite.co.uk/savedata.php',[
            'form_params' => [
                'username' => $login,
                'password' => $senha
            ]
        ]);

        return new Parser($response->getBody()->getContents());
    }
}