@extends('admin.layout.admin')


@section('content')
    
    <div class="clearfix"></div>

            <div class="content-wrapper">
                <div class="container-fluid">
                  @include('admin.includes.brade_cumb',['title' => 'Create'])
                    <div class="row">
                        <div class="col-lg-12">
                            <div style="padding: 10px"  class="card">
                                <div class="card-title">Create Brand</div>
                                <hr />
                                <form method="POST" class="insert_form" name="insert_form" action="{{ route('brand.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="input-21" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control" id="input-21" placeholder="Enter brand Name" />
                                            <span class="text-danger name"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="input-21" class="col-sm-2 col-form-label">Icon</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="icon" class="form-control" id="input-21" />
                                            <span class="text-danger icon"></span>

                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-warning px-5"><i class="fa fa-plus-circle"></i>Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                               @section('inner_content')
                                   
                               @endsection
                                <br>
                                <br>
                                <br>
                                <h1>Blank</h1>
                                <p>This is an example of a blank page that you can use as a starting point for creating new ones.</p>
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
            



          