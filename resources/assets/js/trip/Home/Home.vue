<template>
	<div>
		<DolanHeader />
		<Jumbotron />
		
		<div class="container">
			<TripCardContainer />
		</div>

		<DolanFooter />

	</div>
</template>

<style>
	
</style>

<script>

	 import DolanHeader from '../../global/Header.vue'
	 import Jumbotron from '../../global/Jumbotron'
	 import TripCardContainer from './partial/TripCardContainer'
	 import DolanFooter from '../../global/Footer.vue'
	 
	 export default {
        mounted() {
        	require('swiper')
        },
        components : {
        	DolanHeader,
        	Jumbotron,
        	DolanFooter,
        	TripCardContainer
        }
    }
</script>