<?php

namespace Tests\Feature;

use App\Models\Lessons;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LessonsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_response_of_lessons()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_that_true_is_true()
    {
        $this->assertTrue(true);
    }

    public function test_is_there_data_in_the_lessons_table()
    {
        $lesson = new Lessons(['student_id'=>'1']);
        $this->assertEquals('1', $lesson->student_id);
    }

    public function test_is_there_a_lessons_page_that_response()
    {
        $response = $this->get('/lessons');
        $response->assertStatus(200);
    }
}
