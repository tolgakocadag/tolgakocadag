<aside class="widget">
    <h3 class="widget-title">Öne Çıkan Gönderiler</h3>
    <div class="widget-content">
        <div class="vk-home-default-right-fea">
            <div id="vk-owl-fea-slider" class="owl-carousel owl-theme feature_post">
                <div class="item">
                    <ul class="feature_post_ul">
                      @php
                        $feature_posts = get_feature_posts(3,0);
                      @endphp

                      @foreach ($feature_posts as $feature_post)
                        <li>
                            <div class="vk-item-fea">
                                <div class="uni-play-img vk-item-fea-img">
                                  @if (!empty($feature_post->postImage))
                                    <a href="/blog/{{ $feature_post->postSlug }}"><img src="{{ asset('public_assets/image/posts/'.$feature_post->postSlug.'/') }}/{{ $feature_post->postImage }}" alt="{{ $feature_post->postTitle }}"></a>
                                  @else
                                    <a href="/blog/{{ $feature_post->postSlug }}"><img src="{{ asset('public_assets/image/posts/') }}/general_images.png" alt="{{ $feature_post->postTitle }}"></a>
                                  @endif
                                </div>
                                <div class="vk-item-fea-text">
                                    <h2><a href="/blog/{{ $feature_post->postSlug }}">{{ $feature_post->postTitle }}</a></h2>
                                    <div class="vk-item-fea-time">
                                        <ul>
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i> {{ \Carbon\Carbon::parse($feature_post->created_at)->diffForHumans() }}</li>
                                            {{-- <li><i class="fa fa-eye-slash" aria-hidden="true"></i> 2134 views</li>
                                            <li><i class="fa fa-comments-o" aria-hidden="true"></i> 30 Comments</li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                      @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>
