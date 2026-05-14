<?php get_header(); ?>

<main class="bg-white">
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden bg-slate-50">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-brand-primary hidden lg:block skew-x-[-12deg] translate-x-20"></div>
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="max-w-lg">
                    <div class="inline-flex items-center gap-2 bg-brand-secondary/10 text-brand-secondary px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest mb-6">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        Certificada ISO 9001 & NR-10
                    </div>
                    <h1 class="text-5xl md:text-7xl font-black text-brand-primary tracking-tighter leading-[0.9] mb-8 font-heading">
                        Engenharia <br><span class="text-brand-secondary underline decoration-4 underline-offset-8">Conectada</span> <br>ao Amanhã.
                    </h1>
                    <p class="text-lg text-slate-600 mb-10 leading-relaxed">
                        A C&M Global Services une infraestrutura física e digital, oferecendo soluções que asseguram proteção, conectividade e eficiência para operações seguras e ininterruptas.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#servicos" class="bg-brand-primary text-white px-8 py-4 rounded-full font-bold shadow-2xl flex items-center justify-center gap-3 hover:scale-105 transition-transform">
                            NOSSOS SERVIÇOS 
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                        <a href="tel:+5511987654321" class="border-2 border-slate-200 text-slate-600 px-8 py-4 rounded-full font-bold flex items-center justify-center gap-3 hover:bg-slate-100 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h2.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            (11) 98765-4321
                        </a>
                    </div>
                </div>

                <div class="relative hidden lg:block">
                    <div class="aspect-[4/5] rounded-[2rem] overflow-hidden shadow-2xl border-8 border-white">
                        <img src="https://picsum.photos/seed/engineer/800/1000" alt="Engenharia de Infraestrutura" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-10 -left-10 bg-white p-8 rounded-2xl shadow-2xl border border-slate-100 max-w-[240px]">
                        <div class="text-3xl font-black text-brand-primary mb-1">+15 Anos</div>
                        <div class="text-xs font-bold text-slate-400 uppercase tracking-widest">Expertise no Mercado de Infraestrutura</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section id="servicos" class="py-24 max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16">
            <div class="mb-12">
                <span class="text-[11px] font-bold uppercase tracking-[0.3em] text-brand-secondary">O que fazemos</span>
                <h2 class="text-3xl md:text-4xl font-black mt-2 leading-tight text-brand-primary font-heading">Soluções Completas em Infraestrutura e Engenharia</h2>
            </div>
            <p class="max-w-md text-slate-500 text-sm mb-12 border-l-4 border-brand-secondary pl-6">
                Integramos segurança, conectividade e eficiência energética para transformar a operação do seu negócio em um ativo estratégico.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php 
            $servicos = [
                ['title' => 'Engenharia Elétrica (NR-10)', 'desc' => 'Projetos e manutenção de sistemas de baixa e média tensão com foco rigoroso em segurança.'],
                ['title' => 'Prevenção de Incêndio (NR-23)', 'desc' => 'Sistemas completos de detecção e combate para proteção patrimonial e salvaguarda de vidas.'],
                ['title' => 'Eficiência Energética', 'desc' => 'Consultoria estratégica e tecnológica para redução de custos e otimização do consumo.'],
                ['title' => 'Infraestrutura de TI', 'desc' => 'Redes de dados de alta performance, cabeamento estruturado e conectividade ininterrupta.'],
                ['title' => 'Segurança Eletrônica', 'desc' => 'Soluções avançadas de CFTV, monitoramento 24h e controle de acesso biométrico e facial.'],
                ['title' => 'Créditos de ICMS', 'desc' => 'Recuperação estratégica de impostos sobre energia elétrica para indústrias e empresas.'],
            ];
            foreach($servicos as $s): ?>
            <div class="bg-white p-8 rounded-2xl border border-slate-100 shadow-sleek hover:border-brand-secondary/30 transition-all group">
                <div class="w-14 h-14 bg-slate-50 rounded-xl flex items-center justify-center text-brand-secondary mb-6 group-hover:bg-brand-secondary group-hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-brand-primary mb-3"><?php echo $s['title']; ?></h3>
                <p class="text-slate-500 text-sm leading-relaxed"><?php echo $s['desc']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-brand-primary py-24 text-white relative">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-12 text-center">
            <div><div class="text-5xl font-black mb-2 text-brand-secondary">98%</div><div class="text-[10px] font-bold uppercase tracking-[0.2em] opacity-60">Disponibilidade</div></div>
            <div><div class="text-5xl font-black mb-2 text-brand-secondary">+500</div><div class="text-[10px] font-bold uppercase tracking-[0.2em] opacity-60">Clientes</div></div>
            <div><div class="text-5xl font-black mb-2 text-brand-secondary">24/7</div><div class="text-[10px] font-bold uppercase tracking-[0.2em] opacity-60">Suporte</div></div>
            <div><div class="text-5xl font-black mb-2 text-brand-secondary">Zero</div><div class="text-[10px] font-bold uppercase tracking-[0.2em] opacity-60">Acidentes</div></div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
