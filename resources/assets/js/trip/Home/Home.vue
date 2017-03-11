<template>
	<div>
		<DolanHeader />
		<Jumbotron />
		
		<div class="container">
			
		</div>

		<DolanFooter />

	</div>
</template>

<style>
	
</style>

<script>

	 import DolanHeader from '../../global/Header.vue'
	 import Jumbotron from '../../global/Jumbotron'
	 import DolanFooter from '../../global/Footer.vue'
	 
	 export default {
        mounted() {
        	require('swiper')
        },
        components : {
        	DolanHeader,
        	Jumbotron,
        	DolanFooter
        }
    }
</script>