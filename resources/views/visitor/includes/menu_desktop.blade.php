<div class="visible-md visible-lg vk-bottom-header uni-sticky">
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="cssmenu">
                    <ul>
                      {{-- <li><a href="/"><img height="18" class="img-responsive" style="height:50px;"  src="{{ asset('public_assets/logo/') }}/tolgakocadag_logo5.png"/></a></li> --}}
                      @php
                        echo recursiveMenu($categories);
                      @endphp
                    </ul>
                </div>
            </div>
            <div class="col-md-1">
                <div class="vk-bottom-header-search toggle-form">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <!--Form search-->
        <div class="form-search-wrapper">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon success"><i class="fa fa-search"></i></span>
            </div>
        </div>
    </div>
</div>
