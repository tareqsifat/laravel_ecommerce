<ul class="metismenu" id="menu">
    <li>
        <a class="has-arrow" href="javascript:void();">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Dashboard</div> 
        </a>
        <ul class="">
            <li>
                <a href="{{ route('website_index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> eCommerce v1</a>
            </li>
        </ul>
    </li>

    <li>
        <a class="has-arrow" href="javascript:void();">
            <div class="parent-icon">
                <i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Blank Page</div> 
        </a>
        <ul class="">
            <li>
                <a href="{{ route('admin_blade-index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> index</a>
                <a href="{{ route('admin_blade_create') }}"><i class="zmdi zmdi-dot-circle-alt"></i> create</a>
                <a href="{{ route('admin_blade_view') }}"><i class="zmdi zmdi-dot-circle-alt"></i> view</a>
                {{-- <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> Delete</a> --}}
            </li>
        </ul>
    </li>
    <li>
        <a class="has-arrow" href="javascript:void();">
            <div class="parent-icon">
                <i class="fa fa-shopping-cart"></i></div>
            <div class="menu-title">Product Management</div> 
        </a>
        <ul class="">
            <li>
                <a href="{{ route('admin_product_create') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Add Product</a>
            </li>
            <li>
                <a href="{{ route('brand.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Brand</a>
            </li>
            <li>
                <a href="{{ route('main_category.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Main Category</a>
            </li>
            </li>
            <li>
                <a href="{{ route('size.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Size</a>
            </li>
            <li>
                <a href="{{ route('status.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Status</a>
            </li>
        </ul>
    </li>
    
    @if (Auth::check() && Auth::user()->role_id ==1)
        <li>
            <a class="has-arrow" href="javascript:void();">
                <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
                <div class="menu-title">User Management</div> 
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('admin_user_index') }}">
                        <i class="zmdi zmdi-dot-circle-alt"></i> index</a>
                </li> 
                <li>
                    <a href="{{ route('admin_user_role_index') }}">
                        <i class="zmdi zmdi-dot-circle-alt"></i> User Role</a>
                </li> 
            </ul>
        </li>
    @endif

    
    

<li class="menu-label">Extra</li>
        <li>
            <a href="/", target="_blank">
                <div class="parent-icon">
                    <i class="zmdi zmdi-globe"></i>
                </div>
                <div class="menu-title">Home</div>
            </a>
        </li>


        <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();  confirm('Sure! You want to Logout!!') && document.getElementById('logout-form').submit();">
                <div class="parent-icon">
                    <i class="fa fa-sign-out"></i>
                </div>
                <div class="menu-title">logout</div>
            </a>
        </li>

