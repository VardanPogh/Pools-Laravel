@include('inc.header')
<form method="POST" action="{{ url('/admin/city') }}">
    {{csrf_field()}}
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
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group col-md-6">
            <label for="country">Country</label>
            <select class="form-control" id="country">
                <option value="" disabled selected>Select</option>
                @if(count(\App\Country::all()) > 0)
                    @foreach(\App\Country::all() as $country)
                        <option value="<?= $country->id?>"><?= $country->name?></option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="country">State</label>
            <select class="form-control" id="state" name="state_id">
                <option value="" disabled selected>Select</option>
            </select>
        </div>

    </div>

    <div class="modal-footer">
        <a href="{{ url('/admin/city') }}" type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">Back</a>
        <input type="submit" class="btn btn-success" value="submit">
    </div>
</form>

<script type="text/javascript">
    const token = '{{ csrf_token() }}';
    $('#country').on('change', function () {
        $('#state').val('');
        $('#state').html('<option value="" disabled selected>Select</option>');
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
</script>

@include('inc.footer')