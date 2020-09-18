<script type="text/javascript">

  var loadPage = function(url, title) {
    $.ajax({
      url: url,
      type: 'GET',
      data: {
        _token : "{{ csrf_token() }}"
      },
      success: function(response) {
        history.pushState('data', '', url);
        $('.admin_content').html(response).show();
      }
    }).fail(function (jqXHR, textStatus, error) {
      console.log(error);
    });
  };


  $(".admin_logout").on("click",function(){
    console.log("tıklandı")
    Swal.fire({
      title: 'Oturumu kapatmak istediğinize emin misiniz?',
      text: "",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Evet, Oturumu Kapat!',
      cancelButtonText: 'Vazgeçtim!'
    }).then((result) => {
      if (result.value) {
        window.location.href = "/admin/logout";
      }
    })
  });

  function custom_toastr(title,text,type){
    "use strict";!function(o,t){
      toastr.clear(),o.Toast("<h5>"+title+"</h5><p>"+text+"</p>",type)
    }(NioApp,jQuery);
  }

</script>
