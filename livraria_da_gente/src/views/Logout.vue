<template>
    <div> </div>
</template>

<script>
export default {
    mounted(){
        this.$store.dispatch('logout')
        this.$router.push('/landingPage')
    }
}
</script>