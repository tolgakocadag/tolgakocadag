<div class="nk-sidebar nk-sidebar-fixed is-dark admin_changepage" data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="html/general/index.html" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{ asset('admin_assets/img/') }}/logo.png" srcset="{{ asset('admin_assets/img/') }}/logo2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('admin_assets/img/') }}/logo-dark.png" srcset="{{ asset('admin_assets/img/') }}/logo-dark2x.png 2x" alt="logo-dark">
                <span class="nio-version">General</span>
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none admin_changepage" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.dashboard.analytics') }}" class="nk-menu-link admin_changepage">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                            <span class="nk-menu-text">Gösterge Paneli</span>
                        </a>
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                            <span class="nk-menu-text">Kullanıcı Yönetimi</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="html/general/components/misc/svg-icons.html" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-user-list"></em></span>
                                    <span class="nk-menu-text">Kullanıcı Listesi</span>
                                </a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle admin_changepage">
                            <span class="nk-menu-icon"><em class="icon ni ni-db"></em></span>
                            <span class="nk-menu-text">İçerik Yönetimi</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.posts') }}" class="nk-menu-link admin_changepage">
                                    <span class="nk-menu-icon"><em class="icon ni ni-list-round"></em></span>
                                    <span class="nk-menu-text">Gönderi Listesi</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('admin.posts') }}" class="nk-menu-link admin_changepage">
                                    <span class="nk-menu-icon"><em class="icon ni ni-folders"></em></span>
                                    <span class="nk-menu-text">Kategori Listesi</span>
                                </a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    {{-- <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting-alt"></em></span>
                            <span class="nk-menu-text">Ayarlar</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Sunucu Ayarları</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="html/general/components/elements/util-border.html" class="nk-menu-link"><span class="nk-menu-text">Border</span></a></li>
                                </ul><!-- .nk-menu-sub -->
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Web Site Ayarları</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="html/general/components/elements/util-border.html" class="nk-menu-link"><span class="nk-menu-text">Border</span></a></li>
                                </ul><!-- .nk-menu-sub -->
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-text">Admin Site Ayarları</span></a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item"><a href="html/general/components/elements/util-border.html" class="nk-menu-link"><span class="nk-menu-text">Border</span></a></li>
                                </ul><!-- .nk-menu-sub -->
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item --> --}}
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
