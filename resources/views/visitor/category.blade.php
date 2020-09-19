@include('visitor.top_index')

<div class="col-md-8">
    <div class="uni-search-result-grid">
        <div class="uni-search-result-grid-body">

            <div class="uni-search-result-grid-left">
                <main id="main" class="site-main alignleft">
                    <div class="uni-search-item-body">
                        <div class="row">
                          @foreach ($posts as $post)
                            <div class="col-md-6">
                                <div class="uni-item">
                                    <article class="post type-post">
                                        <div class="content-inner">
                                            <div class="entry-top">
                                                <div class="thumbnail-img"><a href="/blog/{{ $post->postSlug }}" title="">
                                                  @if (!empty($post->postImage))
                                                    <img src="{{asset('/public_assets/image/posts/'.$post->postSlug.'/')}}/{{ $post->postImage }}" style="height:100%" class="img-responsive" alt="" >
                                                  @else
                                                    <img src="{{asset('/public_assets/image/posts/')}}/general_images.png" style="height:100%" class="img-responsive" alt="" >
                                                  @endif
                                                </div>
                                            </div>

                                            <div class="entry-content">
                                                <header class="entry-header">
                                                    <h2 class="entry-title">
                                                        <a href="/blog/{{ $post->postSlug }}" rel="">{{ $post->postTitle }}</a>
                                                    </h2>
                                                </header>

                                                <div class="entry-meta">
                                                    <span class="entry-date"><i class="fa fa-calendar" aria-hidden="true"></i> {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span>
                                                    {{-- <span class="entry-views"><i class="fa fa-eye" aria-hidden="true"></i> 2134 views</span> --}}
                                                    {{-- <span class="comment-total"> --}}
                                                        {{-- <a href="#" class="comments-link"><i class="fa fa-comments" aria-hidden="true"></i> 30 Comments</a> --}}
                                                    {{-- </span> --}}
                                                </div>
                                                <div class="entry-summary">
                                                    <p>{{ substr($post->postDescription,0,150) }}</p>
                                                </div>
                                                <div class="readmore">
                                                    <a href="/blog/{{ $post->postSlug }}">Devamı için tıklayın <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                              </div>
                          @endforeach
                        </div>
                    </div>

                    <ul class="loop-pagination" style="padding-bottom:20px;">
                        <li class="current"><a class="page-numbers">1</a></li>
                        <li><a class="page-numbers" href="#">2</a></li>
                        <li><a class="page-numbers" href="#">3</a></li>
                        <li><a class="page-numbers" href="#">...</a></li>
                        <li><a class="page-numbers" href="#">9</a></li>
                        <li><a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul><!-- .pagination -->
                </main>
            </div>
        </div>
    </div>
</div>


@include('visitor.bottom_index')
