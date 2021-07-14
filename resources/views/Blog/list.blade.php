
@include('inc.header')

@if(session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
@endif
<div class="col-sm-6">
    <a href="{{ url('/admin/blog/create') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Blog</span></a>
</div>
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>Name</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @if(count($blogs) > 0)
        @foreach($blogs->all() as $blog)
            <tr>
                <td>{{ $blog->name }}</td>
                <td>
                    <a href='{{ url("/admin/blog/{$blog->id}/edit") }}' class="edit" data-toggle="modal"><i
                                class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href='{{ url("/admin/blog/delete/{$blog->id}") }}' class="delete" data-toggle="modal"><i
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