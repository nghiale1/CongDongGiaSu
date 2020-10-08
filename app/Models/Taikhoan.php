<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class Taikhoan
 * 
 * @property int $tk_id
 * @property string $username
 * @property string $password
 * @property string $tk_quyen
 * @property string $remember_token
 * 
 * @property Collection|Giasu[] $giasus
 * @property Collection|Hocvien[] $hocviens
 * @property Collection|Phanhoi[] $phanhois
 *
 * @package App\Models
 */
class Taikhoan extends Authenticatable
{
	protected $table = 'taikhoan';
	protected $primaryKey = 'tk_id';
	public $timestamps = false;

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'username',
		'password',
		'tk_quyen',
		'remember_token'
	];

	public function giasus()
	{
		return $this->hasMany(Giasu::class, 'tk_id');
	}

	public function hocviens()
	{
		return $this->hasMany(Hocvien::class, 'tk_id');
	}

	public function phanhois()
	{
		return $this->hasMany(Phanhoi::class, 'tk_id');
	}
}
