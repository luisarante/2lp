<!DOCTYPE html>
<html lang="pt-br">
<?php
    $title = "Login";
    $css = "../index.css";
    include '../includes/head.php'
?>
<body>
    <main>
        <div class="w-full h-screen flex flex-col gap-2 justify-center items-center">
            <div class="w-[90%] sm:w-[70%] md:w-[60%] lg:w-[50%] xl:w-[40%] 2xl:w-[30%]">
                <a href="../index.php"><i class="fa-solid fa-arrow-left"></i> Voltar</a>
            </div>
            <div class="bg-white rounded-2xl p-8 h-[400px] w-[90%] sm:w-[70%] md:w-[60%] lg:w-[50%] xl:w-[40%] 2xl:w-[30%] flex flex-col items-center justify-between">
                <div>
                    <h1 class="font-bold text-3xl">Faça Login</h1>
                </div>
                <div class="w-full">
                    <form method="POST">
                        <div class="flex w-full flex-col gap-4">
                            <div class="campo relative">
                                <input class="border w-full py-[10px] px-2 rounded-xl" id="email" name="email" type="email" required/>
                                <label class="absolute transition-200 ease rounded-xl duration-200 top-1/2 bg-white p-1 -translate-1/2 left-[28px]" for="email">Email</label>
                            </div>
                            <div class="campo relative">
                                <input class="border w-full py-[10px] px-2 rounded-xl text-xl" id="senha" name="senha" type="password" required/>
                                <label class="absolute transition-200 ease rounded-xl duration-200 top-1/2 bg-white p-1 -translate-1/2 left-[31px]" for="senha">Senha</label>
                            </div>
                            <button class="w-full bg-[#52658c] rounded-full text-white py-3" type="submit">Login</button>
                        </div>
                    </form>
                </div>
                <div>
                    <p>Não possui acesso? <a href="#" class="font-bold text-[#7A7A7E]">Contate-nos</a></p>
                </div>
            </div>
        </div>
    </main>
    <?php include '../includes/footer.php' ?>
</body>
</html>