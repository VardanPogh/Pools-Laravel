@include('inc.header')
<?php
function is_waterslide($id, $array)
{
    foreach ($array as $index => $water) {
        if ($id == $water->id) {
            return $index;
        }
    }
}
?>
<form method="POST" action="{{ url('/admin/waterslide',array($waterslide->id))}}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT"/>
    {{ csrf_field() }}
    <div class="modal-header">
        <h4 class="modal-title">Edit Waterslide</h4>
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
    </div>
    <div class="modal-body add_modal_water">
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
            <label>Description</label>
            <input type="text" name="description" class="form-control" value="{{$waterslide->description}}">
        </div>
        <div class="form-group col-md-6">
            <label>Min Height</label>
            <input type="number" name="min_height" class="form-control" step="0.1" value="{{$waterslide->min_height}}">
        </div>
        <div class="form-group col-md-6">
            <label>Min Age</label>
            <input type="number" name="min_age" class="form-control" value="{{$waterslide->min_age}}">
        </div>
        <div class="form-group col-md-6">
            <label>Outlet</label>
            <input type="text" name="outlet" class="form-control" value="{{$waterslide->outlet}}">
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
            <input type="text" name="requires" class="form-control" value="{{$waterslide->requires}}">
        </div>
        <div class="form-group col-md-6">
            <label>Other Comments</label>
            <input type="text" name="other_comments" class="form-control" value="{{$waterslide->other_comments}}">
        </div>
        <div class="form-group col-md-6">
            <label for="feature_of_waterslide">Features</label>
            <select class="form-control selectpicker" id="feature_of_waterslide" name="feature_of_waterslide[]"
                    multiple>
                @if(count(\App\Feature_of_waterslide::all()) > 0)
                    @foreach(\App\Feature_of_waterslide::all() as $feature)
                        <option value="<?= $feature->id?>"><?= $feature->name?></option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>
    <div class="modal-footer">
        <a href="{{ url('/admin/waterslide') }}" type="button" class="btn btn-default" data-dismiss="modal"
           value="Cancel">Back</a>
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
        const waterslide = <?=$waterslide?>;
        let feature_of_waterslide = waterslide.feature_of_waterslide.map((feature) => {
            return feature.id
        });
        $('#facility_id').val({{$waterslide->facility_id}});
        $('#speed').val('<?=$waterslide->speed?>');
        $('#slide_height').val('<?=$waterslide->slide_height?>');
        $('#feature_of_waterslide').val(feature_of_waterslide);
    });

</script>

@include('inc.footer')