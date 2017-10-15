<?php

namespace Tests\Feature;

use App\Thread;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ThreadsTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @var Thread
     */
    private $thread;

    public function setUp()
    {
        parent::setUp();
        $this->thread = factory('App\Thread')->create();
    }

    /** @test */
    function a_user_can_view_all_threads()
    {
         $this->get('/threads')
             ->assertSee($this->thread->title);
    }

    /** @test */
    function a_user_can_read_a_single_thread() {
        $this->get($this->thread->path())
            ->assertSee($this->thread->title);
    }
}
