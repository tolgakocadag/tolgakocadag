<script type="text/javascript">
  if(typeof pageURLControl === 'undefined'){
    window.location.href = "/admin?lasturl=admin.posts";
  }
</script>

<div class="card card-bordered admin_dynamicscard">
  <div class="nk-block-head nk-block-head-sm">
      <div class="nk-block-between">
          <div class="nk-block-head-content">
              <h3 class="nk-block-title page-title">Gönderi Düzenle</h3>
          </div><!-- .nk-block-head-content -->
      </div><!-- .nk-block-between -->
  </div><!-- .nk-block-head -->

  <div class="preview-block">
    <form id="posts_edit_save" method="post" action="" enctype="multipart/form-data">
      @csrf
      <div class="row gy-4">
          <div class="col-sm-12">
              <div class="form-group">
                  <label class="form-label" for="posts_add_title">Gönderi Başlığı</label>
                  <div class="form-control-wrap">
                      <input type="text" required class="form-control" maxlength="150" id="posts_add_title" name="title" placeholder="Gönderi Başlığı" value="{{ $edit_data->postTitle }}">
                  </div>
              </div>
          </div>
          <div class="col-sm-12">
              <div class="form-group">
                  <label class="form-label" for="posts_add_description">Gönderi Açıklaması</label>
                  <div class="form-control-wrap">
                      <textarea maxlength="250" required rows="2" class="form-control" maxlength="150" id="posts_add_description" name="description" placeholder="Gönderi Açıklaması">{{ $edit_data->postDescription }}</textarea>
                  </div>
              </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label class="form-label" for="default-06">Gönderi Kapak Fotoğrafı</label>
              <div class="form-control-wrap">
                <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" id="posts_add_photos">
                  <label class="custom-file-label" for="posts_add_photos">Fotoğraf Seç</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
              <div class="form-group">
                  <label class="form-label" for="posts_add_description">Gönderi Metni</label>
                  <div id="posts_edit_container"></div>
                  <div id="posts_edit_editor">
                      {!!$edit_data->postContent!!}
                  </div>
              </div>
          </div>
          <div class="col-sm-12">
              <div class="form-group">
                <div class="custom-control custom-switch">
                    <input type="checkbox" name="status" @if ($edit_data->postStatus == 1) checked @endif class="custom-control-input" id="posts_add_status">
                    <label class="custom-control-label" for="posts_add_status">Yayınla</label>
                </div>
                <input type="hidden" name="content" value="">
                <input type="hidden" name="slug" value="{{ $edit_data->postSlug }}">
                <input type="hidden" name="id" value="{{ $edit_data->postID }}">
                <button type="submit" class="btn btn-dim btn-outline-dark float-right">Gönderiyi Düzenle</button>
              </div>
          </div>
      </div>
    </form>
  </div>
</div>

<script>

  $(document).ready(function(){


    var myEditor;

    DecoupledEditor
        .create( document.querySelector( '#posts_edit_editor' ), {
          ckfinder: {
            uploadUrl: '{{asset('admin_assets/js/')}}/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json&token=q7cggfzxhia28cb3m7np'
          },
          language: 'tr'
        } )
        .then( editor => {
            const toolbarContainer = document.querySelector( '#posts_edit_container' );

            toolbarContainer.appendChild( editor.ui.view.toolbar.element );

            myEditor = editor;
        } )
        .catch( error => {
            console.error( error );
        } );

        $("#posts_edit_save").on("submit",function(e){
          e.preventDefault();

          $("input[name='content']").val(myEditor.getData());

          $.ajax({
            url: "{{route('admin.posts.edit') }}",
            type: "POST",
            data: new FormData (this),
            contentType: false,
            processData: false,
            success: function(data){
              data = JSON.parse(data);
              if(data.status == 200){
                custom_toastr("Başarılı!",data.message,"success");
                loadPage("{{route('admin.posts') }}");
              } else {
                custom_toastr("Uyarı!",data.message,"warning");
              }
            }
          }).fail(function(data){
            custom_toastr("Hata!","Lütfen tekrar deneyiniz!","error");
          });

        });
  });

</script>
