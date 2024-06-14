<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\TopikRiset;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class TopikRisetControllerTest extends TestCase
{
    use DatabaseTransactions, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();
        // Buat user dan login untuk setiap test
        $this->user = User::factory()->create([
            'email' => 'admin@gmail.com',
            'password' => 'admin123', // Password tidak di-hash
            'role' => 'Admin',
            "nama_lengkap" => "admin",
            "nik" => 898791231223,
            "no_telepon" => "08123456789",
            "role" => "Admin",
            "alamat" => "aadmin jalan",
            "created_at" => "2024-06-03 21:40:46",
            "updated_at" => "2024-06-03 21:40:46",
        ]);

        $response = $this->post('/login-action', [
            'email' => 'admin@gmail.com',
            'password' => 'admin123',
        ]);
        $response->assertRedirect('admin/home');

        $this->actingAs($this->user);

        // Memeriksa bahwa user saat ini di-autentikasi sebagai $user
        $this->assertAuthenticatedAs($this->user);
        // $this->actingAs($this->user);
        // Session::put('user', $this->user->toArray()); // Set session user

    }

    /** @test */
    public function it_shows_topik_riset_index_page()
    {
        $response = $this->actingAs($this->user)->get('/admin/topik-riset');
        $response->assertStatus(200);
        $response->assertViewIs('pages.manage-topik-riset');
    }

    /** @test */
    public function it_creates_a_new_topik_riset()
    {
        Storage::fake('local');

        $response = $this->actingAs($this->user)->post('/admin/topik-riset', [
            'isu_permasalahan' => 'Isu Permasalahan Test',
            'permasalahan' => 'Permasalahan Test',
            'pertanyaan_riset' => 'Pertanyaan Riset Test',
            'keterangan' => 'Keterangan Test',
            'file' => UploadedFile::fake()->create('test.pdf', 100)
        ]);

        $response->assertRedirect('/admin/topik-riset');
        $this->assertDatabaseHas('topik_riset', ['isu_permasalahan' => 'Isu Permasalahan Test']);
    }

    /** @test */
    public function it_edits_an_existing_topik_riset()
    {
        $topikRiset = TopikRiset::factory()->create();

        $response = $this->get('/admin/topik-riset/' . $topikRiset->id . '/edit');
        $response->assertStatus(200);
        $response->assertViewIs('pages.edit-topik-riset');
    }

    /** @test */
    public function it_updates_an_existing_topik_riset()
    {
        Storage::fake('local');

        $topikRiset = TopikRiset::factory()->create();

        $response = $this->post('/admin/topik-riset/' . $topikRiset->id, [
            '_method' => 'PUT',
            'isu_permasalahan' => 'Updated Isu Permasalahan',
            'permasalahan' => 'Updated Permasalahan',
            'pertanyaan_riset' => 'Updated Pertanyaan Riset',
            'keterangan' => 'Updated Keterangan',
            'file' => UploadedFile::fake()->create('updated.pdf', 100)
        ]);

        $response->assertRedirect('/admin/topik-riset');
        $this->assertDatabaseHas('topik_riset', ['isu_permasalahan' => 'Updated Isu Permasalahan']);
    }

    /** @test */
    public function it_deletes_a_topik_riset()
    {
        $topikRiset = TopikRiset::factory()->create();

        $response = $this->delete('/admin/topik-riset/' . $topikRiset->id);
        $response->assertRedirect('/admin/topik-riset');
        $this->assertDatabaseMissing('riset', ['id' => $topikRiset->id]);
    }
}
