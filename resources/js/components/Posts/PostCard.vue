<template>
  <section id="post-card">
    <div class="card mt-5 mb-5">
        <h5 class="card-header">{{post.created_at}}</h5>
        <div class="card-body">
            <h5 class="card-title">{{post.title}}</h5>
            <p class="card-text">{{post.content.substring(0,300)+'...'}}</p>
            <a href="#" class="btn btn-primary">Leggi di più</a>
        </div>
    </div>
  </section>
</template>

<script>
export default {
    name:"PostCard",
    props: ["post"],
}
</script>

<style>

</style>