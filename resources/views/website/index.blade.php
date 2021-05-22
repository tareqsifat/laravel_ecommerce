@extends('website.ecommerce.layouts.ecommerce')

@section('content')
	
            @include('website.ecommerce.home_include.slider')

           

            <div class="all-product-area mtb-45">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                            @include('website.ecommerce.home_include.Leatest-deal')
                            <!-- featured-area start -->
                            @include('website.ecommerce.home_include.featured')
                            <!-- featured-area end -->
                            <!-- testimonils-area start -->
                            @include('website.ecommerce.home_include.testimonial')
                            <!-- testimonils-area end -->
                            <!-- blog-area start -->
                            @include('website.ecommerce.home_include.blog')
                            <!-- blog-area end -->
                            <!-- newsletter-area start -->
                            @include('website.ecommerce.home_include.newslatter')
                            <!-- newsletter-area start -->
                        </div>
                        <!-- product-area start -->
                        <div class="col-xl-9 col-lg-9 col-md-12 col-12">
                            <div class="product box-shadow bg-fff">
                                <div class="product-title home3-bg text-uppercase">
                                    <i class="fa fa-paper-plane-o icon home3-bg2"></i>
                                    <h3>New Products</h3>
                                </div>
                                <div class="left left-right-angle">
                                    <div class="row">
                                        @for ($i = 0; $i < 4; $i++)
                                            <div class="col-md-3">
                                                @include('website.product.home_product')
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            <!-- banner-area start -->
                            <div class="banner-area mtb-35">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="single-banner">
                                            <a href="#">
                                                <img src="{{ asset('contents/website') }}/img/banner/1.jpg" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="single-banner">
                                            <a href="#">
                                                <img src="{{ asset('contents/website') }}/img/banner/2.jpg" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- banner-area end -->
                            <!-- tab-area start -->
                            <div class="tab-area box-shadow bg-fff">
                                <div class="product-title home3-bg text-uppercase">
                                    <i class="fa fa-check-square-o icon home3-bg2"></i>
                                    <h3>Products category</h3>
                                    <div class="tab-menu home3-tab-menu floatright hidden-xs">
                                        <ul class="nav">
                                            <li><a href="#" >Electronics</a></li>
                                            <li><a href="#" >Smartphone</a></li>
                                            <li><a href="#" >Tablets</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    
                                </div>
                            </div>
                            <!-- tab-area end -->
                            <!-- banner-area start -->
                            <div class="banner-area mtb-35">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="single-banner">
                                            <a href="#">
                                                <img src="{{ asset('contents/website') }}/img/banner/4.jpg" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="single-banner">
                                            <a href="#">
                                                <img src="{{ asset('contents/website') }}/img/banner/5.jpg" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- banner-area end -->
                            <!-- mostviewed-area start -->
                            <div class="mostviewed-area mt-35 box-shadow bg-fff">
                                <div class="product-title home3-bg text-uppercase">
                                    <i class="fa fa-check-square-o icon home3-bg2"></i>
                                    <h3>Products category</h3>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
                                        <div class="mostviewed-active-2 home2 left-right-angle">
                                            <div class="featured-wrapper">
                                                <div class="product-wrapper single-featured mtb-15">
                                                    <div class="product-img floatleft">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/6.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/8.jpg" alt="" class="secondary" />
                                                        </a>
                                                    </div>
                                                    <div class="product-content floatleft">
                                                        <h3><a href="#">Cras nec nisl ut erat</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper single-featured mtb-15">
                                                    <div class="product-img floatleft">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/11.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/6.jpg" alt="" class="secondary" />
                                                        </a>
                                                    </div>
                                                    <div class="product-content floatright">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper single-featured mtb-15">
                                                    <div class="product-img floatleft">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/9.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/7.jpg" alt="" class="secondary" />
                                                        </a>
                                                    </div>
                                                    <div class="product-content floatright">
                                                        <h3><a href="#">Cras nec nisl ut erat</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="featured-wrapper">
                                                <div class="product-wrapper single-featured mtb-15">
                                                    <div class="product-img floatleft">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/15.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/17.jpg" alt="" class="secondary" />
                                                        </a>
                                                    </div>
                                                    <div class="product-content floatright">
                                                        <h3><a href="#">Ligula euismod eget</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper single-featured mtb-15">
                                                    <div class="product-img floatleft">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/8.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/18.jpg" alt="" class="secondary" />
                                                        </a>
                                                    </div>
                                                    <div class="product-content floatright">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper single-featured mtb-15">
                                                    <div class="product-img floatleft">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/7.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/5.jpg" alt="" class="secondary" />
                                                        </a>
                                                    </div>
                                                    <div class="product-content floatright">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="featured-wrapper">
                                                <div class="product-wrapper single-featured mtb-15">
                                                    <div class="product-img floatleft">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/1.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/2.jpg" alt="" class="secondary" />
                                                        </a>
                                                    </div>
                                                    <div class="product-content floatright">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper single-featured mtb-15">
                                                    <div class="product-img floatleft">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/3.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/4.jpg" alt="" class="secondary" />
                                                        </a>
                                                    </div>
                                                    <div class="product-content floatright">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper single-featured mtb-15">
                                                    <div class="product-img floatleft">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/5.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/6.jpg" alt="" class="secondary" />
                                                        </a>
                                                    </div>
                                                    <div class="product-content floatright">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="featured-wrapper">
                                                <div class="product-wrapper single-featured mtb-15">
                                                    <div class="product-img floatleft">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/7.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/8.jpg" alt="" class="secondary" />
                                                        </a>
                                                    </div>
                                                    <div class="product-content floatright">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper single-featured mtb-15">
                                                    <div class="product-img floatleft">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/9.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/10.jpg" alt="" class="secondary" />
                                                        </a>
                                                    </div>
                                                    <div class="product-content floatright">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper single-featured mtb-15">
                                                    <div class="product-img floatleft">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/11.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/12.jpg" alt="" class="secondary" />
                                                        </a>
                                                    </div>
                                                    <div class="product-content floatright">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="featured-wrapper">
                                                <div class="product-wrapper single-featured mtb-15">
                                                    <div class="product-img floatleft">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/13.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/14.jpg" alt="" class="secondary" />
                                                        </a>
                                                    </div>
                                                    <div class="product-content floatright">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper single-featured mtb-15">
                                                    <div class="product-img floatleft">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/15.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/16.jpg" alt="" class="secondary" />
                                                        </a>
                                                    </div>
                                                    <div class="product-content floatright">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper single-featured mtb-15">
                                                    <div class="product-img floatleft">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/17.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/18.jpg" alt="" class="secondary" />
                                                        </a>
                                                    </div>
                                                    <div class="product-content floatright">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="featured-wrapper">
                                                <div class="product-wrapper single-featured mtb-15">
                                                    <div class="product-img floatleft">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/3.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/4.jpg" alt="" class="secondary" />
                                                        </a>
                                                    </div>
                                                    <div class="product-content floatright">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper single-featured mtb-15">
                                                    <div class="product-img floatleft">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/5.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/6.jpg" alt="" class="secondary" />
                                                        </a>
                                                    </div>
                                                    <div class="product-content floatright">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper single-featured mtb-15">
                                                    <div class="product-img floatleft">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/7.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/8.jpg" alt="" class="secondary" />
                                                        </a>
                                                    </div>
                                                    <div class="product-content floatright">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- mostviewed-area end -->
                        </div>
                        <!-- product-area end -->
                    </div>
                </div>
            </div>
            <!-- brand-area start -->
            <div class="brand-area mb-35">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="brand-active box-shadow p-15 bg-fff">
                                <div class="single-brand">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/brand/1.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="single-brand">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/brand/2.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="single-brand">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/brand/3.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="single-brand">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/brand/1.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="single-brand">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/brand/4.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="single-brand">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/brand/5.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="single-brand">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/brand/6.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="single-brand">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/brand/7.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="single-brand">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/brand/8.jpg" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area end -->
            
@endsection
