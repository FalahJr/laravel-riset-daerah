<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $judul_penelitian
 * @property string $identifikasi_masalah
 * @property string $tujuan
 * @property string $file
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class UsulanPenelitian extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'usulan_penelitian';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'judul_penelitian', 'identifikasi_masalah', 'tujuan', 'file', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}