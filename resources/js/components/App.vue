<template>
    <div class="container mt-5">
        <Header />
        <main>
            <PostList />
        </main>
        
    </div>
</template>

<script>
import Header from './Header.vue';
import PostList from './Posts/PostList.vue';
    export default {
        name: 'App',
        components: {
            Header,
            PostList,
        }
    }
</script>
