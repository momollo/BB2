<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Recette;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
    *public function test_the_application_returns_a_successful_response(): void
    *{
     *   $response = $this->get('/');
*
 *       $response->assertStatus(302);
  */



public function test_vieu_recette(): void
    {
       // use refreshDatabase;
        $recettes = Recette::factory()->create([

            'title' => 'test-title',
            'body' => 'un bon gateau au chaucolat',

        ]);
        $response = $this->get('/recettes');
        $response->assertStatus(200);
        $response->assertSee('test-title');
       // $response->assertSee('oz');


    }


}
