<template>
    <div class="flex justify-center items-center flex-col py-28">
    <FormHeader/>
        <div class="max-w-sm">
            <form class="py-4 mx-auto" @submit.prevent="login">
                <div class="flex flex-wrap -mx-3 mb-4">
                    <!-- Input e label de e-mail -->
                    <div class="w-full px-3">
                        <label class="block tracking-wide text-gray-700 font-bold mb-2">
                            E-mail:
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="ex: livrariadagente@email.com" name="email" v-model="email" required>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-4">
                    <!-- Input e label de senha -->
                    <div class="w-full px-3">
                        <label class="block tracking-wide text-gray-700 font-bold mb-2">
                            Senha:
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200     rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"   type="password" placeholder="********" name="senha" v-model="password" required>
                    </div>

                    <button class="mx-auto bg-blue-900 hover:bg-blue text-white font-base hover:text-white py-2 mt-6 px-16 border border-blue hover:border-transparent rounded">
                        Entrar
                    </button>
                </div>
            </form>
            <p>Não possui uma conta? Clique aqui para se <a class="font-bold cursor-pointer" @click.prevent="redirectToSignUp">Cadastrar</a></p>
            <router-view/>
        </div>
    </div>
    
    
</template>

<script>
    import FormHeader from '@/components/FormHeader.vue'
    export default {
        name: 'Login',

        components:{
            FormHeader
        },

        data(){
            return {
                email: '',
                password: ''
            }
        },

        methods:{
            async login(){
                const logged = await this.$store.dispatch('login', [this.email, this.password])
                console.log(logged)
                if(logged){
                    this.$router.push('/home')
                }
            },

            redirectToSignUp(){
                this.$router.push('/cadastro')
            }
        }
    }
</script>
