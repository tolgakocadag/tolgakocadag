<script type="text/javascript">

$(document).on("click",".admin_post_edit_redirect",function(){
    var setRowID = $(this).attr("data-id");
    $("#spinner").show();

    $.ajax({
      url: "{{route("admin.posts.showedit")}}",
      type: "POST",
      data: {
        "_token" : "{{ csrf_token() }}",
        "setRowID" : setRowID
      },
      success: function(response) {
        $(".admin_content").html(response);
      }
    });

});

</script>
