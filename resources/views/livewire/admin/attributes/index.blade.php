<div class="container-fluid p-0">
    @if(session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif
    <div class="tob-row-for-heading">
        <h1 class="h3 mb-3"><strong>Attributes</strong></h1>
        <a href="{{url('admin/attributes/create')}}" class="btn btn-hp">Add Attribute</a>
    </div>
    <div class="row">
        <div class="col-12 col-lg-12 col-xxl-12 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h5 class="card-title mb-0">All Attributes</h5>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th class="d-none d-xl-table-cell">Name</th>
                            <th class="d-none d-xl-table-cell">slug</th>
                            <th class="d-none d-xl-table-cell">Action</th>
                        </tr>
                    </thead>
                    
                    @foreach ($attributes as $attri)
                    
                    <tbody>
                        <tr>
                            <td>{{$attri->id}}</td>
                            <td class="d-none d-xl-table-cell">{{$attri->name}}</td>
                            <td class="d-none d-xl-table-cell">{{$attri->slug}}</td>
                            <td class="d-none d-xl-table-cell">
                            <a href="{{url('admin/attributes/'.$attri->id.'/add')}}" class="btn btn-success">Value</a>    
                            <a href="{{url('admin/attributes/'.$attri->id.'/edit')}}" class="btn btn-success">Edit</a>    
                            <a href="#" wire:click="deleteCategory{{$attri->id}}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletecat" >Delete</a>    
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                        
                </table>
            </div>
        </div>
    </div>

</div>