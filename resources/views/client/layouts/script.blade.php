<script>
  $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
</script>
<script src="{{asset('client/assets/js/jquery-3.5.1.js')}}"></script>
{{-- <script src="{{asset('client/assets/js/jquery-3.5.1.slim.js')}}"></script> --}}
<script src="{{asset('client/assets/vendor/bootstrap-4.5.0/js/bootstrap.min.js')}}"></script>
{{-- <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script> --}}
<script src="{{asset('client/assets/js/popper.js')}}"></script>

<!-- Template JavaScript -->
{{-- <script src="{{asset('client/assets/js/all.js')}}"></script> --}}

<script src="{{asset('client/assets/vendor/OwlCarousel2-2.3.4/owl.carousel.min.js')}}"></script>
<script src="{{asset('client/assets/vendor/jquery.smooth-scroll.min.js')}}"></script>
<script src="{{asset('client/assets/vendor/vue.min.js')}}"></script>
{{-- <script src="{{asset('client/assets/vendor/vue.js')}}"></script> --}}

<!-- script for -->

<!-- //script -->

<script>
  Vue.component('red-star', {
  template: '<span style="color: red">*</span>',
});
  Vue.component('green-tick', {
  template: '<img src="{{asset("/client/svg/greenTick.svg")}}" alt="" class="green-tick">',
});
</script>
<script>
  var app=new Vue({
      el:'#app'
  });
</script>
<script src="{{asset('tinymce/js/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('tinymce/langs/vi.js')}}"></script>
<script>
  $(document).ready(function () {
    
    tinymce.init({
        selector:'.tiny',
        language: 'vi',
        branding: false,
        height: 400,
        plugins: '  paste importcss searchreplace autolink autosave save directionality  visualblocks visualchars fullscreen image link media   table charmap hr pagebreak nonbreaking  toc insertdatetime advlist lists wordcount imagetools textpattern noneditable  charmap quickbars emoticons',
        imagetools_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        toolbar_sticky: true,
        autosave_ask_before_unload: true,
        autosave_interval: "30s",
        autosave_prefix: "{path}{query}-{id}-",
        autosave_restore_when_empty: false,
        autosave_retention: "2m",
        image_advtab: true,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_noneditable_class: "mceNonEditable",
        toolbar_mode: 'sliding',
        contextmenu: "link image imagetools table",
        });
    // $('.tiny').tinymce({
    //     theme : 'advanced',
    //     plugins : 'autoresize',
    //     width: '100%',
    //     height: 400,
    //     autoresize_min_height: 400,
    //     autoresize_max_height: 800,
    // });
  });
</script>