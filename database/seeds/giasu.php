<?php

use Illuminate\Database\Seeder;

class giasu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('taikhoan')->insert([
            [
                'tk_id'=>1,
                'username'=>'giasu1',
                'password'=>\Hash::make('giasu'),
                'tk_quyen'=>'GiaSu'
            ],
            [
                'tk_id'=>2,
                'username'=>'giasu2',
                'password'=>\Hash::make('giasu'),
                'tk_quyen'=>'GiaSu'
            ],
            [
                'tk_id'=>3,
                'username'=>'giasu3',
                'password'=>\Hash::make('giasu'),
                'tk_quyen'=>'GiaSu'
            ],
            [
                'tk_id'=>4,
                'username'=>'giasu4',
                'password'=>\Hash::make('giasu'),
                'tk_quyen'=>'GiaSu'
            ],
            [
                'tk_id'=>5,
                'username'=>'giasu5',
                'password'=>\Hash::make('giasu'),
                'tk_quyen'=>'GiaSu'
            ],
        ]);
        \DB::table('giasu')->insert([
            [
                'gs_id'=>1,
                'gs_hinhdaidien'=>'client/svg/teacher_male.svg',
                'gs_videogioithieu'=>null,
                'gs_motangan'=>null,
                'gs_gioithieu'=>null,
                'gs_hoten'=>'Lê Minh Nghĩa 1',
                'gs_gioitinh'=>'Nam',
                'gs_namsinh'=>null,
                'gs_sdt'=>null,
                'gs_diachi'=>null,
                'gs_mucluong'=>null,
                'gs_giongnoi'=>null,
                'gs_vitri'=>null,
                'tk_id'=>1
            ],
            [
                'gs_id'=>2,
                'gs_hinhdaidien'=>'client/svg/teacher_male.svg',
                'gs_videogioithieu'=>null,
                'gs_motangan'=>null,
                'gs_gioithieu'=>null,
                'gs_hoten'=>'Lê Minh Nghĩa 2',
                'gs_gioitinh'=>'Nam',
                'gs_namsinh'=>null,
                'gs_sdt'=>null,
                'gs_diachi'=>null,
                'gs_mucluong'=>null,
                'gs_giongnoi'=>null,
                'gs_vitri'=>null,
                'tk_id'=>2
            ],
            [
                'gs_id'=>3,
                'gs_hinhdaidien'=>'client/svg/teacher_male.svg',
                'gs_videogioithieu'=>null,
                'gs_motangan'=>null,
                'gs_gioithieu'=>null,
                'gs_hoten'=>'Lê Minh Nghĩa 3',
                'gs_gioitinh'=>'Nam',
                'gs_namsinh'=>null,
                'gs_sdt'=>null,
                'gs_diachi'=>null,
                'gs_mucluong'=>null,
                'gs_giongnoi'=>null,
                'gs_vitri'=>null,
                'tk_id'=>3
            ],
            [
                'gs_id'=>4,
                'gs_hinhdaidien'=>'client/svg/teacher_female.svg',
                'gs_videogioithieu'=>null,
                'gs_motangan'=>null,
                'gs_gioithieu'=>null,
                'gs_hoten'=>'Lê Thị Ngọc Liên 1',
                'gs_gioitinh'=>'Nữ',
                'gs_namsinh'=>null,
                'gs_sdt'=>null,
                'gs_diachi'=>null,
                'gs_mucluong'=>null,
                'gs_giongnoi'=>null,
                'gs_vitri'=>null,
                'tk_id'=>4
            ],
            [
                'gs_id'=>5,
                'gs_hinhdaidien'=>'client/svg/teacher_female.svg',
                'gs_videogioithieu'=>null,
                'gs_motangan'=>null,
                'gs_gioithieu'=>null,
                'gs_hoten'=>'Lê Thị Ngọc Liên 2',
                'gs_gioitinh'=>'Nữ',
                'gs_namsinh'=>null,
                'gs_sdt'=>null,
                'gs_diachi'=>null,
                'gs_mucluong'=>null,
                'gs_giongnoi'=>null,
                'gs_vitri'=>null,
                'tk_id'=>5
            ],
        ]);
        for($i=0;$i< 5;$i++){
            for($j=0;$j< 21;$j++){

                \DB::table('chitietlichday')->insert([
                    'gs_id'=>$i+1,
                    'tgd_id'=>$j+1,
                    'ctld_trangthai'=>'Ranh',
                ]);
            }
        }
    }
}
