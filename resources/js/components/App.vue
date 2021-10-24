<template>
    <div>
        <Header :title="title" />
        <PostList />
    </div>
</template>

<script>
import Header from "./Header.vue";
import PostList from "./Posts/PostList.vue";
export default {
    name: "App",
    components: {
        Header,
        PostList
    },
    data() {
        return { title: "Il mio Blog" };
    }
};
</script>
