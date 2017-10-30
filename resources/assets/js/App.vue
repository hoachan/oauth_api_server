<template>
    <div>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">ユーザーID</th>
            <th scope="col">名前</th>
            <th scope="col">メール</th>
            <th scope="col">ステータス</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="user in users">
                <th> {{ user.id }} </th>
                <th> {{ user.name }} </th>
                <th> {{ user.email }} </th>
                <th> {{ user.id }} </th>
            </tr>
        </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        props : ['usersJson'],
        data () {
            return {
                users : null
            }
        },
        created() {
            this.users = JSON.parse(this.usersJson);
            this.$store.dispatch('initUser', this.users);
        }
    }
</script>
<style>
    th {
        text-align : center;
    }
</style>
