<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class channelTest extends TestCase
{
    public function channelTest()
    {
        $logger = Log::channel('slack');
        $logger->error("slack error");

        Log::info("Selamat datang");

        self::assertTrue(true);
    }
}