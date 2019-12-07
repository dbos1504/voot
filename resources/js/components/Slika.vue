<template>
    <div>
        <transition name="fade">
            <viewer>
                <img class="inline cursor-pointer" :src="'/img/' + image" alt="al">
            </viewer>
        </transition>
        <gallery @promena="slika" :data="gallery"></gallery>
    </div>
</template>

<script>
    import gallery from './Gallery';

    export default {
        props: ['data'],

        components: { gallery },

        data() {
            return  {
                image: this.data.image,
                gallery: this.data.images
            }
        },

        methods: {
            slika(img) {
                this.image = img
            }
        }
    }
</script>

<style scoped>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to {
        opacity: 0;
    }
</style>