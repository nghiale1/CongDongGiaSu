<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Phanhoi
 * 
 * @property int $ph_id
 * @property int $tk_id
 * @property string $ph_trangthai
 * @property string $ph_noidung
 * @property Carbon $ph_ngaygui
 * 
 * @property Taikhoan $taikhoan
 *
 * @package App\Models
 */
class Phanhoi extends Model
{
	protected $table = 'phanhoi';
	protected $primaryKey = 'ph_id';
	public $timestamps = false;

	protected $casts = [
		'tk_id' => 'int'
	];

	protected $dates = [
		'ph_ngaygui'
	];

	protected $fillable = [
		'tk_id',
		'ph_trangthai',
		'ph_noidung',
		'ph_ngaygui'
	];

	public function taikhoan()
	{
		return $this->belongsTo(Taikhoan::class, 'tk_id');
	}
}
