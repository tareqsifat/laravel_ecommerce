@extends('admin.layout.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.brade_cumb',['title'=>'Product Create'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Add Product</div>
                            <hr />
                            <form class="insert_form row" method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="preloader"></div>
                                <div class="form-group col-md-6 col-xl-4">
                                    <label for="input-21" class=" col-form-label">Name</label>
                                    <div class="">
                                        <input type="text" name="name" class="form-control" id="input-21" placeholder="Name" />
                                        <span class="text-danger name "></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-6  col-xl-4">
                                    <label for="input-21" class=" col-form-label">Brand</label>
                                    <div class="">
                                        {{-- <input type="text" class="form-control" id="input-21" placeholder="Name" /> --}}
                                        <select name="brand" id="" class="form-control">
                                            @foreach ($brands as $key=>$item)
                                                <option {{ $key==0?'selected':'' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger brand"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-6  col-xl-4">
                                    <label for="input-21" class="col-form-label">Main Category</label>
                                    <div class="">
                                        <select name="main_category_id" id="" class="form-control">
                                            @foreach ($maincategories as $key=>$item)
                                                <option {{ $key==0?'selected':'' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger main_category_id"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-6  col-xl-4">
                                    <label for="input-21" class="col-form-label">Category</label>
                                    <div class="">
                                        <select name="category_id" id="" multiple class="form-control multiple-select">
                                            @foreach ($categories as $key=>$item)
                                                <option {{ $key==0?'selected':'' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger category_id"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-6  col-xl-4">
                                    <label for="input-21" class="col-form-label">Sub Category</label>
                                    <div class="">
                                        <select name="sub_category_id" id="" multiple class="form-control multiple-select">
                                            @foreach ($sub_categories as $key=>$item)
                                                <option {{ $key==0?'selected':'' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger sub_category_id"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-6  col-xl-4">
                                    <label for="input-21" class="col-form-label">Writer</label>
                                    <div class="">
                                        <select name="sub_category_id" id="" multiple class="form-control multiple-select">
                                            <option value="">select</option>
                                            @foreach ($writers as $key=>$item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger sub_category_id"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-6  col-xl-4">
                                    <label for="input-21" class="col-form-label">Publication</label>
                                    <div class="">
                                        <select name="sub_category_id" id="" multiple class="form-control multiple-select">
                                            <option value="">select</option>
                                            @foreach ($publications as $key=>$item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger sub_category_id"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-6  col-xl-4">
                                    <label for="input-21" class="col-form-label">Color</label>
                                    <div class="">
                                        <select name="color_id" id="" class="form-control multiple-select" multiple>
                                            @foreach ($colors as $key=>$item)
                                                <option {{ $key==0?'selected':'' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger color_id"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-6  col-xl-4">
                                    <label for="input-21" class="col-form-label">Size</label>
                                    <div class="">
                                        <select name="size_id" id="" class="form-control multiple-select" multiple>
                                            @foreach ($sizes as $key=>$item)
                                                <option {{ $key==0?'selected':'' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger size_id"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-6  col-xl-4">
                                    <label for="input-21" class="col-form-label">Unit</label>
                                    <div class="">
                                        <select name="unit_id" id="" class="form-control multiple-select" multiple>
                                            @foreach ($units as $key=>$item)
                                                <option {{ $key==0?'selected':'' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger unit_id"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 col-xl-4">
                                    <label for="input-21" class=" col-form-label">Price</label>
                                    <div class="">
                                        <input type="text" name="price" class="form-control" id="input-21" placeholder="price" />
                                        <span class="text-danger price" style="font-size: 15px;"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 col-xl-4">
                                    <label for="input-21" class=" col-form-label">Discount</label>
                                    <div class="">
                                        <input type="text" class="form-control" name="discount" id="input-21" placeholder="discount" />
                                        <span class="text-danger discount"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 col-xl-4">
                                    <label for="input-21" class=" col-form-label">Expiration Date</label>
                                    <div class="">
                                        <input type="date" name="expiration_date" class="form-control" id="input-21" placeholder="discount" />
                                        <span class="text-danger expiration_date"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 col-xl-4">
                                    <label for="input-21" class=" col-form-label">Stock</label>
                                    <div class="">
                                        <input type="number" name="stock" class="form-control" id="input-21" placeholder="stock" />
                                        <span class="text-danger stock"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 col-xl-4">
                                    <label for="input-21" class=" col-form-label">Alert Quantity</label>
                                    <div class="">
                                        <input type="number" name="alert_quantity" class="form-control" id="input-21" placeholder="Alert" />
                                        <span class="text-danger alert_quantity"></span>
                                    </div>
                                </div>

                                <div class="col-12"></div>

                                <div class="form-group col-md-6 col-xl-6">
                                    <label for="input-21" class=" col-form-label">Description</label>
                                    <div class="">
                                        {{-- <input type="number" class="form-control" id="input-21" placeholder="Alert" /> --}}
                                        <textarea name="description" class="form-control" id="mytextarea1" cols="30" rows="10"></textarea>
                                        <span class="text-danger description"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 col-xl-6">
                                    <label for="input-21" class=" col-form-label">Features</label>
                                    <div class="">
                                        {{-- <input type="number" class="form-control" id="input-21" placeholder="Alert" /> --}}
                                        <textarea name="features" class="form-control" id="mytextarea2" cols="30" rows="10"></textarea>
                                        <span class="text-danger features"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 col-xl-6">
                                    <label for="input-21" class=" col-form-label">Thumb Image</label>
                                    <div class="">
                                        <input type="file" name="thumb_image" class="form-control" id="input-21" placeholder="Alert" />
                                        <span class="text-danger thumb_image"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-6 col-xl-6">
                                    <label for="input-21" class=" col-form-label">Related Image</label>
                                    <div class="">
                                        <input type="file" multiple name="related_images[]" class="form-control" id="input-21" placeholder="Alert" />
                                        <span class="text-danger related_images"></span>
                                    </div>
                                </div>

                                <div class="form-group col-md-6  col-xl-4">
                                    <label for="input-21" class="col-form-label">Staus</label>
                                    <div class="">
                                        <select name="status" id="" class="form-control">
                                            <option value="draft">Draft</option>
                                            <option value="active">Active</option>
                                        </select>
                                        <span class="text-danger status"></span>
                                    </div>
                                </div>

                                <div class="form-group col-12">
                                    <label class="col-form-label"></label>
                                    <div class="">
                                        <button type="submit" class="btn btn-white px-5"><i class="icon-lock"></i> Upload</button>
                                    </div>
                                </div>
                            </form>
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

    @push('ccss')
        <link href="/contents/admin/plugins/select2/css/select2.min.css" rel="stylesheet" />
        <link href="/contents/admin/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('contents/admin') }}/plugins/summernote/dist/summernote-bs4.css" />
    @endpush

    @push('cjs')
        <script src="/contents/admin/plugins/select2/js/select2.min.js"></script>
        <script src="{{ asset('contents/admin') }}/plugins/summernote/dist/summernote-bs4.min.js"></script>
        {{-- <script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script> --}}

        <script>
            $('.multiple-select').select2({
                // theme: 'bootstrap4',
                // width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                allowClear: Boolean($(this).data('allow-clear')),
            });
            // tinymce.init({
            //     selector: '#mytextarea1'
            // });
            // tinymce.init({
            //     selector: '#mytextarea2'
            // });
            $('#mytextarea1').summernote({
                    height: 400,
                    tabsize: 2
                });
            $('#mytextarea2').summernote({
                    height: 400,
                    tabsize: 2
                });
        </script>
    @endpush

@endsection



