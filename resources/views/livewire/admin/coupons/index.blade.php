<div class="container-fluid p-0">
    @if(session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif
    <div class="tob-row-for-heading">
        <h1 class="h3 mb-3"><strong>Product</strong> Coupons</h1>
        <a href="{{url('admin/coupons/create')}}" class="btn btn-hp">Add New Coupon</a>
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
                            <th class="d-none d-xl-table-cell">Coupon Name</th>
                            <th class="d-none d-xl-table-cell">Coupon Code</th>
                            <th class="d-none d-xl-table-cell">Coupon Value</th>
                            <th class="d-none d-xl-table-cell">Action</th>
                        </tr>
                    </thead>
                    @forelse ($coupons as $coupon)
                    <tbody>
                        <div>
                            <tr>
                                <td>{{$coupon->id}}</td>
                                <td class="d-none d-xl-table-cell">{{$coupon->name}}</td>
                                <td class="d-none d-xl-table-cell">{{$coupon->code}}</td>
                                <td class="d-none d-xl-table-cell">{{$coupon->value}}</td>
                                <td><span class="badge bg-success">{{$coupon->status == '1' ? 'Active':'Deactive'}}</span></td>
                                <td class="d-none d-xl-table-cell">
                                <a href="{{url('admin/coupons/'.$coupon->id.'/edit')}}" class="btn btn-success">Edit</a>    
                                <a href="{{url('admin/coupons/'.$coupon->id.'/delete')}}"  class="btn btn-danger" >Delete</a>    
                                </td>
                            </tr>
                        </div>
                        
                   
                    @empty
                    <div class="text-center">No data Found</div>
                </tbody>
                    @endforelse
                        
                </table>
            </div>
        </div>
    </div>

</div>