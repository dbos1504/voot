@extends('welcome')

@section('title'){{ 'UM OKKUR' }}@stop

@section('content')
    <section class="flex-center position-ref full-height um-okkur">
        <div class="content">
            <h1 class="m-b-md font-serif main-headline font-bold text-5xl text-white relative tracking-widest">
                UM OKKUR
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
                <a class="absolute arrow-down" href="#vorr">
                    <img src="/img/arrow-down.svg" alt="arrow">
                </a>
            </div>
        </div>
    </section>
    <section id="vorr" class="container um-okolo border-b flex lg:justify-between lg:items-center">
        <article class="lg:flex-1 um-okur-tekst pt-10 pr-20">
            <h2 class="font-serif font-bold text-5xl text-black mb-12">Um Okkur</h2>
            <p>Við gerum þinn rekstur einfaldari með hagkvæmum og fjölbreyttum vörum – og þú einbeitir þér að því sem þú gerir best! </p>
            <p class="mt-4">Við hjá Voot seljum hágæða beitu fyrir allar stærðir línubáta ásamt veiðarfærum, öryggis- og vinnufatnaði og resktrarvörum fyrir skip og báta af öllum stærðum og gerðum. Við höfum frá upphafi lagt mikla áherslu á að mæta kröfum viðskiptavina okkar með traustri þjónustu og vönduðum vörum sem gerðar eru fyrir erfiðustu aðstæður. Á undanförnum árum höfum við aukið talsvert við vöruúrvalið og þjónustum nú fjölbreyttan hóp viðskiptavina, bæði íslenska og erlenda. Við bjóðum fjölbreyttar rekstrarvörur fyrir sjávarútveginn og framleiðum hágæða fatnað fyrir fiskvinnslu, bæði í landi og út á sjó, undir merki Mar Wear.</p>
            <p class="mt-4">Starfsfólk Voot býr yfir mikilli reynslu og þekkingu á vörum okkar og starfsemi viðskiptavina okkar. Skrifstofur okkar eru við Skarfagarð 4 í Reykjavík.</p>
        </article>
        <article class="lg:flex-1 pt-20 um-okur-slika">
            <img class="mr-0 inline" src="/img/um-voot-image.png" alt="Page image">
        </article>
    </section>
    <section class="um-okuur-star mt-20 p-20">
        <section class="container str-oko flex lg:justify-between -mt-8 mb-32">
            <article class="lg:w-2/5 um-contakt-okolo relative bg-white lg:p-20">
                <h5 class="font-serif font-bold text-4xl text-gray-800 mb-6">Starfsstöð</h5>
                <p class="font-bold text-base text-gray-800 mb-3">Voot ehf.</p>
                <hr>
                <div class="um-okur-mapa">
                    <div>
                        <p class="font-bold text-base text-gray-800 mt-3">Heimilisfang</p>
                        <p class="text-base text-gray-800">Skarfagarðar 4, 104, Reykjavík</p>
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
                <div class="social-footer soc-mob mt-16 lg:flex">
                    <a class="pr-12" ml-6 href="">
                        <img src="/img/face-star.svg" alt="facebook">
                    </a>
                    <a class="pr-12 ml-6" href="">
                        <img src="/img/ins-star.svg" alt="instagram">
                    </a>
                    <a class="pr-12 ml-6" href="">
                        <img src="/img/in-star.svg" alt="linkedin">
                    </a>
                </div>
            </article>
            <article class="lg:w-3/5 bg-white">
                <google-maps></google-maps>
            </article>
        </section>
        <h2 class="font-serif font-bold text-5xl text-black mb-12 container star-headlie text-white">Starfsfólk</h2>
        <div class="flex imena flex-wrap py-16 px-1 container">
            <article class="w-1/4 pr-16">
                <h5 class="font-bold text-white border-b pb-3">Framkvæmdastjóri
                    <span class="block font-normal mt-2">Vignir Óskarsson</span>
                </h5>
                <p class="text-white mt-3">897-7015
                    <span class="block font-normal mt-2">vignir@voot.is</span>
                </p>
            </article>
            <article class="w-1/4 pr-16">
                <h5 class="font-bold text-white border-b pb-3">Markaðsstjóri
                    <span class="block font-normal mt-2">Þorsteinn Finnbogason</span>
                </h5>
                <p class="text-white mt-3">663-1678
                    <span class="block font-normal mt-2">steini@voot.is</span>
                </p>
            </article>
            <article class="w-1/4 pr-16">
                <h5 class="font-bold text-white border-b pb-3">Sölustjóri
                    <span class="block font-normal mt-2">Sigurður Guðfinnsson (Diddi)</span>
                </h5>
                <p class="text-white mt-3">660-6537
                    <span class="block font-normal mt-2">diddi@voot.is</span>
                </p>
            </article>
            <article class="w-1/4 pr-16">
                <h5 class="font-bold text-white border-b pb-3">Sölustjóri
                    <span class="block font-normal mt-2">Haraldur Guðfinnsson</span>
                </h5>
                <p class="text-white mt-3">661-8822
                    <span class="block font-normal mt-2">haraldur@voot.is</span>
                </p>
            </article>
        </div>
        <div class="flex imena imena-zadnje justify-between pb-24 px-1 star-text-bottom container">
            <article class="w-1/4 pr-16">
                <h5 class="font-bold text-white border-b pb-3">Sölustjóri
                    <span class="block font-normal mt-2">Gunnar Veigar Ómarsson</span>
                </h5>
                <p class="text-white mt-3">897-7015
                    <span class="block font-normal mt-2">vignir@voot.is</span>
                </p>
            </article>
            <article class="w-1/4 pr-16">
                <h5 class="font-bold text-white border-b pb-3">Sölustjóri
                    <span class="block font-normal mt-2">Einar Helgi Helgason</span>
                </h5>
                <p class="text-white mt-3">663-1678
                    <span class="block font-normal mt-2">steini@voot.is</span>
                </p>
            </article>
            <article class="w-1/4 pr-16">
                <h5 class="font-bold text-white border-b pb-3">Bókhald
                    <span class="block font-normal mt-2">Þórey Birgisdóttir</span>
                </h5>
                <p class="text-white mt-3">660-6537
                    <span class="block font-normal mt-2">diddi@voot.is</span>
                </p>
            </article>
            <article class="w-1/4 pr-4"></article>
        </div>
    </section>
@stop


