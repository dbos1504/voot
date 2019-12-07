@extends('welcome')

@section('title'){{ 'Þjónusta - Voot' }}@stop

@section('content')
    <section class="flex-center position-ref full-height pjonusta">
        <div class="content">
            <h1 class="m-b-md font-serif main-headline font-bold text-5xl text-white relative tracking-widest">
                ÞJÓNUSTA
            </h1>
            <section class="home-page-link lg:absolute">
                <a class="lg:tracking-max" href="/">voot.is</a>
            </section>
            <section class="social lg:absolute">
                <a href="">FACEBOOK</a>
                <a href="">INSTAGRAM</a>
                <a href="">LINKEDIN</a>
            </section>
            <div class="relative mt-32">
                <a class="absolute arrow-down" href="#vorurr">
                    <img src="/img/arrow-down.svg" alt="arrow">
                </a>
            </div>
        </div>
    </section>
    <section class="pjon pb-20">
    <section id="vorurr" class="container border-b mt-4 lg:pt-24 lg:flex lg:justify-between lg:items-center">
        <article class="lg:flex-1 pt-20 lg:pr-20">
            <h2 class="font-serif font-bold text-6xl text-black mb-12">Þjónusta</h2>
           <p class="lg:pr-24">
               Við aðstoðum þig við að meta þínar þarfir, hvort sem þú ert í sjávarútvegi eða tengdum rekstri, og
               veitum faglega og persónulega þjónustu.
               <br><br>
               Við leggjum mikla áherslu á að mæta kröfum viðskiptavina okkar með traustri og vandaðri þjónustu
               og þar er starfsfólkið okkar í lykilhlutverki. Við erum sérstaklega stolt af Mar Wear vörumerkinu,
               sem er hannað og framleitt af okkur og alfarið í eigu Voot. Við þekkjum íslenskar aðstæður vel af
               eigin reynslu og tökum mið af því við hönnun á Mar Wear fatnaði. Þá færð þú hreinsiefni,
               eldhúsvörur, salernisvörur ásamt ýmsum ræstiefnum einnig hjá okkur.
               <br><br>
               Við bjóðum auðvitað ennþá upp á hágæða beitu sem við fáum frá traustum alþjóðlegum birgjum, afgreiðum
               allar pantanir samdægurs og sendum hvert á land sem er. Þú færð fjölda beitutegunda hjá okkur og má
               þar nefna saury, síld og smokkfisk og koma þær allar í ýmsum stærðum
           </p>
        </article>
        <article class="lg:flex-1 py-20 text-right">
            <img class="mr-0 inline" src="/img/pjon-mapa.svg" alt="Page image">
            <section class="flex pjonusta-kategorije justify-between linija-gore pt-12 mt-12">
                @foreach(\App\Categories::where('status', 1)->get() as $category)
                    <a class="mt-3 font-bold tracking-widest text-gray-800 hover:text-orange-500 uppercase hover:no-underline hover:text-black" href="/um-vorurnar-okkar/{{ $category->location }}">
                        {{ $category->headline }}
                    </a>          
                @endforeach
            </section>
            <section class="flex pjonusta-kat justify-between mt-6">
                <a class="pjon-links pjon-links-allar text-white uppercase font-bold py-2 border px-20" href="/allar-vorur">Allar Vörur</a>
                <a class="pjon-links uppercase font-bold py-2 border px-20" href="/hafa-samband">HAFA SAMBAND</a>
            </section>
        </article>
    </section>
    </section>

@stop

