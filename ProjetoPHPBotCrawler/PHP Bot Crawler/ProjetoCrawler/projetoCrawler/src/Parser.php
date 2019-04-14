<?php
/**
 * Created by PhpStorm.
 * User: william-cirino
 * Date: 27/11/18
 * Time: 13:20
 */

namespace Forseti\exemplocrawler\src;



class Parser
{
    private $crawler;

    /**
     * @return mixed
     */
    public function __construct($html)
    {
        $this->crawler = new  Crawler();
        $this->crawler->addHtmlContent($html);
    }


}