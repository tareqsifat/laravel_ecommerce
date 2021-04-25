@extends('admin.layout.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.brade_cumb',['title'=>'User Management'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title">All User Roles</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Serial</th>
                                            <th scope="col">created at</th>
                                            <th scope="col">Action</th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($collection as  $key => $item)
                                            <tr>
                                                <th scope="row">{{$key+1}}</th>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->serial }}</td>
                                                <td>{{ $item->created_at->format('d M Y h:i:s a') }}</td>
                                                <td>
                                                    <div>
                                                        <a type="button" href="{{ route('admin_user_role_edit',$item->id) }}" class="btn btn-warning waves-effect waves-light m-1">
                                                            <i class="fa fa-pencil"></i> <span>edit</span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--start overlay-->
            <div class="overlay"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->
    </div>
    <!--End content-wrapper-->

@endsection



