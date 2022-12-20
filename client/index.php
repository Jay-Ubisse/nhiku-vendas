<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Nhiku Vendas</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4b43862993.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/styles/output.css">
    <script src="./assets/scrips/js/jquery-3.6.1.js"></script>
    <script src="./assets/scrips/js/global.js"></script>
</head>
<body class="font-inter bg-gray-binario">
    <header>
        <?php
            include './components/header.php';
        ?>
    </header>
    <main>
        <!--Slideshow section-->
        <section class="w-full">
            <img src="./assets/img/slides/slide-1.png" class="w-full laptop:block mobile:hidden">
            <img src="./assets/img/slides/silde-1-mobile.png" class="w-full laptop:hidden mobile:block">
        </section>

        <!--offers section-->
        <section class="w-[98%] mt-3 mx-auto flex justify-around 
                        laptop:flex-row 
                        mobile:flex-col  mobile:gap-3
        ">
            <div class="bg-[#0F4C5C] flex flex-row justify-center items-center text-lg text-white font-bold 
                                laptop:w-[600px] laptop:h-[400px]
                                mobile:w-[95%] mobile:h-[300px] mobile:mx-auto
            ">
                <h1>Oferta 1</h1>
            </div>
            <div class="bg-[#9A031E] flex flex-row justify-center items-center text-lg text-white font-bold 
                            laptop:w-[600px] laptop:h-[400px]
                            mobile:w-[95%] mobile:h-[300px] mobile:mx-auto
            ">
                <h1>Oferta 2</h1>
            </div>
        </section>

        <!--Promotions section-->
        <section class="w-[98%] mt-3 mx-auto bg-white p-1 h-fit">
            <h1 class="text-blue-binario w-fit mx-auto font-bold text-lg py-4">Promocoes</h1>
            <div class="flex laptop:flex-row laptop:justify-between laptop:mx-5
                        mobile:flex-col mobile:gap-3
            ">
                <div class="border border-blue-binario w-[300px] h-[320px] mobile:mx-auto"></div>
                <div class="border border-blue-binario w-[300px] h-[320px] mobile:mx-auto"></div>
                <div class="border border-blue-binario w-[300px] h-[320px] mobile:mx-auto"></div>
                <div class="border border-blue-binario w-[300px] h-[320px] mobile:mx-auto"></div>
            </div>
            <div class="bg-blue-binario w-fit mx-auto font-regular text-white text-base py-1 px-10 my-4 rounded-2xl">
                <a href="#">Ver tudo</a>
            </div>
        </section>

        <!--Best sellers section-->
        <section class="w-[98%] mt-3 mx-auto bg-white p-1 h-fit">
            <h1 class="text-blue-binario w-fit mx-auto font-bold text-lg py-4">Mais vendidos</h1>
            <div class="flex laptop:flex-row laptop:justify-between laptop:mx-5
                                    mobile:flex-col mobile:gap-3
            ">
                <div class="w-[300px] h-[320px] border border-blue-binario mobile:mx-auto"></div>
                <div class="w-[300px] h-[320px] border border-blue-binario mobile:mx-auto"></div>
                <div class="w-[300px] h-[320px] border border-blue-binario mobile:mx-auto"></div>
                <div class="w-[300px] h-[320px] border border-blue-binario mobile:mx-auto"></div>
            </div>
            <div class="bg-blue-binario w-fit mx-auto font-regular text-white text-base py-1 px-10 my-4 rounded-2xl">
                <a href="#">Ver tudo</a>
            </div>
        </section>

        <!--Category section-->
        <section class="w-[98%] mt-3 mx-auto bg-white p-1 h-fit">
            <h1 class="text-blue-binario w-fit mx-auto font-bold text-lg py-4">Compre por categoria</h1>
            <div class="laptop:grid laptop:grid-cols-5 laptop:mx-5
                        mobile:flex mobile:flex-col mobile:gap-3
            ">
                <div class="flex flex-col items-center justify-center w-[250px] h-[250px] mobile:mx-auto">
                    <div class="bg-gray-binario rounded-full w-[200px] h-[200px]"></div>
                    <span class="text-black text-base font-semibold">Catrgoria 1</span>
                </div>
                <div class="flex flex-col items-center justify-center w-[250px] h-[250px] mobile:mx-auto">
                    <div class="bg-gray-binario rounded-full w-[200px] h-[200px]"></div>
                    <span class="text-black text-base font-semibold">Catrgoria 2</span>
                </div>
                <div class="flex flex-col items-center justify-center w-[250px] h-[250px] mobile:mx-auto">
                    <div class="bg-gray-binario rounded-full w-[200px] h-[200px]"></div>
                    <span class="text-black text-base font-semibold">Catrgoria 3</span>
                </div>
                <div class="flex flex-col items-center justify-center w-[250px] h-[250px] mobile:mx-auto">
                    <div class="bg-gray-binario rounded-full w-[200px] h-[200px]"></div>
                    <span class="text-black text-base font-semibold">Catrgoria 4</span>
                </div>
                <div class="flex flex-col items-center justify-center w-[250px] h-[250px] mobile:mx-auto">
                    <div class="bg-gray-binario rounded-full w-[200px] h-[200px]"></div>
                    <span class="text-black text-base font-semibold">Catrgoria 5</span>
                </div>
                <div class="flex flex-col items-center justify-center w-[250px] h-[250px] mobile:mx-auto">
                    <div class="bg-gray-binario rounded-full w-[200px] h-[200px]"></div>
                    <span class="text-black text-base font-semibold">Catrgoria 6</span>
                </div>
                <div class="flex flex-col items-center justify-center w-[250px] h-[250px] mobile:mx-auto">
                    <div class="bg-gray-binario rounded-full w-[200px] h-[200px]"></div>
                    <span class="text-black text-base font-semibold">Catrgoria 7</span>
                </div>
                <div class="flex flex-col items-center justify-center w-[250px] h-[250px] mobile:mx-auto">
                    <div class="bg-gray-binario rounded-full w-[200px] h-[200px]"></div>
                    <span class="text-black text-base font-semibold">Catrgoria 8</span>
                </div>
                <div class="flex flex-col items-center justify-center w-[250px] h-[250px] mobile:mx-auto">
                    <div class="bg-gray-binario rounded-full w-[200px] h-[200px]"></div>
                    <span class="text-black text-base font-semibold">Catrgoria 9</span>
                </div>
                <div class="flex flex-col items-center justify-center w-[250px] h-[250px] mobile:mx-auto">
                    <div class="bg-gray-binario rounded-full w-[200px] h-[200px]"></div>
                    <span class="text-black text-base font-semibold">Catrgoria 10</span>
                </div>
            </div>
        </section>
        <!--Brands Section-->
        <section class="w-[98%] mt-3 mx-auto bg-white p-1 h-fit">
            <h1 class="text-blue-binario w-fit mx-auto font-bold text-lg py-4">Marcas</h1>
            <div class="flex laptop:flex-row laptop:justify-between laptop:mx-5
                        mobile:flex-col mobile:gap-3
            ">
                <div class="laptop:w-[200px] laptop:h-[230px]
                            mobile:w-[150px] mobile:h-[150px] mobile:mx-auto
                ">
                    <img src="./assets/img/brands/arduino.svg">
                </div>
            </div>
        </section>
        <!--Newsletter Section-->
        <section class="w-[98%] mt-3 mx-auto bg-blue-binario pt-1 pb-6 h-fit">
            <h1 class="text-white w-fit mx-auto font-bold text-lg py-4">Newsletter</h1>
            <p class="text-white w-fit mx-auto font-ligth pb-4 laptop:text-xs mobile:text-2xs ">Assine para receber novidades e ofertas especiais</p>
            <div class="h-fit  w-fit mx-auto 
                        laptop:flex laptop:flex-row laptop:gap-0 laptop:h-12 
                        mobile:hidden
            ">
                <input type="search" name="search" size="60" class="bg-gray-binario laptop:rounded-tl-3xl laptop:rounded-bl-3xl laptop:focus:outline-blue-binario laptop:px-2 text-xs text-slate-800">
                <button class="bg-black text-white relative -left-10 laptop:px-20 laptop:rounded-3xl">Assinar</button>
            </div>
            <div class="h-fit  w-fit ml-7
                        laptop:hidden 
                        mobile:flex mobile:flex-row mobile:gap-0
            ">
                <input type="search" name="search" size="18" class="bg-gray-binario mobile:rounded-tl-3xl mobile:rounded-bl-3xl mobile:focus:outline-blue-binario mobile:px-2 text-xs text-slate-800">
                <button class="bg-black text-white relative -left-10 mobile:px-8 mobile:rounded-3xl">Assinar</button>
            </div>
        </section>
    </main>
    <footer>
        <?php
            include './components/footer.php';
        ?>
    </footer>
</body>
</html>