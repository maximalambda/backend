<?php

namespace Tests\Feature;

use App\Models\RealState;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RealStateTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index()
    {
        $response = $this->get('/api/real_state/');

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create()
    {

        $createArray = [
            "name" => "Pedrita",
            "real_state_type" => "department",
            "street" => "ST. Vicent",
            "external_number" => 1,
            "internal_number" => 1,
            "neighborhood" => "Snnt Marcos",
            "city" => "Toronto",
            "country" => "MX",
            "rooms" => 2,
            "bathrooms" => 2,
            "comments" => "Muy bonito"
        ];
        $response = $this->json('POST', '/api/real_state/', $createArray, ['Accept' => 'application/json'])
        ->assertStatus(201)
        ->assertJsonStructure([
            "msg",
            "data" => [
                "name",
                "real_state_type",
                "street",
                "external_number",
                "internal_number",
                "neighborhood",
                "city",
                "country",
                "rooms",
                "bathrooms",
                "comments",
                "updated_at",
                "created_at",
                "id"
            ],
       ]);

    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_show()
    {
        $realState = RealState::first();

        $response = $this->json('GET', '/api/real_state/'.$realState->id, ['Accept' => 'application/json'])
        ->assertStatus(200)
        ->assertJsonStructure([
            "msg",
            "data" => [
                "name",
                "real_state_type",
                "street",
                "external_number",
                "internal_number",
                "neighborhood",
                "city",
                "country",
                "rooms",
                "bathrooms",
                "comments",
                "updated_at",
                "created_at",
                "id"
            ],
       ]);
    }


    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_update()
    {
        $realState = RealState::first();
        $updateArray = [
            "name" => "Pedrita",
            "real_state_type" => "department",
            "street" => "ST. Vicent",
            "external_number" => 1,
            "internal_number" => 1,
            "neighborhood" => "Snnt Marcos",
            "city" => "Toronto",
            "country" => "MX",
            "rooms" => 2,
            "bathrooms" => 2,
            "comments" => "Muy bonito"
        ];
        $response = $this->json('PUT', '/api/real_state/'.$realState->id,$updateArray, ['Accept' => 'application/json'])
        ->assertStatus(200)
        ->assertJsonStructure([
            "msg",
            "data" => [
                "name",
                "real_state_type",
                "street",
                "external_number",
                "internal_number",
                "neighborhood",
                "city",
                "country",
                "rooms",
                "bathrooms",
                "comments",
                "updated_at",
                "created_at",
                "id"
            ],
       ]);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_destroy()
    {
        $realState = RealState::first();

        $response = $this->json('DELETE', '/api/real_state/'.$realState->id, ['Accept' => 'application/json'])
        ->assertStatus(200)
        ->assertJsonStructure([
            "msg",
            "data" => [
                "name",
                "real_state_type",
                "street",
                "external_number",
                "internal_number",
                "neighborhood",
                "city",
                "country",
                "rooms",
                "bathrooms",
                "comments",
                "updated_at",
                "created_at",
                "id"
            ],
       ]);
    }
}
