@extends('welcome')

@section('title'){{ $cat->title }}@stop

@section('content')
    <section class="container mt-16 py-16">
        <h2 class="font-serif font-bold text-gray-800 text-3xl pb-3 border-b border-grey">VÖRUR</h2>
        <section class="all-products lg:flex lg:flex-wrap py-8">
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
                                        <button
                                                class="lg:text-base font-bold uppercase faq_dugme flex justify-between w-1/5"
                                                type="button"
                                                data-toggle="collapse"
                                                data-target="#collapse{{ $c->id }}">
                                            <i class="fa fa-plus"></i>
                                        </button>
{{--                                        <button--}}
{{--                                                class="lg:text-base font-bold w-full uppercase faq_dugme flex justify-between items-center w-1/5 text-gray-800"--}}
{{--                                                type="button"--}}
{{--                                                data-toggle="collapse"--}}
{{--                                                data-target="#collapse{{ $c->id }}">--}}
{{--                                            {{ $c->headline }}--}}
{{--                                            <i class="fa fa-plus plus-znak"></i>--}}
{{--                                        </button>--}}
                                    </h2>
                                </div>
                                <div id="collapse{{ $c->id }}" class="collapse {{ $cat->id == $c->id ? 'show' : '' }}" aria-labelledby="heading{{ $c->id }}" data-parent="#accordionExample">
                                    <div class="card-body bg-grey-lighter">
                                        @foreach($c->category as $cate)
                                            @if($c->id == 1 && $c->id == $cate->categories_id)
                                                <a class="text-gray-600 text-sm block py-1"
                                                   href="/category/beita">
                                                    Beita
                                                </a>@break
                                            @else
                                                <a class="text-gray-800 capitalize text-sm block py-1"
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
            <article class="lg:w-3/4">
                <section class="lg:flex lg:flex-wrap">
                    @foreach($sub as $s)
                        <article class="subcategory">
                            <a class="category-image overflow-hidden text-center p-2" href="{{ $s->about_pages_id == 1 ? '/product/' . $s->location : '/subcategory/' . $s->location }}">
                                <img class="inline" src="/img/{{ $s->product_image }}" alt="img">
                            </a>
                            <a class="text-center
                                      block hover:no-underline hover:text-black mt-3
                                      tracking-widest uppercase font-gray-800 font-bold
                                      font-serif" href="{{ $s->about_pages_id == 1 ? '/product/' . $s->location : '/subcategory/' . $s->location }}">
                                {{ $s->headline }}
                                <span class="lowercase text-xs text-gray-500 font-normal block">
                                    @if ($s->about_pages_id != 1)
                                        {{ $s->products->count() }}
                                        {{ \Str::plural('item', $s->products->count()) }}
                                    @endif
                                </span>
                            </a>
                            <span class="block text-xs font-serif text-center tracking-widest italic">
                                    {{ $s->species_name }}
                                </span>
                        </article>
                    @endforeach
                </section>
            </article>
        </section>
    </section>
@stop
