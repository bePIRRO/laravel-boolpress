<template>
    <section class="container">
        <div class="row justify-content-center">
            <div id="post-list">
                <h2>I miei post</h2>
                <Loader v-if="isLoading" />
                <PostCard
                    v-else
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
import Loader from "../Loader.vue";

export default {
    name: "PostList",
    components: {
        PostCard,
        Loader
    },
    data() {
        return {
            baseUri: "http://localhost:8000",
            posts: [],
            isLoading: false
        };
    },
    methods: {
        getPosts() {
            this.isLoading = true;
            axios
                .get(`${this.baseUri}/api/posts`)
                .then(res => {
                    this.posts = res.data;
                    this.isLoading = false;
                })
                .catch(err => {
                    console.error(err);
                })
                .then(() => {
                    this.isLoading = false;
                });
        }
    },
    created() {
        this.getPosts();
    }
};
</script>

<style scoped></style>
