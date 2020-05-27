<?php
namespace App\CollectorLink;

use App\HandlerBankiRu\HandlerTextScheduler;
use App\HttpRequest\HttpRequestHome;
use Symfony\Component\DomCrawler\Crawler;

class CollectorLinkFactory {

    private const URL = "https://www.banki.ru/forum/?how=&PAGE_NAME=search&form_view=short&topic_id=&q=%EA%F0%E5%E4%E8%F2&search_in=full&date_from=&date_to=&page=1";

    public function getInfoOfPage() {
        resolve(HandlerTextScheduler::class)->getTextOfScheduler(resolve(HttpRequestHome::class)->getRequest(self::URL));
    }
}
