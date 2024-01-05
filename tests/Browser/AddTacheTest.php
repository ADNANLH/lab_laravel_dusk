<?php

namespace Tests\Browser;

use App\Models\Task;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AddTacheTest extends DuskTestCase
{
    /**
     * @group add-tach
     */
    private $addedTaskId;

    public function testAddTache(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('Ajouter tâche')
                ->select('project_id', '2')
                ->type('name', 'planification') 
                ->type('description', 'faire une planification') 
                ->press('Ajouter');
        });
    }

    public function testAddTacheDb(): void
    {
        
        $latestTask = Task::latest()->first();
        $this->addedTaskId = $latestTask->id;

        $this->assertDatabaseHas('tasks', [
            'id' => $this->addedTaskId,
            'name' => 'planification',
            'description' => 'faire une planification',
            'project_id' => '2',
        ]);
    }
}
