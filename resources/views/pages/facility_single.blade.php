@extends('layouts.site')
@section('content')
    <div class="FacilitySinglePage">
        <div class="image-text">
            <div class="inner-wrap">
                <div class="img mainImg"
                     style="background-image: <?=$facility->main_photo ? "url(/img/" . $facility->main_photo . ")" : 'url(https://www.allianceplast.com/wp-content/uploads/2017/11/no-image.png)';?>"></div>
                <div class="text">
                    <h2>{{$facility->name}}</h2>
                    <p><i class="fas fa-map-marker-alt"></i>{{$facility->address}}</p>
                    <p><a href=""><i class="fas fa-globe-africa"></i>{{$facility->website}}</a></p>
                    <div class="price">
                        <h2>Price</h2>
                        <ul>
                            <li><span>Adult ({{$facility->age_info->adult_age_min}} - {{$facility->age_info->adult_age_max}})</span>${{$facility->age_info->adult_price?$facility->age_info->adult_price : 0 }}
                            </li>
                            <li><span>Child ({{$facility->age_info->child_age_min}} - {{$facility->age_info->child_age_max}})</span>${{$facility->age_info->child_price?$facility->age_info->child_price : 0 }}
                            </li>
                            <li>
                                <span>Family </span>${{$facility->age_info->family_price?$facility->age_info->family_price : 0 }}
                            </li>
                        </ul>
                    </div>

                    <table class="ratingTable">
                        <tr>
                            <td>Family Friendly</td>
                            <td class="rateNumber">{{$facility->family_friendly ? $facility->family_friendly :  0}}</td>
                            <td>Relaxation</td>
                            <td class="rateNumber">{{$facility->relaxation ? $facility->relaxation :  0}}</td>
                            <td>Accessibility</td>
                            <td class="rateNumber">{{$facility->accessibility ? $facility->accessibility :  0}}</td>
                        </tr>
                    </table>
                    <div id="map"></div>
                </div>
            </div>
        </div>

        <div class="singleFeatures">
            <div class="available-pools w-60">
                <div class="inner-wrap">
                    <h2>{{count($facility->pool)}} available pools</h2>
                    <div class="facilitySliderSingle">
                        @foreach($facility->pool as $pool)

                            <div class="item">
                                <div class="info">
                                    <h2 class="text-capitalize">{{$pool->description}}</h2>
                                    <div class="temperature red1 view-emperature-popup">
                                        Temperature: {{$pool->targeted_temperature}} <sup>o</sup></div>
                                    <p>Min Depth: {{$pool->min_depth}}m</p>
                                    <span>{{$pool->details}}</span>
                                    <span>{{$pool->indoor_outdoor}}</span>
                                    <br>
                                    <b>Entry: </b><span class="text-capitalize">{{$pool->entry}};
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="pdl-30 featureMainDiv available-pools w-40">
                <div class="featureDiv">
                    <h2>Facility Features</h2>
                    @if($facility->day_available === 1)
                        <p>Day available</p>
                    @endif
                    @if($facility->fitness_area === 1)
                        <p>Fitness Area</p>
                    @endif
                    @if($facility->viewing_area === 1)
                        <p>Viewing area</p>
                    @endif
                    @if($facility->babysitting === 1)
                        <p>Babysitting</p>
                    @endif
                    @if($facility->swim_diapers === 1)
                        <p>Swim Diapers</p>
                    @endif
                    @if($facility->swim_program === 1)
                        <p>Swim Program</p>
                    @endif

                </div>
                <div class="featureDiv">
                    <h2>Facility Accessibility</h2>
                    @foreach($facility->change_room as $change)
                        <p>{{$change->name}}</p>
                    @endforeach
                </div>
                <div class="featureDiv">
                    <h2>Food and Drinks</h2>
                    @foreach($facility->food as $food)
                        <p>{{$food->name}}</p>
                    @endforeach
                </div>
                <div class="featureDiv">
                    <h2>Pool activities</h2>
                    <?php $featureArray = array();?>
                    @foreach($facility->pool as $pool)
                        @foreach($pool->feature as $feature)
                            <?php if (!in_array($feature->name, $featureArray)) {$featureArray[] = $feature->name;?>
                            <p>{{$feature->name}}</p>
                            <?php }?>
                        @endforeach
                    @endforeach
                </div>

            </div>
        </div>
        <div class="singleFeatures">
            <div class="available-pools">
                <div class="inner-wrap">
                    <h2>OTHER PHOTOS</h2>
                    <div class="row">
                        @foreach($facility->facility_photo as $photo)
                            <div class="col-md-4">
                                <div class="img otherPhotos"
                                     style="background-image:<?='url(/img/' . $photo->url . ')'?>">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/filter.js"></script>

    <script type="text/javascript">
        //Map setting
        let marker;
        let positions = JSON.parse('<?= $facility->gps_location?>');
        let lat = positions.lat;
        let lng = positions.lng;
        console.log(lng);

        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 13,
                center: {lat: lat, lng: lng},
            });
            marker = new google.maps.Marker({
                map,
                animation: google.maps.Animation.DROP,
                position: {lat: lat, lng: lng},
            });

        }

    </script>

    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key={{env('MAP_API')}}&callback=initMap"
            type="text/javascript"></script>
@endsection
