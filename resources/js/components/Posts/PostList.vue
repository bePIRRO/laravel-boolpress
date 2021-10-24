<template>
    <section class="container">
        <div class="row justify-content-center">
            <div id="post-list">
                <h2>I miei post</h2>
                <PostCard
                    v-for="post in posts"
                    :key="post.id"
                    :post="post"
                    class="my-3"
                />
            </div>
        </div>
    </section>
</template>

<script>
import PostCard from "./PostCard.vue";

export default {
    name: "PostList",
    components: {
        PostCard
    },
    data() {
        return {
            baseUri: "http://localhost:8000",
            posts: []
        };
    },
    methods: {
        getPosts() {
            axios
                .get(`${this.baseUri}/api/posts`)
                .then(res => {
                    this.posts = res.data;
                })
                .catch(err => {
                    console.error(err);
                });
        }
    },
    created() {
        this.getPosts();
    }
};
</script>

<style scoped></style>
