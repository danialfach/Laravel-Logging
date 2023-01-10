<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class fileHandlerTest extends TestCase
{
    public function handlerTest()
    {
        $fileLogger = Log::channel('file');
        $fileLogger->info("Hello World");
        $fileLogger->warning("Hello World");
        $fileLogger->error("Hello World");

        self::assertTrue(true);
    }
}