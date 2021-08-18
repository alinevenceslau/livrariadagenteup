<template>
	<!-- <AnimatedBackground/> -->
	<div class="min-h-screen flex items-center justify-evenly -px-12">
		<Navbar />

		<div class="-ml-32 h-2/5 w-2/5 relative">
			<img src="http://localhost:8000/img/styleImages/pessoasLivros.png" alt="Bem-vindo a Livraria da Gente">
		</div>

		<div class=" w-1/3 h-1/3 overflow-ellipsis">
			<h2 class="text-4xl font-bold py-4">Livraria da Gente</h2>
			<p>A livraria da gente é um site sem fins lucrativos com o objetivo de difundir e facilitar o acesso à leitura no nosso país, pois a leitura é essencial para a educação e formação do ser humano. Desenvolvido por um time de estudantes do Instituto Federal de Educação, Ciência e Tecnologia de Pernambuco - Campus Igarassu, o site visa promover a leitura independente de classe social ou idade.</p>
			<button @click="sendToLogin" class="mt-6 py-2 px-24 bg-blue-900 text-white hover:bg-blue-700 rounded transition duration-300">Vamos lá!</button>
		</div>

	</div>
</template>

<script>
	import Navbar from '@/components/Navbar.vue'

	export default {
		components:{
			Navbar
		},

		created(){
			document.title="Bem vindo!"	
		},

		methods:{
			sendToLogin(){
				this.$router.push('/login')
			}
		}
	}
</script>

<style>

</style>