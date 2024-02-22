<div class="container-fluid p-0">
    @if(session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif
    <div class="tob-row-for-heading">
        <h1 class="h3 mb-3"><strong>Products</strong> Category</h1>
        <a href="{{url('admin/category/create')}}" class="btn btn-hp">Add New Category</a>
    </div>
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">

                    <h5 class="card-title mb-0">Latest Projects</h5>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th class="d-none d-xl-table-cell">Category Name</th>
                            <th class="d-none d-xl-table-cell">Image</th>
                            <th class="d-none d-xl-table-cell">Status</th>
                            <th class="d-none d-xl-table-cell">Action</th>
                        </tr>
                    </thead>
                    
                    @foreach ($product_category as $cat)
                    
                    <tbody>
                        <tr>
                            <td>{{$cat->id}}</td>
                            <td class="d-none d-xl-table-cell">{{$cat->name}}</td>
                            <td class="d-none d-xl-table-cell">{{$cat->image}}</td>
                            <td><span class="badge bg-success">{{$cat->status == '1' ? 'Active':'Deactive'}}</span></td>
                            <td class="d-none d-xl-table-cell">
                            <a href="{{url('admin/category/'.$cat->id.'/edit')}}" class="btn btn-success">Edit</a>    
                            <a href="{{url('admin/category/'.$cat->id.'/delete')}}"  class="btn btn-danger" >Delete</a>    
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                        
                </table>
            </div>
        </div>
    </div>

</div>