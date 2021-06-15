@extends('admin.layout.admin')


@section('content')
    
    <div class="clearfix"></div>

            <div class="content-wrapper">
                <div class="container-fluid">
                  @include('admin.includes.brade_cumb',['title' => 'All'])
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <h5 class="card-title">Responsive Table</h5>
                                    <a href="{{ route('brand.create') }}" class="btn btn-warning"><i class="fa fa-plus"></i>Add</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Product</th>
                                                        <th scope="col">action</th> 
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <th scope="row">1</th>
                                                        <th scope="row">1</th>
                                                        <th scope="row">1</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
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
            



          