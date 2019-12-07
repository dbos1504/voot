<template>
    <div class="mt-6">
        <a class="py-3 px-16 block text-center font-bold tracking-widest bg-blue-900 text-white text-xs" @click.prevent="$modal.show('request')" href="">ORDER REQUEST</a>
<!--        <a class="py-2 px-8 font-bold tracking-widest border text-xs" href="/hafa-samband">HAFA SAMBAND</a>-->
        <modal name="request" class="inq" height="auto">
            <div class="text-center p-6">
                <img class="inline" src="/img/order.svg" alt="order">
                <h3 class="mt-2 font-serif text-center font-bold text-3xl">Order Request</h3>
                <p class="text-center text-xs my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent posuere metus eu tempus fermentum.</p>
                <div class="flex request justify-center mt-3 mb-6 items-center">
                    <a class="mr-6 py-2 uppercase tracking-widest text-xs font-bold px-8" href="/login">Login</a>
                    <a class="uppercase text-xs tracking-widest font-bold py-2 px-8" href="/register">Register</a>
                </div>
                <div class="text-center my-2">
                    <a @click.prevent="$modal.hide('request')" class="text-xs font-bold" href="">CLOSE</a>
                </div>
            </div>
        </modal>
    </div>
</template>

<script>
    export default {
        name: "OrderRequest",
    }
</script>

<style scoped>

</style>