<?php

use PHPUnit\Framework\TestCase;
use SerpScraper\Engine\GoogleSearch;

final class GoogleTest extends TestCase
{
    public function testGoogleSearch()
    {
        $google = new GoogleSearch();
        $res = $google->search('google');

        $this->assertGreaterThan(100, count($res->results));
    }
}
