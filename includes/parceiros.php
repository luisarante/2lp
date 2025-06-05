<section class="flex w-full flex-col items-center justify-center py-6" id="nossos-clientes">
    <h2 class="text-3xl font-bold mb-6">Nossos Parceiros e Clientes</h2>
    <div class="scroll overflow-hidden max-w-sm sm:max-w-3xl md:max-w-4xl lg:max-w-5xl xl:max-w-6xl 2xl:max-w-7xl">
        <div class="scroll__container flex items-center w-max gap-8">
            <div class="whitespace-nowrap">
                <img class="max-w-[120px]" src="images/blocCLIENTES___001.png" alt="">
            </div>
            <div class="whitespace-nowrap">
                <img class="max-w-[120px]" src="images/blocCLIENTES___002.png" alt="">
            </div>
            <div class="whitespace-nowrap">
                <img class="max-w-[120px]" src="images/blocCLIENTES___003.png" alt="">
            </div>
            <div class="whitespace-nowrap">
                <img class="max-w-[120px]" src="images/blocCLIENTES___004.png" alt="">
            </div>
            <div class="whitespace-nowrap">
                <img class="max-w-[120px]" src="images/blocCLIENTES___005.png" alt="">
            </div>
            <div class="whitespace-nowrap">
                <img class="max-w-[120px]" src="images/blocCLIENTES___006.png" alt="">
            </div>
            <div class="whitespace-nowrap">
                <img class="max-w-[120px]" src="images/blocCLIENTES___007.png" alt="">
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const container = document.querySelector('.scroll__container');
        const items = Array.from(container.children);
        
        // Adiciona DUAS cópias de cada item
        for (let i = 0; i < 2; i++) {
            items.forEach(item => {
                const clone = item.cloneNode(true);
                clone.setAttribute('aria-hidden', 'true');
                container.appendChild(clone);
            });
        }

        // Calcula a largura de UM conjunto (original)
        const singleSetWidth = items.reduce((acc, item) => acc + item.offsetWidth, 0);
        const totalGap = (items.length - 1) * 48; // gap-12 = 48px
        
        // Configuração da animação
        const velocidade = 100; // pixels/segundo
        const duration = (singleSetWidth + totalGap) / velocidade;
        
        container.style.animation = `scrollInfinito ${duration}s linear infinite`;
    });
</script>