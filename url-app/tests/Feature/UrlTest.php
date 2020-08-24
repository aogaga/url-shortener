<?php

namespace Tests\Feature;

use App\Domain\Model\Url;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UrlTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');
        $response->assertOk();
        $response->assertStatus(200);
    }

    public function testCreateUrlTest(){
        $this->withExceptionHandling();
        $response = $this->post('/api/', [
            'url'=> 'http://google.com',
            'email'=>'aogaga@cmail.com'
        ]);
        $response->assertStatus(200);
       $response->assertOk();
       $this->assertCount(1, Url::all());

    }



}
