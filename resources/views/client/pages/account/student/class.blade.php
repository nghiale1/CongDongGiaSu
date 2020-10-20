<div class="container">
    <div class="row">
        {{-- left --}}
        <div class="col col-xl-4 order-xl-1 col-lg-4 order-lg-1 col-md-12 order-md-2 col-sm-12 col-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">Thông tin cá nhân</h6>
                    <a href="#" class="more"></a>
                </div>
                <div class="ui-block-content">


                    <!-- W-Personal-Info -->

                    <ul class="widget w-personal-info">
                        <li>
                            <span class="title">Ước muốn:</span>
                            <span class="text inp-wish">{{$student->hv_uocmuon}}
                            </span>
                            <button class="edit" data-for="inp-wish" data-text="Thêm ước muốn của bạn"
                                data-r="Wish">Chỉnh
                                sửa</button>
                            <div class="Wish hide">
                                <form action="{{route("updateWish")}}" method="post">
                                    @csrf
                                    <textarea placeholder="Thêm ước muốn của bạn" class="tare-edit tare-wish"
                                        style="min-height:60px" name="data">{{$student->hv_uocmuon}}</textarea>
                                    <button class="btn-update  close-Wish" type="button">Hủy</button>
                                    <button class="btn-update save-wish" type="submit">Lưu</button>
                                </form>
                            </div>
                        </li>
                        <li>
                            <span class="title">Ngày sinh:</span>
                            <span class="text inp-birth">{{$student->hv_ngaysinh}}</span>
                            <button class="edit" data-for="inp-birth" data-text="Thêm ngày sinh của bạn"
                                data-r="Birth">Chỉnh
                                sửa</button>
                            <div class="Birth hide">
                                <form action="{{route("updateBirth")}}" method="post">
                                    @csrf
                                    <input type="date" value="{{$student->hv_ngaysinh}}"
                                        placeholder="Thêm ước muốn của bạn" name="data">
                                    <button class="btn-update  close-Birth" type="button">Hủy</button>
                                    <button class="btn-update save-birth" type="submit">Lưu</button>
                                </form>
                            </div>
                        </li>
                        <li>
                            <span class="title">Trình độ:</span>
                            <span class="text inp-level">{{$student->hv_trinhdo}}</span>
                            <button class="edit" data-for="inp-level" data-text="Thêm trình độ học vấn của bạn"
                                data-r="Level">Chỉnh
                                sửa</button>
                            <div class="Level hide">
                                <form action="{{route("updateLevel")}}" method="post">
                                    @csrf
                                    <select name="data" id="" class="form-control">

                                        @foreach ($level as $item)
                                        <option value="{{$item->dtnh_ten}}">{{$item->dtnh_ten}}</option>
                                        @endforeach
                                    </select>
                                    {{-- <textarea placeholder="Thêm ước muốn của bạn" class="tare-edit tare-wish"
                                        style="min-height:60px" name="data">{{$student->hv_trinhdo}}</textarea> --}}
                                    <button class="btn-update  close-Level" type="button">Hủy</button>
                                    <button class="btn-update save-level" type="submit">Lưu</button>
                                </form>
                            </div>
                        </li>
                        <li>
                            <span class="title">Học lực:</span>
                            <span class="text inp-power">{{$student->hv_hocluc}}</span>
                            <button class="edit" data-for="inp-power" data-r="Power">Chỉnh
                                sửa</button>
                            <div class="Power hide">
                                <form action="{{route("updatePower")}}" method="post">
                                    @csrf
                                    <textarea placeholder="Thêm học lực của bạn" class="tare-edit tare-power"
                                        style="min-height:60px" name="data">{{$student->hv_hocluc}}</textarea>
                                    <button class="btn-update  close-Power" type="button">Hủy</button>
                                    <button class="btn-update save-power" type="submit">Lưu</button>
                                </form>
                            </div>
                        </li>
                        <li>
                            <span class="title">Tên trường:</span>
                            <span class="text inp-school">{{$student->hv_tentruong}}</span>
                            <button class="edit" data-for="inp-school" data-r="School">Chỉnh
                                sửa</button>
                            <div class="School hide">
                                <form action="{{route("updateSchool")}}" method="post">
                                    @csrf
                                    <textarea placeholder="Thêm trường học của bạn" class="tare-edit tare-school"
                                        style="min-height:60px" name="data">{{$student->hv_tentruong}}</textarea>
                                    <button class="btn-update  close-School" type="button">Hủy</button>
                                    <button class="btn-update save-school" type="submit">Lưu</button>
                                </form>
                            </div>
                        </li>
                    </ul>

                    <!-- ... end W-Personal-Info -->

                </div>
            </div>
        </div>
        {{-- end left --}}
        {{-- main --}}
        <div class="col col-xl-8 order-xl-2 col-lg-8 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
            <div class="ui-block">
                <div class="ui-block-title">
                    <h6 class="title">Hobbies and Interests</h6>
                    <a href="#" class="more"></a>
                </div>
                <div class="ui-block-content">
                    <div class="row">
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">


                            <!-- W-Personal-Info -->

                            <ul class="widget w-personal-info item-block">
                                <li>
                                    <span class="title">Hobbies:</span>
                                    <span class="text">I like to ride the bike to work, swimming, and working out. I
                                        also like
                                        reading design magazines, go to museums, and binge watching a good tv show while
                                        it’s raining outside.
                                    </span>
                                </li>
                                <li>
                                    <span class="title">Favourite TV Shows:</span>
                                    <span class="text">Breaking Good, RedDevil, People of Interest, The Running Dead,
                                        Found, American Guy.</span>
                                </li>
                                <li>
                                    <span class="title">Favourite Movies:</span>
                                    <span class="text">Idiocratic, The Scarred Wizard and the Fire Crown, Crime Squad,
                                        Ferrum Man. </span>
                                </li>
                                <li>
                                    <span class="title">Favourite Games:</span>
                                    <span class="text">The First of Us, Assassin’s Squad, Dark Assylum, NMAK16, Last
                                        Cause 4, Grand Snatch Auto. </span>
                                </li>
                            </ul>

                            <!-- ... end W-Personal-Info -->
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">


                            <!-- W-Personal-Info -->

                            <ul class="widget w-personal-info item-block">
                                <li>
                                    <span class="title">Favourite Music Bands / Artists:</span>
                                    <span class="text">Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a
                                        Revenge.</span>
                                </li>
                                <li>
                                    <span class="title">Favourite Books:</span>
                                    <span class="text">The Crime of the Century, Egiptian Mythology 101, The Scarred
                                        Wizard, Lord of the Wings, Amongst Gods, The Oracle, A Tale of Air and
                                        Water.</span>
                                </li>
                                <li>
                                    <span class="title">Favourite Writers:</span>
                                    <span class="text">Martin T. Georgeston, Jhonathan R. Token, Ivana Rowle, Alexandria
                                        Platt, Marcus Roth. </span>
                                </li>
                                <li>
                                    <span class="title">Other Interests:</span>
                                    <span class="text">Swimming, Surfing, Scuba Diving, Anime, Photography, Tattoos,
                                        Street Art.</span>
                                </li>
                            </ul>

                            <!-- ... end W-Personal-Info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end main --}}
    </div>
</div>