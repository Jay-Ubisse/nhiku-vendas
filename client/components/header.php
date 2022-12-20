<!--Laptop header-->
<div class="laptop:block mobile:hidden">
    <section class="bg-blue-binario text-white text-2xs font-ligth py-2 px-4 flex flex-row justify-between">
        <div>
            <span><i class="fa-solid fa-truck-fast"></i></span>
            <span class="ml mobile:text-2xs">Entregas grátis para pedidos acima de 1.000,00 MT</span>
        </div>
        <div class=" underline flex flex-row gap-4">
            <span><a href="#">Sobre</a></span>
            <span><a href="#">Contacto</a></span>
            <span><a href="#">Central de ajuda</a></span>
            <span>Ligue-nos +258 84 222 9984</span>
        </div>
    </section>
    <section class="bg-white pl-4 pr-12 py-3 flex flex-row justify-between"> 
        <div class="flex flex-row items-center gap-12">
            <div>
                <h1 class="text-lg font-regular"><span class="text-blue-binario">Nhiku <span class="text-white bg-blue-binario rounded-lg px-3 py-1 text-base">Vendas</span></h1>
            </div>
            <div class="h-fit flex flex-row gap-0">
                <input type="search" name="search" size="15" class="bg-gray-binario rounded-tl-2xl rounded-bl-2xl focus:outline-blue-binario px-2 text-2xs text-slate-800">
                <button class="bg-blue-binario text-white px-4 rounded-tr-2xl rounded-br-2xl"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
        <div class="text-black text-2xs font-ligth flex flex-row gap-4 items-center">
            <div>
                <a href="#">
                    <span><i class="fa-regular fa-user fa-xl"></i></span>
                    <span>Login</span>
                </a>
            </div>
            <div>
                <a href="#">
                    <span><i class="fa-solid fa-cart-shopping fa-xl"></i></i></span>
                    <span class="bg-[#2B2D42] rounded-full py-1 px-2 text-white">0</span>
                </a>
            </div>
        </div>
    </section>
    <section class="bg-gray-binario h-fit px-8 py-0 text-xs font-regular">
        <ul class="flex flex-row justify-between">
            <li class="py-4 px-4 text-center hover:text-blue-binario"><a href="">Pagina Inicial</a></li>
            <li class="py-4 px-4 text-center hover:text-blue-binario"><a href="">Celulares</a></li>
            <li class="py-4 px-4 text-center hover:text-blue-binario"><a href="">Computadores</a></li>
            <li class="py-4 px-4 text-center hover:text-blue-binario"><a href="">Tv's</a></li>
            <li class="py-4 px-4 text-center hover:text-blue-binario"><a href="">Aparelhos de som</a></li>
            <li class="py-4 px-4 text-center hover:text-blue-binario"><a href="">Acessórios</a></li>
        </ul>
    </section>
</div>

<!--Mobile header-->
<div class="laptop:hidden mobile:block relative">
    <!--Free delivery section-->
    <section class="bg-blue-binario text-white text-2xs font-ligth py-2">
        <div>
            <span><i class="fa-solid fa-truck-fast"></i></span>
            <span class="text-2xs">Entregas grátis para pedidos acima de 1.000,00 MT</span>
        </div>
    </section>

    <!--logo and menu section-->
    <section class="bg-white px-2 py-3 flex flex-row justify-between"> 
        <div>
            <h1 class="text-lg font-regular"><span class="text-blue-binario">Nhiku <span class="text-white bg-blue-binario rounded-lg px-3 py-1 text-base">Vendas</span></h1>
        </div>
        <div class="flex flex-row gap-4">
            <div>
                <a href="#">
                    <span><i class="fa-solid fa-cart-shopping fa-xl"></i></i></span>
                    <span class="bg-[#2B2D42] rounded-full py-1 px-2 text-white">0</span>
                </a>
            </div>
            <div id="openMenu">
                <span><i class="fa-solid fa-bars fa-2x"></i></span>
            </div>
        </div>
    </section>

    <!--search section-->
    <section class="bg-white">
        <div class="h-fit w-fit flex flex-row gap-0 mx-auto py-5">
            <input type="search" name="search" size="20" class="bg-gray-binario rounded-tl-2xl rounded-bl-2xl focus:outline-blue-binario px-2 py-2 text-2xs text-slate-800">
            <button class="bg-blue-binario text-white px-6 rounded-tr-2xl rounded-br-2xl"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
    </section>

    <!--menu items section-->
    <section id="menu" class="bg-gray-binario py-3 px-0 text-xs font-regular absolute top-0 min-h-screen w-screen">
        <div class="flex flex-row justify-between px-5 my-7">
            <div>
                <a href="#">
                    <span><i class="fa-regular fa-user fa-2x"></i></span>
                    <span class="text-base">Login</span>
                </a>
            </div>
            <div id="closeMenu">
                <span><i class="fa-solid fa-xmark fa-2x"></i></span>
            </div>
        </div>
        <div class="underline text-xs grid grid-cols-2 gap-4 px-4 py-4">
            <span><a href="#">Sobre</a></span>
            <span><a href="#">Contacto</a></span>
            <span><a href="#">Central de ajuda</a></span>
            <span>Ligue-nos +258 84 222 9984</span>
        </div>
        <ul class="flex flex-col justify-between bg-gray-400 mt-3 w-screen">
            <li class="py-4 px-4 text-center border-b"><a href="">Pagina Inicial</a></li>
            <li class="py-4 px-4 text-center border-b"><a href="">Celulares</a></li>
            <li class="py-4 px-4 text-center border-b"><a href="">Computadores</a></li>
            <li class="py-4 px-4 text-center border-b"><a href="">Tv's</a></li>
            <li class="py-4 px-4 text-center border-b"><a href="">Aparelhos de som</a></li>
            <li class="py-4 px-4 text-center"><a href="">Acessórios</a></li>
        </ul>
    </section>
</div>