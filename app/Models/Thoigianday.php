<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Thoigianday
 * 
 * @property int $tgd_id
 * @property string $tgd_ten
 * @property string $tgd_ghichu
 * 
 * @property Collection|Chitietlichday[] $chitietlichdays
 * @property Collection|Loptgd[] $loptgds
 *
 * @package App\Models
 */
class Thoigianday extends Model
{
	protected $table = 'thoigianday';
	protected $primaryKey = 'tgd_id';
	public $timestamps = false;

	protected $fillable = [
		'tgd_ten',
		'tgd_ghichu'
	];

	public function chitietlichdays()
	{
		return $this->hasMany(Chitietlichday::class, 'tgd_id');
	}

	public function loptgds()
	{
		return $this->hasMany(Loptgd::class, 'tgd_id');
	}
}
