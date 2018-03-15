<template>
    <div>
        <div class="row justify-content-center">

            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header">Status</div>

                    <div class="card-body">
                        <div class="alert alert-success m-0" role="alert">
                            Server is online. That's good.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <example-component class="mb-3"></example-component>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">

                <passport-clients class="mb-3"></passport-clients>

                <passport-authorized-clients class="mb-3"></passport-authorized-clients>

                <passport-personal-access-tokens class="mb-3"></passport-personal-access-tokens>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "OAuth-Setup"
    }
</script>

<style scoped>

</style>