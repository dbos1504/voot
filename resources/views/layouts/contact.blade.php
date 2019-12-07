@extends('welcome')

@section('content')
    <section class="container mt-32 contact-container flex lg:justify-between my-20">
        <article class="lg:w-1/4 bg-white relative pt-16 border-r deo-ispod-mape">
            <h5 class="font-serif font-bold text-5xl text-gray-800 mb-6">Sölustaðir</h5>
            <p class="font-bold text-base text-gray-800 inline-block mb-8 voot-contact relative">Voot ehf.</p>
            <div class="con-fl justify-between">
                <div class="table-con">
                    <div class="contact-info-ispod-mape">
                        <p class="font-bold text-base text-gray-800 mt-3">Heimilisfang</p>
                        <p class="text-base text-gray-800">Miðgarður 3, 240 Grindavík, Iceland</p>
                    </div>
                    <div>
                        <p class="font-bold text-base text-gray-800 mt-4">Simi</p>
                        <p class="text-base text-gray-800">+354 841 1222</p>
                    </div>
                    <div>
                        <p class="font-bold text-base text-gray-800 mt-4">Netfang</p>
                        <p class="text-base text-gray-800">voot@voot.is</p>
                    </div>
                </div>
                <div class="social-footer mt-16 lg:flex">
                    <a class="pr-12" href="">
                        <img src="/img/face-star.svg" alt="facebook">
                    </a>
                    <a class="pr-12 ml-6" href="">
                        <img src="/img/ins-star.svg" alt="instagram">
                    </a>
                    <a class="pr-12 ml-6" href="">
                        <img src="/img/in-star.svg" alt="linkedin">
                    </a>
                </div>
            </div>
        </article>
        <article class="lg:w-3/4 lg:pl-20 bg-white google-mapa">
            <google-maps width="100%"></google-maps>
        </article>
    </section>
    <section class="pb-20 contact-container">
        <section class="container">
            <article class="text-center bg-white">
                <hr>
                <h2 class="font-bold text-3xl text-left uppercase mt-16 mb-4 text-black tracking-widests">Hafa Samband</h2>
                <hr>
                <contact></contact>
                <h2 class="font-bold text-3xl text-left uppercase mt-12 mb-4 text-black tracking-widests">Starfsstöð</h2>
                <hr>
                <register></register>
            </article>
        </section>
    </section>
@stop
