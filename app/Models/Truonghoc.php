<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Truonghoc
 * 
 * @property int $th_id
 * @property int $gs_id
 * @property string $th_ten
 * @property string $th_chucdanh
 * 
 * @property Giasu $giasu
 *
 * @package App\Models
 */
class Truonghoc extends Model
{
	protected $table = 'truonghoc';
	protected $primaryKey = 'th_id';
	public $timestamps = false;

	protected $casts = [
		'gs_id' => 'int'
	];

	protected $fillable = [
		'gs_id',
		'th_ten',
		'th_chucdanh'
	];

	public function giasu()
	{
		return $this->belongsTo(Giasu::class, 'gs_id');
	}
}
