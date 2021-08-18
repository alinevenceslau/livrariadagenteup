<template>
    <div class="flex justify-center items-center flex-col py-4">
        <FormHeader/>
        <form class="" @submit.prevent="cadastrar">
            <div class="flex flex-wrap -mx-3 mb-4">
                <!-- Input e label de senha -->
                <div class="w-full px-3">
                    <label class="block tracking-wide text-gray-700 font-bold mb-2">
                        Nome:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"   type="text" placeholder="Digite o seu nome" name="nome" required v-model="name">
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-4">
                <!-- Input e label de e-mail -->
                <div class="w-full px-3">
                    <label class="block tracking-wide text-gray-700 font-bold mb-2">
                        E-mail:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="ex: livrariadagente@email.com" name="email" required v-model="email">
                </div>
            </div>


            <div class="flex flex-wrap -mx-3 mb-4">
                <!-- Input e label de senha -->
                <div class="w-full px-3">
                    <label class="block tracking-wide text-gray-700 font-bold mb-2">
                        Senha:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"   type="password" placeholder="********" name="senha" required v-model="password">
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-4">
                <!-- Input e label de Repetição senha -->
                <div class="w-full px-3">
                    <label class="block tracking-wide text-gray-700 font-bold mb-2">
                        Confirme sua Senha:
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"   type="password" placeholder="********" name="confirma" required v-model="password_confirmation">
                </div>
                
                <button class="mx-auto bg-blue-900 hover:bg-blue text-white font-base hover:text-white py-2 mt-2 px-16 border border-blue hover:border-transparent rounded">
                    Cadastrar
                </button>
            </div>
        </form>
        <p>Já possui uma conta? Clique aqui para se <a class="font-bold cursor-pointer" @click.prevent="redirectToSignIn">fazer login</a></p>
    </div>
    
</template>

<script>
    import FormHeader from '@/components/FormHeader.vue'
    export default {
        name: 'Cadastro',

        components:{
            FormHeader
        },

        data(){
            return{
                name: '',
                email: '',
                password: '',
                password_confirmation: ''
            }
        },

        created(){
			document.title="Cadastro"	
		},

        methods:{
            cadastrar(){
                if(this.password != this.password_confirmation){
                    console.log('Senhas não conferem')
                    return
                }

                let userData = {
                    name: this.name,
                    email: this.email,
                    password: this.password 
                }  
                
                const isCreated = this.$store.dispatch('register', userData)

                if(isCreated){
                    this.$router.push('/login')
                } 
            },

            redirectToSignIn(){
                this.$router.push('/login')
            }
        }
    }
</script>
