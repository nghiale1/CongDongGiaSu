<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Danhgiag
 * 
 * @property int $dggs_id
 * @property int $hd_id
 * @property int $dggs_sodiem
 * @property string $dggs_noidung
 * 
 * @property Hopdong $hopdong
 *
 * @package App\Models
 */
class Danhgiag extends Model
{
	protected $table = 'danhgiags';
	protected $primaryKey = 'dggs_id';
	public $timestamps = false;

	protected $casts = [
		'hd_id' => 'int',
		'dggs_sodiem' => 'int'
	];

	protected $fillable = [
		'hd_id',
		'dggs_sodiem',
		'dggs_noidung'
	];

	public function hopdong()
	{
		return $this->belongsTo(Hopdong::class, 'hd_id');
	}
}
