<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Doituongnguoihoc
 * 
 * @property int $dtnh_id
 * @property string $dtnh_ten
 * 
 * @property Collection|Chitietchuyenmon[] $chitietchuyenmons
 *
 * @package App\Models
 */
class Doituongnguoihoc extends Model
{
	protected $table = 'doituongnguoihoc';
	protected $primaryKey = 'dtnh_id';
	public $timestamps = false;

	protected $fillable = [
		'dtnh_ten'
	];

	public function chitietchuyenmons()
	{
		return $this->hasMany(Chitietchuyenmon::class, 'dtnh_id');
	}
}
