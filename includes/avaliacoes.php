<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    .truncate-dynamic {
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        transition: -webkit-line-clamp 0.3s ease-in-out;
    }

    .truncate-dynamic.expanded {
        -webkit-line-clamp: 100; 
    }

    .custom-swiper-buttons .swiper-button-next,
    .custom-swiper-buttons .swiper-button-prev {
        color: #f58634;
        background-color: rgba(255, 255, 255, 0.7);
        border-radius: 50%;
        width: 44px;
        height: 44px;
        backdrop-filter: blur(4px);
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .custom-swiper-buttons .swiper-button-next:after,
    .custom-swiper-buttons .swiper-button-prev:after {
        font-size: 20px;
        font-weight: bold;
    }
</style>

<section id="depoimentos" class="py-12 bg-gray-100">
    <div class="flex justify-center">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800">Avaliações</h1>
    </div>
    <div class="swiper w-full max-w-7xl mx-auto relative h-[480px] overflow-visible custom-swiper-buttons">
        <div class="swiper-wrapper py-8">
            <div class="swiper-slide h-auto flex flex-col justify-between bg-white rounded-lg shadow-xl hover:shadow-2xl p-8 text-justify relative z-10 transition-shadow">
                <div>
                    <div class="w-full flex justify-end mb-4">
                        <div class="text-yellow-400 text-3xl">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 truncate-dynamic cursor-pointer">Transforme cada estadia em uma experiência memorável. Com nosso CRM, você registra o histórico e preferências de cada cliente — como tipo de quarto favorito, datas especiais ou serviços utilizados — e utiliza essas informações para oferecer um atendimento mais humano, personalizado e acolhedor. Fidelize seus hóspedes e aumente o retorno nas próximas temporadas.</p>
                </div>
                <div class="flex gap-4 items-center mt-6">
                    <div class="rounded-full w-[50px] h-[50px] bg-gray-300 overflow-hidden">
                        <img src="" alt="Foto do Autor">
                    </div>
                    <p class="font-bold text-gray-800">Ana Silva</p>
                </div>
            </div>

            <div class="swiper-slide h-auto flex flex-col justify-between bg-white rounded-lg shadow-xl hover:shadow-2xl p-8 text-justify relative z-10 transition-shadow">
                <div>
                    <div class="w-full flex justify-end mb-4">
                        <div class="text-yellow-400 text-3xl">
                             <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 truncate-dynamic cursor-pointer">O sistema centraliza todas as reservas de forma incrível, evitando o overbooking que tanto nos assombrava. A comunicação com a equipe ficou muito mais fluida e agora temos total controle sobre a ocupação, tudo numa interface simples e muito eficiente. Mudou o jogo para nós.</p>
                </div>
                <div class="flex gap-4 items-center mt-6">
                    <div class="rounded-full w-[50px] h-[50px] bg-gray-300 overflow-hidden">
                        <img src="" alt="Foto do Autor">
                    </div>
                    <p class="font-bold text-gray-800">Bruno Costa</p>
                </div>
            </div>

            <div class="swiper-slide h-auto flex flex-col justify-between bg-white rounded-lg shadow-xl hover:shadow-2xl p-8 text-justify relative z-10 transition-shadow">
                 <div>
                    <div class="w-full flex justify-end mb-4">
                        <div class="text-yellow-400 text-3xl">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 truncate-dynamic cursor-pointer">Sempre achei que um CRM profissional era algo para grandes hotéis. Este sistema provou que eu estava errado. É fácil de usar, não precisei de ajuda técnica para implementar e o custo-benefício é excelente. Meus processos estão mais organizados e sinto que transmito muito mais confiança para os meus hóspedes.</p>
                </div>
                <div class="flex gap-4 items-center mt-6">
                    <div class="rounded-full w-[50px] h-[50px] bg-gray-300 overflow-hidden">
                        <img src="" alt="Foto do Autor">
                    </div>
                    <p class="font-bold text-gray-800">Carla Mendes</p>
                </div>
            </div>

            <div class="swiper-slide h-auto flex flex-col justify-between bg-white rounded-lg shadow-xl hover:shadow-2xl p-8 text-justify relative z-10 transition-shadow">
                 <div>
                    <div class="w-full flex justify-end mb-4">
                        <div class="text-yellow-400 text-3xl">
                             <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 truncate-dynamic cursor-pointer">Finalmente consigo tomar decisões baseadas em dados concretos, não em suposições. Os relatórios são claros e me mostram exatamente quais canais trazem mais reservas e qual o perfil de cliente mais fiel. Isso está sendo fundamental para otimizar nossas campanhas e encontrar novas oportunidades.</p>
                </div>
                <div class="flex gap-4 items-center mt-6">
                    <div class="rounded-full w-[50px] h-[50px] bg-gray-300 overflow-hidden">
                        <img src="" alt="Foto do Autor">
                    </div>
                    <p class="font-bold text-gray-800">Diego Ramos</p>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        
        const depoimentosSwiper = new Swiper('#depoimentos .swiper', {
            loop: true,
            grabCursor: true,
            centeredSlides: true,
            
            slidesPerView: 1,
            spaceBetween: 20,
            breakpoints: {
                768: { slidesPerView: 2, spaceBetween: 30 },
                1280: { slidesPerView: 3, spaceBetween: 30 }
            },

            navigation: {
                nextEl: '#depoimentos .swiper-button-next',
                prevEl: '#depoimentos .swiper-button-prev',
            },
            
            autoHeight: true, 
        });

        const paragraphs = document.querySelectorAll('#depoimentos .truncate-dynamic');
        const slides = document.querySelectorAll('#depoimentos .swiper-slide');

        paragraphs.forEach(paragraph => {
            paragraph.addEventListener('click', (event) => {
                const clickedParagraph = event.target;
                const clickedSlide = clickedParagraph.closest('.swiper-slide');

                const isAlreadyExpanded = clickedParagraph.classList.contains('expanded');

                paragraphs.forEach(p => p.classList.remove('expanded'));
                slides.forEach(s => s.classList.remove('z-20')); 

                if (!isAlreadyExpanded) {
                    clickedParagraph.classList.add('expanded');
                    clickedSlide.classList.add('z-20'); 
                }
                
                depoimentosSwiper.update();
            });
        });
    });
</script>