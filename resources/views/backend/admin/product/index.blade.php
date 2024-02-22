@extends('backend.admin')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="tob-row-for-heading">
            <h1 class="h3 mb-3"><strong>Products</strong></h1>
            <a href="{{url('admin/product/create')}}" class="btn btn-hp">Add Product</a>
        </div> 
        <div class="row">
            <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h5 class="card-title mb-0">All Products</h5>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th class="d-none d-xl-table-cell">Name</th>
                                <th class="d-none d-xl-table-cell">Image</th>
                                <th class="d-none d-xl-table-cell">Status</th>
                                <th class="d-none d-xl-table-cell">Action</th>
                            </tr>
                        </thead>
                        
                        {{-- @foreach ($product_category as $cat)
                        
                        <tbody>
                            <tr>
                                <td>{{$cat->id}}</td>
                                <td class="d-none d-xl-table-cell">{{$cat->name}}</td>
                                <td class="d-none d-xl-table-cell">{{$cat->image}}</td>
                                <td><span class="badge bg-success">{{$cat->status == '0' ? 'Hidden':'Visible'}}</span></td>
                                <td class="d-none d-xl-table-cell">
                                <a href="{{url('admin/category/'.$cat->id.'/edit')}}" class="btn btn-success">Edit</a>    
                                <a href="#" wire:click="deleteCategory{{$cat->id}}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletecat" >Delete</a>    
                                </td>
                            </tr>
                        </tbody>
                        @endforeach --}}
                            
                    </table>
                </div>
            </div>
        </div>
    
    </div>
</main>
@endsection