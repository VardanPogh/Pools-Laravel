@extends('layouts.site')

@section('content')


    <div class="BlogSinglePost">
        <div class="image-text">
            <div class="inner-wrap">
                <div class="img" style="background-image: url('/img/{{$blog->main_photo}}');"></div>
                <div class="text">
                    <h2>{{$blog->name}}</h2>
                    <p>{{$blog->sub_text}}</p>
                </div>
            </div>
        </div>

        <div class="BlogSinglePost-text">
            <div class="inner-wrap" id="formatHtml">

            </div>
        </div>

    </div>

    <div class="blog-wrap">
        <div class="inner-wrap">
            <h2>More interested posts</h2>
            <div class="item-wrap">
                @foreach(\App\Blog::take(4)->get() as $blog_single)
                    <div class="item">
                        <div class="img" style="background-image: url('/img/{{$blog_single->main_photo}}');"></div>
                        <h3>{{$blog_single->name}}</h3>
                        <p>{{$blog_single->sub_text}}</p>
                        <a href="/blog_more/{{$blog_single->id}}" class="btn">View More</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="contact-wrap">
        <div class="inner-wrap">
            <h2>Contact Us</h2>
            <div class="item-wrap">
                <div class="item">
                    <form action="">
                        <div class="input-wrap">
                            <input type="text" placeholder="First name, last name">
                        </div>
                        <div class="input-wrap">
                            <input type="text" placeholder="Email">
                        </div>
                        <div class="input-wrap">
                            <textarea name="" id="" cols="30" rows="8" placeholder="Your text here"></textarea>
                        </div>
                        <button class="btn">Send</button>
                    </form>
                </div>
                <div class="item contact-info">
                    <h2>Address</h2>
                    <p><a href=""><i class="fas fa-map-marker-alt"></i>Lorem ipsum dolor sit amet</a></p>
                    <h2>Call Us</h2>
                    <p><a href=""><i class="fas fa-phone"></i>+1 202 555 0156</a></p>
                    <h2>Follow us</h2>
                    <p class="social">
                        <a href=""><img src="../img/facebook.svg" alt=""></a>
                        <a href=""><img src="../img/twitter.svg" alt=""></a>
                        <a href=""><img src="../img/instagram.svg" alt=""></a>
                        <a href=""><img src="../img/linkedin.svg" alt=""></a>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../js/slimscroll.min.js"></script>
    <script type="text/javascript" src="../js/fullpage.js"></script>


    <script src="/editor/minified/sceditor.min.js"></script>

    <!-- Include the BBCode or XHTML formats -->
    <script src="/editor/minified/formats/bbcode.js"></script>
    <script src="/editor/minified/formats/xhtml.js"></script>

    <script>
                {{--let str = (`{{$blog->description}}`).replace('&lt;', '<').replace('&gt;', '>').replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&quot;/g, '\\"').replace(/&nbsp;/g, ' ').replace(`\"`, ' ');--}}
        let str = `{!! $blog->description !!}`
        $('#formatHtml').html(str).text()
        console.log(str)
    </script>

@endsection
