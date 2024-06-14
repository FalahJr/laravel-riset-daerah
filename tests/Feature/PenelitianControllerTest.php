<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\UsulanPenelitian;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;

class PenelitianControllerTest extends TestCase
{
    use DatabaseTransactions, WithFaker;

    public function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create([
            "email" => "user@gmail.com",
            "password" => "user123",
            "nama_lengkap" => "user",
            "nik" => 12431235235,
            "no_telepon" => "087617283123",
            "role" => "Masyarakat",
            "alamat" => "jln user",
            "gambar" => "tes",
            "created_at" => "2024-06-09T04:48:23.000000Z",
            "updated_at" => "2024-06-09T04:48:23.000000Z",
        ]);

        $response = $this->post('/login-action', [
            'email' => 'user@gmail.com',
            'password' => 'user123',
        ]);

        // dd($response);
        $response->assertRedirect('masyarakat/home');

        $this->actingAs($this->user);

        // Memeriksa bahwa user saat ini di-autentikasi sebagai $user
        $this->assertAuthenticatedAs($this->user);
    }

    /** @test */
    public function it_displays_the_index_page()
    {
        $response = $this->get('/masyarakat/penelitian');
        $response->assertStatus(200);
        $response->assertViewHas('data');
    }

    /** @test */
    public function it_creates_a_new_penelitian()
    {
        Storage::fake('local');

        $response = $this->post('/masyarakat/penelitian', [
            'judul_penelitian' => 'Sample Penelitian',
            'tahun' => '2024',
            'no_telepon' => '08123456789',
            'abstrak' => 'Sample abstrak penelitian',
            'is_publish' => "Y",
            'status' => "Sedang Diproses",
            'upload_file' => UploadedFile::fake()->create('sample.pdf', 100)
        ]);

        $response->assertRedirect('/masyarakat/penelitian');
        $this->assertDatabaseHas('usulan_penelitian', ['judul_penelitian' => 'Sample Penelitian']);
    }

    /** @test */
    public function it_displays_the_edit_page()
    {
        $admin = User::factory()->create([
            "email" => "admin@gmail.com",
            "password" => "admin123",

            "role" => "Admin",

        ]);

        $response = $this->post('/login-action', [
            'email' => 'admin@gmail.com',
            'password' => 'admin123',
        ]);

        // dd($response);
        $response->assertRedirect('admin/home');

        $this->actingAs($admin);

        // Memeriksa bahwa user saat ini di-autentikasi sebagai $user
        $this->assertAuthenticatedAs($admin);
        $penelitian = UsulanPenelitian::factory()->create();

        $response = $this->actingAs($admin)->get('/admin/usulan-penelitian/' . $penelitian->id . '/edit');
        $response->assertStatus(200);
        $response->assertViewHas('penelitian', $penelitian);
    }

    /** @test */
    public function it_updates_an_existing_penelitian()
    {
        $admin = User::factory()->create([
            "email" => "admin@gmail.com",
            "password" => "admin123",

            "role" => "Admin",

        ]);

        $response = $this->post('/login-action', [
            'email' => 'admin@gmail.com',
            'password' => 'admin123',
        ]);

        // dd($response);
        $response->assertRedirect('admin/home');

        $this->actingAs($admin);

        // Memeriksa bahwa user saat ini di-autentikasi sebagai $user
        $this->assertAuthenticatedAs($admin);
        $penelitian = UsulanPenelitian::factory()->create();

        $response = $this->actingAs($admin)->put('/admin/usulan-penelitian/' . $penelitian->id, [
            'status' => 'Selesai'
        ]);

        $response->assertRedirect('/admin/usulan-penelitian');
        $this->assertDatabaseHas('usulan_penelitian', ['id' => $penelitian->id, 'status' => 'Selesai']);
    }

    /** @test */
    public function it_deletes_a_penelitian()
    {
        $penelitian = UsulanPenelitian::factory()->create();

        $response = $this->delete('/masyarakat/penelitian/' . $penelitian->id);
        $response->assertRedirect('/masyarakat/penelitian');
        $this->assertDatabaseMissing('usulan_penelitian', ['id' => $penelitian->id]);
    }
}
