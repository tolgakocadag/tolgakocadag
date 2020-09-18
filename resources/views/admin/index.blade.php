<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Tolga KOCADAĞ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@@page-discription">
    <meta name="robots" content="noindex">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('admin_assets/img/') }}/favicon.png">
    <!-- Page Title  -->
    <title>Default Dashboard | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/') }}/dashlite.css">
    <link id="skin-default" rel="stylesheet" href="{{ asset('admin_assets/css/') }}/theme.css">
    <link rel="stylesheet" href="{{ asset('admin_assets/css/') }}/datatables.min.css">

    <!-- JavaScript -->
    <script src="{{ asset('admin_assets/js/') }}/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('admin_assets/js/') }}/bundle.js"></script>
    <script src="{{ asset('admin_assets/js/') }}/scripts.js"></script>
    <script src="{{ asset('admin_assets/js/charts/') }}/gd-general.js"></script>
    <script src="{{ asset('admin_assets/js/') }}/sweetalert.js"></script>

    @include('admin.js_php.common')
    @include('admin.js_php.editpages')
    <!-- /JavaScript -->

    <style media="screen">
      a {
        cursor: pointer;
      }
      .admin_dynamicscard{
        padding: 2%;
      }
    </style>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">


    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('admin/includes/sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('admin.includes.topbar')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content admin_content">



                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('admin.includes.footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->

    <script type="text/javascript">

        var pageURLControl = true;

        @isset ($lasturl)
          loadPage("{{ route($lasturl) }}","");
        @else
          loadPage("{{ route('admin.dashboard.analytics') }}","");
        @endif

        $(document).on('click','.admin_changepage', function(e) {

          e.preventDefault();
          var url = $(this).attr('href');
          if(url == "#" || url == undefined) {return;}

          console.log(url);
          console.log("giriyor mu ")
          $('.admin_content').hide();

          //yönlendir
          loadPage(url, "");
        });

    </script>

    <script src="{{ asset('admin_assets/js/ckeditor5/') }}/ckeditor.js"></script>

</body>

</html>
