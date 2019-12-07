@extends('welcome')

@section('title'){{ $page->title }}@stop

@section('content')
    <section class="container mt-16 py-16">
        <div class="font-serif font-bold text-gray-800 flex justify-between items-center text-3xl pb-3 border-b border-grey">
            <span>VÖRUR</span>
            @if (count($products) > 20)
                <number-per-page></number-per-page>
            @endif
        </div>
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
                                                class="lg:text-base font-bold uppercase faq_dugme w-1/5 text-gray-800"
                                                type="button"
                                                data-toggle="collapse"
                                                data-target="#collapse{{ $c->id }}">
{{--                                            {{ $c->headline }}--}}
                                            <i class="fa fa-plus plus-znak"></i>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse{{ $c->id }}" class="collapse {{ $page->categories_id == $c->id ? 'show' : '' }}" aria-labelledby="heading{{ $c->id }}" data-parent="#accordionExample">
                                    <div class="card-body bg-grey-lighter">
                                        @foreach($c->category as $cate)
                                            @if($c->id == 1 && $c->id == $cate->categories_id)
                                                <a class="text-gray-600 text-sm block py-1"
                                                   href="/category/beita">
                                                    Beita
                                                </a>@break
                                            @else
                                                <a class="{{ $page->id == $cate->id ? 'text-black font-bold' : 'text-gray-800' }} capitalize text-sm block py-1"
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
                    @foreach($products as $product)
                        <article class="subcategory">
                            <div class="category-image overflow-hidden text-center">
                                <a class="p-4" href="/product/{{ $product->location }}/">
                                    <img class="inline" src="/img/{{ $product->image }}" alt="img">
                                </a>
                            </div>
                            <a class="text-center block
                                      hover:no-underline
                                      hover:text-black mt-3
                                      tracking-widest uppercase
                                      font-gray-800 font-bold font-serif"
                               href="/product/{{ $product->location }}/">
                                {{ $product->headline }}
                            </a>
                        </article>
                    @endforeach
                </section>
            </article>
        </section>
        <section class="flex justify-between border-b pb-4">
            <div>{{ $products->links() }}</div>
            <div class="broj-proizvoda font-normal">Showing {{ $products->lastItem() }} of {{ $products->total() }} results</div>
        </section>
    </section>
@stop

