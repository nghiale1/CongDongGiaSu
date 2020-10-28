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
          const directionsService = new google.maps.DirectionsService();
          directionsService.route(
            {
              origin:pos,
              destination: gs,
              travelMode: 'DRIVING',
            },
            function(response, status) {
              if (status === "OK") {
                // console.log(response);
                directionsRenderer = new google.maps.DirectionsRenderer({
                  directions:response,
                  map:map
                });
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




  // const autocomplete = new  google.maps.places.Autocomplete(document.getElementById('auto_search'));

  // autocomplete.addListener('place_changed',function(){
  //   const place = autocomplete.getPlace();
  //   // map.setCenter(place.geometry.location);

  //   map.fitBounds(place.geometry.viewport);
  //   map.setZoom(16);
  //   marker.setPosition(place.geometry.location);
  //   // console.log(autocomplete.getPlace());

  // });

  const autocomplete = new google.maps.places.Autocomplete(document.getElementById('start'));

  autocomplete.addListener('place_changed', function() {
    const place = autocomplete.getPlace();
    map.fitBounds(place.geometry.viewport);
    map.setZoom(16);
    marker.setPosition(place.geometry.location);


  });

  
  google.maps.event.addDomListener(window, 'load', initialize);
  function initialize() {
      var input = document.getElementById('autocomplete');
      var autocomplete = new google.maps.places.Autocomplete(input);
      autocomplete.addListener('place_changed', function() {
          var place = autocomplete.getPlace();
          $('#latitude').val(place.geometry['location'].lat());
          $('#longitude').val(place.geometry['location'].lng());
          // --------- show lat and long ---------------
          $("#lat_area").removeClass("d-none");
          $("#long_area").removeClass("d-none");
      });
  }

}

</script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaaygZT7_LyyyK1fE9Wf9nsBHfJXgzXXY&region=VN&language=vi&libraries=places,geometry&callback=initMap">
</script>
@endpush