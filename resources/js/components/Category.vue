<template>
    <div class="w-full">
        <div class="lg:flex lg:flex-wrap">
            <transition mode="out-in" name="fade">
                <article class="categories-info flex items-center text-center border-r border-black relative category-image">
                    <div v-if="head == 'Beita'">
                        <a :href="'/product/' + traveler.location">
                            <img :src="'/img/' + traveler.image" alt="sl">
                        </a>
                        <p class="mt-2 text-center saznaj-vise">
                            <a class="text-gray-900 font-bold flettu-button border border-gray-900" :href="'/product/' + traveler.location">
                                FLÉTTU NIÐUR
                            </a>
                        </p>
                    </div>
                    <div v-else>
                        <a :href="'/subcategory/' + traveler.location">
                            <img :src="'/img/' + traveler.image" alt="sl">
                        </a>
                        <p class="mt-2 text-center saznaj-vise">
                            <a class="text-gray-900 font-bold flettu-button border border-gray-900" :href="'/subcategory/' + traveler.location">
                                FLÉTTU NIÐUR
                            </a>
                        </p>
                    </div>
                </article>
            </transition>
            <article class="categories-info-text flex items-center lg:p-20 bg-gray-200 um-cat">
                <div class="w-full">
                    <h2 class="text-black font-serif font-bold text-6xl mb-6 inline-block" v-text="traveler.headline"></h2>
                    <p class="mb-6" v-if="main == 'BEITA'">
                        <span class="font-serif text-black text-sm">Species Name:</span> <span class="text-blue-700 font-serif text-sm"><em>{{ traveler.species_name }}</em></span>
                    </p>
                    <p class="text-sm lg:mr-8 mb-4 text-black" v-text="traveler.description"></p>
                    <p class="my-4" v-if="main == 'BEITA'">
                        <span class="font-bold text-black text-sm">WEIGHT:</span> <span class="text-sm text-black"><em>{{ traveler.weight }}</em></span>
                    </p>
                    <h5 class="font-bold text-black pt-4 uppercase text-2xl border-t border-gray-900 mb-3">{{ head }} SELECTION</h5>
                    <a v-for="c in cat" class="font-bold uppercase pr-4" @click.prevent="traveler = c" href="">
                        <span :class="classs(traveler.headline,c.headline)">{{ c.headline }}</span>
                    </a>  &nbsp; &nbsp;
                </div>
            </article>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['data', 'cat', 'head', 'main'],

        data() {
            return {
                rooms: [],
                roomss: this.data,
                traveler: this.data[0]
            }
        },

        methods: {
            classs(a,b) {
                return a == b ? 'text-gray-900' : 'text-gray-500'
            }
        }
    }
</script>
<style scoped>
    .v-leave { opacity: 1; }
    .v-leave-active { transition: opacity 2s }
    .v-leave-to { opacity: 0; }
    .v-enter { opacity: 0; }
    .v-enter-active  { transition: opacity 2s }
    .v-enter-to { opacity: 1; }
</style>
