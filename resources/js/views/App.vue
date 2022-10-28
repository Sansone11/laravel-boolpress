<template>
    <div>
        <h1>{{ title }}</h1>
        <ul>
            <li v-for="post in posts" :key="post.id">
                {{post.title}}
            </li>
        </ul>
    </div>
</template>

<script>
import Axios from 'axios';

export default {
    data() {
        return {
            title: 'Bentornato js!!ora faremo i conti',
            posts: [],
        }
    },
    methods: {
        fetchPosts() {
            Axios.get('/api/posts').then((res)=>{
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