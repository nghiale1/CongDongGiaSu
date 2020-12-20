<script>
    $(document).ready(function() {
        $("#input-res-1").fileinput({
            uploadUrl: "{{ route('document.tutor.upload') }}",
            enableResumableUpload: true,
            initialPreviewAsData: true,
            maxFileNum: 5,
            theme: 'fas',
            uploadExtraData: function () {
                return {
                    _token: $("input[name='_token']").val()
                }
            },
            fileActionSettings: {
                showZoom: function(config) {
                    if (config.type === 'pdf' || config.type === 'image') {
                        return true;
                    }
                    return false;
                }
            }
        });

    });

</script>

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.ui.position.js"></script>
<script>
    $(document).ready(function () {
        $.contextMenu({
            selector: '#right-click',
            callback: function(key, options) {
                var id = $(this).data('id');
                if (key == "change") {
                    var url = '{{ URL::to('tai-khoan/tai-lieu/thu-muc/thay-doi-trang-thai/') }}/' + id;
                    $.ajax({
                        type: "GET",
                        url: url,
                        // data: "data",
                        dataType: "json",
                        success: function (response) {
                            alert(response);
                            location.reload();
                        }
                    });
                }
            },
            items: {
                // "edit": {name: "Thay đổi trạng thái", icon: "edit"},
                // "fold1": {
                //     "name": "Thay đổi trạng thái",
                //     "items": {
                //         "private": {"name": "Riêng tư"},
                //         "public": {"name": "Công khai"},
                //     }
                // },
                "change" : {name : "Thay đôi trạng thái"},
                "copy": {name: "Sao chép"},
                "paste": {name: "Dán"},
                "delete": {name: "Xóa"},
            }
        });

        $.contextMenu({
            selector: '#right-click-bg',
            callback: function(key, options) {
                
                if(key == "delete"){
                    alert("Đã xóa");
                }else if(key == "private"){
                    alert("Đã chuyển trạng thái về riêng tư")
                }else if(key == "public"){
                    alert("Đã chuyển trạng thái về công khai")
                }
            },
            items: {
                "paste": {name: "Dán"},
                "cancel": {name: "Hủy"},
            }
        });
    });
</script>
<script>
    var uploadedDocumentMap = {}
    Dropzone.options.documentDropzone = {
      url: '{{ route('projects.storeMedia') }}',
      maxFilesize: 2, // MB
      addRemoveLinks: true,
      headers: {
        'X-CSRF-TOKEN': "{{ csrf_token() }}"
      },
      success: function (file, response) {
        $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
        uploadedDocumentMap[file.name] = response.name
      },
      removedfile: function (file) {
        file.previewElement.remove()
        var name = ''
        if (typeof file.file_name !== 'undefined') {
          name = file.file_name
        } else {
          name = uploadedDocumentMap[file.name]
        }
        $('form').find('input[name="document[]"][value="' + name + '"]').remove()
      },
      init: function () {
        @if(isset($project) && $project->document)
          var files =
            {!! json_encode($project->document) !!}
          for (var i in files) {
            var file = files[i]
            this.options.addedfile.call(this, file)
            file.previewElement.classList.add('dz-complete')
            $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
          }
        @endif
      }
    }
</script>