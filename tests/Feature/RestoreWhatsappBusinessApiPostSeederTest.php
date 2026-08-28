<?php

namespace Tests\Feature;

use App\Models\Post;
use Database\Seeders\RestoreWhatsappBusinessApiPostSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use RuntimeException;
use Tests\TestCase;

class RestoreWhatsappBusinessApiPostSeederTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_restores_a_source_grounded_indexable_article(): void
    {
        $this->seed(RestoreWhatsappBusinessApiPostSeeder::class);

        $post = Post::query()->where(
            'slug',
            'whatsapp-business-api-mengubah-chat-jadi-mesin-penjualan'
        )->firstOrFail();

        $this->assertNotNull($post->published_at);
        $this->assertGreaterThanOrEqual(1200, str_word_count(strip_tags($post->content)));
        $this->assertLessThanOrEqual(160, mb_strlen($post->excerpt));
        $this->assertGreaterThanOrEqual(5, substr_count($post->content, 'whatsappbusiness.com'));

        $this->get('/blog/'.$post->slug)
            ->assertOk()
            ->assertSee('WhatsApp API Chat: Integrasi CRM, Bot, dan Agen Manusia')
            ->assertSee('WhatsApp Business Messaging Policy')
            ->assertSee('<link rel="canonical"', false);
    }

    public function test_it_aborts_instead_of_overwriting_an_existing_slug(): void
    {
        $this->seed(RestoreWhatsappBusinessApiPostSeeder::class);

        $this->expectException(RuntimeException::class);
        $this->seed(RestoreWhatsappBusinessApiPostSeeder::class);
    }
}
