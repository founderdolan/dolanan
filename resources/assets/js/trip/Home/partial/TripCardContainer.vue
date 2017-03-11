<template>
	<div class="tripcard-container">
		<!-- Swiper -->
	    <div class="swiper-container">
	        <div class="swiper-wrapper">
				<TripCard />
				<TripCard />
				<TripCard />
				<TripCard />
				<TripCard />
	        </div>
	         <!-- Add Arrows -->
	        <div class="swiper-button-next"></div>
	        <div class="swiper-button-prev"></div>
	    </div>
	</div>
</template>

<style>
	
</style>

<script>
	import TripCard from './TripCard.vue'
	
	export default {
		mounted(){
			require('swiper')

			var swiper = new Swiper('.swiper-container', {
		        slidesPerView: 4,
		        spaceBetween: 30,
		        nextButton: '.swiper-button-next',
        		prevButton: '.swiper-button-prev',
		    });
		},
		components : {
			TripCard
		}
	}
</script>