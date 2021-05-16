@extends('admin.layout.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.brade_cumb',['title'=>'User Role Management'])
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
                                                        <a type="button"
                                                         data-toggle="modal" data-target="#updateModal"

                                                         data-url = "{{ route('admin_user_role_update') }}"
                                                         data-id = "{{ $item-> id }}"
                                                         data-name = "{{ $item-> name }}"
                                                         data-serial = "{{ $item-> serial }}"

                                                         href="" 
                                                         class=" btn btn-warning waves-effect waves-light m-1">
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


    <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModal">
        Launch demo modal
    </button> --}}

    <!-- Modal -->
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateModalTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    hi
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> 
            </div> 
    </div>

    @push('cjs')
        <script>
            console.log('this is script');
        </script>
    @endpush


@endsection



