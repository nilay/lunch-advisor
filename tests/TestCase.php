<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Artisan;

class TestCase extends BaseTestCase
{
    
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';
 
        //Load .env.testing environment
        $app->loadEnvironmentFrom('.env');
 
        $app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();
 
        return $app;
    }


    public function setUp(): void
    {
        parent::setUp();
        Artisan::call('migrate:refresh --seed');
    }
 
    public function tearDown(): void
    {
        #Artisan::call('migrate:reset');
        parent::tearDown();
    }
}
