@extends('backend.admin')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="tob-row-for-heading">
            <h1 class="h3 mb-3"><strong>{{$attri->name}}</strong> Attribute</h1>
            <a href="{{url('admin/attributes')}}" class="btn btn-hp">Back</a>
        </div>
        <div class="category_form_hp">

            <form action="{{url('admin/attributes/'.$attri->id)}}" method="POST" enctype="multipart/form-data" id="form_category_hp">
                @csrf
                @method('PUT')
                <div class="row">
                    
                        <div class="col-md-6 mb-4">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{$attri->name}}"  placeholder="{{$attri->name}} Name">
                            @error('name')<small class="text-danger">{{$message}}</small> @enderror
                            
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="name">slug</label>
                            <input type="text" name="slug" class="form-control" value="{{$attri->slug}}" placeholder="Attribute Slug">
                            @error('slug')<small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-hp">Update</button>
                        </div>
                    
    
                    
                </div>
            </form>
            
        </div>
        

        

        

    </div>
</main>
@endsection