@extends('backend.admin')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="tob-row-for-heading">
            <h1 class="h3 mb-3"><strong>Create </strong>Products Category</h1>
            <a href="{{url('admin/category')}}" class="btn btn-hp">Back</a>
        </div>
        <div class="category_form_hp">

            <form action="{{url('admin/category')}}" method="POST" enctype="multipart/form-data" id="form_category_hp">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <label for="name">Category Name</label>
                        <input type="text" name="name" class="form-control"  placeholder="Category Name">
                        @error('name')<small class="text-danger">{{$message}}</small> @enderror
                        
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="name">Category slug</label>
                        <input type="text" name="slug" class="form-control" placeholder="Category Slug">
                        @error('slug')<small class="text-danger">{{$message}}</small> @enderror
                    </div>
                    <div class="col-md-12 mb-4">
                        <label for="name">Description</label>
                        <textarea name="description" class="form-control" cols="30" rows="5" placeholder="Description"></textarea>
                        @error('description')<small class="text-danger">{{$message}}</small> @enderror
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="name">Image</label>
                        <input type="file" name="image" class="form-control" placeholder="Category Image">
                        @error('image')<small class="text-danger">{{$message}}</small> @enderror
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="name">Status</label><br>
                        <select id="status" name="status">
                            <option value="Active">Active</option>
                            <option value="deactive">Deactive</option>
                          </select>
                    </div>
                    <div class="col-md-12">
                        <h3>SEO Tags</h3>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="name">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" placeholder="Meta Title">
                        @error('meta_title')<small class="text-danger">{{$message}}</small> @enderror
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="name">Meta Keyword</label>
                        <input type="text" name="meta_keyword" class="form-control" placeholder="Meta keyword">
                        @error('meta_keyword')<small class="text-danger">{{$message}}</small> @enderror
                    </div>
                    <div class="col-md-12 mb-4">
                        <label for="name">Meta Description</label>
                        <textarea name="meta_description" class="form-control" cols="30" rows="5" placeholder="Meta Description"></textarea>
                        @error('meta_description')<small class="text-danger">{{$message}}</small> @enderror
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-hp">Save</button>
                    </div>
                </div>
            </form>
            
        </div>
        

        

        

    </div>
</main>
@endsection