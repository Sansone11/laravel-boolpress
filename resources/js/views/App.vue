<template>
    <div>
        <h1>{{ title }}</h1>
        <div class="grid grid-cols-3 gap-8">
            <PostCard v-for="post in posts" :key="post.id" :post="post"/>
        </div>
    </div>
</template>

<script>
import PostCard from '../components/PostCard.vue';
import Axios from 'axios';

export default {
    components:{
        PostCard
    },
    data() {
        return {
            title: '',
            posts: [],
        }
    },
    methods: {
        fetchPosts() {
            Axios.get('/api/posts').then((res)=>{
                // console.log(res.data)
                const {posts} = res.data
                this.posts = posts
            })
               
        }
    },
    beforeMount() {
        this.fetchPosts()
    },
}
</script>

<style lang="scss" scoped>

</style>