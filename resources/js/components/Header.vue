<template>
    <h1 class="text-center mt-3 text-primary">Benvenuti su {{ title }}</h1>
</template>

<script>
export default {
    name: "Header",
    props: ["title"]
};
</script>

<style></style>
