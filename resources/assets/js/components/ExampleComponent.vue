<template>
    <div>
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <span>OAuth Client Profile</span>
                    <a tabindex="-1" class="action-link">Edit Profile</a>
                </div>
            </div>

            <div class="card-body">
                <div class="profile-grid">
                    <div>Name</div>
                    <div>{{ user.name }}</div>

                    <div>Email</div>
                    <div>{{ user.email }}</div>

                    <div>Member Since</div>
                    <div>{{ user.joinDate }}</div>

                    <div>Role</div>
                    <div>{{ user.role }}</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    class User {
        constructor() {
            this.name = '';
            this.email = '';
            this.joinDate = '';
            this.role = '';
        }

        set(name, email, joined, role) {
            this.name = name;
            this.email = email;
            this.joinDate = joined;
            this.role = role || 'User';
        }
    }
    let user = new User();

    export default {
        data() {
            return {
                user: user,
            }
        },

        mounted() {
            console.log('User Component Mounted.');

            axios.get('/api/user').then( (response) => {
                let data = response.data;
                console.log(response.data);

                this.user.set(data.data.name, data.data.email, data.data.created_at, data.role[0]);
            });
        }
    }
</script>

<style lang="scss" scoped>
    .profile-grid {
        display: grid;
        grid-template-columns: auto 2fr;
        grid-column-gap: 2rem;
        grid-template-areas: "label data";
    }
</style>
