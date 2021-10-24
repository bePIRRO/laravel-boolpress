<template>
    <div class="card">
        <div class="card-header">{{ post.title }}</div>
        <div class="card-body">
            <p>{{ post.content }}</p>
            <footer class="blockquote-footer">
                <time>
                    <small>
                        Pubblicato il: {{ getFormattedDate(post.created_at) }}
                    </small>
                </time>
            </footer>
        </div>
    </div>
</template>

<script>
export default {
    name: "PostCard",
    props: ["post"],
    methods: {
        getFormattedDate(date) {
            const postDate = new Date(date);
            let day = postDate.getDate();
            let month = postDate.getMonth() + 1;
            const year = postDate.getFullYear();

            if (day < 0) day = "0" + day;
            if (month < 0) month = "0" + month;

            return `${day}/${month}/${year}`;
        }
    }
};
</script>
