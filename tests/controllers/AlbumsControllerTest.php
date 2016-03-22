<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AlbumsControllerTest extends TestCase
{
    /** @test */
    public function it_shows_the_form_to_create_a_new_album()   {
        $this->visit('/album/create');
    }

    /** @test */
    public function it_shows_the_albums_page()   {
        $this->visit('/album');
    }
}
