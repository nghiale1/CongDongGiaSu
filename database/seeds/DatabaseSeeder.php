<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('linhvuc')->insert([
            ['lv_id'=>1,'lv_ten'=>'Tiếng Anh'],
            ['lv_id'=>2,'lv_ten'=>'Tiếng Pháp'],
            ['lv_id'=>3,'lv_ten'=>'Tiếng Nhật'],
            ['lv_id'=>4,'lv_ten'=>'Nhạc'],
            ['lv_id'=>5,'lv_ten'=>'TOEIC'],
            ['lv_id'=>6,'lv_ten'=>'TOEFL'],
            ['lv_id'=>7,'lv_ten'=>'IELTS'],
            ['lv_id'=>8,'lv_ten'=>'Lập trình'],
        ]);
        \DB::table('chuyenmon')->insert([
           
             [
                'lv_id'=>null,
                'cm_ten'=>'A1',
                'lv_id'=>1
            ],
            [
                'lv_id'=>1,
                'cm_ten'=>'A2'
            ],
            [
                'lv_id'=>1,
                'cm_ten'=>'B1'
            ],
            [
                'lv_id'=>1,
                'cm_ten'=>'B2'
            ],
            [
                'lv_id'=>1,
                'cm_ten'=>'C1'
            ],
            [
                'lv_id'=>1,
                'cm_ten'=>'C2'
            ],
            [
                'lv_id'=>3,
                'cm_ten'=>'N1',
            ],
            [
                'lv_id'=>3,
                'cm_ten'=>'N2',
            ],
            [
                'lv_id'=>3,
                'cm_ten'=>'N3',
            ],
            [
                'lv_id'=>3,
                'cm_ten'=>'N4',
            ],
            [
                'lv_id'=>3,
                'cm_ten'=>'N5',
            ],
            [
                'lv_id'=>5,
                'cm_ten'=>'TOEIC 200-450',
            ],
            [
                'lv_id'=>5,
                'cm_ten'=>'TOEIC 450-600',
            ],
            [
                'lv_id'=>5,
                'cm_ten'=>'TOEIC 600-750',
            ],
            [
                'lv_id'=>5,
                'cm_ten'=>'TOEIC 750-990',
            ],
            [
                'lv_id'=>7,
                'cm_ten'=>'5.5',
            ],
            [
                'lv_id'=>7,
                'cm_ten'=>'6.0',
            ],
            [
                'lv_id'=>7,
                'cm_ten'=>'6.5',
            ],
            [
                'lv_id'=>7,
                'cm_ten'=>'7.0',
            ],
            [
                'lv_id'=>7,
                'cm_ten'=>'7.5',
            ],
            [
                'lv_id'=>7,
                'cm_ten'=>'8.0-9.0',
            ],
            [
                'lv_id'=>8,
                'cm_ten'=>'Android',
            ],
            [
                'lv_id'=>8,
                'cm_ten'=>'Web',
            ],
            [
                'lv_id'=>8,
                'cm_ten'=>'Game',
            ],
            [
                'lv_id'=>null,
                'cm_ten'=>'Đàn Guitar'
            ],
             [
                'lv_id'=>null,
                'cm_ten'=>'Đàn Piano'
            ],
             [
                'lv_id'=>null,
                'cm_ten'=>'Đàn violin'
            ],
             [
                'lv_id'=>null,
                'cm_ten'=>'Vẽ'
            ],
             [
                'lv_id'=>null,
                'cm_ten'=>'Toán'
            ],
             [
                'lv_id'=>null,
                'cm_ten'=>'Hóa'
            ],
             [
                'lv_id'=>null,
                'cm_ten'=>'Lý'
            ],
             [
                'lv_id'=>null,
                'cm_ten'=>'Sinh'
            ],
             [
                'lv_id'=>null,
                'cm_ten'=>'Địa'
            ],
             [
                'lv_id'=>null,
                'cm_ten'=>'Sử'
            ],
             [
                'lv_id'=>null,
                'cm_ten'=>'Văn'
            ],
             [
                'lv_id'=>null,
                'cm_ten'=>'Luyện thi đại học'
            ],
             [
                'lv_id'=>null,
                'cm_ten'=>'Tiếng Đức'
            ],
             [
                'lv_id'=>null,
                'cm_ten'=>'Tiếng Ý'
            ],
             [
                'lv_id'=>null,
                'cm_ten'=>'Tiếng Hàn'
            ],
             [
                'lv_id'=>null,
                'cm_ten'=>'Báo bài'
            ],
        ]);
        \DB::table('doituongnguoihoc')->insert([
            ['dtnh_ten'=>'Lớp lá'],
            ['dtnh_ten'=>'Lớp 1'],
            ['dtnh_ten'=>'Lớp 2'],
            ['dtnh_ten'=>'Lớp 3'],
            ['dtnh_ten'=>'Lớp 4'],
            ['dtnh_ten'=>'Lớp 5'],
            ['dtnh_ten'=>'Lớp 6'],
            ['dtnh_ten'=>'Lớp 7'],
            ['dtnh_ten'=>'Lớp 8'],
            ['dtnh_ten'=>'Lớp 9'],
            ['dtnh_ten'=>'Lớp 10'],
            ['dtnh_ten'=>'Lớp 11'],
            ['dtnh_ten'=>'Lớp 12'],
            ['dtnh_ten'=>'Ôn Đại Học'],
            ['dtnh_ten'=>'Năng khiếu'],
            ['dtnh_ten'=>'Hệ Đại học'],
            ['dtnh_ten'=>'Người nước ngoài'],
            ['dtnh_ten'=>'Khác'],
        ]);
        \DB::table('thoigianday')->insert([
            [
                'tgd_ten'=>'Sáng thứ 2',
                
            ],
            [
                'tgd_ten'=>'Sáng thứ 3',
                
            ],
            [
                'tgd_ten'=>'Sáng thứ 4',
                
            ],
            [
                'tgd_ten'=>'Sáng thứ 5',
                
            ],
            [
                'tgd_ten'=>'Sáng thứ 6',
                
            ],
            [
                'tgd_ten'=>'Sáng thứ 7',
                
            ],
            [
                'tgd_ten'=>'Sáng chủ nhật',
                
            ],
            [
                'tgd_ten'=>'Chiều thứ 2',
                
            ],
            [
                'tgd_ten'=>'Chiều thứ 3',
                
            ],
            [
                'tgd_ten'=>'Chiều thứ 4',
                
            ],
            [
                'tgd_ten'=>'Chiều thứ 5',
                
            ],
            [
                'tgd_ten'=>'Chiều thứ 6',
                
            ],
            [
                'tgd_ten'=>'Chiều thứ 7',
                
            ],
            [
                'tgd_ten'=>'Chiều chủ nhật',
                
            ],
            [
                'tgd_ten'=>'Tối thứ 2',
                
            ],
            [
                'tgd_ten'=>'Tối thứ 3',
                
            ],
            [
                'tgd_ten'=>'Tối thứ 4',
                
            ],
            [
                'tgd_ten'=>'Tối thứ 5',
                
            ],
            [
                'tgd_ten'=>'Tối thứ 6',
                
            ],
            [
                'tgd_ten'=>'Tối thứ 7',
                
            ],
            [
                'tgd_ten'=>'Tối chủ nhật',
                
            ]
            
        ]);
    }
}
