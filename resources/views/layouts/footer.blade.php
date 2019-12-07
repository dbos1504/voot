<section class="container p-2">
    <article class="logo-section flex justify-between items-center border-b py-6 mb-4">
        <div class="logo">
            <img src="/img/logo-footer.svg" alt="logo-footer">
        </div>
        <div class="social-footer flex">
            <a class="pl-8" ml-6 href="">
                <img src="/img/facebook.svg" alt="facebook">
            </a>
            <a class="pl-8 ml-6" href="">
                <img src="/img/instagram.svg" alt="instagram">
            </a>
            <a class="pl-8 ml-6" href="">
                <img src="/img/linkedin.svg" alt="linkedin">
            </a>
        </div>
    </article>
    <article class="text-section-footer flex justify-between">
        <section>
            <h6 class="relative flex-initial font-serif text-white font-bold lg:text-2xl mb-3">Voot ehf.</h6>
            <p class="text-white">Skarfagarðar 4, 104, Reykjavík</p>
            <p class="text-orange-500">voot@voot.is</p>
        </section>
        <section>
            <h6 class="relative flex-initial font-serif font-bold text-white lg:text-2xl mb-3">Menu</h6>
            <ul>
                <li class="mt-1 text-white uppercase"><a href="/um-okkur">UM OKKUR</a></li>
                <li class="mt-1 text-white uppercase"><a href="/pjonusta">þjónusta</a></li>
                <li class="mt-1 text-white uppercase"><a href="/um-vorurnar-okkar">UM VÖRURNAR OKKAR</a></li>
                <li class="mt-1 text-white uppercase"><a href="/allar-vorur">Allar Vörur</a></li>
                <li class="mt-1 text-white uppercase"><a href="/hafa-samband">HAFA SAMBAND</a></li>
            </ul>
        </section>
        <section class="flex-initial">
            <img class="pt-6" src="/img/mapa-footer.svg" alt="mapa">
        </section>
        <section class="newsl">
            <h6 class="relative text-white flex-initial font-serif font-bold lg:text-2xl mb-3">Póstlisti</h6>
            <p class="text-white">Skráðu þig á póstlistann og fáðu nýjustu fréttir samstundis.
            </p>
            <div class="form-footer mt-6">
                <form action="/newsletter" method="POST" class="w-full flex">
                    @csrf
                    <input class="bg-gray-900 py-3 text-orange-500 w-full px-3" placeholder="E-mail" type="email" name="newsletter" required>
                    <button class="text-sm bg-orange-500 w-2/6 text-white" type="submit">SIGN UP</button>
                </form>
            </div>
        </section>
    </article>
    <section class="copyright flex justify-between mt-16 mb-6">
        <article class="copyr text-white text-xs">
            © 2019 <a href=""><b>Voot Beita</b></a>, all rights reserved.
        </article>
        <article>
            <ul class="list-none flex">
                <li><a class="pl-8 text-white text-xs" href="">FAQ</a></li>
                <li><a class="pl-8 text-white text-xs" href="">Terms and Conditions</a></li>
                <li><a class="pl-8 text-white text-xs" href="">Privacy Policy</a></li>
                <li><a class="pl-8 text-white text-xs" href="">Cookie Policy</a></li>
            </ul>
        </article>
    </section>
</section>

