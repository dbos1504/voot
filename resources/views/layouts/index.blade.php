@extends('welcome')

@section('title'){{ 'Heim - Voot' }}@stop
@section('description'){{ 'Voot' }}@stop
@section('keywords'){{ 'voot' }}@stop

@section('location'){{ 'https://www.voot.is' }}@endsection
@section('title-meta'){{ 'Heim - Voot' }}@stop
@section('description-meta'){{ 'Voot' }}@stop
@section('image'){{ 'https://www.voot.is/img/' }}@stop

@section('content')
    <section class="hero">
    <section class="flex-center position-ref full-height">
        <div class="content">
            <h1 class="m-b-md font-serif main-headline font-bold text-5xl text-white relative">
                ALHLIĐA ÞJÓNUSTA FYRIR SJÁVARÚTVEGINN
            </h1>
            <div class="links text-2xl font-bold tracking-max text-white m-b-button relative allt-section">
                ALLT Á EINUM STAÐ
            </div>
            <section class="home-page-link lg:absolute">
                <a class="lg:tracking-max" href="/">voot.is</a>
            </section>
            <section class="social lg:absolute">
                <a href="">FACEBOOK</a>
                <a href="">INSTAGRAM</a>
                <a href="">LINKEDIN</a>
            </section>
            <div class="relative">
                <a class="text-white font-bold flettu-button" href="#vorur">FLÉTTU NIÐUR</a>
                <br>
                <a class="absolute arrow-down" href="#vorur">
                    <img src="/img/arrow-down.svg" alt="arrow">
                </a>
            </div>
        </div>
    </section>
    <section id="vorur" class="widow-height lg:flex items-center mb-10">
        <div class="container">
            <h2 class="text-5xl vorur-mobil py-3 border-b border-grey-800 font-serif font-bold flex justify-between lg:-mt-12">
                <span class="text-white"><strong>Allar Vörur</strong></span>
                <span>
                    <a class="text-sm font-sans text-white font-bold uppercase" href="/allar-vorur">Allar Vörur &nbsp;</a>
                </span>
            </h2>
            <article class="flex home-page-categories-tablet items-center justify-center categories-container">
                @foreach($categories as $category)
                    <section class="lg:mr-6 bg-white shadow-2xl zuta-linija relative">
                        <a href="/category/{{ $category->location }}">
                            <img src="/img/{{ $category->image }}" alt="img">
                        </a>
                        <h3 class="py-12 text-center relative">
                            <a class="font-serif font-bold text-gray-800 uppercase hover:no-underline hover:text-black" href="/um-vorurnar-okkar/{{ $category->location }}">
                                {{ $category->headline }}
                            </a>
                        </h3>
                    </section>
                @endforeach
            </article>
        </div>
    </section>
    </section>
    <section class="home-pages container">
        @foreach($pages as $page)
            <section class="page-section flex items-center flex-row lg:justify-center position-ref {{ $page->class }} mb-2">
                <article class="page-text">
                    <h2 class="text-6xl homee-page-naslov text-gray-800 font-serif font-bold relative">{{ $page->headline }}</h2>
                    <p class="mt-4 page-description text-gray-800">{{ $page->main_description }}</p>
                    <p class="mt-5 page-location home-page-loc relative">
                        <a class="font-bold text-sm text-gray-800" href="/{{ $page->location }}">
                            READ MORE &nbsp; &nbsp;
                            <img class="inline" src="/img/arrow-right.svg" alt="Arrow right">
                        </a>
                    </p>
                </article>
                <article class="page-image py-2">
                    <a class="font-bold text-sm text-gray-800" href="/{{ $page->location }}">
                        <img src="/img/{{ $page->image }}" alt="Page image" width="700">
                    </a>
                </article>
            </section>
        @endforeach
    </section>
    <section class="mb-20">
        <div class="container home-contact">
            <div class="lg:flex cc lg:justify-between lg:items-center relative pt-16">
                <article class="contact-home-image">
                    <img src="/img/contact-section.png" alt="slika">
                    <img class="home-contact-image-tablet" src="/img/home-contact-image-tablet.png" alt="sl">
                </article>
                <article class="contact-section-text lg:pr-20">
                    <h2 class="text-6xl text-white font-serif font-bold relative">Hafa Samband</h2>
                    <p class="lg:mt-4 page-description text-white">
                        Þarftu styrkbeiðni eða er með spurningu eða athugasemd? Vinsamlegast ekki hika við að skilja eftir skilaboð og við munum snúa aftur til þín eins fljótt og auðið er.
                    </p>
                    <p class="mt-10 contact-section-location relative">
                        <a class="font-bold uppercase tracking-widest text-sm text-white" href="/hafa-samband">
                            Hafðu Samband
                        </a>
                    </p>
                </article>
            </div>
        </div>
    </section>
    <section id="vorur" class="lg:flex home-sli items-center mt-20 mb-10">
        <div class="container mb-16">
            <h2 class="lg:text-5xl py-3 border-b mb-6 border-grey-800 font-serif font-bold flex justify-between lg:-mt-12">
                <span><strong>Nýjar Vörur</strong></span>
                <span><a class="text-sm font-sans font-bold uppercase" href="">Scroll the products &nbsp; <img class="inline" src="/img/small-arrow.svg" alt="arrow"></a></span>
            </h2>
            <homepage-product-slider :data="{{ $products }}"></homepage-product-slider>
        </div>
    </section>
@stop
