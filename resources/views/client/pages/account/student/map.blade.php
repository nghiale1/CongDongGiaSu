@extends('client.pages.account.student.layout')
@section('head')
{{$student->hv_hoten}}
@endsection
@section('breadcrum')
Giới thiệu
@endsection
@push('css')
<style>
  .labels {
    color: black;
    background-color: red;
    font-family: "Lucida Grande", "Arial", sans-serif;
    font-size: 10px;
    text-align: center;
    width: 30px;
    white-space: nowrap;
  }
</style>

@endpush

@section('content')
<div class="container">
  <div id="map" style="width:100%;height:500px"></div>
</div>
@endsection
@push('script')
<script>
  "use strict";

let map;

function initMap() {
  //Lấy vị trí hiện tại

  var pune = {
    lat: 0,
    lng: 0
  };

  map = new google.maps.Map(document.getElementById("map"), {
    center: pune,
    zoom: 17,
    //không cho scroll trên web
    //   scrollwheel:false
  });
  var marker = new google.maps.Marker({
    position: pune,
    map: map,
    // icon roi tu tren xuoong
    // animation: google.maps.Animation.DROP
    //Nhay tung tung
    // animation: google.maps.Animation.BOUNCE,
    icon: {

      url: "{{asset('client/svg/teacher_male.svg')}}",
      scaledSize: {
        width: 50,
        height: 50
      }
    },


  })
  var loca = '{!!$loca!!}';
  loca = JSON.parse(loca);
  var markers = [];
  Object.entries(loca).forEach(([key,element]) => {
            
    let url='{{ route("tutor.profile", ":id") }}';
            url = url.replace(':id', element.gs_id);
    markers[key]=new google.maps.Marker({
      position: {
        lat: JSON.parse(element.gs_toado)[0],
        lng: JSON.parse(element.gs_toado)[1]
      },
      url:url,
      map: map,
      labelClass: "labels",
      label: {
        text: element.gs_hoten,
        color: "#C70E20",
        fontWeight: "bold"
      },
      icon: {

        // url: '<a href="'+url+'"><img src="{{asset("client/svg/teacher_male.svg")}}"></a>',
        url: "{{asset('client/svg/teacher_male.svg')}}",
        scaledSize: {
          width: 50,
          height: 50
        }
      },


    });
    for ( var i = 0; i < markers.length; i++ ) {
    google.maps.event.addListener(markers[i], 'click', function() {
      window.open(this.url,'_blank');  //changed from markers[i] to this
    });
}
  });

  var circle = new google.maps.Circle({
    strokeColor: "#185ABC",
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: "#3b78e7",
    fillOpacity: 0.35,
    map,
    center: pune,
    radius: 100,
  });

  //Chưc năng chỉ đường
  //client yêu cầu 
  // const directionsService = new google.maps.DirectionsService();

  // directionsService.route({
  //     //Điểm bắt đầu, có dạng truyền tham số
  //     origin:'Can Tho',
  //     //Điểm kết thúc
  //     destination:'Vinh Long',
  //     travelMode:'DRIVING'
  // },
  // function(result, status){
  //     if(status == "OK"){
  //         console.log(result);

  //         const directionsRenderer = new google.maps.DirectionsRenderer({
  //         directions:result,
  //           map:map

  //         });
  //     }
  // });

  // const autocomplete = new  google.maps.places.Autocomplete(document.getElementById('auto_search'));

  // autocomplete.addListener('place_changed',function(){
  //   const place = autocomplete.getPlace();
  //   // map.setCenter(place.geometry.location);

  //   map.fitBounds(place.geometry.viewport);
  //   map.setZoom(16);
  //   marker.setPosition(place.geometry.location);
  //   // console.log(autocomplete.getPlace());

  // });


  //chỉ đường nè
  // directionsService.route({
  //     //Điểm bắt đầu, có dạng truyền tham số
  //     origin:'Can Tho',
  //     //Điểm kết thúc
  //     destination:'Vinh Long',
  //     travelMode:'DRIVING'
  // },
  // function(result, status){
  //     if(status == "OK"){
  //         console.log(result);

  //         const directionsRenderer = new google.maps.DirectionsRenderer({
  //         directions:result,
  //           map:map

  //         });
  //     }
  // });

  const autocomplete = new google.maps.places.Autocomplete(document.getElementById('start'));

  autocomplete.addListener('place_changed', function() {
    const place = autocomplete.getPlace();
    // map.setCenter(place.geometry.location);
    // a=place.geometry.location;
    map.fitBounds(place.geometry.viewport);
    map.setZoom(16);
    marker.setPosition(place.geometry.location);


  });

  function geoLocation(position) {
    // console.log('Ok');
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          console.log(position);
          const pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude,
          };
          map.setCenter(pos);
          marker.setPosition(pos);
          circle.setCenter(pos);
        }
      );
    } else {
      alert('bị lỗi rồi');
    }
  }
  geoLocation();



}

</script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaaygZT7_LyyyK1fE9Wf9nsBHfJXgzXXY&region=VN&language=vi&libraries=places,geometry&callback=initMap">
</script>
@endpush