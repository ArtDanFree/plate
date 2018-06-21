@extends('layouts.app')

@section('content')
    <div class="container">

        <form method="post" action="{{ Route('plate.update', $plate->id) }}">
            {{method_field("PATCH")}}

            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input value="{{ $plate->name }}" name="name" type="text" class="form-control" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Description</label>
                <input  value="{{ $plate->description }} name="description" type="text" class="form-control" placeholder="Enter description">
            </div>

            <div class="input-group">
          <span class="input-group-btn">
            <a style="color: #fff;" id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
              <i class="fa fa-picture-o"></i> Choose picture
            </a>
          </span>
                <input value="{{ $plate->img }}" placeholder="Enter picture" id="thumbnail" class="form-control" type="text" name="img">
            </div>

            <button style="margin-top: 10px" type="submit" class="btn btn-primary">Update</button>
        </form>



    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        var route_prefix = "{{ url(config('lfm.url_prefix', config('lfm.prefix'))) }}";
    </script>


    <script>
        {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
    </script>
    <script>
        $('#lfm').filemanager('image', {prefix: route_prefix});
        $('#lfm2').filemanager('file', {prefix: route_prefix});
    </script>


@endsection