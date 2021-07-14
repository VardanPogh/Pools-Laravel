@include('inc.header')
<form method="POST" action="{{ url('/admin/facility') }}" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="modal-header">
        <h4 class="modal-title">Add Facility</h4>
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
    </div>
    <div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="hotel" id="Hotel" value="1" checked>
            <label class="form-check-label" for="Hotel">
                Hotel
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="hotel" id="Public" value="2">
            <label class="form-check-label" for="Public">
                Public
            </label>
        </div>
    </div>
    <div class="modal-body add_modal">
        <div class="form-group col-md-6">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group col-md-6">
            <label>Operator</label>
            <input type="text" name="operator" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label>Address</label>
            <input type="text" name="address" class="form-control" required>
        </div>
        <div class="form-group col-md-6">
            <label>Phone Number</label>
            <input type="text" name="phone_number" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label>website</label>
            <input type="text" name="website" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label>Other comments</label>
            <input type="text" name="other_comments" class="form-control">
        </div>
        {{-- selects --}}
        <div class="form-group col-md-6">
            <label for="country">Country</label>
            <select class="form-control" id="country">
                <option value="" disabled selected>Select</option>
                @if(count($countries) > 0)
                    @foreach($countries->all() as $country)
                        <option value="<?= $country->id?>"><?= $country->name?></option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="country">State</label>
            <select class="form-control" id="state">
                <option value="" disabled selected>Select</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="country">City</label>
            <select class="form-control" id="city" name="city_id" required>
                <option value="" disabled selected>Select</option>
            </select>
        </div>
        {{-- chechbox --}}
        <div class="col-md-12 checkboxDiv">
            <div class="form-check col-md-3">
                <input type="checkbox" class="form-check-input" id="day_available" name="day_available">
                <label class="form-check-label" for=day_available">Day available</label>
            </div>
            <div class="form-check col-md-3">
                <input type="checkbox" class="form-check-input" id="fitness_area" name="fitness_area">
                <label class="form-check-label" for=fitness_area">Fitness Area</label>
            </div>
            <div class="form-check col-md-3">
                <input type="checkbox" class="form-check-input" id="other_multi_recreation"
                       name="other_multi_recreation">
                <label class="form-check-label" for=other_multi_recreation">Other Multi Recreation</label>
            </div>
            <div class="form-check col-md-3">
                <input type="checkbox" class="form-check-input" id="babysitting" name="babysitting">
                <label class="form-check-label" for=babysitting">Babysitting</label>
            </div>
            <div class="form-check col-md-3">
                <input type="checkbox" class="form-check-input" id="swim_diapers" name="swim_diapers">
                <label class="form-check-label" for=swim_diapers">Swim diapers</label>
            </div>
            <div class="form-check col-md-3">
                <input type="checkbox" class="form-check-input" id="swim_program" name="swim_program">
                <label class="form-check-label" for=swim_program">Swim program</label>
            </div>
            <div class="form-check col-md-3">
                <input type="checkbox" class="form-check-input" id="viewing_area" name="viewing_area">
                <label class="form-check-label" for=viewing_area">Viewing area</label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-check col-md-4">
                <label>Adult price</label>
                <input type="number" name="adult_price" class="form-control" step=".01">
            </div>
            <div class="form-check col-md-4">
                <label>Adult age minimum</label>
                <input type="number" name="adult_age_min" class="form-control">
            </div>
            <div class="form-check col-md-4">
                <label>Adult age maximum</label>
                <input type="number" name="adult_age_max" class="form-control">
            </div>
            <div class="form-check col-md-4">
                <label>Youth price</label>
                <input type="number" name="youth_price" class="form-control" step=".01">
            </div>
            <div class="form-check col-md-4">
                <label>Youth age minimum</label>
                <input type="number" name="youth_age_min" class="form-control">
            </div>
            <div class="form-check col-md-4">
                <label>Youth age maximum</label>
                <input type="number" name="youth_age_max" class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-check col-md-4">
                <label>Child price</label>
                <input type="number" name="child_price" class="form-control" step=".01">
            </div>
            <div class="form-check col-md-4">
                <label>Child age minimum</label>
                <input type="number" name="child_age_min" class="form-control">
            </div>
            <div class="form-check col-md-4">
                <label>Child age maximum</label>
                <input type="number" name="child_age_max" class="form-control">
            </div>
            <div class="form-check col-md-4">
                <label>Infant price</label>
                <input type="number" name="infant_price" class="form-control" step=".01">
            </div>
            <div class="form-check col-md-4">
                <label>Infant age minimum</label>
                <input type="number" name="infant_age_min" class="form-control">
            </div>
            <div class="form-check col-md-4">
                <label>Infant age maximum</label>
                <input type="number" name="infant_age_max" class="form-control">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-check col-md-4">
                <label>Senior price</label>
                <input type="number" name="senior_price" class="form-control" step=".01">
            </div>
            <div class="form-check col-md-4">
                <label>Senior age minimum</label>
                <input type="number" name="senior_age_min" class="form-control">
            </div>
            <div class="form-check col-md-4">
                <label>Senior age maximum</label>
                <input type="number" name="senior_age_max" class="form-control">
            </div>
            <div class="form-check col-md-6">
                <label>Family price</label>
                <input type="number" name="family_price" class="form-control" step=".01">
            </div>
            <div class="form-check col-md-6">
                <label>Max in family</label>
                <input type="number" name="max_in_family" class="form-control">
            </div>
        </div>
        <div class="form-group col-md-6">
            <label>Pricing notes</label>
            <input type="text" name="pricing_notes" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="change_room">Change Room</label>
            <select class="form-control selectpicker" id="change_room" name="change_room[]" multiple>
                @if(count(\App\Change_room::all()) > 0)
                    @foreach(\App\Change_room::all() as $change_room)
                        <option value="<?= $change_room->id?>"><?= $change_room->name?></option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-check col-md-3">
            <label>Family/Kid Friendly &#11088; &#11088; &#11088;</label>
            <input type="number" name="family_friendly" class="form-control" step=".1" min="0" max="10">
        </div>
        <div class="form-check col-md-3">
            <label>Party Atmosphere &#11088; &#11088; &#11088;</label>
            <input type="number" name="party_atmosphere" class="form-control" step=".1" min="0" max="10">
        </div>
        <div class="form-check col-md-3">
            <label>Relaxation &#11088; &#11088; &#11088;</label>
            <input type="number" name="relaxation" class="form-control" step=".1" min="0" max="10">
        </div>
        <div class="form-check col-md-3">
            <label>Accessibility &#11088; &#11088; &#11088;</label>
            <input type="number" name="accessibility" class="form-control" step=".1" min="0" max="10">
        </div>
        <div class="form-group col-md-6">
            <label for="food">Food and Drinks</label>
            <select class="form-control selectpicker" id="food" name="food[]" multiple>
                @if(count(\App\Food::all()) > 0)
                    @foreach(\App\Food::all() as $food)
                        <option value="<?= $food->id?>"><?= $food->name?></option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group col-md-6">
            <label>Main Photo</label>
            <input type="file" name="main_photo" id="imgInput" accept="image/*">
            <img id="main_photo"/>
        </div>
        <div class="form-group col-md-12">
            <label>Additional Photos</label>
            <input type="file" name="many_photos[]" id="imgInputMany" multiple accept="image/*">
            <div id="manyPhotos"></div>
        </div>

    </div>
    <div id="map"></div>
    <input hidden type="text" name="gps_location" id="gps_location">
    <div class="modal-footer">
        <a href="{{ url('/admin/') }}" type="button" class="btn btn-default" data-dismiss="modal"
           value="Cancel">Back</a>
        <input type="submit" class="btn btn-success" value="Submit">
    </div>
