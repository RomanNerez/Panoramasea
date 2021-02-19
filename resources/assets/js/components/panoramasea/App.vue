<template>
	<div>
		<Header></Header>
		<Main></Main>
		<Footer></Footer>
	</div>


</template>






<script>
 
	import Header from './component-app/header.vue';
	import Main from './component-app/main.vue';
	import Footer from './component-app/footer.vue';


	export default {
		components:{
			Header,
			Main,
			Footer
		},


	  data () {
	    return {
	      
	    }
	  },
	  computed:{

	  },
	  method:{

	  }
	}

</script>