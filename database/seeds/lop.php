<?php

use Illuminate\Database\Seeder;

class lop extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for($i=0;$i< 7;$i++){
        //     for($j=1;$j< 4;$j++){

        //         \DB::table('loptgd')->insert([
        //             'l_id'=>$i+1,
        //             'tgd_id'=>$j*2,
        //         ]);
        //     }
        // }
$a='Văn-Cấp 3';
            \DB::table('thumucgs')->insert([
                'ctcm_id'=>9,
                'tmgs_ten'=>$a,
                'tmgs_slug'=>\Str::slug($a),
                'tmgs_duongdan'=>'tai-lieu-gia-su/1/'.\Str::slug($a),
            ]);
    }
}
