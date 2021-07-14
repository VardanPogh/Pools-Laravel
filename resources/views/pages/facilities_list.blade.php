@extends('layouts.site')

@section('content')

    <div class="container listPage">

        <div id="hiddenDiv" hidden></div>

        <?php if (!isset($searchValue)) $searchValue = ''?>
        <div class="pools-wrap" style="margin-top: 7rem">

            <div class="search">

                <div class="inner-wrap">
                    <div class="filter-m">
                        <h2>Filter</h2>
                        <div class="filter-icon"><i class="fas fa-filter"></i></div>
                    </div>

                    <form class="searchForm" method="POST" action="{{ url('/search') }}">
                        <input name="sort" id="sortInput" hidden>
                        <div class="dropdown">
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <button type="button" class="dropdown-item sortingButton" id="sum_of_price">
                                    Price
                                </button>
                                <button type="button" class="dropdown-item sortingButton" id="family_friendly">
                                    Splashtemp rank by
                                    Family Friendly
                                </button>

                                <button type="button" class="dropdown-item sortingButton" id="relaxation">Splashtemp
                                    rank by
                                    Relaxation
                                </button>
                                <button type="button" class="dropdown-item sortingButton" id="accessibility">Splashtemp
                                    rank by
                                    Accessibility
                                </button>
                            </div>
                        </div>
                        <div class="checkbox-wrap">
                            <ul>
                                <li>
                                    <label>
                                        <input type="checkbox" name="hotel[]"
                                               value="1" <?=in_array("1", $hotel) ? 'checked' : ''?> >
                                        <span class="label-text">Hotel Pools</span>
                                    </label>
                                </li>

                                <li>
                                    <label>
                                        <input type="checkbox" name="hotel[]"
                                               value="2" <?=in_array("2", $hotel) ? 'checked' : ''  ?>>
                                        <span class="label-text">Public Pools</span>
                                    </label>
                                </li>
                            </ul>
                        </div>

                        {{ csrf_field() }}
                        <div class="input-wrap">
                            <div class="input">
                                <i class="fas fa-search v-centered"></i>
                                <input type="text" placeholder="Facility or City" name="searchValue"
                                       value="{{$searchValue}}">
                            </div>
                            <button class="btn" type="submit">Search</button>
                        </div>
{{--                        <button type="button" id="locationButton" class="btn mk-20 btn-info" onclick="getLocation()"--}}
{{--                                style="float: right">--}}
{{--                            <i style='font-size:18px;top: 2px; position: relative;' class='fas'>&#xf124;</i> Get Near--}}
{{--                            Pools--}}
{{--                        </button>--}}
                        <button type="button" class="btn btn-primary mapIcon" data-toggle="modal" data-target="#myModal"
                                data-lat='21.03' data-lng='105.85' id="modalButton" >
                        </button>

                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sort By
                        </button>
                    </form>
                </div>

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


            <div class="pools-list">

                <div class="inner-wrap">
                    <div class="filterParentDiv">
                        <div class="left-wrap">
                            <h2>Filters
                                <div class="hide-filters"><i class="fas fa-times"></i></div>
                            </h2>
                            <ul class="filters">
                                <li>
                                    <span class="drop-t-open eff03">Specific Pool Type</span>
                                    <div class="dropdown-wrap">
                                        <div class="reset-all" onclick="resetFilter('pool_type')">Reset all</div>
                                        <ul>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="lane" class="pool_type"
                                                           data-type="filter">
                                                    <span class="label-text">Lane</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="wave" class="pool_type"
                                                           data-type="filter">
                                                    <span class="label-text">Wave</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="dive" class="pool_type"
                                                           data-type="filter">
                                                    <span class="label-text">Dive</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="infant" class="pool_type"
                                                           data-type="filter">
                                                    <span class="label-text">Infant</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="hot_tub" class="pool_type"
                                                           data-type="filter">
                                                    <span class="label-text">Hot Tub</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="therapy" class="pool_type"
                                                           data-type="filter">
                                                    <span class="label-text">Therapy</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <span class="drop-t-open eff03">Pool Temperature (Degree Celsius)</span>
                                    <div class="dropdown-wrap">
                                        <div class="reset-all" onclick="resetFilter('pool_temperature')">Reset all</div>
                                        <ul>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="1"
                                                           class="pool_temperature" data-type="filter_number">
                                                    <span class="label-text">27 and under (Cold)</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="2"
                                                           class="pool_temperature" data-type="filter_number">
                                                    <span class="label-text">28-29 (Cool)</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="3"
                                                           class="pool_temperature" data-type="filter_number">
                                                    <span class="label-text">30-31 (Mild)</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="4"
                                                           class="pool_temperature" data-type="filter_number">
                                                    <span class="label-text">32-33 (Comfortable)</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="5"
                                                           class="pool_temperature" data-type="filter_number">
                                                    <span class="label-text">34 or Above (Warm)</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <span class="drop-t-open eff03">Pool Features</span>
                                    <div class="dropdown-wrap">
                                        <div class="reset-all" onclick="resetFilter('pool_feature')">Reset all</div>
                                        <ul>
                                            @foreach(\App\Feature::all() as $feature)
                                                <li>
                                                    <label>
                                                        <input type="checkbox" value="{{$feature->id}}"
                                                               class="pool_feature" data-type="filter_multiple">
                                                        <span class="label-text">{{$feature->name}}</span>
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <span class="drop-t-open eff03">Diving</span>
                                    <div class="dropdown-wrap">
                                        <div class="reset-all" onclick="resetFilter('pool_diving')">Reset all</div>
                                        <ul>
                                            @foreach(\App\Diving::all() as $diving)
                                                <li>
                                                    <label>
                                                        <input type="checkbox" value="{{$diving->id}}"
                                                               class="pool_diving" data-type="filter_multiple">
                                                        <span class="label-text">{{$diving->name}}</span>
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <span class="drop-t-open eff03">Facility Accessibility</span>
                                    <div class="dropdown-wrap">
                                        <div class="reset-all" onclick="resetFilter('pool_change_room')">Reset all</div>
                                        <ul>
                                            @foreach(\App\Change_room::all() as $change_room)
                                                <li>
                                                    <label>
                                                        <input type="checkbox" value="{{$change_room->id}}"
                                                               class="pool_change_room" data-type="filter_multiple">
                                                        <span class="label-text">{{$change_room->name}}</span>
                                                    </label>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <span class="drop-t-open eff03">Pool Accessibility</span>
                                    <div class="dropdown-wrap">
                                        <div class="reset-all" onclick="resetFilter('pool_entry')">Reset all</div>
                                        <ul>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="stairs" class="pool_entry"
                                                           data-type="filter">
                                                    <span class="label-text">Stairs with Railing</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="ramp" class="pool_entry"
                                                           data-type="filter">
                                                    <span class="label-text">Ramp with Railing</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="beach_entry" class="pool_entry"
                                                           data-type="filter">
                                                    <span class="label-text">Beach Entry</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="lift_pod" class="pool_entry"
                                                           data-type="filter">
                                                    <span class="label-text">Lift/Pod</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="ladder_only" class="pool_entry"
                                                           data-type="filter">
                                                    <span class="label-text">Ladder Only</span>
                                                </label>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <span class="drop-t-open eff03">Slide Height</span>
                                    <div class="dropdown-wrap">
                                        <div class="reset-all" onclick="resetFilterWaterslide('slideHeight')">Reset all</div>
                                        <ul>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="1"
                                                           class="slide_height" data-type="slide_height_filter">
                                                    <span class="label-text">Small (1 Story)</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="2"
                                                           class="slide_height" data-type="slide_height_filter">
                                                    <span class="label-text">Medium (2 Stories)</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="3"
                                                           class="slide_height" data-type="slide_height_filter">
                                                    <span class="label-text">Tall (3 Stories)</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="4"
                                                           class="slide_height" data-type="slide_height_filter">
                                                    <span class="label-text">Very Tall (4 Stories)</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="5"
                                                           class="slide_height" data-type="slide_height_filter">
                                                    <span class="label-text">Very Very Tall (5+ Stories)</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="right-wrap">
                            <ul>
                                @if(count($facilities) == 0)
                                    <li>
                                        <div class="img"
                                             style="background-image:url(/img/coming-soon.png);width: 60%"></div>
                                    </li>
                                @else
                                    @foreach($facilities as $key=>$facility)

                                        <form method="GET" action="{{ url('/details',array($facility->id)) }}"
                                              class="facilityDiv">
                                            <li id="li_{{$key}}">
                                                <div class="slider facilitySlider img">
                                                    <div class="img"
                                                         style="background-image: <?=$facility->main_photo ? "url(/img/" . $facility->main_photo . ")" : 'url(https://www.allianceplast.com/wp-content/uploads/2017/11/no-image.png)';?>"></div>
                                                    @foreach($facility->facility_photo as $key1=>$photo)
                                                        <div class="img"
                                                             style="background-image: url('/img/{{$photo->url}}')"></div>
                                                    @endforeach
                                                </div>
                                                <div class="info">
                                                    <h2 class="facilityName">{{$facility->name}}</h2>
                                                    <h4 class="available-pools">Available
                                                        pools: {{count($facility->pool)}} </h4>
                                                    <div class="slider sliderik " style="height: 130px"
                                                         id="poolsWaterslides">
                                                        @foreach($facility->pool as $key=>$pool)
                                                            <?php
                                                            $featureArray = [];
                                                            foreach ($pool->feature as $feature) {
                                                                $featureArray[] = $feature->id;
                                                            }
                                                            $divingArray = [];
                                                            foreach ($pool->diving as $diving) {
                                                                $divingArray[] = $diving->id;
                                                            }
                                                            $change_roomArray = [];
                                                            foreach ($facility->change_room as $change_room) {
                                                                $change_roomArray[] = $change_room->id;
                                                            }
                                                            ?>
                                                            <div class="item inner filter-{{$key}}-{ {$facility->id}}"
                                                                 id="filter-{{$key}}-{{$facility->id}}"
                                                                 data-pool_type="{{$pool->description}}"
                                                                 data-pool_entry="{{$pool->entry}}"
                                                                 data-pool_feature="{{json_encode($featureArray)}}"
                                                                 data-pool_diving="{{json_encode($divingArray)}}"
                                                                 data-pool_change_room="{{json_encode($change_roomArray)}}"
                                                                 data-name="pool_filter"
                                                                 data-pool_temperature="{{$pool->targeted_temperature}}"
                                                                 data-multi_name="pool_filter_multiple"
                                                                 data-show=true
                                                                 data-require={"pool_type":true,"pool_entry":true,"pool_feature":true,"pool_diving":true,"pool_change_room":true,"pool_temperature":true}
                                                            >
                                                                <h2>{{$pool->description}}</h2>
                                                                <p>
                                                                    <span class="view-emperature-popup">Temperature: <b>{{$pool->targeted_temperature}} <sup>o</sup></b></span>
                                                                    Min Depth: {{$pool->min_depth}}m </p>
                                                            </div>
                                                        @endforeach
                                                        @foreach($facility->waterslide as $waterslide)
                                                            <?php
                                                            foreach ($facility->change_room as $change_room) {
                                                                $change_roomArray[] = $change_room->id;
                                                            }
                                                            ?>
                                                            <div class="item inner"
                                                                 data-name="waterslide_filter"
                                                                 data-slide_height="{{$waterslide->slide_height}}"
                                                                 data-show=true
                                                                 data-require={"slide_height":true}
                                                            >
                                                                <h2>{{$waterslide->description}}</h2>
                                                                <p>
                                                                    <span class="view-emperature-popup text-capitalize">{{$waterslide->indoor_outdoor}}</span>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="price">
                                                        <h2>Splashtemp Rating</h2>
                                                    </div>
                                                    <div class="ratingTable">
                                                        <span>Family Friendly</span>
                                                        <span class="rateNumber">{{$facility->family_friendly ? $facility->family_friendly :  0}}</span>
                                                        <span>Relaxation</span>
                                                        <span class="rateNumber">{{$facility->relaxation ? $facility->relaxation :  0}}</span>
                                                        <span>Accessibility</span>
                                                        <span class="rateNumber">{{$facility->accessibility ? $facility->accessibility :  0}}</span>
                                                    </div>
                                                    <?php
                                                    $isHotel = false;
                                                    foreach ($facility->pool as $pool) {
                                                        if ($pool->hotel == 1) {
                                                            $isHotel = true;
                                                        }
                                                    }
                                                    ?>
                                                    @if($isHotel != true)
                                                        <div class="price">
                                                            <h2>Price</h2>
                                                            <ul>
                                                                <li>
                                                                    <span>Adult ({{$facility->age_info->adult_age_min}} - {{$facility->age_info->adult_age_max}})</span>${{$facility->age_info->adult_price?$facility->age_info->adult_price : 0 }}
                                                                </li>
                                                                <li>
                                                                    <span>Child ({{$facility->age_info->child_age_min}} - {{$facility->age_info->child_age_max}})</span>${{$facility->age_info->child_price?$facility->age_info->child_price : 0 }}
                                                                </li>
                                                                <li>
                                                                    <span>Family </span>${{$facility->age_info->family_price?$facility->age_info->family_price : 0 }}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    @endif
                                                    <p>
                                                        <i class="fas fa-map-marker-alt"></i>{{$facility->city?$facility->city->name:'Coming soon'}}
                                                    </p>
                                                    <p><a href="{{$facility->website}}"><i
                                                                    class="fas fa-globe-africa"></i>Website
                                                        </a>
                                                    </p>
                                                    <button class="btn" type="submit">View More</button>
                                                </div>
                                            </li>
                                        </form>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ url('/search_nearby') }}" id="nearlyForm">
        {{ csrf_field() }}
        <input hidden id="positions" name="positions" type="text">
    </form>


@endsection
<script type="text/javascript" src="/js/jquery.js"></script>
<script src="https://huynhhuynh.github.io/owlcarousel2-filter/dist/owlcarousel2-filter.min.js"></script>
<script type="text/javascript" src="{{ asset('js/filter.js') }}"></script>

<script type="text/javascript">
    function getLocation() {
        navigator.geolocation.getCurrentPosition(getNearby);
    }

    function getNearby(position) {
        const {latitude, longitude} = position.coords;
        $('#positions').val(JSON.stringify({lat: latitude, lng: longitude}));
        $('#nearlyForm').submit();

    }

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