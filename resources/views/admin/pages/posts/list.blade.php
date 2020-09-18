<script type="text/javascript">
  if(typeof pageURLControl === 'undefined'){
    window.location.href = "/admin?lasturl=admin.posts";
  }
</script>

<div class="card card-bordered admin_dynamicscard">
  <div class="nk-block-head nk-block-head-sm">
      <div class="nk-block-between">
          <div class="nk-block-head-content">
              <h3 class="nk-block-title page-title">Gönderi Listesi</h3>
              <div class="nk-block-des text-soft">
                  <p>Toplam 2,595 kullanıcınız var.</p>
              </div>
          </div><!-- .nk-block-head-content -->
          <div class="nk-block-head-content">
              <div class="toggle-wrap nk-block-tools-toggle">
                  <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                  <div class="toggle-expand-content" data-content="pageMenu">
                      <ul class="nk-block-tools g-3">
                          <li><a href="#" class="btn btn-success btn-outline-white"><em class="icon ni ni-file-xls"></em><span>Excel</span></a></li>
                          <li class="nk-block-tools" title="Yeni Gönderi Ekle">
                                  <a href="{{ route('admin.posts.showadd') }}" class="btn btn-icon btn-primary admin_changepage"><em class="icon ni ni-plus"></em></a>
                          </li>
                      </ul>
                  </div>
              </div><!-- .toggle-wrap -->
          </div><!-- .nk-block-head-content -->
      </div><!-- .nk-block-between -->
  </div><!-- .nk-block-head -->
  <table class="table" id="admin_table">
      <thead>
          <tr>
              <th>Başlık</th>
              <th>Açıklama</th>
              <th>Durum</th>
              <th>Tarih</th>
              <th>İşlemler</th>
          </tr>
      </thead>
  </table>
</div>


<script type="text/javascript">
    $(document).ready(function() {

        var button_value = "filter";

        var tb = $('#admin_table').DataTable({
            "processing": true,
            "serverSide": true,
            "paging": true,
            "autoWidth": false,
            "language": {
                "url": "{{ asset('admin_assets/language/') }}/Turkish.json"
            },
            order: [],
            "ajax": {
                "url": "{{ route("admin.posts.list") }}",
                "method": "POST",
                "data": function(data) {
                    data._token = "{{ csrf_token() }}",
                    data.type_data = 'user_list',
                    data.button = button_value
                },complete: function (data) {
                }
            }

        });

    });
</script>
