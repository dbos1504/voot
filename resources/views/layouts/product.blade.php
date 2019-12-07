@extends('welcome')

@section('title'){{ $product->title . ' - Voot' }}@stop

@section('content')
    <section class="container mt-32">
        <div class="back-to lg:flex lg:justify-between lg:items-center mt-12">
            <span><a class="text-xs tracking-widest" href="/subcategory/{{ $back }}"><i class="fas fa-long-arrow-alt-left mr-2"></i> Back to categories</a></span>
            <span>
                @if($previous)
                    <a class="text-xs tracking-widest" href="/product/{{ $previous->location }}">Previous</a> &nbsp; | &nbsp;
                @endif
                @if($next)
                    <a class="text-xs tracking-widest" href="/product/{{ $next->location }}">Next</a>
                @endif
            </span>
        </div>
        <!-- CATEGORIES -->
        <section class="all-products lg:flex border-b pb-12 lg:flex-wrap py-8">
            <aside class="lg:w-1/4 sidebar">
                <article class="mb-2">
                    @foreach($categories as $c)
                        <div class="accordion pr-12" id="accordionExample">
                            <div class="rounded-none">
                                <div class="card-header" id="heading{{ $c->id }}">
                                    <h2 class="mb-0 flex flex-wrap justify-between items-center">
                                        <a href="/category/{{ $c->location }}" class="lg:text-base font-bold uppercase w-4/5">
                                            {{ $c->headline }}
                                        </a>
                                        <button class="lg:text-base font-bold uppercase faq_dugme flex justify-between w-1/5"
                                                type="button"
                                                data-toggle="collapse"
                                                data-target="#collapse{{ $c->id }}">
                                                <i class="fa fa-plus"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse{{ $c->id }}" class="collapse {{ $product->categories_id == $c->id ? 'show' : '' }}" aria-labelledby="heading{{ $c->id }}" data-parent="#accordionExample">
                                    <div class="card-body bg-grey-lighter">
                                        @foreach($c->category as $cate)
                                            @if($c->id == 1 && $c->id == $cate->categories_id)
                                                <a class="text-gray-600 text-sm block py-1"
                                                   href="/category/beita">
                                                    Beita
                                                </a>@break
                                            @else
                                                <a class="text-gray-800 {{ $product->subcategories_id == $cate->id ? 'font-bold' : '' }} capitalize text-sm block py-1"
                                                   href="/subcategory/{{ $cate->location }}">
                                                    {{ $cate->headline }}
                                                </a>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </article>
            </aside>
            <!-- END CATEGORIES -->

            <!-- P R O D U C T -->
            <article class="lg:w-3/4">
                <section class="product lg:flex mt-8">
                    <article class="lg:flex-1 text-center">
                        <slika :data="{{ $product }}"></slika>
                    </article>
                    <article class="lg:flex-1 pl-4">
                        <h1 class="font-bold product-headline font-serif text-3xl mb-2">
                            <a href="/product/{{ $product->location }}">
                                {{ $product->headline }}
                            </a>
                        </h1>
                        <hr class="my-2">
                        @if ($product->categories_id == 1)
                            <p class="font-bold font-serif">Latneskt heiti: <span class="font-serif text-blue-500 italic">{{ $product->species_name }}</span></p>
                            <hr class="my-2">
                        @endif

                        <div class="mt-4 leading-loose">{!! $product->body !!}</div>

                        @if ($product->subcategories_id == 1)
                            <select class="w-full border p-3" name="" id="">
                                <option {{ $product->id == 1 ? 'selected' : '' }} value="1">EIKARGOGGAR </option>
                                <option {{ $product->id == 10 ? 'selected' : '' }} value="2">PLASTGOGGAR </option>
                                <option {{ $product->id == 11 ? 'selected' : '' }} value="3">ÁL HAKI & 6 KRÆKJA </option>
                                <option {{ $product->id == 12 ? 'selected' : '' }} value="4">FÍBER HAKI & 6 KRÆKJA </option>
                            </select>
                        @endif

                        <order-request></order-request>

                        <div class="prod-details panel-group mt-6" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading active" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            PRODUCT DETAILS <i class="fas fa-chevron-down"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse show collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        @if ($product->material)
                                            <p class="flex justify-between text-right">
                                                <span class="uppercase tracking-widest font-thin">Efni: </span>
                                                <span class="tracking-widest font-thin">{!! $product->material !!}</span>
                                            </p>
                                            <hr class="my-2">
                                        @endif
                                        @if ($product->grams)
                                            <p class="flex justify-between">
                                                <span class="uppercase tracking-widest font-thin">þyngd: </span>
                                                <span class="tracking-widest font-thin">{{ $product->grams }}</span>
                                            </p>
                                            <hr class="my-2">
                                        @endif
                                        @if ($product->size)
                                            <p class="flex justify-between">
                                                <span class="uppercase tracking-widest font-thin">Stærð: </span>
                                                <span class="tracking-widest font-thin">{{ $product->size }}</span>
                                            </p>
                                            <hr class="my-2">
                                        @endif
                                        @if ($product->kolicina)
                                            <p class="flex justify-between">
                                                <span class="uppercase tracking-widest font-thin">Magn: </span>
                                                <span class="tracking-widest font-thin">{{ $product->kolicina }}</span>
                                            </p>
                                            <hr class="my-2">
                                        @endif
                                        @if ($product->precnik)
                                            <p class="flex justify-between text-right">
                                                <span class="uppercase tracking-widest font-thin">Þvermál: </span>
                                                <span class="tracking-widest font-thin">{!! $product->precnik !!}</span>
                                            </p>
                                            <hr class="my-2">
                                        @endif
                                       @if ($product->length)
                                            <p class="flex justify-between">
                                                <span class="uppercase tracking-widest font-thin">lengd: </span>
                                                <span class="tracking-widest font-thin">{{ $product->length }}</span>
                                            </p>
                                             <hr class="my-2">
                                       @endif
                                       @if ($product->kilo)
                                             <p class="flex justify-between">
                                                 <span class="uppercase tracking-widest font-thin">Þyngd Pönnu: </span>
                                                 <span class="uppercase tracking-widest font-thin">{{ $product->kilo }}</span>
                                             </p>
                                             <hr class="my-2">
                                       @endif
                                       @if ($product->litur)
                                            <p class="flex justify-between">
                                                <span class="uppercase tracking-widest font-thin">LITIR Í BOÐI: </span>
                                                <span class="tracking-widest font-thin">{{ $product->litur }}</span>
                                            </p>
                                            <hr class="my-2">
                                       @endif
                                    </div>
                                </div>

                            </div>
                        </div>
                        <section class="social-network mt-10">
                            <div class="flex justify-between">
                                <div class="text-xs tracking-widest font-thin underline">
                                    <i class="far fa-envelope"></i> info@voot.is
                                </div>
                                <div class="flex">
                                    <a class="mr-4" href=""><img src="/img/face-p.svg" alt="facebook"></a>
                                    <a class="mr-4" href=""><img src="/img/twitter-p.svg" alt="twitter"></a>
                                    <a class="mr-4" href=""><img src="/img/pin-p.svg" alt="pinteresr"></a>
                                    <a class="mr-4" href=""><img src="/img/google-p.svg" alt="google plus"></a>
                                    <a class="" href=""><img src="/img/linked.svg" alt="linkedin"></a>
                                </div>
                            </div>
                        </section>
                    </article>
                </section>
            </article>
        </section>
        @if ($product->product_table)
            <section class="product-table">
                {!! $product->product_table !!}
            </section>
            <hr class="mt-16">
        @endif
        <section class="container px-0 py-12 related">
            <h2 class="font-bold product-headline font-serif text-3xl mb-2">Related products</h2>
            <div class="related-products lg:flex lg:flex-wrap mt-12">
                @foreach ($related as $rel)
                    @if ($rel->id != $product->id)
                        <article class="related-prod">
                            <a class="category-image text-center" href="/product/{{ $rel->location }}/">
                                <img class="inline" src="/img/{{ $rel->image }}" alt="img">
                            </a>
                            <a class="text-center block
                                      hover:no-underline
                                      hover:text-black mt-3
                                      tracking-widest uppercase
                                      font-gray-800 font-bold font-serif"
                               href="/product/{{ $rel->location }}/">
                                {{ $rel->headline }}
                            </a>
                        </article>
                    @endif
                @endforeach
                @if (count($related) < 2)
                    @foreach($subcategories as $sub)
                         <article class="related-prod sub-related">
                             <a class="category-image text-center" href="/subcategory/{{ $sub->location }}/">
                                 <img class="inline" src="/img/{{ $sub->image }}" alt="img">
                             </a>
                             <a class="text-center block
                                     hover:no-underline
                                     hover:text-black mt-3
                                     tracking-widest uppercase
                                     font-gray-800 font-bold font-serif"
                                href="/subcategory/{{ $sub->location }}/">
                                 {{ $sub->headline }}
                             </a>
                         </article>
                    @endforeach
                @endif
            </div>
        </section>
    </section>

@stop
