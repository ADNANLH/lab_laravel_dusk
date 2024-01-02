<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TestAddTask extends DuskTestCase
{
    /**
     * @group add-task
     */
    public function testAddTask()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Ajouter tâche')
                    ->select('project_id', '2')
                    ->type('name', 'planification' )
                    ->type('description', 'faire une planification')
                    ->press('Ajouter')
                    ->assertPathIs('/');
        });
    }

}
