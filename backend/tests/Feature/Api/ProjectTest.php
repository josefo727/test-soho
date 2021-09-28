<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Project;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $user = User::factory()->create(['email' => 'admin@admin.com']);

        Sanctum::actingAs($user, [], 'web');

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_gets_projects_list()
    {
        $projects = Project::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.projects.index'));

        $response->assertOk()->assertSee($projects[0]->title);
    }
}
