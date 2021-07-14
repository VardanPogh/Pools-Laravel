@include('inc.header')

@if(session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
@endif
<div class="col-sm-6">
    <a href="{{ url('/admin/waterslide/create') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Waterslide</span></a>
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
    @if(count($waterslides) > 0)
        @foreach($waterslides->all() as $waterslide)
            <tr>
                <td>{{ $waterslide->facility->name }}</td>
                <td>{{ $waterslide->description }}</td>
                <td>
                    <a href='{{ url("/admin/waterslide/{$waterslide->id}/edit") }}' class="edit" data-toggle="modal"><i
                                class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

                    <a href='{{ url("/admin/waterslide/delete/{$waterslide->id}") }}' class="delete" data-toggle="modal"><i
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