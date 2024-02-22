@extends('backend.admin')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="tob-row-for-heading">
            <h1 class="h3 mb-3"><strong>Add</strong> Product</h1>
            <a href="{{url('admin/products')}}" class="btn btn-hp">Back</a>
        </div>
        <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" data-bs-toggle="tab" href="#home" aria-selected="false" role="tab" tabindex="-1">Home</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link " data-bs-toggle="tab" href="#details" aria-selected="true" role="tab">Details</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" data-bs-toggle="tab" href="#seotags" aria-selected="true"  role="tab">SEO Tags</a>
                </li>
                
        </ul>
        <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active show" id="home" role="tabpanel">

                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <label for="name">Product Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Product Name">
                            @error('slug')<small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="name">Product slug</label>
                            <input type="text" name="slug" class="form-control" placeholder="Product Slug">
                            @error('slug')<small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="category">Category</label><br>
                            <select name="category_id" >
                                @foreach ($category as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
                            @error('name')<small class="text-danger">{{$message}}</small> @enderror
                            
                        </div>
                        
                    </div>



                </div>
                <div class="tab-pane fade" id="details" role="tabpanel">
                    
                </div>
                <div class="tab-pane fade" id="seotags" role="tabpanel">
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
                  </div>
                
        </div>
            
        
        <div class="col-md-12">
            <button type="submit" class="btn btn-hp">Save</button>
        </div>

        

        

    </div>
</main>
@endsection