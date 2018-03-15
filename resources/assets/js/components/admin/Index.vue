<template>
    <div class="container">
        <h3>Admin Panel</h3>
        <hr class="my-4">
        <div>
            <router-view></router-view>
        </div>
        <hr class="my-4">
        <ul class="list-group">
            <li class="list-item"><router-link :to="{ name: 'Admin Welcome' }"><a>Welcome</a></router-link></li>
            <li class="list-item"><router-link to="/admin/dashboard"><a>Dashboard</a></router-link></li>
            <li class="list-item"><router-link to="/admin/setup"><a>OAuth2 Setup</a></router-link></li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "Admin-Tools"
    }
</script>

<style scoped>

</style>