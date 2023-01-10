<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class contextTest extends TestCase
{
    public function testContext()
    {
        Log::info("Orang Ganteng", ["user" => "dani"]);

        self::assertTrue(true);
    }

    public function testWithContext()
    {
        Log::withContext(["user" => "dany"]);

        Log::info("Ini Orang Ganteng");
        Log::warning("Perhatikam!!!");

        self::assertTrue(true);
    }
}