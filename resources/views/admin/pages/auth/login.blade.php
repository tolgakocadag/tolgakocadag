<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@@page-discription">
    <meta name="robots" content="noindex">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Login | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/') }}/dashlite.css">
    <link id="skin-default" rel="stylesheet" href="{{ asset('admin_assets/css/') }}/theme.css">
</head>

<body class="nk-body npc-crypto ui-clean pg-auth">
    <!-- app body @s -->
    <div class="nk-app-root">
        <div class="nk-split nk-split-page nk-split-md">
            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container">
                <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                    <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                </div>
                <div class="nk-block nk-block-middle nk-auth-body">
                    <div class="brand-logo pb-5">
                        <a href="html/general/index.html" class="logo-link">
                            <img class="logo-light logo-img logo-img-lg" src="{{ asset('admin_assets/img/') }}/logo.png" srcset="{{ asset('admin_assets/img/') }}/logo2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img logo-img-lg" src="{{ asset('admin_assets/img/') }}/logo-dark.png" srcset="{{ asset('admin_assets/img/') }}/logo-dark2x.png 2x" alt="logo-dark">
                        </a>
                    </div>
                    @if ($errors->any())
                      <div class="alert alert-danger">
                        {{ $errors->first() }}
                      </div>
                    @endif
                    <form method="post" action="{{ route('admin.login.post') }}" action="#">
                        @csrf
                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="default-01">Email veya Kullanıcı Adı</label>
                            </div>
                            <input type="text" class="form-control form-control-lg" required name="email" placeholder="E-posta adresinizi veya kullanıcı adınızı girin">
                        </div><!-- .foem-group -->
                        <div class="form-group">
                            <div class="form-label-group">
                                <label class="form-label" for="password">Şifre</label>
                                <a class="link link-primary link-sm" tabindex="-1" href="html/general/pages/auths/auth-reset.html">Şifremi Unuttum?</a>
                            </div>
                            <div class="form-control-wrap">
                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password" class="form-control form-control-lg" required name="password" placeholder="Şifrenizi girin">
                            </div>
                        </div><!-- .foem-group -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary btn-block">Giriş Yap</button>
                        </div>
                    </form><!-- form -->
                </div><!-- .nk-block -->
                <div class="nk-block nk-auth-footer">
                    <div class="mt-3">
                        <p>&copy; 2020 Tolga KOCADAĞ. Tüm hakları saklıdır.</p>
                    </div>
                </div><!-- .nk-block -->
            </div><!-- .nk-split-content -->
            <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                    <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="{{ asset('admin_assets/img/slides/') }}/promo-a.png" srcset="{{ asset('admin_assets/img/slides/') }}/promo-a2x.png 2x" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>Dashlite</h4>
                                    <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="{{ asset('admin_assets/img/slides/') }}/promo-b.png" srcset="{{ asset('admin_assets/img/slides/') }}/promo-b2x.png 2x" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>Dashlite</h4>
                                    <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="{{ asset('admin_assets/img/slides/') }}/promo-c.png" srcset="{{ asset('admin_assets/img/slides/') }}/promo-c2x.png 2x" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>Dashlite</h4>
                                    <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                    </div><!-- .slider-init -->
                    <div class="slider-dots"></div>
                    <div class="slider-arrows"></div>
                </div><!-- .slider-wrap -->
            </div><!-- .nk-split-content -->
        </div><!-- .nk-split -->
    </div><!-- app body @e -->
    <!-- JavaScript -->
    <script src="{{ asset('admin_assets/js/') }}/bundle.js"></script>
    <script src="{{ asset('admin_assets/js/') }}/scripts.js"></script>
</body>

</html>
