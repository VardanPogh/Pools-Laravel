@include('inc.header')
<form method="POST" action="{{ url('/admin/state',array($state->id))}}">
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
    <div class="modal-body add_modal_country">
        <div class="form-group col-md-6">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required value="{{$state->name}}">
        </div>
        <div class="form-group col-md-6">
            <label>Code</label>
            <input type="text" name="code" class="form-control" required value="{{$state->code}}">
        </div>
        <div class="form-group col-md-6">
            <label for="country">Country</label>
            <select class="form-control" id="country" name="country_id">
                <option value="" disabled selected>Select</option>
                @if(count(\App\Country::all()) > 0)
                    @foreach(\App\Country::all() as $country)
                        <option value="<?= $country->id?>" <?=$state->country_id == $country->id ? "selected" : ""?>><?= $country->name?></option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>
    <div class="modal-footer">
        <a href="{{ url('/admin/state') }}" type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">Back</a>
        <input type="submit" class="btn btn-success" value="submit">
    </div>
</form>
<script type="text/javascript">

</script>

@include('inc.footer')