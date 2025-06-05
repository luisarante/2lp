<?php
require_once 'functions.php';
?>

<header class="bg-[#f7f7f7] fixed top-0 w-full z-[100]">
  <div class="flex justify-between items-center p-6 max-h-[88px]">
    <a href="#">
      <img src="<?= $logoPath ?? 'images/logo.png' ?>" alt="Logo 2lp" class="w-[120px]" />
    </a>

    <button id="menu-toggle" class="lg:hidden text-[#52658c] focus:outline-none z-50 relative">
      <svg id="icon-open" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 6h16M4 12h16M4 18h16" />
      </svg>
      <svg id="icon-close" class="w-7 h-7 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>

    <nav id="menu" class="fixed top-0 right-0 h-screen w-60 bg-[#f7f7f7] transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col p-6 gap-4 lg:static lg:translate-x-0 lg:flex-row lg:items-center lg:w-auto lg:h-auto lg:bg-transparent lg:gap-6 lg:p-0 lg:transition-none z-40">
      <?php foreach ($menuItems as $item): ?>
        <a href="#<?= slugify($item) ?>" class="text-black"><?= $item ?></a>
      <?php endforeach; ?>
      <a href="<?= $btnHeader ?? 'login/' ?>" class="border bg-[#52658c] w-fit px-3 py-2 rounded-lg text-white">Entrar</a>
    </nav>
  </div>
</header>

<script>
  const toggle = document.getElementById('menu-toggle');
  const menu = document.getElementById('menu');
  const iconOpen = document.getElementById('icon-open');
  const iconClose = document.getElementById('icon-close');

  function openMenu() {
    menu.classList.remove('translate-x-full');
    iconOpen.classList.add('hidden');
    iconClose.classList.remove('hidden');
  }

  function closeMenu() {
    menu.classList.add('translate-x-full');
    iconOpen.classList.remove('hidden');
    iconClose.classList.add('hidden');
  }

  toggle.addEventListener('click', () => {
    const isOpen = !menu.classList.contains('translate-x-full');
    if (isOpen) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  window.addEventListener('resize', () => {
    if (window.innerWidth >= 768) {
      closeMenu();
    }
  });
</script>