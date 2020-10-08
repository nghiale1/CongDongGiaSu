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
        for($i=0;$i< 7;$i++){
            for($j=1;$j< 4;$j++){

                \DB::table('loptgd')->insert([
                    'l_id'=>$i+1,
                    'tgd_id'=>$j*2,
                ]);
            }
        }
    }
}
