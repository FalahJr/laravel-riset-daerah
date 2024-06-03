<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $email
 * @property string $password
 * @property string $nama_lengkap
 * @property integer $nik
 * @property string $no_telepon
 * @property string $role
 * @property string $alamat
 * @property string $gambar
 * @property string $created_at
 * @property string $updated_at
 */
class User extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'user';

    /**
     * @var array
     */
    protected $fillable = ['email', 'password', 'nama_lengkap', 'nik', 'no_telepon', 'role', 'alamat', 'gambar', 'created_at', 'updated_at'];
}
