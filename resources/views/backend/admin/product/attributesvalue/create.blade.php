@extends('backend.admin')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="tob-row-for-heading">

<h1 class="h3 mb-3"><strong>{{$attributes->name}}</strong> Attributes</h1>
 <a href="{{url('admin/attributes')}}" class="btn btn-hp">Back</a>
        </div>
        <div class="category_form_hp">

            <form action="{{url('admin/attributes_value')}}" method="GET" enctype="multipart/form-data" id="form_category_hp">
                @csrf
               
                <div class="row">
                    <div class="col-md-4">
                       
                        <div class="col-md-12 mb-4">
                            <label for="name">Name</label>
                            <input type="hidden" name="attributes_id" value="{{$attributes->id}}" class="form-control" >
                            <input type="text" name="name"  class="form-control" placeholder="{{$attributes->name}} Name">
                            @error('name')<small class="text-danger">{{$message}}</small> @enderror
                            
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="name">slug</label>
                            <input type="text" name="slug" class="form-control" placeholder="{{$attributes->name}} Slug">
                            @error('slug')<small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="name">Description</label>
                            <textarea name="description" class="form-control" cols="30" rows="5" placeholder="{{$attributes->name}} Description"></textarea>
                            @error('description')<small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-hp">Add</button>
                        </div>
                       
                        
                    </div>
                    
                </div>
            </form>
            
        </div>
        

        

        

    </div>
</main>
@endsection