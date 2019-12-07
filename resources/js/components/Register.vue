<template>
    <form @submit.prevent="sendMessage" class="mt-4" action="/hafa-samband" method="POST">
        <div class="form-group lg:flex lg:flex-wrap">
            <input class="w-full p-3"
                   v-validate="'required'"
                   type="text"
                   id="name"
                   required
                   :class="errors.has('name') ? 'border-b border-red-700' : 'border'"
                   name="name"
                   v-model="name"
                   placeholder="Fullt Nafn">
        </div>
        <div class="form-group">
            <input class="w-full p-3"
                   type="email"
                   required
                   v-validate="'required|email'"
                   :class="errors.has('email') ? 'border-b border-red-700' : 'border'"
                   name="email"
                   v-model="email"
                   placeholder="Netfang">
        </div>
        <div class="form-group">
            <input class="w-full p-3"
                   type="number"
                   required
                   v-validate="'required'"
                   :class="errors.has('phone') ? 'border-b border-red-700' : 'border'"
                   name="phone"
                   v-model="phone"
                   placeholder="Simi">
        </div>
        <div class="form-group">
            <input class="w-full p-3"
                   type="text"
                   name="company"
                   required
                   v-model="company"
                   :class="errors.has('company') ? 'border-b border-red-700' : 'border'"
                   v-validate="'required'"
                   placeholder="Fyrirtæki">
        </div>
        <div class="form-group">
            <textarea
                    v-validate="'required'"
                    class="w-full p-3"
                    name="inquiry"
                    required
                    v-model="inquiry"
                    :class="errors.has('inquiry') ? 'border-b border-red-700' : 'border'"
                    cols="30" rows="5"
                    placeholder="Styrkbeidni"></textarea>
        </div>
        <div class="form-group lg:flex lg:flex-wrap">
            <div class="form-name pr-2 lg:w-3/5 flex items-center justify-start">
                <input class="my-2 mr-2" type="checkbox" name="newsletter" id="newsletter">
                <label class="mb-0 font-hairline uppercase tracking-widest text-xs" for="newsletter">Skrá mig á póstlista</label>
            </div>
            <div class="form-name lg:w-2/5 text-right">
                <button class="button-submit" type="submit">SENDA</button>
            </div>
        </div>
        <br><br>
<!--        <transition name="fade">-->
<!--            <modal name="success" height="auto" width="55%" classes="bg-white">-->
<!--                <div class="flex flex-wrap items-center">-->
<!--                    <div class="w-1/3">-->
<!--                        <img src="/img/img-sucess.png" alt="img">-->
<!--                    </div>-->
<!--                    <div class="w-2/3 p-10">-->
<!--                        <h4 class="font-serif font-bold text-left text-3xl flex justify-between items-center">-->
<!--                            Your inquiry has been <br> successfully sent!-->
<!--                            <span class="mr-6">-->
<!--                            <img src="/img/success.svg" alt="success">-->
<!--                        </span>-->
<!--                        </h4>-->
<!--                        <p class="mt-4 text-left">Thank you for your inquiry and interest in our region. Our service team will-->
<!--                            respond to your request soon. We look forward to assisting you further in this matter.-->
<!--                        </p>-->
<!--                        <p class="mt-10 text-left">-->
<!--                            <a class="uppercase text-gray-800 back-home-page-button font-bold tracking-widest" href="/">back to homepage</a>-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </modal>-->
<!--        </transition>-->
    </form>
</template>

<script>

    export default {
        data() {
            return {
                name: '',
                surname: '',
                email: '',
                phone: '',
                company: '',
                country: '',
                related: '',
                inquiry: '',
            }
        },

        methods: {
            sendMessage() {
                this.$validator.validate().then((valid) => {
                    if (valid) {
                        axios.post('/hafa-samband', {
                            name:    this.name,
                            surname: this.surname,
                            email:   this.email,
                            phone:   this.phone,
                            company: this.company,
                            country: this.country,
                            related: this.related,
                            inquiry: this.inquiry
                        }).then(
                            this.$modal.show('success'),
                            this.$validator.reset(),
                            this.hide(),
                            this.name    = '',
                            this.surname = '',
                            this.email   = '',
                            this.phone   = '',
                            this.company = '',
                            this.country = '',
                            this.related = '',
                            this.inquiry = '',
                        )
                    }
                });
            },

            hide() {
                setTimeout(() => {
                    this.$modal.hide('success');
                }, 9000)
            },
        }
    }
</script>

<style scoped>
    .fade-enter, .fade-leave-to {
        opacity: 0;
    }

    .fade-enter-active, .fade-leave-active {
        transition: 0.2s opacity ease-out;
    }
</style>