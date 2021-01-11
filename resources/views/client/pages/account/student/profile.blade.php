@extends('client.pages.account.student.layout')
@section('head')
{{$student->hv_hoten}}
@endsection
@section('breadcrum')
Giới thiệu
@endsection
@push('css')
<style>
    .w3l-about-breadcrum {
        display: none;
    }

    .svg {

        border-radius: 50%;
        border-radius: 100%;
        width: 50px;
        height: 50px;
        line-height: 50px;
        padding: 0;
    }

    .svg img {
        color: white;
        width: 23px;
    }

    #Capa_1 {
        fill: red;
    }

    @include('client.pages.account.student.profile-css');

    author-thumb img {
        border-radius: 100%;
        overflow: hidden;
        display: block;
        width: 100%;
    }
</style>

@endpush

@section('content')

@include('client.pages.account.student.about')
{{-- @include('client.pages.account.student.timeline') --}}

@endsection

@push('script')
<script>
    $(document).ready(function () {
            $('.edit').click(function (e) { 
                const id=$('#id').val();
                e.preventDefault();
                // lấy đối tượng
                var obj=$(this).attr('data-for');//thẻ p
                var placeForm=$(this).attr('data-r');
                //lấy dữ liệu
                var placeholder=$(this).attr('data-text');
                var value=$('.'+obj).text();
                var height=$('.'+obj).height();
                let form='';
                $('.'+obj).addClass('hide');
                $(this).addClass('hide');
                $('.'+placeForm).removeClass('hide');
                var elem= $(this);
                // alert(elem);

                $('.close-'+placeForm).click(function (e) { 
                    // e.preventDefault();
                    $('.'+obj).removeClass('hide');
                    $(elem).removeClass('hide');
                    // alert(123);
                    $('.'+placeForm).addClass('hide');
                    
                });
                
                
            });
        });
</script>
@endpush