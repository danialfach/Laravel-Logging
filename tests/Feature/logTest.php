<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class logTest extends TestCase
{
    public function testLog()
    {
        Log::info("Hello Info");
        Log::warning("Hello Warning");
        Log::error("Hello error");
        Log::critical("Hello crtical");
    }
}