<?php get_header(); ?>

<main>
    <section class="relative pt-48 pb-32 overflow-hidden bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <h1 style="font-family: 'Space Grotesk', sans-serif;" class="text-6xl md:text-7xl font-black text-slate-900 tracking-tighter leading-none mb-8">
                    Engenharia <br>
                    <span class="text-blue-600 underline decoration-4 underline-offset-8">Conectada</span> <br>
                    ao Amanhã.
                </h1>
                <p class="text-lg text-slate-600 mb-10 leading-relaxed max-w-lg">
                    A C&M Global Services une infraestrutura física e digital, oferecendo soluções que asseguram proteção e eficiência para operações seguras.
                </p>
                <a href="#servicos" class="inline-block bg-slate-900 text-white px-8 py-4 rounded-full font-bold shadow-2xl hover:scale-105 transition-transform">
                    NOSSOS SERVIÇOS
                </a>
            </div>
        </div>
    </section>

    <section id="servicos" class="py-24 max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <span class="text-blue-600 font-bold uppercase tracking-widest text-xs">O que fazemos</span>
            <h2 style="font-family: 'Space Grotesk', sans-serif;" class="text-4xl font-black text-slate-900 mt-2">Soluções em Engenharia</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <?php 
            $servicos = [
                ['title' => 'Engenharia Elétrica', 'desc' => 'Manutenção de média/baixa tensão e NR-10.'],
                ['title' => 'Prevenção de Incêndio', 'desc' => 'Sistemas Detecção e NR-23.'],
                ['title' => 'Eficiência Energética', 'desc' => 'Consultoria e redução de custos.'],
                ['title' => 'Infraestrutura de TI', 'desc' => 'Cabeamento estruturado e redes de alta performance.'],
                ['title' => 'Segurança Eletrônica', 'desc' => 'Monitoramento 24h e CFTV avançado.'],
                ['title' => 'Créditos de ICMS', 'desc' => 'Gestão tributária estratégica para indústrias.'],
            ];
            foreach($servicos as $item): ?>
            <div class="bg-white p-8 rounded-2xl border border-slate-100 shadow-sm hover:border-blue-600/30 transition-all group">
                <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-blue-600 transition-colors"><?php echo $item['title']; ?></h3>
                <p class="text-slate-500 text-sm"><?php echo $item['desc']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="bg-slate-900 py-24 text-white">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-12 text-center">
            <div><div class="text-4xl font-bold text-blue-600">+15</div><div class="text-xs uppercase opacity-60">Anos no Mercado</div></div>
            <div><div class="text-4xl font-bold text-blue-600">+500</div><div class="text-xs uppercase opacity-60">Clientes</div></div>
            <div><div class="text-4xl font-bold text-blue-600">ISO</div><div class="text-xs uppercase opacity-60">Certificação 9001</div></div>
            <div><div class="text-4xl font-bold text-blue-600">24/7</div><div class="text-xs uppercase opacity-60">Suporte Técnico</div></div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
