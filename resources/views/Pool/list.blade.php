@include('inc.header')

@if(session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
@endif
<div class="col-sm-6">
    <a href="{{ url('/admin/pool/create') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Pool</span></a>
</div>
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>Facility</th>
        <th>Description</th>
        <th><Action></Action></th>
    </tr>
    </thead>
    <tbody>
    @if(count($pools) > 0)
        @foreach($pools->all() as $pool)
            <tr>
                <td>{{ $pool->facility->name }}</td>
                <td>{{ $pool->description }}</td>
                <td>
                    <a href='{{ url("/admin/pool/{$pool->id}/edit") }}' class="edit" data-toggle="modal"><i
                                class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

                    <a href='{{ url("/admin/pool/delete/{$pool->id}") }}' class="delete" data-toggle="modal"><i
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