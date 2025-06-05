<!DOCTYPE html>
<html lang="pt-br">
<?php
    $title = "Landing Page";
    include 'includes/head.php'
?>
<body>
    <?php 
        $menuItems = [
            'Quem Somos',
            'Vantagens',
            'Nossos Clientes',
            'Avaliações',
            'Fale Conosco'
        ];
        include 'includes/header.php'; 
    ?>
    <main>
        <?php 
            include 'includes/boasvindas.php';
            include 'includes/quemsomos.php';
            include 'includes/vantagens.php';
            include 'includes/parceiros.php';
            include 'includes/avaliacoes.php';
            include 'includes/faleconosco.php';
            include 'includes/footer.php';
        ?>
    </main>
</body>
</html>