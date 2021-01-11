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



<div id="map" style="width:100%;height:500px"></div>
<br>
<span>Tổng quảng đường là:</span>
<span id="khoangcach"></span>

@push('script')
<script>
  "use strict";

let map;

function initMap() {
  //Lấy vị trí hiện tại
  const service = new google.maps.DistanceMatrixService();
  var pune = {
    lat: 0,
    lng: 0
  };
  const gs_toado=JSON.parse("{!!$tutor->gs_toado!!}");
  const gs= new google.maps.LatLng(gs_toado[0], gs_toado[1]);
  // gs_toado[0]+','+ gs_toado[1]; 
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


  });
  var markeGSr = new google.maps.Marker({
    position: gs,
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


  });
  map.setCenter(gs);

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

  // lấy vị trí hiện tại
  function geoLocation(position) {
    // console.log('Ok');
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          const pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude,
          };
          // map.setCenter(pos);
          marker.setPosition(pos);
          circle.setCenter(pos);


          // đường đi
          //Chỉ đường khi có sự kiện click
         
          //chi đường A va B
          const directionsService = new google.maps.DirectionsService();
          const directionsRenderer = new google.maps.DirectionsRenderer();
          const geocoder = new google.maps.Geocoder();
          directionsService.route(
            {
              origin:pos,
              destination: gs,
              travelMode: 'DRIVING',
            },
            function(response, status) {
              if (status === "OK") {
                // console.log(response);
                var directionsRenderer = new google.maps.DirectionsRenderer({
                  directions:response,
                  map:map
                });
                service.getDistanceMatrix(
                {
                    origins: [pos],
                    destinations: [gs],
                    travelMode: google.maps.TravelMode.DRIVING,
                },
                (response, status) => {
                    if (status !== "OK") {
                    alert("Error was: " + status);
                    }
                    else{
                    var originList=response.originAddresses;
                    var destinationAddresses=response.destinationAddresses;
                    var dt ;
                    for (let i = 0; i < originList.length; i++) {
                        const results = response.rows[i].elements;
                        for (let j = 0; j < results.length; j++) {
                            var element = results[j];
                            dt =element.distance.text;
                        }
                    } 
                    document.getElementById('khoangcach').innerHTML  =dt;
                   
                    }
                } 
                );

              }
            }
          );
        }
        );
    } else {
      console.log('lỗi');
    }
  }
  geoLocation();
  const geocoder = new google.maps.Geocoder();
  const autocomplete = new  google.maps.places.Autocomplete(document.getElementById('autocomplete'));
        
        autocomplete.addListener('place_changed',function(){
          const place = autocomplete.getPlace();
          // map.setCenter(place.geometry.location);
         let data='['+place.geometry.location.lat()+','+place.geometry.location.lng()+']';
         $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
          $.ajax({
            type: "post",
            url: "{{route('changeLatLng')}}",
            data: {data:data},
            dataType: "json",
            success: function (response) {
              console.log(response);
            }
          });
          // map.fitBounds(place.geometry.viewport);
          // map.setZoom(16);
          // marker.setPosition(place.geometry.location);
        });

}

</script>
{{-- <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaaygZT7_LyyyK1fE9Wf9nsBHfJXgzXXY&region=VN&language=vi&libraries=places,geometry&callback=initMap">
</script> --}}
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaaygZT7_LyyyK1fE9Wf9nsBHfJXgzXXY&language=vi&libraries=places&callback=initMap">
</script>
@endpush