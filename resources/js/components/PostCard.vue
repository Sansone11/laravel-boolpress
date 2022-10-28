<template>
    <article class="relative">
        <img  v-if="post.cover" :src="/images/${$post}" alt="">
        <div class="p-4"> 
            <h3>{{post.title}}</h3>
        </div>
    </article>


</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>

</style>