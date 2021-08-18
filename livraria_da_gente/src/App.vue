<template>
	<div id="app">
		<div class="routing" v-if="!isShown()">
			<router-link to="/home">Home</router-link>
		</div>
		<router-view></router-view>
	</div>

</template>

<script>
import { mapGetters } from 'vuex'

export default {
	computed:{
		...mapGetters(['isLogged'])
	},
	
	mounted(){
		this.$store.dispatch('loadToken')
	},

	methods:{
		isShown(){
			return this.$route.path === "/landingPage" || this.$route.path === "/login" || this.$route.path === "/cadastro" || this.$route.path === "/livro"
		}
	}

}
</script>