<template>
	<div class="swiper-slide trip-card">
		<div class="trip-item">
			<div class="trip-img">
				<img src="img/trip1.jpg" alt="">
			</div>
			<div class="trip-caption">
				<div class="trip-label">
					<span class="label label-primary label-trip">Opentrip</span>
					<span class="trip-location color-grey-2">
						<i class="fa fa-map-marker"></i>sibayak
					</span>
				</div>
				<span class="trip-title">Gunung Sibayak Berastagi</span>
				<span class="trip-price">Mulai <strong>Rp. 250.000</strong> / orang</span>
				<p class="color-grey-2">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed laudantium quasic veritatis suscipit odio?
				</p>
				<a href="#" class="">detail</a>
				<a href="#" class="">booking</a>
			</div>
		</div>
	</div>
</template>

<style>
	.trip-item{
		position: relative;
	    width: 100%;
	    float: left;
	    display: inline-block;
	    -moz-box-shadow: 4px 3px 5px 0px rgba(0,0,0,0.03);
	    box-shadow: 4px 3px 5px 0px rgba(0,0,0,0.03);
	}

	.trip-img img {
		width: 100%;
    	height: auto;
    	display: block;
	}

	.trip-caption {
		position: relative;
    	width: 100%;
    	padding: 24px 20px;
    	border: 1px solid #efefef;
    	display: flex;
    	flex-direction: column;
	}

	.trip-caption .trip-label {
		display: flex;
    	justify-content: space-between;
    	padding-bottom: 15px;
	}

	.label-trip{
		line-height: 2;
	}

	.trip-label .trip-location{
		text-transform: uppercase;
		font-size: 13px;
		font-weight: 500;
	}

	.trip-label .trip-location .fa{
		padding-right: 10px;
	}

	.trip-caption .trip-title{
		text-transform: uppercase;
		font-size: 16px;
		font-weight: 700;
		letter-spacing: 1px;
	}

	.trip-caption .trip-price {

	}
</style>