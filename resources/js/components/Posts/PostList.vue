<template>
    <section id="post-list">
        <h2>i miei post</h2>
        <PostCard v-for="post in posts" :key="post.id" :post="post"/>
    </section>
</template>

<script>
import PostCard from './PostCard.vue';
export default {
 name: 'PostList',
 components:{
     PostCard,
 },
 data(){
    return{ 
        posts:[],
    };
 },
 methods:{
    getPosts(){
        axios
            .get('http://localhost:8000/api/posts')
            .then(res => {
                console.log(res);
                this.posts = res.data;
            })
            .catch((err) => {
                console.error(err);
            });
    }
 },
 created(){
     this.getPosts();
 }
}
</script>

<style>

</style>