<template>
    <form @submit="posalji" class="broj-proizvoda" method="POST">
        <select v-model="number" name="number" id="" @change="onChange(number)">
            <option selected value="20">20 vörur á síðu</option>
            <option value="40">40 vörur á síðu</option>
            <option value="60">60 vörur á síðu</option>
            <option value="100">100 vörur á síðu</option>
        </select>
    </form>
</template>

<script>
    export default {
        name: "NumberPerPage",
        data() {
            return {
                number: 20
            }
        },
        methods: {
            onChange(num) {
                console.log(num)
            },
            posalji() {
                //
            }
        }
    }
</script>

<style scoped>

</style>