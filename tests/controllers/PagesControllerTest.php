<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PagesControllerTest extends TestCase
{
    /** @test */
    public function it_shows_the_gallery()   {
        $this->visit('/')
             ->click('gallery')
             ->seePageIs('album');
    }
}
