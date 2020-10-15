@push('css')
@endpush
<div class="row">
    <div class="col-md-3">Môn dạy</div>
    <div class="col-md-9">
        <div class="row row-cols-2">
            @foreach ($mySubject as $item)
            <div class="col">
                @if ($item->lv_id)

                <h5 class="school-name">
                    {{$item->lv_ten}}
                </h5>
                @endif
                <p>
                    {{$item->cm_ten}}</p>
                <p>
                    {{$item->dtnh_ten}}
                </p>
                <hr>
            </div>
            @endforeach

            <div class="col">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-edit" data-toggle="modal" data-target="#addSubject">
                    Thêm
                </button>

                <!-- Modal -->
                <div class="modal fade" id="addSubject" tabindex="-1" role="dialog" aria-labelledby="addPlaceLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addPlaceLabel">Thêm môn dạy</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{route('addSubject')}}" method="post" id="">
                                @csrf
                                <div class="modal-body">
                                    <select class="form-control" name="subject">
                                        @foreach ($subject as $item)

                                        <option value="{{$item->cm_id}}">{{$item->lv_ten}}
                                            @if($item->lv_ten!='')- @endif{{$item->cm_ten}}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                    <select class="form-control" name="obj">
                                        @foreach ($obj as $item)

                                        <option value="{{$item->dtnh_id}}">{{$item->dtnh_ten}}</option>
                                        @endforeach
                                    </select>



                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                    <button type="submit" class="btn btn-primary" id="sub-addPlace">Lưu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('script')
@endpush