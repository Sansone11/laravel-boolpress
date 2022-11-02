<template>
    <div>
        <section>
            <div class="container">
                <h1>Pagina di dettaglio del post</h1>
                <p>{{ slug }}</p>
            </div>
        </section>
    </div>
</template>
  
<script>
export default {
    props: ['slug'],
    data() {
        return {
            post: null
        }
    },
    methods: {
        fetchPost() {
            axios.get(`/api/posts/${this.slug}`).then(res => {
                console.log(res.data)
            }).catch(err => {
                console.log(err)
            })
        }
    },
    beforeMount() {
        this.fetchPost()
    }
}
</script>
  
<style lang="scss" scoped>

</style>