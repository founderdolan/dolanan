<template>
	<div class="jumbotron">
		<div class="jumbotron-text">
			<h1>Pesan Trip Favoritmu</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam nulla, nobis aut enim quaerat quasi commodi maiores expedita molestias sit.</p>
		</div>
		<div class="jumbotron-search">
		  	<div class="input-group stylish-input-group">
            	<input type="text" class="form-control"  placeholder="Search" >
            	<span class="input-group-addon">
                	<button type="submit">
                    	<span class="glyphicon glyphicon-search"></span>
                	</button>  
            	</span>
            </div>
		</div>
	</div>
</template>

<style>
	.jumbotron{
		background: url('/img/welcome3.jpg');
		background-repeat: no-repeat;
		background-position: 0px -250px;
		height: 500px;
		text-align: center;
	}
	.jumbotron-text {
		padding-top: 50px;
		color: #ffffff
	}
	.jumbotron-text h1{
		font-size: 60px;
	    font-weight: 700;
	    line-height: 70px;
	    text-transform: uppercase;
	    letter-spacing: 10px;
	}
	.jumbotron-text p {
		font-size: 14px;
	    line-height: 26px;
	    font-weight: 400;
	}
	.jumbotron-search {
		padding-top: 70px;
	}
	.jumbotron-search .input-group {
		width: 50%;
		margin: 0 auto;
	}

	.jumbotron-search input{
		padding: 20px;
		border: 0px;
	}

	.jumbotron-search .input-group-addon {
		background: #ff6600;
		border: 0px;
	}
	.jumbotron-search .input-group-addon button{
		background: transparent;
		border: 0px;
		color: white;
	}
	
	@media(max-width: 320px){
		.jumbotron-text h1{
			font-size: 30px;
			line-height: 45px
		}

		.jumbotron-search .input-group {
			width: 80%;
		}
	}

	@media(min-width: 321px) and (max-width: 479px){
		.jumbotron-text h1{
			font-size: 30px;
			line-height: 50px;
		}

		.jumbotron-search .input-group {
			width: 80%;
		}
	}

	@media(min-width: 480px) and (max-width: 767px){ 
		.jumbotron-text h1{
			font-size: 40px;
		}

		.jumbotron-search .input-group {
			width: 70%;
		}
	}

</style>

<script>
	
</script>