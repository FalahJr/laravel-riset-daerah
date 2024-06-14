<?php

namespace Tests\Feature;

use App\Models\Riset;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class RisetControllerTest extends TestCase
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
            "gambar" => "",
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
    public function it_shows_riset_index_page()
    {
        $response = $this->actingAs($this->user)->get('/admin/riset');
        $response->assertStatus(200);
        $response->assertViewIs('pages.manage-riset');
    }

    /** @test */
    public function it_creates_a_new_riset()
    {
        Storage::fake('local');

        $response = $this->post('/admin/riset', [
            'judul' => 'Sample Riset',
            'tahun' => '2024',
            'no_telepon' => '08123456789',
            'abstrak' => 'Sample abstrak riset',
            'is_publish' => 'N',
            'upload_file' => UploadedFile::fake()->create('sample.pdf', 100)
        ]);

        $response->assertRedirect('/admin/riset');
        $this->assertDatabaseHas('riset', ['judul' => 'Sample Riset']);
    }

    /** @test */
    public function it_edits_an_existing_riset()
    {
        $riset = Riset::factory()->create();

        $response = $this->get('/admin/riset/' . $riset->id . '/edit');
        $response->assertStatus(200);
        $response->assertViewIs('pages.edit-riset');
        $response->assertViewHas('riset', $riset);
    }

    /** @test */
    public function it_updates_an_existing_riset()
    {
        Storage::fake('local');

        $riset = Riset::factory()->create();
        // $user = User::factory()->create([
        //     'email' => 'admin@gmail.com',
        //     'password' => 'admin123', // Password tidak di-hash
        //     'role' => 'Admin',
        //     "nama_lengkap" => "admin",
        //     "nik" => 898791231223,
        //     "no_telepon" => "08123456789",
        //     "role" => "Admin",
        //     "alamat" => "aadmin jalan",
        //     "gambar" => "",
        //     "created_at" => "2024-06-03 21:40:46",
        //     "updated_at" => "2024-06-03 21:40:46",
        // ]);

        // $response = $this->post('/login-action', [
        //     'email' => 'admin@gmail.com',
        //     'password' => 'admin123',
        // ]);
        // $response->assertRedirect('admin/home');

        // $this->actingAs($user);

        // // Memeriksa bahwa user saat ini di-autentikasi sebagai $user
        // $this->assertAuthenticatedAs($user);
        // dd($riset);
        $response = $this->actingAs($this->user)->put('/admin/riset/' . $riset->id, [
            'judul' => 'Updated Riset',
            'tahun' => '2025',
            'no_telepon' => '081234567802',
            'abstrak' => 'Updated abstrak riset',
            'is_publish' => 'Y',
            'upload_file' => UploadedFile::fake()->create('update.pdf', 100)
        ]);

        $response->assertRedirect('/admin/riset');
        $this->assertDatabaseHas('riset', ['judul' => 'Updated Riset']);
    }

    /** @test */
    public function it_deletes_a_riset()
    {
        $riset = Riset::factory()->create();

        $response = $this->actingAs($this->user)->delete('/admin/riset/' . $riset->id);
        $response->assertRedirect('/admin/riset');
        $this->assertDatabaseMissing('riset', ['id' => $riset->id]);
    }
}
