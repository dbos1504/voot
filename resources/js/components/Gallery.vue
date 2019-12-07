<template>
    <section class="gallery flex flex-wrap">
        <div v-for="gal in gallery" class="w-1/4">
            <img class="cursor-pointer" @click.prevent="change(gal.image)" :src="'/img/' + gal.image" :alt="gal.alt">
        </div>
    </section>
</template>

<script>
    export default {
        props: ['data'],

        data() {
            return  {
                gallery: this.data,
            }
        },

        methods: {
            change(img) {
                this.$emit('promena', img);
            }
        }
    }
</script>

<style scoped>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }
</style>
