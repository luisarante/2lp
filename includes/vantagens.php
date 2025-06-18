<section id="vantagens" class="py-6">

    <div class="w-full text-center pb-4">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800">Vantagens</h1>
    </div>
    
    <div class="scroll-vantagens carousel-container relative w-full max-w-7xl mx-auto overflow-hidden">
        
        <div class="carousel-track flex items-start gap-4 md:gap-6 transition-transform duration-500 ease-in-out py-4">
            
            <div class="carousel-card relative flex-shrink-0 bg-white rounded-xl shadow-lg cursor-pointer overflow-hidden p-6 lg:w-1/4 md:w-2/5 w-4/5">
                <h2 class="text-xl font-bold text-center text-[#f58634] mb-2">Atendimento Personalizado</h2>
                <p class="text-gray-700 mt-4">Transforme cada estadia em uma experiência memorável. Com nosso CRM, você registra o histórico e preferências de cada cliente — como tipo de quarto favorito, datas especiais ou serviços utilizados — e utiliza essas informações para oferecer um atendimento mais humano, personalizado e acolhedor. Fidelize seus hóspedes e aumente o retorno nas próximas temporadas.</p>
                
                <div class="read-more-indicator absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent text-center pt-8 pointer-events-none hidden">
                    <span class="text-2xl font-bold text-gray-400">...</span>
                </div>
            </div>

            <div class="carousel-card relative flex-shrink-0 bg-white rounded-xl shadow-lg cursor-pointer overflow-hidden p-6 lg:w-1/4 md:w-2/5 w-4/5">
                <h2 class="text-xl font-bold text-center text-[#f58634] mb-2">Organize Reservas</h2>
                <p class="text-gray-700 mt-4">Evite falhas na comunicação e o temido overbooking. Nosso sistema centraliza todas as reservas — seja por telefone, WhatsApp, redes sociais ou site — em uma única interface simples e eficiente. Controle datas, ocupação e status das reservas com facilidade e mantenha sua equipe sempre atualizada.</p>

                <div class="read-more-indicator absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent text-center pt-8 pointer-events-none hidden">
                    <span class="text-2xl font-bold text-gray-400">...</span>
                </div>
            </div>

            <div class="carousel-card relative flex-shrink-0 bg-white rounded-xl shadow-lg cursor-pointer overflow-hidden p-6 lg:w-1/4 md:w-2/5 w-4/5">
                <h2 class="text-xl font-bold text-center text-[#f58634] mb-2">Profissionalize a Gestão</h2>
                <p class="text-gray-700 mt-4">Pequenas pousadas também merecem soluções profissionais. Nosso CRM foi criado sob medida para a realidade do pequeno empreendedor hoteleiro: é fácil de usar, não exige equipe técnica e cabe no seu bolso. Organize processos, ganhe tempo e transmita mais confiança ao seu cliente.</p>

                <div class="read-more-indicator absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent text-center pt-8 pointer-events-none hidden">
                    <span class="text-2xl font-bold text-gray-400">...</span>
                </div>
            </div>

            <div class="carousel-card relative flex-shrink-0 bg-white rounded-xl shadow-lg cursor-pointer overflow-hidden p-6 lg:w-1/4 md:w-2/5 w-4/5">
                <h2 class="text-xl font-bold text-center text-[#f58634] mb-2">Decida com Dados, não com Achismos</h2>
                <p class="text-gray-700 mt-4">Você sabe qual é seu período de maior lucro? Qual canal traz mais reservas? Qual perfil de cliente retorna com mais frequência? Com os relatórios e dashboards do nosso CRM, você tem insights claros para tomar decisões estratégicas, otimizar campanhas e identificar oportunidades de crescimento.</p>

                <div class="read-more-indicator absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent text-center pt-8 pointer-events-none hidden">
                    <span class="text-2xl font-bold text-gray-400">...</span>
                </div>
            </div>

            <div class="carousel-card relative flex-shrink-0 bg-white rounded-xl shadow-lg cursor-pointer overflow-hidden p-6 lg:w-1/4 md:w-2/5 w-4/5">
                <h2 class="text-xl font-bold text-center text-[#f58634] mb-2">Automatize Promoções e Relacionamentos</h2> 
                <p class="text-gray-700 mt-4">Fique sempre presente na mente do seu hóspede. Envie mensagens automáticas de confirmação de reserva, lembretes, felicitações em datas especiais e promoções para feriados e baixa temporada. Com nosso CRM, seu relacionamento com o cliente continua mesmo após o check-out.</p>

                <div class="read-more-indicator absolute bottom-0 left-0 right-0 h-16 bg-gradient-to-t from-white to-transparent text-center pt-8 pointer-events-none hidden">
                    <span class="text-2xl font-bold text-gray-400">...</span>
                </div>
            </div>

        </div>
        
        <button class="carousel-button z-100 cursor-pointer prev-btn absolute top-1/2 -translate-y-1/2 left-0 md:left-2 bg-white/70 backdrop-blur-sm rounded-full w-12 h-12 text-2xl text-gray-800 z-10 shadow-md hover:bg-[#52658C] hover:text-white transition-all duration-300 flex items-center justify-center">
            &#10094;
        </button>
        <button class="carousel-button z-100 cursor-pointer next-btn absolute top-1/2 -translate-y-1/2 right-0 md:right-2 bg-white/70 backdrop-blur-sm rounded-full w-12 h-12 text-2xl text-gray-800 z-10 shadow-md hover:bg-[#52658C] hover:text-white transition-all duration-300 flex items-center justify-center">
            &#10095;
        </button>
    </div>
