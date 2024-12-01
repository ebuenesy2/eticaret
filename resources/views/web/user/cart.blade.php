<!DOCTYPE html>
<html lang="@lang('admin.lang')" >
<head>
    
	<title> @lang('admin.myCart') | {{ $DB_HomeSettings->title }} </title>
    
    <!------- Head --->
    @include('web.include.head')
    
</head>

<body>
    <div class="page-wrapper">
                                 
        <!------- Header --->
        @include('web.include.header')

        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">@lang('admin.myCart')</h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/@lang('admin.lang')">@lang('admin.home')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('admin.myCart')</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="cart">
	                <div class="container">
	                	<div class="row">
	                		<div class="col-lg-9">
	                			<table class="table table-cart table-mobile">
									<thead>
										<tr>
											<th>@lang('admin.product')</th>
											<th>@lang('admin.salePrice')</th>
											<th>@lang('admin.quantity')</th>
											<th>@lang('admin.total')</th>
											<th></th>
										</tr>
									</thead>

									<tbody>

										@for ($i = 0; $i < count($DB_web_user_cart); $i++)
										<tr>
											<td class="product-col">
												<div class="product">
													<figure class="product-media">
														<a href="/@lang('admin.lang')/product/view/{{$DB_web_user_cart[$i]->productsUid}}-{{$DB_web_user_cart[$i]->productsSeo_url}}">
															<img src="{{$DB_web_user_cart[$i]->productsImg}}" alt="Product image">
														</a>
													</figure>

													<h3 class="product-title">
														<a href="/@lang('admin.lang')/product/view/{{$DB_web_user_cart[$i]->productsUid}}-{{$DB_web_user_cart[$i]->productsSeo_url}}">{{$DB_web_user_cart[$i]->productsTitle}}</a>
													</h3><!-- End .product-title -->
												</div><!-- End .product -->
											</td>
											<td class="price-col" >{{$DB_web_user_cart[$i]->productsPrice}} {{$DB_web_user_cart[$i]->productsCurrency}}</td>
											<td class="quantity-col">
                                                <div class="cart-product-quantity">
                                                    <input type="number" class="form-control" id="cart-product-quantity" data_id="{{$DB_web_user_cart[$i]->id}}" data_productsPrice="{{$DB_web_user_cart[$i]->productsPrice}}" data_productsCurrency="{{$DB_web_user_cart[$i]->productsCurrency}}" value="{{$DB_web_user_cart[$i]->product_quantity}}" min="1" max="10" step="1" data-decimals="0" required>
                                                </div><!-- End .cart-product-quantity -->
                                            </td>
											<td class="total-col" data_id="{{$DB_web_user_cart[$i]->id}}" data_productstotalprice="{{$DB_web_user_cart[$i]->productsTotalPrice}}" >{{$DB_web_user_cart[$i]->productsTotalPrice}} {{$DB_web_user_cart[$i]->productsCurrency}}</td>
											<td class="remove-col"><button class="btn-remove" id="userCartDelete" data_id="{{$DB_web_user_cart[$i]->id}}" data_productstitle="{{$DB_web_user_cart[$i]->productsTitle}}" ><i data_id="{{$DB_web_user_cart[$i]->id}}" data_productstitle="{{$DB_web_user_cart[$i]->productsTitle}}" class="fa fa-close" style="color: red;" ></i></button></td>
										</tr>
										@endfor
										
									</tbody>
								</table><!-- End .table table-wishlist -->

								<!-- coupon -->
	                			<div class="cart-bottom">
			            			<div class="cart-discount">
			            				
			            			</div><!-- End  coupon -->

			            			<a href="#" class="btn btn-outline-dark-2"><span>Sepet Güncelle</span><i class="fa fa-refresh"></i></a>
		            			</div><!-- End .cart-bottom -->

	                		</div><!-- End .col-lg-9 -->
	                		<aside class="col-lg-3">
	                			<div class="summary summary-cart">
	                				<h3 class="summary-title">Sepet Toplam</h3><!-- End .summary-title -->

	                				<table class="table table-summary">
	                					<tbody>

											<!-- Sepet Fiyatı -->
	                						<tr class="summary-subtotal">
	                							<td>Sepet Fiyatı:</td>
	                							<td id="productTotalPrice">{{$productsAllTotalPrice}} {{$productsCurrency}} </td>
	                						</tr>
											<!-- Sepet Fiyatı Son -->

											<!-- Kupon Kodu -->
											<!-- Kupon Kodu Son -->

											<!-- Genel Fiyatı -->
	                						<tr class="summary-total">
	                							<td>Toplam Sepet Fiyatı:</td>
	                							<td>{{$productsAllTotalPrice}} {{$productsCurrency}}</td>
	                						</tr>
											<!-- Genel Fiyatı Son -->

	                					</tbody>
	                				</table><!-- End .table table-summary -->

	                				<a href="checkout.html" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
	                			</div><!-- End .summary -->

		            			<a href="/@lang('admin.lang')/product/list" class="btn btn-outline-dark-2 btn-block mb-3"><span>Alışverişe Devam Et</span><i class="fa fa-refresh"></i></a>
	                		</aside><!-- End .col-lg-3 -->
	                	</div><!-- End .row -->
	                </div><!-- End .container -->
                </div><!-- End .cart -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        <footer class="footer">
        	<div class="footer-middle">
	                         
                <!------- Footer - Container --->
                @include('web.include.footer-container')

	        </div><!-- End .footer-middle -->

	        <div class="footer-bottom">
	        	<div class="container">
	        		                                    
                    <!------- Footer - Copyright --->
                    @include('web.include.footer-copyright')
                    
	        	</div><!-- End .container -->
	        </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
             
    <!------- Footer - Bottom --->
    @include('web.include.footer-bottom')

</body>

</html>