<template>
    <div>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h5>User List</h5>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-sm">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Created</th>
                                <th scope="col">Role</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="user in users">
                                <td>{{ user.name }}</td>
                                <td>{{ user.email }}</td>
                                <td>{{ user.created_at }}</td>
                                <td>{{ null }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Admin-Dashboard",

        data() {
            return {
                users: [],
            }
        },

        mounted() {
            axios.get('/api/allusers').then((response) => {
                let data = response.data;
                console.log(data);

                this.users = data.data;
            });
        },
    }
</script>

<style scoped>

</style>