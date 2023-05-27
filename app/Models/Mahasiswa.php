<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Mahasiswa
 * 
 * @property int $id
 * @property string $nim
 * @property string $nama_lengkap
 * @property string $kelas
 * @property string $jurusan
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Mahasiswa extends Model
{
	protected $table = 'mahasiswa';

	protected $fillable = [
		'nim',
		'nama_lengkap',
		'kelas',
		'jurusan'
	];
}
