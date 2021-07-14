@include('inc.header')

@if(session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
@endif
<div class="col-sm-6">
    <a href="{{ url('/admin/facility/create') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Facility</span></a>
</div>
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Website</th>
        <th>Address</th>
        <th>Action</th>

    </tr>
    </thead>
    <tbody>
    @if(count($facilities) > 0)
        @foreach($facilities->all() as $facility)
            <tr>
                <td>{{ $facility->name }}</td>
                <td>{{ $facility->phone_number }}</td>
                <td>{{ $facility->website }}</td>
                <td>{{ $facility->address }}</td>
                <td>
                    <a href='{{ url("/admin/facility/{$facility->id}/edit") }}' class="edit" data-toggle="modal"><i
                                class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

                    <a href='{{ url("/admin/facility/delete/{$facility->id}") }}' class="delete" data-toggle="modal"><i
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
