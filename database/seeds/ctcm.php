<?php

use Illuminate\Database\Seeder;

class ctcm extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=1;$i++){
            // for($j=18;$j<=18;$j++){

                // \DB::table('chitietchuyenmon')->insert([
                //     'gs_id'=>1,
                //     'cm_id'=>$i,
                //     'dtnh_id'=>19,
                // ]);
                \DB::table('lop')->insert([
                    'gs_id'=>1,
                    'cm_id'=>4,
                    'dtnh_id'=>19,
                    'l_malop'=>'AVCB A4',
                    'l_ten'=>'Anh văn căn bản cho mọi người',
                    'l_gioithieu'=>'Bạn biết đó, hầu hết những người học tiếng Anh đã học rất nhiều năm, thậm chí là 12 năm nhưng dường như chúng ta vẫn chẳng thể nói được một câu tiếng Anh cho gẫy gọn dù là câu đơn giản nhất. Ai trong số chúng ta cũng đều muốn giao tiếp tiếng Anh thật tốt nhưng chúng ta lại gặp phải những vấn đề như thiếu từ vựng, thiếu cấu trúc, ngữ pháp. Và do đó, khi phải nói thì chúng ta loay hoay nghĩ bằng tiếng Việt rồi cố tìm các từ bằng tiếng Anh để diễn đạt ý rồi ghép sao cho thành một câu rồi cuối cùng mới nói ra được. Nói xong thì mồ hôi cũng đã ướt áo nhưng người nghe cũng chẳng hiểu gì. 
                    Không những thế bạn còn cảm thấy thật khó chịu với chính mình khi nghe ai đó nói tiếng Anh mà mãi bạn không hiểu gì và chỉ còn biết đến câu trả lời đơn giản nhất là Yes hoặc No hay một cái gật, một nụ cười trừ hoặc đến khi bạn hiểu ra thì câu chuyện đã kết thúc từ lâu. Đây là vấn đề thuộc về kỹ năng nghe, phản xạ mà hầu hết những người học tiếng Anh ở giai đoạn đầu đều mắc phải. 
                    Bạn cũng gặp những vấn đề trên ư? Vậy hãy để tôi giúp bạn qua khóa học "Tiếng Anh giao tiếp thường ngày".
                    
                    Lộ trình học tập:
                    103 bài học chia làm các chủ đề khác nhau giúp người học cải thiện vốn từ và ngữ pháp trong giao tiếp
                    
                    Lợi ích từ khoá học
                    Luyện phát âm chuẩn toàn bộ 44 âm trong Bảng phiên âm quốc tế (Bảng IPA).
                    Hệ thống hóa lại toàn bộ kiến thức từ vựng, ngữ pháp và ứng dụng chúng dễ dàng trong giao tiếp.
                    Học giao tiếp, phản xạ qua các chủ điểm thông dụng, nối âm, biến âm, ngữ điệu lên xuống một cách tự nhiên nhất như người bản ngữ.
                    Những cách hay mẹo nhỏ giúp bắt chuyện, gợi mở câu chuyện với người nước ngoài một cách tự nhiên và đầy hứng thú.
                    Những bài tập thực hành đi kèm giúp người học tăng khả năng phản xạ, giao tiếp tự nhiên.
                    Phù hợp với
                    Ngữ âm kém, muốn cải thiện khả năng ngữ âm của mình.
                    Không có nền tảng ngữ pháp căn bản.
                    Không biết vận dụng ngữ pháp trong nghe nói.
                    Muốn giao tiếp tự tin.
                    Muốn cải thiện khả năng nghe và nói, phản xạ.
                    Những người mất gốc hoặc bắt đầu học tiếng Anh từ con số 0.',
                    'l_hocphi'=>2000000,
                    'l_soluong'=>2,
                    'l_ngaybatdau'=>'2020-10-15',
                    'l_ngayketthuc'=>'2021-01-15',
                    'l_sobuoi'=>90,
                    'l_diachi'=>'Tại nhà',
                ]);
            // }
        }
    }
}
