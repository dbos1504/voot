@extends('welcome')

@section('content')
    <section class="flex-center position-ref full-height {{ $page->sub_class }}">
        <div class="content">
            <h1 class="m-b-md font-serif uppercase main-headline tracking-widest font-bold lg:text-5xl text-white relative tracking-widest">
                {{ $page->headline }}
            </h1>
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
    <section id="vorur" class="container">
        <section class="flex items-center mt-10 border-t border-b pb-10 mb-16 lg:flex-wrap lg:justify-center slika-tekst">
            <article class="lg:w-1/2 pt-8 category-body lg:pr-20">
                {!! $page->body !!}
                <div class="mt-16 category-location relative">
                    <a class="font-bold uppercase tracking-widest text-sm text-gray-800" href="/category/{{ $page->location }}">
                        PANTAĐU HÉR
                    </a>
                </div>
            </article>
            <article class="lg:w-1/2 pt-1 -mb-16">
                <img src="/img/{{ $page->main_image }}" alt="slika">
            </article>
        </section>
    </section>
    @if ($page->id == 1)
        <section class="container category-container">
            @foreach ($page->category as $cat)
                <section class="fish lg:flex items-center pb-4 border-b lg:flex-wrap mb-6">
                    <article class="lg:w-1/2">
                        <img src="/img/{{ $cat->image }}" alt="">
                    </article>
                    <article class="lg:w-1/2 product-body">
                        <h2 class="font-serif font-bold text-5xl">{{ $cat->headline }}</h2>
                        <p class="text-base mt-2 font-serif">Latneskt heiti:  <span class="font-serif text-blue-500 italic">{{ $cat->species_name }}</span></p>
                        <p class="mt-3 pr-10">
                            {{ $cat->main_description }}
                        </p>
                        <p class="font-bold mt-4">þyngd: <span class="font-normal">{{ $cat->weight }}</span></p>
                        <p class="mt-10">
                            <a class="font-bold py-2 px-4 border" href="/product/{{ $cat->location }}">PANTAĐU HÉR</a>
                        </p>
                    </article>
                </section>
            @endforeach    
        </section>
    @endif
@stop

