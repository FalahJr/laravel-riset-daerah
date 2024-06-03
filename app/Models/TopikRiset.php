<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $judul
 * @property string $tahun
 * @property integer $no_telepon
 * @property string $abstrak
 * @property string $upload_file
 * @property string $is_publish
 * @property string $created_at
 * @property string $updated_at
 */
class TopikRiset extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'topik_riset';

    /**
     * @var array
     */
    protected $fillable = ['judul', 'tahun', 'no_telepon', 'abstrak', 'upload_file', 'is_publish', 'created_at', 'updated_at'];
}
