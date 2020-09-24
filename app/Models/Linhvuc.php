<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Linhvuc
 * 
 * @property int $lv_id
 * @property string $lv_ten
 * 
 * @property Collection|Chuyenmon[] $chuyenmons
 *
 * @package App\Models
 */
class Linhvuc extends Model
{
	protected $table = 'linhvuc';
	protected $primaryKey = 'lv_id';
	public $timestamps = false;

	protected $fillable = [
		'lv_ten'
	];

	public function chuyenmons()
	{
		return $this->hasMany(Chuyenmon::class, 'lv_id');
	}
}
