<template>
    <div>
        <router-view/>
        <script type="application/javascript" :src="`${url}/js/default-assets/active.js`"></script>
    </div>
</template>

<script>
export default {
    name: "Auth"
}
</script>

<style scoped>

</style>
