@include('inc.header')
<form method="POST" action="{{ url('/admin/pool',array($pool->id))}}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT"/>
    {{ csrf_field() }}
    <div class="modal-header">
        <h4 class="modal-title">Add Pool</h4>
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
    </div>
    <div class="modal-body add_modal_pool">
        <div class="form-group col-md-6">
            <label for="facility_id">Facility</label>
            <select class="form-control" id="facility_id" name="facility_id">
                <option value="" disabled>Select</option>
                @if(count(\App\Facility::all()) > 0)
                    @foreach(\App\Facility::all() as $facility)
                        <option value="<?= $facility->id?>"><?= $facility->name?></option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="description">Description</label>
            <select class="form-control" id="description" name="description">
                <option value="" disabled>Select</option>
                <option value="general">General</option>
                <option value="lane">Lane</option>
                <option value="wave">Wave</option>
                <option value="dive">Dive</option>
                <option value="therapy">Therapy</option>
                <option value="infant">Infant</option>
                <option value="hot_tub">Hot Tub</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label>Details</label>
            <input type="text" name="details" class="form-control" value="{{$pool->details}}">
        </div>
        <div class="form-group col-md-6">
            <label for="indoor_outdoor">Indoor/Outdoor</label>
            <select class="form-control" id="indoor_outdoor" name="indoor_outdoor">
                <option value="" disabled>Select</option>
                <option value="indoor">Indoor</option>
                <option value="outdoor">Outdoor</option>
                <option value="both">Both</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="entry">Entry</label>
            <select class="form-control" id="entry" name="entry">
                <option value="" disabled>Select</option>
                <option value="stairs">Stairs with Railing</option>
                <option value="ramp">Ramp with Railing</option>
                <option value="beach_entry">Beach Entry</option>
                <option value="lift_pod">Lift/Pod</option>
                <option value="ladder_only">Ladder Only</option>
            </select>
        </div>
        <div class="form-check col-md-3">
            <input type="checkbox" class="form-check-input" id="heated" name="heated"
            <?=$pool->heated == 1 ? "checked" : ''?> >
            <label class="form-check-label" for=heated">Heated</label>
        </div>
        <div class="col-md-12">
            <div class="form-check col-md-3">
                <label>Targeted temperature</label>
                <input type="number" name="targeted_temperature" class="form-control"
                       value="{{$pool->targeted_temperature}}" step=".1">
            </div>
            <div class="form-check col-md-3">
                <label>Measured temperature</label>
                <input type="number" name="measured_temperature" class="form-control"
                       value="{{$pool->measured_temperature}}" step=".1">
            </div>
            <div class="form-check col-md-3">
                <label>Max depth</label>
                <input type="number" name="max_depth" class="form-control" value="{{$pool->max_depth}}" step=".1">
            </div>
            <div class="form-check col-md-3">
                <label>Min depth</label>
                <input type="number" name="min_depth" class="form-control" value="{{$pool->min_depth}}" step=".1">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-check col-md-3">
                <label>Max length</label>
                <input type="number" name="max_length" class="form-control" value="{{$pool->max_length}}">
            </div>
            <div class="form-check col-md-3">
                <label>Width length</label>
                <input type="number" name="width_length" class="form-control" value="{{$pool->width_length}}">
            </div>
            <div class="form-check col-md-3">
                <label>Bather load</label>
                <input type="number" name="bather_load" class="form-control" value="{{$pool->bather_load}}">
            </div>
            <div class="form-check col-md-3">
                <label>Ropped off lanes</label>
                <input type="number" name="ropped_off_lanes" class="form-control" value="{{$pool->ropped_off_lanes}}">
            </div>
        </div>

        <div class="form-group col-md-6">
            <label>Restrictions</label>
            <input type="text" name="restrictions" class="form-control" value="{{$pool->restrictions}}">
        </div>
        <div class="form-group col-md-6">
            <label>Comments</label>
            <input type="text" name="comments" class="form-control" value="{{$pool->comments}}">
        </div>
        <div class="form-group col-md-6">
            <label for="diving">Diving</label>
            <select class="form-control selectpicker" id="diving" name="diving[]" multiple>
                @if(count(\App\Diving::all()) > 0)
                    @foreach(\App\Diving::all() as $diving)
                        <option value="<?= $diving->id?>"><?= $diving->name?></option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="features">Features</label>
            <select class="form-control selectpicker" id="features" name="feature[]" multiple>
                @if(count(\App\Feature::all()) > 0)
                    @foreach(\App\Feature::all() as $feature)
                        <option value="<?= $feature->id?>"><?= $feature->name?></option>
                    @endforeach
                @endif
            </select>
        </div>

    </div>
    <div class="modal-footer">
        <a href="{{ url('/admin/pool') }}" type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">Back</a>
        <input type="submit" class="btn btn-success" value="submit">
    </div>
</form>
<script type="text/javascript">
    $('.water_checkbox').change(function () {
        if (this.checked) {
            $('#input_' + this.id).prop('disabled', false);
        } else {
            $('#input_' + this.id).prop('disabled', true).val('');
        }
        console.log()
    })
    $(document).ready(function () {
        const pool = <?=$pool?>;
        let diving = pool.diving.map((diving) => {
            return diving.id
        });
        let features = pool.feature.map((feature) => {
            return feature.id
        });
        $('#facility_id').val({{$pool->facility_id}});
        $('#description').val('<?=$pool->description?>');
        $('#indoor_outdoor').val('<?=$pool->indoor_outdoor?>');
        $('#entry').val('<?=$pool->entry?>');
        $('#diving').val(diving);
        $('#features').val(features);
    });

    // function readURL(input) {
    //     if (input.files && input.files[0]) {
    //         var reader = new FileReader();
    //
    //         reader.onload = function (e) {
    //             $('#main_photo').attr('src', e.target.result);
    //         }
    //
    //         reader.readAsDataURL(input.files[0]);
    //     }
    // }
    //
    //
    // $("#imgInput").change(function () {
    //     readURL(this);
    // });


</script>

@include('inc.footer')
