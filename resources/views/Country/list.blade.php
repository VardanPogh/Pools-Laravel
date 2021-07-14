@include('inc.header')

@if(session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
@endif
<div class="col-sm-6">
    <a href="{{ url('/admin/country/create') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Country</span></a>
</div>
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @if(count($countries) > 0)
        @foreach($countries->all() as $country)
            <tr>
                <td>{{ $country->id }}</td>
                <td>{{ $country->name }}</td>
                <td>
                 <a href='{{ url("/admin/country/{$country->id}/edit") }}' class="edit" data-toggle="modal"><i
                                class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

                    <a href='{{ url("/admin/country/delete/{$country->id}") }}' class="delete" data-toggle="modal"><i
                                class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                </td>
            </tr>
        @endforeach
    @endif

    </tbody>
</table>
</div>
</div>

@include('inc.footer')