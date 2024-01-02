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
    public function addTask()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Ajouter tâche')
                    ->select('2', 'project_id')
                    ->type('planification', 'name')
                    ->type('faire une planification', 'description')
                    ->press('Ajouter')
                    ->assertPathIs('/');
        });
    }
    
}
