@include('inc.header')
<form method="POST" action="{{ url('admin/blog',array($blog->id))}}"  enctype="multipart/form-data">
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
            <input type="text" name="name" class="form-control" required value="{{$blog->name}}">
        </div>
    </div>
    <div class="modal-body add_modal_country">
        <div class="form-group col-md-6">
            <label>Sub Text</label>
            <input type="text" name="sub_text" class="form-control" required value="{{$blog->sub_text}}">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label>Main Photo</label>
        <input type="file" name="main_photo" id="imgInput">
        <img id="main_photo" src="/img/<?=$blog->main_photo?>" alt=" "/>
    </div>

    <textarea id="description" name="description" style="width: 100%; height: 200px">{{$blog->description}}</textarea>


    <div class="modal-footer">
        <a href="{{ url('admin/blog') }}" type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">Back</a>
        <input type="submit" class="btn btn-success" value="submit">
    </div>
</form>

<script src="/editor/minified/sceditor.min.js"></script>

<!-- Include the BBCode or XHTML formats -->
<script src="/editor/minified/formats/bbcode.js"></script>
<script src="/editor/minified/formats/xhtml.js"></script>

<script>
    var textarea = document.getElementById('description');
    sceditor.create(textarea, {
        format: 'xhtml',
        style: '/editor/minified/themes/content/default.min.css',
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#main_photo').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }


    $("#imgInput").change(function () {
        readURL(this);
    });


</script>
@include('inc.footer')