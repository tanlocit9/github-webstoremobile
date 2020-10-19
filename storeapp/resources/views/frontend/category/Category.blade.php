@extends('frontend.template')
@section('content')
<div class="kenne-content_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">               
                <h3>{{ $category->title }}</h3>
                <div class="shop-toolbar">
                    <div class="product-view-mode">
                        <a class="active grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top" title="Grid View"><i class="fa fa-th"></i></a>
                        <a class="list" data-target="listview" data-toggle="tooltip" data-placement="top" title="List View"><i class="fa fa-th-list"></i></a>
                    </div>
                    <div class="product-item-selection_area">
                        <div class="product-short">
                            <label class="select-label">Xắp xếp:</label>
                            <select class="nice-select myniceselect">
                                <option value="1">Mặc định</option>
                                <option value="2">Tên, A đến Z</option>
                                <option value="3">Tên, Z đến A</option>
                                <option value="4">Giá, Thấp đến cao</option>
                                <option value="5">Giá, Cao đến thấp</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="shop-product-wrap grid gridview-3 row">
                    @if( isset($records) && count($records) > 0)
                        @foreach($records as $item)
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="/assets/images/product/1-1.jpg" alt="Kenne's Product Image">
                                        </a>
                                        @if( $item->price_sale > 0 && $item->price_sale < $item->price)
                                        <span class="sticker">- {{ round( ($item->price - $item->price_sale) / $item->price * 100 )}}%</span>
                                        @endif
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                        class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                        class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">{{ $item->title }}</a></h3>
                                            <div class="price-box">
                                                @if( $item->price_sale > 0 && $item->price_sale < $item->price )
                                                <span class="new-price">{{ number_format($item->price_sale) }}₫</span>
                                                @endif
                                                <span class="old-price">{{ number_format($item->price) }}₫</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-product_item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img src="/assets/images/product/1-2.jpg" alt="Kenne's Product Image">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <div class="price-box">
                                            @if( $item->price_sale > 0 && $item->price_sale < $item->price )
                                            <span class="new-price">{{ number_format($item->price_sale) }}₫</span>
                                            @endif
                                            <span class="old-price">{{ number_format($item->price) }}₫</span>
                                            </div>
                                            <h6 class="product-name"><a href="single-product.html">{{ $item->title }}</a></h6>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-short_desc">
                                                <p>{{ $item->content }}</p>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                        class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>          
                <div> {{ $records->links() }}</div>
            </div>
        </div>
    </div>
</div>
@endsection