<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $isu_permasalahan
 * @property string $permasalahan
 * @property string $pertanyaan_riset
 * @property string $keterangan
 * @property string $no_dokumen
 * @property string $judul
 * @property string $nama
 * @property string $file
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
    protected $fillable = ['isu_permasalahan', 'permasalahan', 'pertanyaan_riset', 'keterangan', 'no_dokumen', 'judul', 'nama', 'file', 'created_at', 'updated_at'];
}
