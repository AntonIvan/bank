<?php
namespace App\HttpRequest;

use GuzzleHttp\Client;

class HttpRequestHome {

    private $client;

    public function __construct()
    {
        $this->client = new Client();

    }

    public function getRequest(string $url) {
        return $this->freshCharset($this->client->request('GET', $url)->getBody()->getContents());
    }

    private function freshCharset($result) {
        return iconv("windows-1251","utf-8", $result);
    }
}
