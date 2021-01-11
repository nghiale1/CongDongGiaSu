<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Lop
 *
 * @property int $l_id
 * @property string $l_malop
 * @property string $l_ten
 * @property string $l_gioithieu
 * @property int $l_hocphi
 * @property int $l_soluong
 * @property Carbon $l_ngaybatdau
 * @property Carbon $l_ngayketthuc
 * @property int $l_sobuoi
 * @property string $l_diachi
 * @property int $gs_id
 * @property int $cm_id
 * @property int $dtnh_id
 *
 * @property Giasu $giasu
 * @property Collection|Hopdong[] $hopdongs
 * @property Collection|Loptgd[] $loptgds
 * @property Collection|Thumuclop[] $thumuclops
 *
 * @package App\Models
 */
class Lop extends Model
{
    protected $table = 'lop';
    protected $primaryKey = 'l_id';
    public $timestamps = true;

    protected $casts = [
        'l_hocphi' => 'int',
        'l_soluong' => 'int',
        'l_sobuoi' => 'int',
        'gs_id' => 'int',
        'cm_id' => 'int',
        'dtnh_id' => 'int',
    ];

    protected $fillable = [
        'l_malop',
        'l_ten',
        'l_gioithieu',
        'l_hocphi',
        'l_soluong',
        'l_ngaybatdau',
        'l_ngayketthuc',
        'l_sobuoi',
        'l_diachi',
        'gs_id',
        'cm_id',
        'dtnh_id',
        'l_ngaytao',
        'l_ngaycapnhat',
        'l_ngayxoa',
    ];
    protected $dates = ['l_ngayxoa'];
    public function giasu()
    {
        return $this->belongsTo(Giasu::class, 'gs_id');
    }

    public function hopdongs()
    {
        return $this->hasMany(Hopdong::class, 'l_id');
    }
    public function loptgds()
    {
        return $this->hasMany(Loptgd::class, 'l_id');
    }

    public function thumuclops()
    {
        return $this->hasMany(Thumuclop::class, 'l_id');
    }
}