</form>
<script type="text/javascript">
    // Map setting
    let marker;

    function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 13,
            center: {lat: 45.43656436203468, lng: -75.56174984741217},
        });
        marker = new google.maps.Marker({
            map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: {lat: 45.43656436203468, lng: -75.56174984741217},
        });
        marker.addListener("click", toggleBounce);
        marker.addListener("dragend", setMapPositions);
    }

    function setMapPositions() {
        let lat = marker.position.lat();
        let lng = marker.position.lng();
        let gps_location = {
            lat: lat,
            lng: lng
        };
        $('#gps_location').val(JSON.stringify(gps_location))
    }

    function toggleBounce() {
        if (marker.getAnimation() !== null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }

    //end Map setting
    const token = '{{ csrf_token() }}';
    $('#country').on('change', function () {
        $('#state,#city').val('');
        $('#state,#city').html('<option value="" disabled selected>Select</option>');
        $.ajax('{{ url('/') }}/admin/get_state_by_country_id/' + $('#country').val(), {
            headers: {
                'X-CSRF-TOKEN': token
            },
            type: 'GET',
            success: function (data, status) {
                console.log('data ', data)
                data.forEach(state => {
                    $('#state').append('<option value=' + state.id + '>' + state.name + '</option>')
                });

            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log('errrrr')
            }
        });
    })

    $('#state').on('change', function () {
        $('#city').val('');
        $('#city').html('<option value="" disabled selected>Select</option>');
        $.ajax('{{ url('/') }}/admin/get_city_by_state_id/' + $('#state').val(), {
            headers: {
                'X-CSRF-TOKEN': token
            },
            type: 'GET',
            success: function (data, status) {
                console.log('data ', data)
                data.forEach(city => {
                    $('#city').append('<option value=' + city.id + '>' + city.name + '</option>')
                });
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log('errrrr')
            }
        });
    })

    function readURL(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();
            reader.onload = function (e) {
                $('#main_photo').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    };

    function readManyURL(input) {
        $('#manyPhotos').html(' ');
        for (let i = 0; i < input.files.length; i++) {
            let reader = new FileReader();
            reader.onload = function (e) {
                $('#manyPhotos').append('<img class="manyPhotosSingle newPhoto" src="' + e.target.result + '" alt=" "/>');
            };
            reader.readAsDataURL(input.files[i]);
        }
    };

    $("#imgInput").change(function () {
        readURL(this);
    });
    $("#imgInputMany").change(function () {
        readManyURL(this);
    });
</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key={{env('MAP_API')}}&callback=initMap"
        type="text/javascript"></script>

@include('inc.footer')