</section>
    
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const track = document.querySelector('.carousel-track');
        const cards = Array.from(track.querySelectorAll(':scope > .carousel-card'));
        const nextButton = document.querySelector('.next-btn');
        const prevButton = document.querySelector('.prev-btn');

        let currentIndex = 0;

        const checkCardsOverflow = () => {
            cards.forEach(card => {
                const indicator = card.querySelector('.read-more-indicator');
                if (!indicator) return; 

                if (card.scrollHeight > card.clientHeight) {
                    indicator.classList.remove('hidden'); 
                } else {
                    indicator.classList.add('hidden'); 
                }
            });
        };

        const moveToSlide = (targetIndex) => {
            const targetCard = cards[targetIndex];
            if (!targetCard) return;

            const container = document.querySelector('.carousel-container');
            const containerWidth = container.offsetWidth;
            const gap = parseFloat(getComputedStyle(track).gap);
            let position = 0;

            const screenWidth = window.innerWidth;

            if (screenWidth >= 768 && screenWidth < 1024) {
                const nextCard = cards[targetIndex + 1];
                if (nextCard) {
                    const cardCenter = targetCard.offsetLeft + targetCard.offsetWidth + (gap / 2);
                    position = containerWidth / 2 - cardCenter;
                } else {
                    const cardCenter = targetCard.offsetLeft + targetCard.offsetWidth / 2;
                    position = containerWidth / 2 - cardCenter;
                }
            } else {
                const cardCenter = targetCard.offsetLeft + targetCard.offsetWidth / 2;
                position = containerWidth / 2 - cardCenter;
            }
            
            track.style.transform = `translateX(${position}px)`;
            currentIndex = targetIndex;
        };
        
        nextButton.addEventListener('click', () => {
            let nextIndex = currentIndex + 1;
            const isTablet = window.innerWidth >= 768 && window.innerWidth < 1024;
            if (isTablet && nextIndex >= cards.length -1) {
                nextIndex = 0;
            } else if (nextIndex >= cards.length) {
                nextIndex = 0;
            }
            moveToSlide(nextIndex);
        });

        prevButton.addEventListener('click', () => {
            let prevIndex = currentIndex - 1;
            if (prevIndex < 0) {
                const isTablet = window.innerWidth >= 768 && window.innerWidth < 1024;
                prevIndex = isTablet ? cards.length - 2 : cards.length - 1;
            }
            moveToSlide(prevIndex);
        });
        
        cards.forEach((card, index) => {
            card.addEventListener('click', () => {
                moveToSlide(index);
                const isExpanded = card.classList.contains('expanded');
                
                cards.forEach(c => c.classList.remove('expanded'));

                if (!isExpanded) {
                    card.classList.add('expanded');
                }
                
                setTimeout(checkCardsOverflow, 500);
            });
        });
        
        window.addEventListener('resize', () => {
            moveToSlide(currentIndex);
            checkCardsOverflow(); 
        });

        moveToSlide(0);
        setTimeout(checkCardsOverflow, 100); 
    });
</script>