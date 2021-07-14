@include('inc.header')

@if(session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
@endif
<div class="col-sm-6">
    <a href="{{ url('/admin/state/create') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New State</span></a>
</div>
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Code</th>
        <th>Country</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @if(count($states) > 0)
        @foreach($states->all() as $state)
            <tr>
                <td>{{ $state->id }}</td>
                <td>{{ $state->name }}</td>
                <td>{{ $state->code }}</td>
                <td>{{ $state->country->name }}</td>
                <td>
                    <a href='{{ url("/admin/state/{$state->id}/edit") }}' class="edit" data-toggle="modal"><i
                                class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

                    <a href='{{ url("/admin/state/delete/{$state->id}") }}' class="delete" data-toggle="modal"><i
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