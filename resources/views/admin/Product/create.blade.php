@extends('admin.layout.admin')


@section('content')
    
    <div class="clearfix"></div>

            <div class="content-wrapper">
                <div class="container-fluid">
                  @include('admin.includes.brade_cumb',['title' => 'Create'])
                    <div class="row">
                        <div class="col-lg-12">
                            <div style="padding: 10px"  class="card">
                                <div class="card-title">Add Product</div>

                                <form class="row">
                                    @csrf
                                    <div class="form-group col-md-6 col-xl-4">
                                        <label for="input-21" class="col-form-label">Name</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="input-21" placeholder="Name" />
                                            @error('name')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-xl-4">
                                        <label for="input-21" class="col-form-label">Brand</label>
                                        <div class="">
                                            {{-- <input type="text" class="form-control" id="input-21" placeholder="Name" /> --}}
                                            <select name="" id="" class="form-control">
                                                <option value="">Select Brand</option>
                                            </select>
                                            @error('name')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-xl-4">
                                        <label for="input-21" class="col-form-label">Main Category</label>
                                        <div class="">
                                            {{-- <input type="text" class="form-control" id="input-21" placeholder="Name" /> --}}
                                            <select name="" id="" class="form-control">
                                                <option value="">Select Main Category</option>
                                            </select>
                                            @error('main_category')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-xl-4">
                                        <label for="input-21" class="col-form-label">Category</label>
                                        <div class="">
                                            {{-- <input type="text" class="form-control" id="input-21" placeholder="Name" /> --}}
                                            <select name="" id="" class="form-control">
                                                <option value="">Select Category</option>
                                            </select>
                                            @error('category')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-xl-4">
                                        <label for="input-21" class="col-form-label">Sub Category</label>
                                        <div class="">
                                            {{-- <input type="text" class="form-control" id="input-21" placeholder="Name" /> --}}
                                            <select name="" id="" class="form-control">
                                                <option value="">Select Sub Category</option>
                                            </select>
                                            @error('sub_category')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-xl-4">
                                        <label for="input-21" class="col-form-label">Color</label>
                                        <div class="">
                                            {{-- <input type="text" class="form-control" id="input-21" placeholder="Name" /> --}}
                                            <select name="" id="" class="form-control">
                                                <option value="">Select Color</option>
                                            </select>
                                            @error('color')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-xl-4">
                                        <label for="input-21" class="col-form-label">Size</label>
                                        <div class="">
                                            {{-- <input type="text" class="form-control" id="input-21" placeholder="Name" /> --}}
                                            <select name="" id="" class="form-control">
                                                <option value="">Select Size</option>
                                            </select>
                                            @error('size')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-xl-4">
                                        <label for="input-21" class="col-form-label">Unit</label>
                                        <div class="">
                                            {{-- <input type="text" class="form-control" id="input-21" placeholder="Name" /> --}}
                                            <select name="" id="" class="form-control">
                                                <option value="">Select Unit</option>
                                            </select>
                                            @error('unit')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-xl-4">
                                        <label for="input-21" class="col-form-label">price</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="input-21" placeholder="Price" />
                                            @error('price')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-xl-4">
                                        <label for="input-21" class="col-form-label">Discount</label>
                                        <div class="">
                                            <input type="text" class="form-control" id="input-21" placeholder="Discount" />
                                            @error('discount')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-xl-4">
                                        <label for="input-21" class="col-form-label">Experition date</label>
                                        <div class="">
                                            <input type="date" class="form-control" id="input-21" placeholder="Experition date" />
                                            @error('experition date')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6 col-xl-4">
                                        <label for="input-21" class="col-form-label">stock</label>
                                        <div class="">
                                            <input type="number" class="form-control" id="input-21" placeholder="stock" />
                                            @error('stock')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6 col-xl-6">
                                        <label for="input-21" class="col-form-label">Alart Quantity</label>
                                        <div class="">
                                            <input type="number" class="form-control" id="input-21" placeholder="Alart Quantity" />
                                            @error('Alart quantity')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-xl-6">
                                        <label for="input-21" class="col-form-label">Status</label>
                                        <div class="">
                                            {{-- <input type="text" class="form-control" id="input-21" placeholder="Name" /> --}}
                                            <select name="" id="" class="form-control">
                                                <option value="">Active</option>
                                            </select>
                                            @error('unit')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6 col-xl-6">
                                        <label for="input-21" class="col-form-label">Description</label>
                                        <div class="">
                                            {{-- <input type="text" class="form-control" id="input-21" placeholder="Description" /> --}}
                                            <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                            @error('description')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-xl-6">
                                        <label for="input-21" class="col-form-label">Features</label>
                                        <div class="">
                                            {{-- <input type="text" class="form-control" id="input-21" placeholder="Features" /> --}}
                                            <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                            @error('features') 
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6 col-xl-4">
                                        <label for="input-21" class="col-form-label">Thumb Image</label>
                                        <div class="">
                                            <input type="file" class="form-control" id="input-21" placeholder="Thumb Image" />
                                            @error('thumb Image')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div><div class="form-group col-md-6 col-xl-4">
                                        <label for="input-21" class="col-form-label">Related Image</label>
                                        <div class="">
                                            <input type="file" class="form-control" id="input-21" placeholder="Related Image" />
                                            @error('related image')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group col-12 ">
                                        <label class="col-form-label"></label>
                                        <div class="">
                                            <button type="submit" class="btn btn-white px-5"><i class="fa fa-upload"></i>Upload</button>
                                        </div>
                                    </div>
                                </form>
                            
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
            



          