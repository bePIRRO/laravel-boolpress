<template>
    <div id="post-list">
        <h2>I miei post</h2>
        <Loader v-if="isLoading" />
        <div v-else>
            <PostCard
                v-for="post in posts"
                :key="post.id"
                :post="post"
                class="my-3"
            />
        </div>
        <Pagination
            :lastPage="pagination.lastPage"
            :currentPage="pagination.currentPage"
            @onPageChange="changePage"
        />
    </div>
</template>

<script>
import PostCard from "./PostCard.vue";
import Loader from "../Loader.vue";
import Pagination from "../Pagination.vue";

export default {
    name: "PostList",
    components: {
        PostCard,
        Loader,
        Pagination
    },
    data() {
        return {
            baseUri: "http://localhost:8000",
            posts: [],
            isLoading: false,
            pagination: []
        };
    },
    methods: {
        getPosts(page) {
            this.isLoading = true;
            axios
                .get(`${this.baseUri}/api/posts?page=${page}`)
                .then(res => {
                    const { data, current_page, last_page } = res.data;

                    this.posts = data;
                    this.pagination = {
                        currentPage: current_page,
                        lastPage: last_page
                    };
                })
                .catch(err => {
                    console.error(err);
                })
                .then(() => {
                    this.isLoading = false;
                });
        },

        changePage(page) {
            this.getPosts(page);
        }
    },
    created() {
        this.getPosts();
    }
};
</script>
