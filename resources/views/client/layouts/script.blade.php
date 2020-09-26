<script>
  $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
</script>
<script src="{{asset('client/assets/js/jquery-3.5.1.js')}}"></script>
<script src="{{asset('client/assets/js/jquery-3.5.1.slim.js')}}"></script>
<script src="{{asset('client/assets/vendor/bootstrap-4.5.0/js/bootstrap.min.js')}}"></script>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>

<!-- Template JavaScript -->
{{-- <script src="{{asset('client/assets/js/all.js')}}"></script> --}}

<script src="{{asset('client/assets/vendor/OwlCarousel2-2.3.4/owl.carousel.min.js')}}"></script>
<script src="{{asset('client/assets/vendor/jquery.smooth-scroll.min.js')}}"></script>
<script src="{{asset('client/assets/vendor/vue.min.js')}}"></script>
{{-- <script src="{{asset('client/assets/vendor/vue.js')}}"></script> --}}

<!-- script for -->
<script>
  $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        responsiveClass: true,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
</script>
<!-- //script -->

<script>
  Vue.component('red-star', {
  template: '<span style="color: red">*</span>',
});
  Vue.component('green-tick', {
  template: '<img src="/client/svg/greenTick.svg" alt="" class="green-tick">',
});
  
</script>

<script>
  var app=new Vue({
      el:'#app'
  });
</script>