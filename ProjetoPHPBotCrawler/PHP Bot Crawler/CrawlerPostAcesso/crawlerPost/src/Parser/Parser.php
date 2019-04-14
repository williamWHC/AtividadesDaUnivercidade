<?php
/**
 * Created by PhpStorm.
 * User: joao-silva
 * Date: 07/12/18
 * Time: 12:57
 */


namespace Forseti\crawlerPost\src\Parser;

use Symfony\Component\DomCrawler\Crawler;

class Parser
{

    private $crawler;

    public function __construct($html)
    {
        $this->crawler = new Crawler();
        $this->crawler->addHtmlContent($html);
    }

    public function getHtml()
    {
        return $this->crawler->html();
    }

}