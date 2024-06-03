<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $no_dokumen
 * @property string $judul
 * @property string $nama
 * @property string $file
 * @property string $created_at
 * @property string $updated_at
 */
class Riset extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'riset';

    /**
     * @var array
     */
    protected $fillable = ['no_dokumen', 'judul', 'nama', 'file', 'created_at', 'updated_at'];
}
