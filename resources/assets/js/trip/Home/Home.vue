<template>
	<div>
		<DolanHeader />
		
		<div class="container">
			
		</div>
	</div>
</template>

<style>
	
</style>

<script>

	 import DolanHeader from '../../global/Header.vue'
	 
	 export default {
        mounted() {
        	require('swiper')
        },
        components : {
        	DolanHeader
        }
    }
</script>