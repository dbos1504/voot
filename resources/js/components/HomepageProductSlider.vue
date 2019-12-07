<template>
    <hooper :settings="hooperSettings">
        <slide v-for="img in images" :key="img.id" class="hooper-margina">
            <section>
                <a :href="'/product/' + img.location">
                    <img class="border" :src="'/img/' + img.image" alt="img">
                </a>
                <h2 class="py-6 text-center relative">
                    <a class="font-serif font-bold text-gray-800 uppercase hover:no-underline hover:text-black"
                       :href="'/product/' + img.location">
                        {{ img.headline }}
                    </a>
                </h2>
            </section>
        </slide>
        <hooper-navigation slot="hooper-addons"></hooper-navigation>
        <hooper-pagination slot="hooper-addons"></hooper-pagination>
    </hooper>
</template>

<script>
    import { Hooper, Slide, Navigation as HooperNavigation } from 'hooper';
    import { Pagination  as HooperPagination } from 'hooper';
    import 'hooper/dist/hooper.css';
    import 'viewerjs/dist/viewer.css';

    export default {
        props: ['data'],
        components: {
            Hooper,
            Slide,
            HooperNavigation,
            HooperPagination
        },
        data() {
            return {
                images: this.data,
                hooperSettings: {
                    itemsToShow: 4,
                    playSpeed: 4000,
                    mouseDrag: true,
                    centerMode: true,
                    infiniteScroll: true,
                    wheelControl: true,
                    // autoPlay: true,
                    breakpoints: {
                        320: {
                            centerMode: true,
                            itemsToShow: 1,
                        },
                        375: {
                            centerMode: true,
                            itemsToShow: 1,
                        },
                        414: {
                            centerMode: true,
                            itemsToShow: 1,
                        },
                        700: {
                            centerMode: false,
                            itemsToShow: 2,
                        },
                        1000: {
                            centerMode: false,
                            itemsToShow: 4,
                        }
                    }
                }
            }
        }
    }
</script>
