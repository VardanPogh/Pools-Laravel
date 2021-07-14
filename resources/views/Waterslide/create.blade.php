@include('inc.header')
<form method="POST" action="{{ url('/admin/waterslide') }}" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="modal-header">
        <h4 class="modal-title">Add Pool</h4>
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
    </div>
    <div class="modal-body add_modal_water">
        <div class="form-group col-md-6">
            <label for="facility_id">Facility</label>
            <select class="form-control" id="facility_id" name="facility_id" required>
                <option value="" disabled selected>Select</option>
                @if(count(\App\Facility::all()) > 0)
                    @foreach(\App\Facility::all() as $facility)
                        <option value="<?= $facility->id?>"><?= $facility->name?></option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group col-md-6">
            <label>Description</label>
            <input type="text" name="description" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label>Min Height</label>
            <input type="number" name="min_height" class="form-control" step="0.1">
        </div>
        <div class="form-group col-md-6">
            <label>Min Age</label>
            <input type="number" name="min_age" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label>Outlet</label>
            <input type="text" name="outlet" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="slide_height">Slide Height</label>
            <select class="form-control" id="slide_height" name="slide_height">
                <option value="" disabled selected>Select</option>
                <option value="1">Small (1 Story)</option>
                <option value="2">Medium (2 Stories)</option>
                <option value="3">Tall (3 Stories)</option>
                <option value="4">Very Tall (4 Stories)</option>
                <option value="5">Very Very Tall (5+ Stories)</option>
            </select>
        </div>

        <div class="form-group col-md-6">
            <label for="speed">Speed</label>
            <select class="form-control" id="speed" name="speed">
                <option value="" disabled selected>Select</option>
                <option value="slow">Slow</option>
                <option value="medium">Medium</option>
                <option value="fast">Fast</option>
                <option value="extreme">Extreme</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label>Requires/allows Tube/board</label>
            <input type="text" name="requires" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label>Other Comments</label>
            <input type="text" name="other_comments" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="feature_of_waterslide">Features</label>
            <select class="form-control selectpicker" id="feature_of_waterslide" name="feature_of_waterslide[]" multiple>
                @if(count(\App\Feature_of_waterslide::all()) > 0)
                    @foreach(\App\Feature_of_waterslide::all() as $feature)
                        <option value="<?= $feature->id?>"><?= $feature->name?></option>
                    @endforeach
                @endif
            </select>
        </div>

    </div>
    <div class="modal-footer">
        <a href="{{ url('/admin/waterslide') }}" type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">Back</a>
        <input type="submit" class="btn btn-success" value="Submit">
    </div>
</form>
<script type="text/javascript">
    $('.water_checkbox').change(function () {
        if (this.checked) {
            $('#input_' + this.id).prop('disabled', false);
        } else {
            $('#input_' + this.id).prop('disabled', true).val('');
        }
    })


</script>

@include('inc.footer')