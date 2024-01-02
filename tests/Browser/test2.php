<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class test2 extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function test2(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel')
                    ->clickLink('Ajouter tâche')
                    ->select('2', 'project_id')
                    ->type('planification', 'name')
                    ->type('faire une planification', 'description')
                    ->press('Ajouter')
                    ->assertPathIs('/');
        });
    }
}
