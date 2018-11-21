<div class="col-md-3">
    <aside class="sidebar">
        @if(Auth::user() && Auth::user()->id>0)
            <form>
                <a href="/admin/forum/ana-baslik-ekle"><button type="button" class="btn btn-success" style="margin-bottom: 5px"><i class="fa fa-plus" aria-hidden="true"></i>Yeni Başlık Ekle</button></a>
                <a href="/forum/konu-ekle"><button type="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Yeni Konu Ekle</button></a>
            </form>
        @elseif(Auth::user())
            <a href="/forum/konu-ekle"><button type="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Yeni Konu Ekle</button></a>
        @else
            <button type="button" disabled="disabled" class="btn btn-danger"><i class="fa fa-plus" aria-hidden="true"></i>Yeni Konu Ekle</button>
            <p>Konu Eklemek İçin Giriş Yapınız</p>
        @endif



        <hr />

        <h4>Categories</h4>
        <ul class="nav nav-list primary push-bottom">
            @foreach($anabasliklar as $baslik)
            <li><a href="/forum/{{$baslik->slug}}">{{$baslik->baslik}}</a></li>
            @endforeach
        </ul>

        <div class="tabs">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i> Popular</a></li>
                <li><a href="#recentPosts" data-toggle="tab">Recent</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="popularPosts">
                    <ul class="simple-post-list">
                        <li>
                            <div class="post-image">
                                <div class="img-thumbnail">
                                    <a href="blog-post.html">
                                        <img src="img/blog/blog-thumb-1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="post-info">
                                <a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
                                <div class="post-meta">
                                    Jan 10, 2013
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post-image">
                                <div class="img-thumbnail">
                                    <a href="blog-post.html">
                                        <img src="img/blog/blog-thumb-2.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="post-info">
                                <a href="blog-post.html">Vitae Nibh Un Odiosters</a>
                                <div class="post-meta">
                                    Jan 10, 2013
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post-image">
                                <div class="img-thumbnail">
                                    <a href="blog-post.html">
                                        <img src="img/blog/blog-thumb-3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="post-info">
                                <a href="blog-post.html">Odiosters Nullam Vitae</a>
                                <div class="post-meta">
                                    Jan 10, 2013
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="recentPosts">
                    <ul class="simple-post-list">
                        <li>
                            <div class="post-image">
                                <div class="img-thumbnail">
                                    <a href="blog-post.html">
                                        <img src="img/blog/blog-thumb-2.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="post-info">
                                <a href="blog-post.html">Vitae Nibh Un Odiosters</a>
                                <div class="post-meta">
                                    Jan 10, 2013
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post-image">
                                <div class="img-thumbnail">
                                    <a href="blog-post.html">
                                        <img src="img/blog/blog-thumb-3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="post-info">
                                <a href="blog-post.html">Odiosters Nullam Vitae</a>
                                <div class="post-meta">
                                    Jan 10, 2013
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post-image">
                                <div class="img-thumbnail">
                                    <a href="blog-post.html">
                                        <img src="img/blog/blog-thumb-1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="post-info">
                                <a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
                                <div class="post-meta">
                                    Jan 10, 2013
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <hr />

        <h4>About Us</h4>
        <p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>

    </aside>
</div>