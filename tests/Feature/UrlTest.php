<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Url;

class UrlTest extends TestCase
{
    public function test_shorten_url()
    {
        $response = $this->post('/shorten-url', [
            'original_url' => 'https://averylongurl.com'
        ]);

        $response->assertStatus(200)
                 ->assertJsonStructure(['short_url', 'original_url']);
    }

    public function test_redirect()
    {
        $url = Url::factory()->create([
            'original_url' => 'https://averylongurl.com',
            'short_code' => 'abc1234'
        ]);

        $response = $this->get('/abc1234');

        $response->assertRedirect($url->original_url);
    }
}
