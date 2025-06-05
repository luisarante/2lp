<style>
    .swiper-container-custom-pagination {
        --swiper-theme-color: #52658c;
        --swiper-pagination-bullet-size: 11px;
    }

    .swiper-container-custom-navigation {
        --swiper-navigation-color: #52658c;
    }

    .swiper-pagination-bullets.swiper-pagination-horizontal {
        bottom: -20px;
    }

    .truncate-dynamic {
        overflow: hidden;
        position: relative;
    }
</style>
<section class="w-full max-w-6xl mx-auto my-12 px-4 relative" id="avaliacoes">
    <div class="absolute hidden xl:block -left-10 top-1/2 -translate-y-1/2 z-10">
        <div class="swiper-button-prev swiper-container-custom-navigation"></div>
    </div>
    <div class="absolute hidden xl:block -right-10 top-1/2 -translate-y-1/2 z-10">
        <div class="swiper-button-next swiper-container-custom-navigation"></div>
    </div>

    <div class="flex w-full items-center justify-center mb-6">
        <h2 class="text-3xl font-bold">AVALIAÇÕES</h2>
    </div>

    <div class="swiper swiper-avaliacoes h-[360px]">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide h-full flex items-center justify-center bg-white rounded-lg shadow p-12 text-justify">
                <div>
                    <div class="w-full flex justify-end mb-4">
                        <div class="text-yellow-400 text-3xl">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 truncate-dynamic">Transforme cada estadia em uma experiência memorável. Com nosso CRM, você registra o histórico e preferências de cada cliente — como tipo de quarto favorito, datas especiais ou serviços utilizados — e utiliza essas informações para oferecer um atendimento mais humano, personalizado e acolhedor. Fidelize seus hóspedes e aumente o retorno nas próximas temporadas.</p>
                    <div class="flex gap-2 items-center mt-2">
                        <div class="rounded-full w-[40px] h-[40px] bg-gray-300">
                            <img src="" alt="">
                        </div>
                        <p>Nome Autor</p>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide h-full flex items-center justify-center bg-white rounded-lg shadow p-12 text-justify">
                <div>
                    <div class="w-full flex justify-end mb-4">
                        <div class="text-yellow-400 text-3xl">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 truncate-dynamic">Transforme cada estadia em uma experiência memorável. Com nosso CRM, você registra o histórico e preferências de cada cliente — como tipo de quarto favorito, datas especiais ou serviços utilizados — e utiliza essas informações para oferecer um atendimento mais humano, personalizado e acolhedor. Fidelize seus hóspedes e aumente o retorno nas próximas temporadas.</p>
                    <div class="flex gap-2 items-center mt-2">
                        <div class="rounded-full w-[40px] h-[40px] bg-gray-300">
                            <img src="" alt="">
                        </div>
                        <p>Nome Autor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="swiper-pagination swiper-pagination-avaliacoes flex justify-center swiper-container-custom-pagination"></div>
</section>

<script>
    new Swiper('.swiper-avaliacoes', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        pagination: {
            el: '.swiper-pagination-avaliacoes',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {  
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 2,
            },
        },
    });
</script>