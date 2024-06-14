<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Database\Factories\UserFactory; // Import factory
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginControllerTest extends TestCase
{
    use DatabaseTransactions, WithFaker;

    public function setUp(): void
    {
        parent::setUp();
        // Set up initial state here if needed
    }

    /** @test */
    public function it_shows_login_page()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
        $response->assertViewIs('pages.login');
    }

    /** @test */
    public function it_fails_login_with_invalid_data()
    {
        $response = $this->post('/login-action', [
            'email' => 'invalid-email',
            'password' => '',
        ]);

        $response->assertRedirect('/login');
        $response->assertSessionHas('failed', 'Lengkapi isian form');
    }

    /** @test */
    public function it_fails_login_with_wrong_credentials()
    {
        User::factory()->create([
            'email' => 'user@example.com',
            'password' => 'correct-password',
        ]);

        $response = $this->post('/login-action', [
            'email' => 'user@example.com',
            'password' => 'wrong-password',
        ]);

        $response->assertRedirect('/login');
        $response->assertSessionHas('failed', 'Data User Tidak Ditemukan');
    }

    /** @test */
    public function it_logs_in_admin_user_successfully()
    {
        $user = User::factory()->create([
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
        // dd($user);

        // Mengirimkan permintaan HTTP POST untuk login
        $response = $this->post('/login-action', [
            'email' => 'admin@gmail.com',
            'password' => 'admin123',
        ]);

        // Memeriksa bahwa respons mengarahkan ke halaman admin/home
        $response->assertRedirect('admin/home');

        // Menggunakan actingAs untuk mengautentikasi user
        $this->actingAs($user);

        // Memeriksa bahwa user saat ini di-autentikasi sebagai $user
        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function it_logs_in_masyarakat_user_successfully()
    {
        $password = 'user123';
        $user = User::factory()->create([
            'email' => 'user@gmail.com',
            'password' => $password,
            'role' => 'Masyarakat',
        ]);

        $response = $this->post('/login-action', [
            'email' => 'user@gmail.com',
            'password' => $password,
        ]);

        // Memeriksa bahwa respons mengarahkan ke halaman admin/home
        $response->assertRedirect('masyarakat/home');

        // Menggunakan actingAs untuk mengautentikasi user
        $this->actingAs($user);

        // Memeriksa bahwa user saat ini di-autentikasi sebagai $user
        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function it_logs_in_pemerintah_daerah_user_successfully()
    {
        $password = 'pemda123';
        $user = User::factory()->create([
            'email' => 'pemda@gmail.com',
            'password' => $password,
            'role' => 'Pemerintah Daerah',
        ]);

        $response = $this->post('/login-action', [
            'email' => 'pemda@gmail.com',
            'password' => $password,
        ]);

        $response->assertRedirect('pemerintah-daerah/home');
        $this->actingAs($user);

        // Memeriksa bahwa user saat ini di-autentikasi sebagai $user
        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function it_logs_out_successfully()
    {
        $user = User::factory()->create([
            'email' => 'user@gmail.com',
            'password' => 'user123',
        ]);

        $this->actingAs($user);

        $response = $this->get('/logout-action');

        $response->assertRedirect('/login');
        $this->assertGuest();
    }
}
