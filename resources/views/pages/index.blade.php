@extends('layouts.site')

@section('content')
    <div id="fullpage">
        <section class="page1 page">
            <div class="inner-page" style="background-image:url(../img/img1.png);">
                <div class="inner-wrap">
                    <div class="title">Find Your <span>Pool</span></div>
                    <p>Where would you like to Swim? Enter Location or Facility</p>


                    <form class="input-wrap" method="POST" action="{{ url('/search') }}">
                        {{ csrf_field() }}
                        <div class="checkbox-wrap">
                            <ul>
                                <li>
                                    <label>
                                        <input type="checkbox" name="hotel[]" value="1">
                                        <span class="label-text">Hotel Pools</span>
                                    </label>
                                </li>

                                <li>
                                    <label>
                                        <input type="checkbox" name="hotel[]" value="2">
                                        <span class="label-text">Public Pools</span>
                                    </label>
                                </li>
                            </ul>
                        </div>

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"
                                data-lat='21.03' data-lng='105.85' id="modalButton">
                        </button>
                        <div class="d-inline-flex">
                            <div class="input">
                                <i class="fas fa-search v-centered"></i>
                                <input type="text" placeholder="Facility or City" name="searchValue">
                            </div>
                            <button class="btn" type="submit">Search</button>
                        </div>
                    </form>


{{--                    <section class="containerTitle">--}}
{{--                        <div>Warmest Pool</div>--}}
{{--                        <div>Best Waterslides</div>--}}
{{--                        <div>Most Relaxful</div>--}}
{{--                        <div>Accessibility</div>--}}
{{--                        <div>Ideal for Kids</div>--}}
{{--                        <div>The Splashtemp Ranking</div>--}}
{{--                    </section>--}}


                </div>
            </div>
        </section>


        <section class="page3 page">
            <div class="inner-page" style="background-image: url(../img/img3.png);">
                <div class="inner-wrap">
                    <div class="title1">coming soon!</div>
                    <div class="title2">Real time lake temperatures</div>
                    <button class="btn">Register</button>
                </div>
            </div>
        </section>

        <section class="page4 page">
            <div class="inner-page" style="background-image: url(../img/img4.png);">
                <div class="inner-wrap">
                    <div class="title">What is the perfect swimming pool water temperature?</div>
                    <button class="btn">View More</button>
                </div>
            </div>

            <div class="page-content">
                <div class="inner-wrap">
{{--                    <div class="types-pool">--}}
{{--                        <div class="inner-wrap">--}}
{{--                            <h2>Types of Swimming Pool</h2>--}}
{{--                            <div class="item-wrap">--}}
{{--                                <div class="item">--}}
{{--                                    <div class="img" style="background-image: url(../img/img8.png);"></div>--}}
{{--                                    <h3>Concrete Swimming Pools</h3>--}}
{{--                                    <p>A concrete pool is a completely customised swimming pool solution. It can be--}}
{{--                                        placed virtually anywhere and give you unlimited design possibilities.</p>--}}
{{--                                </div>--}}
{{--                                <div class="item">--}}
{{--                                    <div class="img" style="background-image: url(../img/img9.png);"></div>--}}
{{--                                    <h3>Fibreglass Composite Swimming Pools</h3>--}}
{{--                                    <p>Fibreglass composite pools come in a varied range of styles, shapes, sizes,--}}
{{--                                        colours and finishes. they are quick and easy to install and perfect for hard to--}}
{{--                                        access areas.</p>--}}
{{--                                </div>--}}
{{--                                <div class="item">--}}
{{--                                    <div class="img" style="background-image: url(../img/img8.png);"></div>--}}
{{--                                    <h3>Above Ground Swimming Pools</h3>--}}
{{--                                    <p>With the advancements in swimming pool manufacturing, you can enjoy all the--}}
{{--                                        lifestyle benefits of a swimming pool even if you are on a budget or don't own a--}}
{{--                                        house.</p>--}}
{{--                                </div>--}}
{{--                                <div class="item">--}}
{{--                                    <div class="img" style="background-image: url(../img/img9.png);"></div>--}}
{{--                                    <h3>Vinyl Liner Pools</h3>--}}
{{--                                    <p>A vinyl-lined pool is a popular and cost-effective option. The vinyl lining is--}}
{{--                                        usually tailor-made to suit the size and shape of your swimming pool.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="blog-wrap">
                        <div class="inner-wrap">
                            <h2>Blog</h2>
                            <div class="item-wrap">
                                @foreach(\App\Blog::take(4)->orderBy('id', 'DESC')->get() as $blog)
                                    <div class="item">
                                        {{--                                        <h2><i class="fas fa-clock"></i>1h ago Gary NG</h2>--}}
                                        <div class="img"
                                             style="background-image: url('img/{{$blog->main_photo}}');"></div>
                                        <h3>{{$blog->name}}</h3>
                                        <p>{{$blog->sub_text}}</p>
                                        <a href="blog_more/{{$blog->id}}" class="btn">View More</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="contact-wrap">
                        <div class="inner-wrap">
                            <h2>Contact Us</h2>
                            <div class="item-wrap ">
                                <div class="item contact-info">
                                    <h2>Address</h2>
                                    <p><a href=""><i class="fas fa-map-marker-alt"></i>Calgary, AB</a>
                                    </p>
                                    <h2>Call Us</h2>
                                    <p><a href=""><i class="fas fa-phone"></i>+1 202 555 0156</a></p>
                                    <h2>Email</h2>
                                    <p><a href="mailto:jeremy@splashtemp.com"><i class="fas fa fa-envelope"></i>jeremy@splashtemp.com</a></p>
                                    <h2>Follow Us</h2>
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
                </div>
            </div>


            <footer>
                <div class="inner-wrap">
                    <div class="footer-wrap">
                        <div class="logo">
                            <a href=""><img src="../img/logo1.png" alt=""></a>
                        </div>

                    </div>
                </div>
            </footer>
        </section>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    Facilities
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12 modal_body_map">
                            <div class="location-map" id="location-map">
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        let marker;
        let positions = <?=$positions?>;
        console.log(positions);

        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 5,
                center: {lat: JSON.parse(positions[0].positions).lat, lng: JSON.parse(positions[0].positions).lng},
            });
            for (let i = 0; i < positions.length; i++) {
                let contentString = '<p><b style="color: black;font-size: 24px">' + positions[i].name + '</b></p><p style="margin-top: 20px"><a style="color: blue;font-size: 15px" href="{{url('details')}}' + '/' + positions[i].id + '">View Facility</a><p/>'
                let currentPosition = JSON.parse(positions[i].positions);
                marker = new google.maps.Marker({
                    position: {lat: currentPosition.lat, lng: currentPosition.lng},
                    map,
                    animation: google.maps.Animation.DROP,
                });
                let infoWindow = new google.maps.InfoWindow({
                    content: contentString,
                    maxWidth: 200,

                });
                marker.addListener("click", () => {
                    console.log('infoWindow ', infoWindow);

                    infoWindow.close();
                    infoWindow.open(map, marker);
                    infoWindow.setPosition({lat: currentPosition.lat, lng: currentPosition.lng});
                });
            }
        }

    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key={{env('MAP_API')}}&callback=initMap"
            type="text/javascript"></script>

@endsection



