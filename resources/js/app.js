/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
import Vue from 'vue';

Vue.component('contact', require('./components/Contact.vue').default);
Vue.component('register', require('./components/Register.vue').default);
Vue.component('google-maps', require('./components/GoogleMaps.vue').default);
Vue.component('category', require('./components/Category.vue').default);
Vue.component('slika', require('./components/Slika.vue').default);
// Vue.component('gallery', require('./components/Gallery.vue').default);
Vue.component('number-per-page', require('./components/NumberPerPage.vue').default);
Vue.component('order-request', require('./components/OrderRequest.vue').default);
Vue.component('homepage-product-slider', require('./components/HomepageProductSlider.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

$('a[href^="#"]').on('click', function(event) {
    let target = $(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();

        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1000);
    }
});

// $('button.faq_dugme').click( function(e) {
//     $('.collapse').collapse('hide');
//     let target = $(this).parent().children('#accordion div.collapse');
//     if (!target.is(":visible")) {
//         $('#accordion div.collapse').slideUp();
//         $(target).slideDown();
//         $(this).children(".plus").toggleClass("plus, minus");
//     }
//     else {
//         $(target).slideUp();
//         $(this).children(".plus").toggleClass("plus, minus");
//     }
// });

$(document).ready(function(){
    // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function(){
        $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
    });

    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
    }).on('hide.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
    });
});


$('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
});

$('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
});


$(document).ready(function () {

    'use strict';

    var c, currentScrollTop = 0,
        navbar = $('header');

    $(window).scroll(function () {
        var a = $(window).scrollTop();
        var b = navbar.height();

        currentScrollTop = a;

        if (c < currentScrollTop && a > b + b) {
            navbar.addClass("scrollUp");
        } else if (c > currentScrollTop && !(a <= b)) {
            navbar.removeClass("scrollUp");
        }
        c = currentScrollTop;
    });

});
