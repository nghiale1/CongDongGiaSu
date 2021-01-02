<?php

use Illuminate\Database\Seeder;

class hocvien extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('taikhoan')->insert([
            // [
            //     'tk_id'=>6,
            //     'username'=>'hocvien1',
            //     'password'=>\Hash::make('hocvien'),
            //     'tk_quyen'=>'HocVien'
            // ],
            // [
            //     'tk_id'=>7,
            //     'username'=>'hocvien2',
            //     'password'=>\Hash::make('hocvien'),
            //     'tk_quyen'=>'HocVien'
            // ],
            // [
            //     'tk_id'=>8,
            //     'username'=>'hocvien3',
            //     'password'=>\Hash::make('hocvien'),
            //     'tk_quyen'=>'HocVien'
            // ],
            // [
            //     'tk_id'=>9,
            //     'username'=>'hocvien4',
            //     'password'=>\Hash::make('hocvien'),
            //     'tk_quyen'=>'HocVien'
            // ],
            [
                'tk_id' => 20,
                'username' => 'admin',
                'password' => \Hash::make('admin'),
                'tk_quyen' => 'Admin',
            ],
        ]);
        // \DB::table('hocvien')->insert([
        //     [
        //         'hv_hinhdaidien'=>'client/svg/student_female.svg',
        //         'hv_hoten'=>'hocvien1',
        //         'hv_gioitinh'=>'Nữ',
        //         'hv_trinhdo'=>null,
        //         'hv_hocluc'=>null,
        //         'hv_tentruong'=>null,
        //         'tk_id'=>6
        //     ],
        //     [
        //         'hv_hinhdaidien'=>'client/svg/student_female.svg',
        //         'hv_hoten'=>'hocvien2',
        //         'hv_gioitinh'=>'Nữ',
        //         'hv_trinhdo'=>null,
        //         'hv_hocluc'=>null,
        //         'hv_tentruong'=>null,
        //         'tk_id'=>7
        //     ],
        //     [
        //         'hv_hinhdaidien'=>'client/svg/student_female.svg',
        //         'hv_hoten'=>'hocvien3',
        //         'hv_gioitinh'=>'Nữ',
        //         'hv_trinhdo'=>null,
        //         'hv_hocluc'=>null,
        //         'hv_tentruong'=>null,
        //         'tk_id'=>8
        //     ],
        //     [
        //         'hv_hinhdaidien'=>'client/svg/student_male.svg',
        //         'hv_hoten'=>'hocvien4',
        //         'hv_gioitinh'=>'Nam',
        //         'hv_trinhdo'=>null,
        //         'hv_hocluc'=>null,
        //         'hv_tentruong'=>null,
        //         'tk_id'=>9
        //     ],
        //     [
        //         'hv_hinhdaidien'=>'client/svg/student_male.svg',
        //         'hv_hoten'=>'hocvien5',
        //         'hv_gioitinh'=>'Nam',
        //         'hv_trinhdo'=>null,
        //         'hv_hocluc'=>null,
        //         'hv_tentruong'=>null,
        //         'tk_id'=>10
        //     ],
        // ]);
    }
}
