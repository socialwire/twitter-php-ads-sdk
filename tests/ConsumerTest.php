<?php

namespace Hborras\TwitterAdsSDK\Tests;

use Hborras\TwitterAdsSDK\Consumer;
use PHPUnit\Framework\TestCase;

class ConsumerTest extends TestCase
{
    public function testToString()
    {
        $key = uniqid('', true);
        $secret = uniqid('', true);
        $consumer = new Consumer($key, $secret);

        $this->assertEquals("Consumer[key=$key,secret=$secret]", $consumer->__toString());
    }
}