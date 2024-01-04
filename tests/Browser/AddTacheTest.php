<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddTacheTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @test
     */
    public function testAddTache(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('Ajouter tâche')
                ->select('project_id', '2')
                ->type('name', 'planification') 
                // ->assertSee('Nom')
                ->type('description', 'description de planification') 
                ->press('Ajouter');   
                // ->seePageIs('/'); 
        });
    }
    public function testAddTacheDB(): void
    {
        $this->assertDatabaseHas('tasks', [
            'name' => 'planification',
            'description' => 'description de planification',
            'project_id' => '2',
        ]);
    }
}
