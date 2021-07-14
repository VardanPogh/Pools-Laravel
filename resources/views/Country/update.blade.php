@include('inc.header')
<form method="POST" action="{{ url('/admin/country',array($country->id))}}">
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
        <div class="form-group col-md-12">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required value="{{$country->name}}">
        </div>
    </div>
    <div class="modal-footer">
        <a href="{{ url('/admin/') }}" type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">Back</a>
        <input type="submit" class="btn btn-success" value="submit">
    </div>
</form>
<script type="text/javascript">

</script>

@include('inc.footer')