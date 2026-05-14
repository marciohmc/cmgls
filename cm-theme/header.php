<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="fixed w-full z-50 bg-brand-primary/95 backdrop-blur-md border-b border-white/10">
    <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3">
            <div class="w-10 h-10 bg-brand-secondary rounded-lg flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-white w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="15" x2="23" y2="15"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="15" x2="4" y2="15"/></svg>
            </div>
            <div class="flex flex-col text-white">
                <span class="font-heading font-bold text-xl leading-none">C&M GLOBAL</span>
                <span class="text-[10px] font-bold text-brand-secondary tracking-widest uppercase">Services</span>
            </div>
        </a>

        <!-- Desktop Links -->
        <div class="hidden md:flex items-center gap-8">
            <a href="#servicos" class="text-sm font-medium text-slate-300 hover:text-white transition-colors uppercase tracking-wider">Serviços</a>
            <a href="#sobre" class="text-sm font-medium text-slate-300 hover:text-white transition-colors uppercase tracking-wider">Sobre</a>
            <a href="#contato" class="bg-brand-secondary text-white px-6 py-2.5 rounded-full text-sm font-bold hover:bg-opacity-90 transition-all shadow-lg shadow-brand-secondary/20 font-heading">
                ORÇAMENTO RÁPIDO
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="md:hidden text-white focus:outline-none">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
        </button>
    </div>

    <!-- Mobile Menu Container -->
    <div id="mobile-menu" class="hidden absolute top-20 left-0 w-full bg-brand-primary border-b border-white/10 p-6 md:hidden flex-col gap-4 shadow-xl">
        <a href="#servicos" class="mobile-link text-lg font-bold text-white border-b border-white/5 pb-2">Serviços</a>
        <a href="#sobre" class="mobile-link text-lg font-bold text-white border-b border-white/5 pb-2">Sobre</a>
        <a href="#contato" class="mobile-link bg-brand-secondary text-white px-6 py-4 rounded-xl text-center font-bold">ORÇAMENTO RÁPIDO</a>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    const links = document.querySelectorAll('.mobile-link');

    if (btn && menu) {
        btn.addEventListener('click', function() {
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
        });

        links.forEach(link => {
            link.addEventListener('click', function() {
                menu.classList.add('hidden');
                menu.classList.remove('flex');
            });
        });
    }
});
</script>
