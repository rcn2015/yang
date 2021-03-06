@extends('layouts.frontend_layouts')

@section('nav1')
	<li><a href="{{ url('/index') }}" class="active"><span data-hover="主页">主页</span></a></li>
	<li><a href="{{ URL::route('index/about') }}"> <span data-hover="关于我们">关于我们</span></a></li>
	<li><a href="{{ URL::route('index/services') }}"> <span data-hover="医疗服务">医疗服务</span></a></li>
	<li><a href="{{ URL::route('index/news') }}"> <span data-hover="最新消息">最新消息</span></a></li>
	<li><a href="{{ URL::route('index/contact') }}"> <span data-hover="联系我们">联系我们</span></a></li>
@stop
@section('content')
<!--banner-->
	<div class="banner">
		<div class="container ">
			<!-- banner-text Slider starts Here -->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
				// You can also use "$(window).load(function() {"
					$(function () {
					// Slideshow 4
						$("#slider3").responsiveSlides({
						auto: true,
						pager:true,
						nav:false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
						}
					});	
				});
			</script>
			<!--//End-slider-script -->
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-text">		
							<h1>We are here to care for you</h1>
							<p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</li>
					<li>
						<div class="banner-text">		
							<h1>Lorem ip sum avai re for cayou</h1>
							<p>Majority have sufferedorem lipsum available, but the  alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
						</div>
					</li>
					<li>
						<div class="banner-text">		
							<h1>Availf able lor emip cayou refor</h1>
							<p>Randomised words orem ipsum available, but the majority have suffered alteration in some form, by injected humour, or which don't look even slightly believable.</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!--//banner-->
	<!--banner-bottom-->
	<div class="banner-bottom">
		<div class="container">
			<h2>Lorem Ipsum was popularised in the with the release of Letraset sheets containing</h2>
			<a href="#gallery" class="arrow scroll"> </a>
		</div>
	</div>
	<!--//banner-bottom-->
	<!--gallery-->
	<div class="gallery" id="gallery">
		<div class="col-md-6 gallery-left">
			<h4>Letraset sheets</h4>
			<p>Lorem Ipsum was popularised in the with the release of Letraset sheets contai ningthe with the release of </p>
		</div>
		<div class="col-md-6 gallery-right">
			<div class="gallery-grid-a">
				<h4>Letraset sheets</h4>
				<p>Lorem Ipsum was popularised in the with the release of Letraset sheets contai ningthe with the release of </p>
			</div>	
			<div class="gallery-grid-b">		
				<h4>Letraset sheets</h4>
			<p>Lorem Ipsum was popularised in the with the release of Letraset sheets contai ningthe with the release of </p>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--//gallery-->
	<!--work-->
	<div class="work">		
		<div class="container">	
			<div class="work-title">
				<h3>More projects</h3>
				<p>Lorem Ipsum was popularised in the with the release of Letraset sheets contai ningthe</p>
			</div>
			<div class="col-md-4 work-grids">
				<ul>
					<li><img src="images/icon2.png" alt=""></li>
					<li>
						<h4>Quas molestias excep</h4>
						<p>praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
					</li>
				</ul>
			</div>	
			<div class="col-md-4 work-grids">
				<ul>
					<li><img src="images/icon3.png" alt=""></li>
					<li>
						<h4>occaecati cupiusint</h4>
						<p>praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
					</li>
				</ul>
			</div>
			<div class="col-md-4 work-grids">
				<ul>
					<li><img src="images/icon4.png" alt=""></li>
					<li>
						<h4>Excepturi sint occa</h4>
						<p>praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//work-->
@stop