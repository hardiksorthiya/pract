@extends('backend.admin')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="tob-row-for-heading">
            <h1 class="h3 mb-3"><strong>Add Coupons</strong></h1>
            <a href="{{url('admin/coupons')}}" class="btn btn-hp">Back</a>
        </div>
        <form action="{{url('admin/coupons')}}" method="POST" enctype="multipart/form-data" id="form_category_hp">
            @csrf
            <div class="row">
                <div class="col-md-3 mb-4">
                    <label for="name">Coupon Name</label>
                    <input type="text" name="name" class="form-control"  placeholder="Coupon Name">
                    @error('name')<small class="text-danger">{{$message}}</small> @enderror
                    
                </div>
                <div class="col-md-3 mb-4">
                    <label for="name">Coupon Code</label>
                    <input type="text" name="code" class="form-control" placeholder="Coupon Code">
                    @error('slug')<small class="text-danger">{{$message}}</small> @enderror
                </div>
                <div class="col-md-3 mb-4">
                    <label for="name">Discount Value</label>
                    <input type="text" name="value" class="form-control" placeholder="Coupon Value">
                    @error('slug')<small class="text-danger">{{$message}}</small> @enderror
                </div>
                <div class="col-md-3 mb-4">
                    <label for="name">Status</label><br>
                    <select id="status" name="status">
                        <option value="Active">Active</option>
                        <option value="deactive">Deactive</option>
                      </select>
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-hp">Save</button>
                </div>
            </div>
        </form>
        </div>
    
</main>
@endsection