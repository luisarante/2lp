<!DOCTYPE html>
<html lang="pt-br">
<?php
$title = "Planos";
$css = "../index.css";
include '../includes/head.php'
?>

<body>

    <?php
    $menuItems = [
        'Planos',
        'Cadastro'
    ];
    $btnHeader = "../login/";
    $logoPath = "../images/logo.png";
    include '../includes/header.php';
    ?>
    <main>
        <section class="bg-[#333333] mt-[88px] min-h-[calc(100vh-88px)] text-white flex items-center justify-center">
            <div class="flex items-center justify-center">
                <img src="" alt="">
                <div class="flex flex-col">
                    <h2 class="text-4xl font-semibold">Eu sou</h2>
                    <p class="text-2xl">a solução inteligente para a gestão do seu hotel. </p>
                    <p class="text-2xl">Fale com a nossa equipe para conhecer mais:</p>
                    <p>📞 (11) 91234-5678</p>
                    <p>✉️ contato@crmhoteleiro.com.br</p>
                </div>
            </div>
        </section>
        <section id="planos" class="min-h-screen">
            <div class="relative pt-16 pb-32 lg:pb-0 flex items-center justify-center px-6">
                <div class="absolute -translate-[50%] w-3/4 md:w-1/2 bg-[#344356] left-[50%] py-6 text-white text-3xl top-0 flex items-center justify-center">NOSSOS PLANOS</div>
                <div class="flex flex-col">
                    <h3 class="text-xl">Eu sou um texto sobre os planos explicando sobre os 30 dias grátis.</h3>
                    <div class="flex flex-wrap gap-y-4 justify-center">
                        <!-- 1º card -->
                        <div class="border border-2 rounded-xl flex flex-col items-center min-w-[200px] min-h-[450px]">
                            <div class="py-2 flex justify-center w-full border-b items-center">
                                <h2 class="text-3xl font-bold">TRIAL</h2>
                            </div>
                            <div class="flex flex-col p-4">
                                <div class="flex flex-col items-center">
                                    <p class="">Eu sou um texto</p>
                                    <h3 class="text-2xl font-semibold mt-6">Gratuito</h3>
                                    <p class="text-sm">Por 01 mês</p>
                                    <span class="border mt-4 w-3/4"></span>
                                </div>
                                <div class="mt-4">
                                    <p class="font-medium text-md">Está incluso:</p>
                                </div>
                            </div>
                        </div>

                        <!-- 2º card -->
                        <div class="border border-2 rounded-xl flex flex-col items-center min-w-[200px] min-h-[450px]">
                            <div class="py-2 flex justify-center w-full border-b items-center">
                                <h2 class="text-3xl font-bold">BASIC</h2>
                            </div>
                            <div class="flex flex-col p-4">
                                <div class="flex flex-col items-center">
                                    <p class="">Economiza 16%</p>
                                    <h3 class="text-2xl font-semibold mt-6">R$ 00,00</h3>
                                    <p class="text-sm">(Por usuário)</p>
                                    <span class="border mt-4 w-3/4"></span>
                                </div>
                                <div class="mt-4">
                                    <p class="font-medium text-md">Está incluso:</p>
                                </div>
                            </div>
                        </div>

                        <!-- 3º card -->
                        <div class="border border-2 rounded-xl flex flex-col items-center min-w-[200px] min-h-[450px]">
                            <div class="py-2 flex justify-center w-full border-b items-center">
                                <h2 class="text-3xl font-bold">PRO</h2>
                            </div>
                            <div class="flex flex-col p-4">
                                <div class="flex flex-col items-center">
                                    <p class="">Economiza 24%</p>
                                    <h3 class="text-2xl font-semibold mt-6">R$ 00,00</h3>
                                    <p class="text-sm">(Por usuário)</p>
                                    <span class="border mt-4 w-3/4"></span>
                                </div>
                                <div class="mt-4">
                                    <p class="font-medium text-md">Está incluso:</p>
                                </div>
                            </div>
                        </div>

                        <!-- 4º card -->
                        <div class="border border-2 rounded-xl flex flex-col items-center min-w-[200px] min-h-[450px]">
                            <div class="py-2 flex justify-center w-full border-b items-center">
                                <h2 class="text-3xl font-bold">ADVANCED</h2>
                            </div>
                            <div class="flex flex-col p-4">
                                <div class="flex flex-col items-center">
                                    <p class="">Economiza 32%</p>
                                    <h3 class="text-2xl font-semibold mt-6">R$ 00,00</h3>
                                    <p class="text-sm">(Por usuário)</p>
                                    <span class="border mt-4 w-3/4"></span>
                                </div>
                                <div class="mt-4">
                                    <p class="font-medium text-md">Está incluso:</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="cadastro" class="bg-[#333333]">
            <div class="relative pt-16 px-6 pb-[42px] text-white">
                <div class="absolute text-center -translate-[50%] w-3/4 md:w-1/2 bg-[#344356] left-[50%] py-6 text-white text-3xl top-0 flex items-center justify-center">CADASTRE-SE PARA TRIAL</div>
                <form method="POST">
                    <div class="flex items-center justify-center w-full">
                        <div class="flex flex-col max-w-4xl gap-4 w-full">
                            <div class="campo relative w-full">
                                <input class="border w-full py-[10px] px-2 rounded-xl" id="nome" name="nome" type="text" required />
                                <label class="absolute transition-200 ease rounded-xl duration-200 top-1/2 bg-[#333333] p-1 -translate-1/2 left-[64px]" for="nome">Nome Completo</label>
                            </div>
                            <div class="campo relative w-full">
                                <input class="border w-full py-[10px] px-2 rounded-xl" id="cpf" name="cpf" type="number" required />
                                <label class="absolute transition-200 ease rounded-xl duration-200 top-1/2 bg-[#333333] p-1 -translate-1/2 left-[52px]" for="cpf">CPF / CNPJ</label>
                            </div>
                            <div class="campo relative w-full">
                                <input class="border w-full py-[10px] px-2 rounded-xl" id="email" name="email" type="text" required />
                                <label class="absolute transition-200 ease rounded-xl duration-200 top-1/2 bg-[#333333] py-1 -translate-1/2 left-[26px]" for="email">Email</label>
                            </div>
                            <div class="campo relative w-full">
                                <input class="border w-full py-[10px] px-2 rounded-xl" id="telefone" name="telefone" type="number" required />
                                <label class="absolute transition-200 ease rounded-xl duration-200 top-1/2 bg-[#333333] p-1 -translate-1/2 left-[38px]" for="telefone">Telefone</label>
                            </div>
                            <div class="flex flex-col items-center">
                                <button type="submit" class="rounded-lg px-6 py-2 text-white cursor-pointer w-fit bg-[#52658c]">Enviar</button>
                                <p class="mt-4">*Observação!</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>

</html>