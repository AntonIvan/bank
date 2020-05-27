<?php

namespace App\HandlerBankiRu;

use Symfony\Component\DomCrawler\Crawler;


class HandlerTextScheduler
{

    public function getTextOfScheduler($html) {
        $crawler = new Crawler();
        $crawler->addHtmlContent($html);
        foreach ($crawler->filter("body .forum-block-container.margin-bottom-large .forum-post-text") as $item) {
            return $item->textContent;
        }
    }
}
