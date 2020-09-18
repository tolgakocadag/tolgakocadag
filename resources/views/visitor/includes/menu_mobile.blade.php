<nav class="visible-sm visible-xs mobile-menu-container mobile-nav">
    <div class="menu-mobile-nav navbar-toggle">
        <span class="icon-search-mobile"><i class="fa fa-search" aria-hidden="true"></i></span>
        <span class="icon-bar"><i class="fa fa-bars" aria-hidden="true"></i></span>
    </div>
    <div id="cssmenu" class="animated">
        <div class="uni-icons-close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <ul class="nav navbar-nav animated">
          @php
            echo recursiveMenu($categories,0);
          @endphp
        </ul>
        <div class="uni-nav-mobile-bottom">
            <div class="form-search-wrapper-mobile">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Ara">
                    <span class="input-group-addon success"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</nav>
