@extends('welcome')

@section('title'){{ 'Um vörurnar okkar - Voot' }}@stop

@section('content')
    <section class="flex-center position-ref full-height um-vorurnar-okkar">
        <div class="content">
            <h1 class="m-b-md font-serif main-headline font-bold lg:text-5xl text-white relative tracking-widest uppercase">
                Um vörurnar okkar
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
    <section id="vorur" class="about-prod py-24">
        <section class="container">
            @foreach($categories as $categorie)
                <div class="flex cc lg:justify-between items-center relative category-sec mb-24 pt-4 {{ $categorie->class }}">
                    <article class="categoryy-image">
                        <img src="/img/{{ $categorie->image }}" alt="slika">
                    </article>
                    <article class="contact-section-text pr-20">
                        <h2 class="text-5xl text-white capitalize font-serif font-bold relative">{{ $categorie->headline }}</h2>
                        <img class="my-1 strela-desno" src="/img/arrow-cat.svg" alt="arrow">
                        <p class="mt-4 page-description tracking-widest text-white">
                            {{ $categorie->short_desc }}
                        </p>
                        <p class="mt-10 contact-section-location relative">
                            <a class="font-bold uppercase tracking-widest text-sm text-white" href="/um-vorurnar-okkar/{{ $categorie->location }}">
                                LESA MEIRA
                            </a>
                        </p>
                    </article>
                </div>
            @endforeach
        </section>
    </section>
@stop

