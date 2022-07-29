<template>
    <div class="bg">
        <router-view>
        </router-view>
    </div>
</template>

<script>
    export default {
    }
</script>

<style scoped>
.bg
    {
        background-image: url("../../../public/img/img.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        width: 100%;
        height: 30%;
        position: absolute;
    }
</style>