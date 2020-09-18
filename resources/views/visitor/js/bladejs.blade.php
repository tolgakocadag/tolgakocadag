<script type="text/javascript">
  $(document).ready(function(){

    var feature_post_count = 3;
    var feature_post_offset = 0;

    $(".feature_post .owl-nav .owl-next").on("click",function(){

      feature_post_offset += 3;

      $.ajax({
        url: "{{route('change.feature.next')}}",
        type: 'POST',
        data: {
          _token : "{{ csrf_token() }}",
          count : feature_post_count,
          offset : feature_post_offset
        },
        success: function(response) {
          if(response != ""){
            $(".feature_post_ul").html(response);
          } else {
            feature_post_offset -= 3;
          }
        }
      }).fail(function (jqXHR, textStatus, error) {
        console.log(error);
        feature_post_offset -= 3;
      });

    });

    $(".feature_post .owl-nav .owl-prev").on("click",function(){

      if(feature_post_offset != 0){

        feature_post_offset -= 3;

        $.ajax({
          url: "{{route('change.feature.prev')}}",
          type: 'POST',
          data: {
            _token : "{{ csrf_token() }}",
            count : feature_post_count,
            offset : feature_post_offset
          },
          success: function(response) {
            if(response != ""){
              $(".feature_post_ul").html(response);
            }
          }
        }).fail(function (jqXHR, textStatus, error) {
          console.log(error);
          feature_post_offset += 3;
        });

      }

    });

  });
</script>
