@include('visitor.top_index')

                        <div class="col-md-8">
                          <div class="uni-image-post-body">
                              <div class="container">
                                  <div class="row">
                                      <div class="col-md-8">
                                          <div class="uni-image-post-left">
                                              <main id="main" class="site-main alignleft">
                                                  <div class="page-content">
                                                      <article class="post-92 post type-post has-post-thumbnail">
                                                          <div class="content-inner">
                                                              <div class="entry-content">
                                                                  <header class="entry-header">
                                                                      <h1 class="entry-title">{{ $postDetails->postTitle }}</h1>
                                                                  </header><!-- .entry-header -->

                                                                  <div class="entry-meta">
                                                                      <span class="author vcard"><a href="#" rel="author"><i class="fa fa-user" aria-hidden="true"></i> {{ $postDetails->name }}</a></span>
                                                                      <span class="entry-date"><i class="fa fa-calendar" aria-hidden="true"></i> {{ \Carbon\Carbon::parse($postDetails->created_at)->diffForHumans() }}</span>
                                                                  </div>
                                                              </div>
                                                              <div class="entry-top">
                                                                  <div class="post-formats-wrapper">
                                                                      <a class="post-image" href="#">
                                                                        @if (!empty($postDetails->postImage))
                                                                          <img src="{{asset('/public_assets/image/posts/'.$postDetails->postSlug.'/')}}/{{ $postDetails->postImage }}" class="attachment-full size-full wp-post-image img-responsive" alt="" >
                                                                        @else
                                                                          <img src="{{asset('/public_assets/image/posts/')}}/general_images.png" class="attachment-full size-full wp-post-image img-responsive" alt="" >
                                                                        @endif
                                                                      </a>
                                                                  </div>
                                                              </div><!-- .entry-top -->
                                                              {{-- <div class="entry-share">
                                                                  <span class="title">Share</span>
                                                                  <span class="fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
                                                                  <span class="tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
                                                                  <span class="gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></span>
                                                                  <span class="pt"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></span>
                                                              </div> --}}
                                                              <hr>
                                                              <div class="entry-content">
                                                                  <div class="entry-description">
                                                                    {!! $postDetails->postContent !!}
                                                                  </div>
                                                              </div><!-- .entry-content -->

                                                              {{-- <div class="entry-tag-share">
                                                                  <div class="share-click">
                                                                      <ul class="thim-social-share row">
                                                                          <li class="facebook"></li>
                                                                      </ul>
                                                                  </div>
                                                              </div> --}}

                                                              {{-- <hr>
                                                              <div class="entry-share">
                                                                  <span class="title">Share</span>
                                                                  <span class="fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
                                                                  <span class="tw"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
                                                                  <span class="gp"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></span>
                                                                  <span class="pt"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></span>
                                                              </div> --}}
                                                              {{-- <hr>
                                                              <div class="entry-tags">
                                                                  <h4>Tags</h4>
                                                                  <ul class="list-inline">
                                                                      <li><a href="#">Lifestyles</a></li>
                                                                      <li><a href="#">Sport</a></li>
                                                                      <li><a href="#">Economy </a></li>
                                                                      <li><a href="#">Bussiness</a></li>
                                                                      <li><a href="#">Travel</a></li>
                                                                      <li><a href="#">Techology</a></li>
                                                                  </ul>
                                                              </div> --}}

                                                              {{-- <div class="uni-post-pagination">
                                                                  <div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
                                                                      <div class="uni-post-pagination-left">
                                                                          <a href="#">PREVIOUS POST</a>
                                                                          <div class="uni-pagination-latest">
                                                                              <div class="thumbnail-img">
                                                                                  <a href="03_01_02_right_sidebar.html">
                                                                                      <img src="{{asset('/public_assets/image/')}}/03_02_01_image_post/pagination/img.jpg" alt="" title="" class="img-responsive">
                                                                                  </a>
                                                                              </div>
                                                                              <div class="rel-post-text">
                                                                                  <h5 class="entry-title">
                                                                                      <a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristi senectus et netus</a>
                                                                                  </h5>
                                                                                  <div class="entry-meta">
                                                                                      <span class="entry-date"><i class="fa fa-calendar" aria-hidden="true"></i>June 21, 2017</span>
                                                                                  </div>
                                                                              </div>
                                                                          </div>
                                                                          <div class="clearfix"></div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-md-6 col-sm-6 col-xs-6 clear-padding">
                                                                      <div class="uni-post-pagination-right">
                                                                          <a href="#">NEXT POST</a>
                                                                          <div class="uni-pagination-latest">
                                                                              <div class="thumbnail-img">
                                                                                  <a href="03_01_02_right_sidebar.html">
                                                                                      <img src="{{asset('/public_assets/image/')}}/03_02_01_image_post/pagination/img-1.jpg" alt="" title="" class="img-responsive">
                                                                                  </a>
                                                                              </div>
                                                                              <div class="rel-post-text">
                                                                                  <h5 class="entry-title">
                                                                                      <a href="03_01_02_right_sidebar.html" title="Futurethon – Explore the future">Pellentesque habitant morbi tristi senectus et netus</a>
                                                                                  </h5>
                                                                                  <div class="entry-meta">
                                                                                      <span class="entry-date"><i class="fa fa-calendar" aria-hidden="true"></i>June 21, 2017</span>
                                                                                  </div>
                                                                              </div>
                                                                          </div>
                                                                          <div class="clearfix"></div>
                                                                      </div>
                                                                  </div>
                                                                  <div class="clearfix"></div>
                                                              </div> --}}

                                                              {{-- <div class="uni-comment-latest">
                                                                  <div class="thumbnail-img">
                                                                      <a href="03_01_02_right_sidebar.html">
                                                                          <img src="{{asset('/public_assets/image/')}}/03_02_01_image_post/pagination/img4.jpg" alt="" title="" class="img-responsive">
                                                                      </a>
                                                                  </div>
                                                                  <div class="content-comment">
                                                                      <div class="author">
                                                                          <span class="author-name">Jonny Deep</span>
                                                                      </div>
                                                                      <div class="message">
                                                                          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                                                              Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero
                                                                              sit amet quam egestas semper.</p>
                                                                      </div>
                                                                      <div class="link"><a href="#">http://jonnydeep.com</a></div>
                                                                      <ul class="share list-inline">
                                                                          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                                          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                                          <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                                          <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                                      </ul>
                                                                  </div>
                                                              </div> --}}
                                                          </div><!-- .content-inner -->


                                                          {{-- <div class="related-archive">
                                                              <div class="vk-home-section-sport">
                                                                  <div class="tab-default tabbable-panel">
                                                                      <div class="tabbable-line">
                                                                          <div class="uni-sticker-label">
                                                                              <div class="label-info">
                                                                                  <a href="#">
                                                                                      <span><i class="fa fa-bookmark" aria-hidden="true"></i></span>
                                                                                      <span class="label-title">You may also read</span>
                                                                                  </a>
                                                                              </div>
                                                                              <!--Tab show destop-->
                                                                              <ul class="visible-sm visible-md visible-lg nav nav-tabs ">
                                                                                  <li class="active">
                                                                                      <a href="#tab_sec-3_1" data-toggle="tab">Related </a>
                                                                                  </li>
                                                                                  <li>
                                                                                      <a href="#tab_sec-3_2" data-toggle="tab">Form Author </a>
                                                                                  </li>
                                                                              </ul>
                                                                              <!--Tab show mobiles-->
                                                                              <div class="btn btn-select btn-select-light">
                                                                                  <input type="hidden" class="btn-select-input" value="" />
                                                                                  <span class="btn-select-value">Related</span>
                                                                                  <span class='btn-select-arrow'><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                                                                  <ul>
                                                                                      <li>
                                                                                          <a href="#tab_sec-3_1" data-toggle="tab">Related </a>
                                                                                      </li>
                                                                                      <li>
                                                                                          <a href="#tab_sec-3_2" data-toggle="tab">Form Author </a>
                                                                                      </li>
                                                                                  </ul>
                                                                                  <div class="clearfix"></div>
                                                                              </div>
                                                                              <div class="clearfix"></div>
                                                                          </div>
                                                                          <div class="tab-content">
                                                                              <div class="tab-pane active" id="tab_sec-3_1">
                                                                                  <div id="image-post-relate" class="owl-carousel owl-theme">
                                                                                      <div class="item">
                                                                                          <div class="row">
                                                                                              <div class="col-md-6">
                                                                                                  <div class="vk-home-section-2-left">
                                                                                                      <div class="vk-sec-2-left-img">
                                                                                                          <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/homepage1/abc/img-5.jpg" alt=""></a>
                                                                                                      </div>
                                                                                                      <div class="vk-sec-2-left-content">
                                                                                                          <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristique senectus
                                                                                                              et netus et malesuada fames ac turpis egestas</a></h2>
                                                                                                          <div class="vk-sec-2-left-time">
                                                                                                              <ul>
                                                                                                                  <li><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</li>
                                                                                                                  <li><i class="fa fa-eye-slash" aria-hidden="true"></i> 2134 views</li>
                                                                                                                  <li><i class="fa fa-comments-o" aria-hidden="true"></i> 30 Comments</li>
                                                                                                              </ul>
                                                                                                          </div>
                                                                                                          <div class="vk-sec-2-left-text">
                                                                                                              <p>
                                                                                                                  Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                                                                                  fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                                                                                                  tempor sit amet, ante. Donec eu libero sit amet quam egestas semper...
                                                                                                              </p>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                              <div class="col-md-6">
                                                                                                  <div class="vk-home-section-2-right">
                                                                                                      <ul>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-eco-img">
                                                                                                                  <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/homepage1/abc/img-2.jpg" alt="" class="img-responsive"></a>
                                                                                                              </div>
                                                                                                          </li>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-content">
                                                                                                                  <div class="vk-sec-2-title">
                                                                                                                      <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristi senectus et netus</a></h2>
                                                                                                                  </div>
                                                                                                                  <div class="vk-sec-2-time">
                                                                                                                      <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</div>
                                                                                                                  </div>
                                                                                                              </div>

                                                                                                          </li>
                                                                                                      </ul>
                                                                                                      <div class="clearfix"></div>
                                                                                                  </div>

                                                                                                  <div class="vk-home-section-2-right">
                                                                                                      <ul>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-eco-img">
                                                                                                                  <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/homepage1/abc/img-3.jpg" alt="" class="img-responsive"></a>
                                                                                                              </div>
                                                                                                          </li>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-content">
                                                                                                                  <div class="vk-sec-2-title">
                                                                                                                      <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristi senectus et netus</a></h2>
                                                                                                                  </div>
                                                                                                                  <div class="vk-sec-2-time">
                                                                                                                      <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</div>
                                                                                                                  </div>
                                                                                                              </div>

                                                                                                          </li>
                                                                                                      </ul>
                                                                                                      <div class="clearfix"></div>
                                                                                                  </div>

                                                                                                  <div class="vk-home-section-2-right">
                                                                                                      <ul>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-eco-img">
                                                                                                                  <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/homepage1/img4.jpg" alt="" class="img-responsive"></a>
                                                                                                              </div>
                                                                                                          </li>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-content">
                                                                                                                  <div class="vk-sec-2-title">
                                                                                                                      <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristi senectus et netus</a></h2>
                                                                                                                  </div>
                                                                                                                  <div class="vk-sec-2-time">
                                                                                                                      <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</div>
                                                                                                                  </div>
                                                                                                              </div>

                                                                                                          </li>
                                                                                                      </ul>
                                                                                                      <div class="clearfix"></div>
                                                                                                  </div>

                                                                                                  <div class="vk-home-section-2-right">
                                                                                                      <ul>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-eco-img">
                                                                                                                  <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/homepage1/abc/img-4.jpg" alt="" class="img-responsive"></a>
                                                                                                              </div>
                                                                                                          </li>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-content">
                                                                                                                  <div class="vk-sec-2-title">
                                                                                                                      <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristi senectus et netus</a></h2>
                                                                                                                  </div>
                                                                                                                  <div class="vk-sec-2-time">
                                                                                                                      <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</div>
                                                                                                                  </div>
                                                                                                              </div>

                                                                                                          </li>
                                                                                                      </ul>
                                                                                                      <div class="clearfix"></div>
                                                                                                  </div>

                                                                                                  <div class="vk-home-section-2-right">
                                                                                                      <ul>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-eco-img">
                                                                                                                  <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/homepage1/img8.jpg" alt="" class="img-responsive"></a>
                                                                                                              </div>
                                                                                                          </li>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-content">
                                                                                                                  <div class="vk-sec-2-title">
                                                                                                                      <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristi senectus et netus</a></h2>
                                                                                                                  </div>
                                                                                                                  <div class="vk-sec-2-time">
                                                                                                                      <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</div>
                                                                                                                  </div>
                                                                                                              </div>

                                                                                                          </li>
                                                                                                      </ul>
                                                                                                      <div class="clearfix"></div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="item">
                                                                                          <div class="row">
                                                                                              <div class="col-md-6">
                                                                                                  <div class="vk-home-section-2-left">
                                                                                                      <div class="vk-sec-2-left-img">
                                                                                                          <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/homepage1/abc/img-5.jpg" alt=""></a>
                                                                                                      </div>
                                                                                                      <div class="vk-sec-2-left-content">
                                                                                                          <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristique senectus
                                                                                                              et netus et malesuada fames ac turpis egestas</a></h2>
                                                                                                          <div class="vk-sec-2-left-time">
                                                                                                              <ul>
                                                                                                                  <li><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</li>
                                                                                                                  <li><i class="fa fa-eye-slash" aria-hidden="true"></i> 2134 views</li>
                                                                                                                  <li><i class="fa fa-comments-o" aria-hidden="true"></i> 30 Comments</li>
                                                                                                              </ul>
                                                                                                          </div>
                                                                                                          <div class="vk-sec-2-left-text">
                                                                                                              <p>
                                                                                                                  Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                                                                                  fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                                                                                                  tempor sit amet, ante. Donec eu libero sit amet quam egestas semper...
                                                                                                              </p>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                              <div class="col-md-6">
                                                                                                  <div class="vk-home-section-2-right">
                                                                                                      <ul>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-eco-img">
                                                                                                                  <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/homepage1/abc/img-2.jpg" alt="" class="img-responsive"></a>
                                                                                                              </div>
                                                                                                          </li>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-content">
                                                                                                                  <div class="vk-sec-2-title">
                                                                                                                      <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristi senectus et netus</a></h2>
                                                                                                                  </div>
                                                                                                                  <div class="vk-sec-2-time">
                                                                                                                      <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</div>
                                                                                                                  </div>
                                                                                                              </div>

                                                                                                          </li>
                                                                                                      </ul>
                                                                                                      <div class="clearfix"></div>
                                                                                                  </div>

                                                                                                  <div class="vk-home-section-2-right">
                                                                                                      <ul>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-eco-img">
                                                                                                                  <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/homepage1/abc/img-3.jpg" alt="" class="img-responsive"></a>
                                                                                                              </div>
                                                                                                          </li>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-content">
                                                                                                                  <div class="vk-sec-2-title">
                                                                                                                      <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristi senectus et netus</a></h2>
                                                                                                                  </div>
                                                                                                                  <div class="vk-sec-2-time">
                                                                                                                      <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</div>
                                                                                                                  </div>
                                                                                                              </div>

                                                                                                          </li>
                                                                                                      </ul>
                                                                                                      <div class="clearfix"></div>
                                                                                                  </div>

                                                                                                  <div class="vk-home-section-2-right">
                                                                                                      <ul>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-eco-img">
                                                                                                                  <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/homepage1/img4.jpg" alt="" class="img-responsive"></a>
                                                                                                              </div>
                                                                                                          </li>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-content">
                                                                                                                  <div class="vk-sec-2-title">
                                                                                                                      <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristi senectus et netus</a></h2>
                                                                                                                  </div>
                                                                                                                  <div class="vk-sec-2-time">
                                                                                                                      <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</div>
                                                                                                                  </div>
                                                                                                              </div>

                                                                                                          </li>
                                                                                                      </ul>
                                                                                                      <div class="clearfix"></div>
                                                                                                  </div>

                                                                                                  <div class="vk-home-section-2-right">
                                                                                                      <ul>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-eco-img">
                                                                                                                  <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/homepage1/abc/img-4.jpg" alt="" class="img-responsive"></a>
                                                                                                              </div>
                                                                                                          </li>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-content">
                                                                                                                  <div class="vk-sec-2-title">
                                                                                                                      <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristi senectus et netus</a></h2>
                                                                                                                  </div>
                                                                                                                  <div class="vk-sec-2-time">
                                                                                                                      <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</div>
                                                                                                                  </div>
                                                                                                              </div>

                                                                                                          </li>
                                                                                                      </ul>
                                                                                                      <div class="clearfix"></div>
                                                                                                  </div>

                                                                                                  <div class="vk-home-section-2-right">
                                                                                                      <ul>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-eco-img">
                                                                                                                  <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/homepage1/img8.jpg" alt="" class="img-responsive"></a>
                                                                                                              </div>
                                                                                                          </li>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-content">
                                                                                                                  <div class="vk-sec-2-title">
                                                                                                                      <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristi senectus et netus</a></h2>
                                                                                                                  </div>
                                                                                                                  <div class="vk-sec-2-time">
                                                                                                                      <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</div>
                                                                                                                  </div>
                                                                                                              </div>

                                                                                                          </li>
                                                                                                      </ul>
                                                                                                      <div class="clearfix"></div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="tab-pane" id="tab_sec-3_2">
                                                                                  <div id="image-post-form-author" class="owl-carousel owl-theme">
                                                                                      <div class="item">
                                                                                          <div class="row">
                                                                                              <div class="col-md-6">
                                                                                                  <div class="vk-home-section-2-left">
                                                                                                      <div class="vk-sec-2-left-img">
                                                                                                          <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/slideshow/img.jpg" alt="" class="img-responsive"></a>
                                                                                                      </div>
                                                                                                      <div class="vk-sec-2-left-content">
                                                                                                          <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristique senectus
                                                                                                              et netus et malesuada fames ac turpis egestas</a></h2>
                                                                                                          <div class="vk-sec-2-left-time">
                                                                                                              <ul>
                                                                                                                  <li><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</li>
                                                                                                                  <li><i class="fa fa-eye-slash" aria-hidden="true"></i> 2134 views</li>
                                                                                                                  <li><i class="fa fa-comments-o" aria-hidden="true"></i> 30 Comments</li>
                                                                                                              </ul>
                                                                                                          </div>
                                                                                                          <div class="vk-sec-2-left-text">
                                                                                                              <p>
                                                                                                                  Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                                                                                  fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                                                                                                  tempor sit amet, ante. Donec eu libero sit amet quam egestas semper...
                                                                                                              </p>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                              <div class="col-md-6">
                                                                                                  <div class="vk-home-section-2-right">
                                                                                                      <ul>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-eco-img">
                                                                                                                  <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/homepage1/img4.jpg" alt="" class="img-responsive"></a>
                                                                                                              </div>
                                                                                                          </li>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-content">
                                                                                                                  <div class="vk-sec-2-title">
                                                                                                                      <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristi senectus et netus</a></h2>
                                                                                                                  </div>
                                                                                                                  <div class="vk-sec-2-time">
                                                                                                                      <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</div>
                                                                                                                  </div>
                                                                                                              </div>

                                                                                                          </li>
                                                                                                      </ul>
                                                                                                      <div class="clearfix"></div>
                                                                                                  </div>

                                                                                                  <div class="vk-home-section-2-right">
                                                                                                      <ul>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-eco-img">
                                                                                                                  <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/homepage1/img5.jpg" alt="" class="img-responsive"></a>
                                                                                                              </div>
                                                                                                          </li>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-content">
                                                                                                                  <div class="vk-sec-2-title">
                                                                                                                      <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristi senectus et netus</a></h2>
                                                                                                                  </div>
                                                                                                                  <div class="vk-sec-2-time">
                                                                                                                      <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</div>
                                                                                                                  </div>
                                                                                                              </div>

                                                                                                          </li>
                                                                                                      </ul>
                                                                                                      <div class="clearfix"></div>
                                                                                                  </div>

                                                                                                  <div class="vk-home-section-2-right">
                                                                                                      <ul>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-eco-img">
                                                                                                                  <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/homepage1/img6.jpg" alt="" class="img-responsive"></a>
                                                                                                              </div>
                                                                                                          </li>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-content">
                                                                                                                  <div class="vk-sec-2-title">
                                                                                                                      <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristi senectus et netus</a></h2>
                                                                                                                  </div>
                                                                                                                  <div class="vk-sec-2-time">
                                                                                                                      <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</div>
                                                                                                                  </div>
                                                                                                              </div>

                                                                                                          </li>
                                                                                                      </ul>
                                                                                                      <div class="clearfix"></div>
                                                                                                  </div>

                                                                                                  <div class="vk-home-section-2-right">
                                                                                                      <ul>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-eco-img">
                                                                                                                  <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/homepage1/img7.jpg" alt="" class="img-responsive"></a>
                                                                                                              </div>
                                                                                                          </li>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-content">
                                                                                                                  <div class="vk-sec-2-title">
                                                                                                                      <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristi senectus et netus</a></h2>
                                                                                                                  </div>
                                                                                                                  <div class="vk-sec-2-time">
                                                                                                                      <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</div>
                                                                                                                  </div>
                                                                                                              </div>

                                                                                                          </li>
                                                                                                      </ul>
                                                                                                      <div class="clearfix"></div>
                                                                                                  </div>

                                                                                                  <div class="vk-home-section-2-right">
                                                                                                      <ul>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-eco-img">
                                                                                                                  <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/homepage1/img8.jpg" alt="" class="img-responsive"></a>
                                                                                                              </div>
                                                                                                          </li>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-content">
                                                                                                                  <div class="vk-sec-2-title">
                                                                                                                      <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristi senectus et netus</a></h2>
                                                                                                                  </div>
                                                                                                                  <div class="vk-sec-2-time">
                                                                                                                      <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</div>
                                                                                                                  </div>
                                                                                                              </div>

                                                                                                          </li>
                                                                                                      </ul>
                                                                                                      <div class="clearfix"></div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                      <div class="item">
                                                                                          <div class="row">
                                                                                              <div class="col-md-6">
                                                                                                  <div class="vk-home-section-2-left">
                                                                                                      <div class="vk-sec-2-left-img">
                                                                                                          <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/slideshow/img.jpg" alt="" class="img-responsive"></a>
                                                                                                      </div>
                                                                                                      <div class="vk-sec-2-left-content">
                                                                                                          <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristique senectus
                                                                                                              et netus et malesuada fames ac turpis egestas</a></h2>
                                                                                                          <div class="vk-sec-2-left-time">
                                                                                                              <ul>
                                                                                                                  <li><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</li>
                                                                                                                  <li><i class="fa fa-eye-slash" aria-hidden="true"></i> 2134 views</li>
                                                                                                                  <li><i class="fa fa-comments-o" aria-hidden="true"></i> 30 Comments</li>
                                                                                                              </ul>
                                                                                                          </div>
                                                                                                          <div class="vk-sec-2-left-text">
                                                                                                              <p>
                                                                                                                  Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                                                                                  fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                                                                                                  tempor sit amet, ante. Donec eu libero sit amet quam egestas semper...
                                                                                                              </p>
                                                                                                          </div>
                                                                                                      </div>
                                                                                                  </div>
                                                                                              </div>
                                                                                              <div class="col-md-6">
                                                                                                  <div class="vk-home-section-2-right">
                                                                                                      <ul>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-eco-img">
                                                                                                                  <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/homepage1/img4.jpg" alt="" class="img-responsive"></a>
                                                                                                              </div>
                                                                                                          </li>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-content">
                                                                                                                  <div class="vk-sec-2-title">
                                                                                                                      <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristi senectus et netus</a></h2>
                                                                                                                  </div>
                                                                                                                  <div class="vk-sec-2-time">
                                                                                                                      <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</div>
                                                                                                                  </div>
                                                                                                              </div>

                                                                                                          </li>
                                                                                                      </ul>
                                                                                                      <div class="clearfix"></div>
                                                                                                  </div>

                                                                                                  <div class="vk-home-section-2-right">
                                                                                                      <ul>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-eco-img">
                                                                                                                  <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/homepage1/img5.jpg" alt="" class="img-responsive"></a>
                                                                                                              </div>
                                                                                                          </li>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-content">
                                                                                                                  <div class="vk-sec-2-title">
                                                                                                                      <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristi senectus et netus</a></h2>
                                                                                                                  </div>
                                                                                                                  <div class="vk-sec-2-time">
                                                                                                                      <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</div>
                                                                                                                  </div>
                                                                                                              </div>

                                                                                                          </li>
                                                                                                      </ul>
                                                                                                      <div class="clearfix"></div>
                                                                                                  </div>

                                                                                                  <div class="vk-home-section-2-right">
                                                                                                      <ul>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-eco-img">
                                                                                                                  <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/homepage1/img6.jpg" alt="" class="img-responsive"></a>
                                                                                                              </div>
                                                                                                          </li>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-content">
                                                                                                                  <div class="vk-sec-2-title">
                                                                                                                      <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristi senectus et netus</a></h2>
                                                                                                                  </div>
                                                                                                                  <div class="vk-sec-2-time">
                                                                                                                      <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</div>
                                                                                                                  </div>
                                                                                                              </div>

                                                                                                          </li>
                                                                                                      </ul>
                                                                                                      <div class="clearfix"></div>
                                                                                                  </div>

                                                                                                  <div class="vk-home-section-2-right">
                                                                                                      <ul>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-eco-img">
                                                                                                                  <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/homepage1/img7.jpg" alt="" class="img-responsive"></a>
                                                                                                              </div>
                                                                                                          </li>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-content">
                                                                                                                  <div class="vk-sec-2-title">
                                                                                                                      <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristi senectus et netus</a></h2>
                                                                                                                  </div>
                                                                                                                  <div class="vk-sec-2-time">
                                                                                                                      <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</div>
                                                                                                                  </div>
                                                                                                              </div>

                                                                                                          </li>
                                                                                                      </ul>
                                                                                                      <div class="clearfix"></div>
                                                                                                  </div>

                                                                                                  <div class="vk-home-section-2-right">
                                                                                                      <ul>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-eco-img">
                                                                                                                  <a href="03_01_02_right_sidebar.html"><img src="{{asset('/public_assets/image/')}}/homepage1/img8.jpg" alt="" class="img-responsive"></a>
                                                                                                              </div>
                                                                                                          </li>
                                                                                                          <li>
                                                                                                              <div class="vk-sec-2-content">
                                                                                                                  <div class="vk-sec-2-title">
                                                                                                                      <h2><a href="03_01_02_right_sidebar.html">Pellentesque habitant morbi tristi senectus et netus</a></h2>
                                                                                                                  </div>
                                                                                                                  <div class="vk-sec-2-time">
                                                                                                                      <div class="time"><i class="fa fa-calendar" aria-hidden="true"></i> March, 20, 2017</div>
                                                                                                                  </div>
                                                                                                              </div>

                                                                                                          </li>
                                                                                                      </ul>
                                                                                                      <div class="clearfix"></div>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                  </div>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div><!--.related--> --}}
                                                      </article><!-- #post-## -->


                                                      {{-- <div id="comments" class="comments-area">
                                                          <div class="list-comments">
                                                              <h3 class="comments-title"><i class="fa fa-comments" aria-hidden="true"></i> 2 Comments</h3>
                                                              <hr>
                                                              <ul class="comment-list">
                                                                  <li class="comment even thread-even depth-1 description_comment">
                                                                      <img alt="" src="{{asset('/public_assets/image/')}}/03_02_01_image_post/pagination/img5.jpg" class="avatar photo img-responsive">
                                                                      <div class="content-comment">
                                                                          <div class="author">
                                                                              <span class="author-name">Adam Henderson</span>
                                                                          </div>
                                                                          <div class="message">
                                                                              <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante</p>
                                                                          </div>
                                                                          <div class="time">
                                                                              <span class="comment-extra-info">October 6, 2016 at 9:59 am</span>
                                                                              <span>
                                                                      <a rel="nofollow" class="comment-reply-link" href="#">Reply <i class="fa fa-share" aria-hidden="true"></i></a>
                                                                  </span>
                                                                          </div>
                                                                      </div>

                                                                      <div class="clear"></div>

                                                                      <ul class="children">
                                                                          <li class="comment odd alt depth-2 description_comment" id="comment-5">
                                                                              <img alt="" src="{{asset('/public_assets/image/')}}/03_02_01_image_post/pagination/img6.jpg" class="avatar avatar-100 photo">
                                                                              <div class="content-comment">
                                                                                  <div class="author">
                                                                                      <span class="author-name">Adam Henderson</span>
                                                                                  </div>
                                                                                  <div class="message">
                                                                                      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante</p>
                                                                                  </div>
                                                                                  <div class="time">
                                                                                      <span class="comment-extra-info">October 6, 2016 at 9:59 am</span>
                                                                                      <span>
                                                                      <a rel="nofollow" class="comment-reply-link" href="#">Reply <i class="fa fa-share" aria-hidden="true"></i></a>
                                                                  </span>
                                                                                  </div>
                                                                              </div>
                                                                              <div class="clear"></div>
                                                                          </li><!-- #comment-## -->
                                                                      </ul><!-- .children -->
                                                                  </li><!-- #comment-## -->
                                                              </ul>
                                                          </div>

                                                          <div class="form-comment">
                                                              <div id="respond" class="comment-respond">
                                                                  <h3 id="reply-title" class="comment-reply-title"><i class="fa fa-pencil" aria-hidden="true"></i> Leave a Reply
                                                                  </h3>
                                                                  <hr>
                                                                  <form action="http://maxnews.vikitheme.com/html/action.html" method="post" id="commentform" class="comment-form">
                                                                      <div class="row">
                                                                          <div class="comment-form-comment form-group col-md-12">
                                                                              <textarea placeholder="Comment..." id="comment" name="comment" class="form-control"></textarea>
                                                                          </div>
                                                                          <div class="comment-form-author form-group col-md-4">
                                                                              <input placeholder="Name *" id="author" name="author" type="text" value="" class="form-control">
                                                                          </div>
                                                                          <div class="comment-form-email form-group col-md-4">
                                                                              <input placeholder="Email *" id="email" name="email" type="text" value="" class="form-control">
                                                                          </div>
                                                                          <div class="comment-form-url form-group col-md-4">
                                                                              <input placeholder="Website" id="url" name="url" type="text" value="" class="form-control">
                                                                          </div>
                                                                          <div class="form-submit form-group col-md-12">
                                                                              <input name="submit" type="submit" id="submit" class="submit" value="Post Comment" >
                                                                          </div>
                                                                      </div>
                                                                  </form>
                                                              </div><!-- #respond -->
                                                          </div>
                                                      </div><!-- #comments --> --}}
                                                  </div><!-- .page-conten t-->

                                              </main>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>

@include('visitor.bottom_index')
