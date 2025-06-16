<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
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

<section class="w-full max-w-6xl mx-auto my-12 px-4 relative" id="vantagens">
    <div class="absolute hidden xl:block -left-10 top-1/2 -translate-y-1/2 z-10">
        <div class="swiper-button-prev vantagens-button-prev swiper-container-custom-navigation"></div>
    </div>
    <div class="absolute hidden xl:block -right-10 top-1/2 -translate-y-1/2 z-10">
        <div class="swiper-button-next vantagens-button-next swiper-container-custom-navigation"></div>
    </div>

    <div class="flex w-full items-center justify-center mb-6">
        <h2 class="text-3xl font-bold">VANTAGENS DE UM CRM</h2>
    </div>

    <div class="swiper swiper-vantagens">
        <div class="swiper-wrapper items-stretch">
            <div class="swiper-slide flex flex-col items-center justify-center bg-white rounded-lg shadow p-12 text-justify">
                <div>
                    <h2 class="text-xl font-bold mb-2 text-[#f58634] text-center">Atendimento Personalizado</h2>
                    <p class="text-gray-600 truncate-dynamic">Transforme cada estadia em uma experiência memorável. Com nosso CRM, você registra o histórico e preferências de cada cliente — como tipo de quarto favorito, datas especiais ou serviços utilizados — e utiliza essas informações para oferecer um atendimento mais humano, personalizado e acolhedor. Fidelize seus hóspedes e aumente o retorno nas próximas temporadas.</p>
                </div>
            </div>
            <div class="swiper-slide flex flex-col items-center justify-center bg-white rounded-lg shadow p-12 text-justify">
                <div>
                    <h2 class="text-xl font-bold mb-2 text-[#f58634] text-center">Organize Reservas</h2>
                    <p class="text-gray-600 truncate-dynamic">Evite falhas na comunicação e o temido overbooking. Nosso sistema centraliza todas as reservas — seja por telefone, WhatsApp, redes sociais ou site — em uma única interface simples e eficiente. Controle datas, ocupação e status das reservas com facilidade e mantenha sua equipe sempre atualizada.</p>
                </div>
            </div>
            </div>
    </div>

    <div class="swiper-pagination swiper-pagination-vantagens flex justify-center swiper-container-custom-pagination"></div>
</section>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper-vantagens', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
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
                slidesPerView: 3,
            },
        },
        on: {
            init: function () {
                equalizeSlideHeights();
            },
            resize: function () {
                equalizeSlideHeights(); 
            }
        }
    });

    function equalizeSlideHeights() {
        const slides = document.querySelectorAll('.swiper-vantagens .swiper-slide');

        slides.forEach(slide => {
            slide.style.height = 'auto';
        });

        let maxHeight = 0;
        slides.forEach(slide => {
            maxHeight = Math.max(maxHeight, slide.offsetHeight);
        });

        slides.forEach(slide => {
            slide.style.height = maxHeight + 'px';
        });
    }
</script>
