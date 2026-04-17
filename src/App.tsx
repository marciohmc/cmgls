/**
 * @license
 * SPDX-License-Identifier: Apache-2.0
 */

import React, { useState } from 'react';
import { 
  Globe, 
  Shield, 
  Zap, 
  Search, 
  Layers, 
  Cpu, 
  CheckCircle,
  Clock,
  ExternalLink,
  Lock,
  Menu,
  X,
  Phone,
  Mail,
  MapPin,
  ArrowRight,
  Droplets,
  HardHat,
  Network,
  Activity
} from 'lucide-react';
import { motion, AnimatePresence } from 'motion/react';

// --- Components ---

const Navbar = () => {
  const [isOpen, setIsOpen] = useState(false);
  
  const navLinks = [
    { name: 'Início', href: '#' },
    { name: 'Serviços', href: '#servicos' },
    { name: 'Sobre', href: '#sobre' },
    { name: 'Contato', href: '#contato' }
  ];

  return (
    <nav className="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-slate-100">
      <div className="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
        <div className="flex items-center gap-2">
          <div className="w-10 h-10 bg-brand-primary rounded-lg flex items-center justify-center">
            <Cpu className="text-white w-6 h-6" />
          </div>
          <div className="flex flex-col">
            <span className="font-bold text-xl text-brand-primary leading-none">C&M GLOBAL</span>
            <span className="text-[10px] font-bold text-brand-secondary tracking-widest uppercase">Services</span>
          </div>
        </div>

        {/* Desktop Menu */}
        <div className="hidden md:flex items-center gap-8">
          {navLinks.map(link => (
            <a key={link.name} href={link.href} className="text-sm font-medium text-slate-600 hover:text-brand-secondary transition-colors uppercase tracking-wider">
              {link.name}
            </a>
          ))}
          <a href="#contato" className="bg-brand-primary text-white px-6 py-2.5 rounded-full text-sm font-bold hover:bg-slate-800 transition-all shadow-lg hover:shadow-brand-secondary/20">
            ORÇAMENTO RÁPIDO
          </a>
        </div>

        {/* Mobile Toggle */}
        <button onClick={() => setIsOpen(!isOpen)} className="md:hidden text-brand-primary">
          {isOpen ? <X /> : <Menu />}
        </button>
      </div>

      {/* Mobile Menu */}
      <AnimatePresence>
        {isOpen && (
          <motion.div 
            initial={{ opacity: 0, y: -20 }}
            animate={{ opacity: 1, y: 0 }}
            exit={{ opacity: 0, y: -20 }}
            className="absolute top-20 left-0 w-full bg-white border-b border-slate-100 p-6 md:hidden flex flex-col gap-4 shadow-xl"
          >
            {navLinks.map(link => (
              <a key={link.name} href={link.href} onClick={() => setIsOpen(false)} className="text-lg font-bold text-slate-800 border-b border-slate-50 pb-2">
                {link.name}
              </a>
            ))}
            <a href="#contato" className="bg-brand-primary text-white px-6 py-4 rounded-xl text-center font-bold">
              ORÇAMENTO RÁPIDO
            </a>
          </motion.div>
        )}
      </AnimatePresence>
    </nav>
  );
};

const SectionHeading = ({ subtitle, title, light = false }: { subtitle: string, title: string, light?: boolean }) => (
  <div className="mb-12">
    <span className={`text-[11px] font-bold uppercase tracking-[0.3em] ${light ? 'text-white/60' : 'text-brand-secondary'}`}>
      {subtitle}
    </span>
    <h2 className={`text-3xl md:text-4xl font-black mt-2 leading-tight ${light ? 'text-white' : 'text-brand-primary'}`}>
      {title}
    </h2>
  </div>
);

const ServiceCard = ({ icon, title, description }: { icon: React.ReactNode, title: string, description: string }) => (
  <motion.div 
    whileHover={{ y: -5 }}
    className="bg-white p-8 rounded-2xl border border-slate-100 shadow-sleek hover:border-brand-secondary/30 transition-all group"
  >
    <div className="w-14 h-14 bg-slate-50 rounded-xl flex items-center justify-center text-brand-secondary mb-6 group-hover:bg-brand-secondary group-hover:text-white transition-colors">
      {icon}
    </div>
    <h3 className="text-xl font-bold text-brand-primary mb-3">{title}</h3>
    <p className="text-slate-500 text-sm leading-relaxed">{description}</p>
    <div className="mt-6 flex items-center gap-2 text-xs font-bold text-brand-secondary hover:translate-x-1 transition-transform cursor-pointer">
      SAIBA MAIS <ArrowRight className="w-3 h-3" />
    </div>
  </motion.div>
);

export default function App() {
  return (
    <div className="min-h-screen bg-white">
      <Navbar />

      {/* Hero Section */}
      <section className="relative pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden bg-slate-50">
        <div className="absolute top-0 right-0 w-1/2 h-full bg-brand-primary hidden lg:block skew-x-[-12deg] translate-x-20" />
        <div className="max-w-7xl mx-auto px-6 relative z-10">
          <div className="grid lg:grid-cols-2 gap-16 items-center">
            <motion.div 
              initial={{ opacity: 0, x: -30 }}
              animate={{ opacity: 1, x: 0 }}
              className="max-w-lg"
            >
              <div className="inline-flex items-center gap-2 bg-brand-secondary/10 text-brand-secondary px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest mb-6">
                <Shield className="w-3 h-3" /> Certificada ISO 9001 & NR-10
              </div>
              <h1 className="text-5xl md:text-7xl font-black text-brand-primary tracking-tighter leading-[0.9] mb-8">
                Engenharia <br /><span className="text-brand-secondary underline decoration-4 underline-offset-8">Conectada</span> <br />ao Amanhã.
              </h1>
              <p className="text-lg text-slate-600 mb-10 leading-relaxed">
                A C&M Global Services une infraestrutura física e digital, oferecendo soluções que asseguram proteção, conectividade e eficiência para operações seguras e ininterruptas.
              </p>
              <div className="flex flex-col sm:flex-row gap-4">
                <a href="#servicos" className="bg-brand-primary text-white px-8 py-4 rounded-full font-bold shadow-2xl flex items-center justify-center gap-3 hover:scale-105 transition-transform">
                  NOSSOS SERVIÇOS <ArrowRight className="w-4 h-4" />
                </a>
                <a href="tel:+5511987654321" className="border-2 border-slate-200 text-slate-600 px-8 py-4 rounded-full font-bold flex items-center justify-center gap-3 hover:bg-slate-100 transition-colors">
                  <Phone className="w-4 h-4" /> (11) 98765-4321
                </a>
              </div>
            </motion.div>

            <motion.div 
              initial={{ opacity: 0, scale: 0.9 }}
              animate={{ opacity: 1, scale: 1 }}
              className="relative hidden lg:block"
            >
              <div className="aspect-[4/5] rounded-[2rem] overflow-hidden shadow-2xl border-8 border-white">
                <img 
                  src="https://picsum.photos/seed/engineer/800/1000" 
                  alt="Engenharia de Infraestrutura" 
                  className="w-full h-full object-cover"
                  referrerPolicy="no-referrer"
                />
              </div>
              <div className="absolute -bottom-10 -left-10 bg-white p-8 rounded-2xl shadow-2xl border border-slate-100 max-w-[240px]">
                <div className="text-3xl font-black text-brand-primary mb-1">+15 Anos</div>
                <div className="text-xs font-bold text-slate-400 uppercase tracking-widest">Expertise no Mercado de Infraestrutura</div>
              </div>
            </motion.div>
          </div>
        </div>
      </section>

      {/* Services Grid */}
      <section id="servicos" className="py-24 max-w-7xl mx-auto px-6">
        <div className="flex flex-col md:flex-row md:items-end justify-between mb-16">
          <SectionHeading 
            subtitle="O que fazemos" 
            title="Soluções Completas em Infraestrutura e Engenharia" 
          />
          <p className="max-w-md text-slate-500 text-sm mb-12 border-l-4 border-brand-secondary pl-6">
            Integramos segurança, conectividade e eficiência energética para transformar a operação do seu negócio em um ativo estratégico.
          </p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <ServiceCard 
            icon={<Zap />}
            title="Engenharia Elétrica (NR-10)"
            description="Projetos e manutenção de sistemas de baixa e média tensão com foco rigoroso em segurança e conformidade normativa."
          />
          <ServiceCard 
            icon={<Activity />}
            title="Prevenção de Incêndio (NR-23)"
            description="Sistemas completos de detecção e combate para proteção patrimonial e salvaguarda de vidas."
          />
          <ServiceCard 
            icon={<Shield />}
            title="Eficiência Energética"
            description="Consultoria estratégica e tecnológica para redução de custos e otimização do consumo de energia."
          />
          <ServiceCard 
            icon={<Network />}
            title="Infraestrutura de TI"
            description="Redes de dados de alta performance, cabeamento estruturado e conectividade ininterrupta."
          />
          <ServiceCard 
            icon={<Lock />}
            title="Segurança Eletrônica"
            description="Soluções avançadas de CFTV, monitoramento 24h e controle de acesso biométrico e facial."
          />
          <ServiceCard 
            icon={<Layers />}
            title="Créditos de ICMS"
            description="Recuperação estratégica de impostos sobre energia elétrica para indústrias e empresas de grande porte."
          />
        </div>
      </section>

      {/* Stats / Proof Section */}
      <section className="bg-brand-primary py-24 text-white overflow-hidden relative">
        <div className="absolute inset-0 opacity-10 pointer-events-none">
          <div className="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_50%_120%,#3b82f6,transparent_50%)]" />
        </div>
        <div className="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-12 text-center relative z-10">
          <div>
            <div className="text-5xl font-black mb-2 text-brand-secondary">98%</div>
            <div className="text-[10px] font-bold uppercase tracking-[0.2em] opacity-60">Disponibilidade Sistemas</div>
          </div>
          <div>
            <div className="text-5xl font-black mb-2 text-brand-secondary">+500</div>
            <div className="text-[10px] font-bold uppercase tracking-[0.2em] opacity-60">Clientes Atendidos</div>
          </div>
          <div>
            <div className="text-5xl font-black mb-2 text-brand-secondary">24/7</div>
            <div className="text-[10px] font-bold uppercase tracking-[0.2em] opacity-60">Suporte Técnico</div>
          </div>
          <div>
            <div className="text-5xl font-black mb-2 text-brand-secondary">Zero</div>
            <div className="text-[10px] font-bold uppercase tracking-[0.2em] opacity-60">Acidentes de Trabalho</div>
          </div>
        </div>
      </section>

      {/* About Section - Split Layout */}
      <section id="sobre" className="py-24">
        <div className="max-w-7xl mx-auto px-6">
          <div className="grid lg:grid-cols-2 gap-20 items-center">
            <div className="order-2 lg:order-1">
              <div className="aspect-video rounded-3xl overflow-hidden shadow-2xl relative">
                 <img 
                  src="https://picsum.photos/seed/office/1200/800" 
                  alt="Nossa Sede" 
                  className="w-full h-full object-cover"
                  referrerPolicy="no-referrer"
                />
                <div className="absolute inset-0 bg-brand-primary/20" />
              </div>
            </div>
            <div className="order-1 lg:order-2">
              <SectionHeading 
                subtitle="Sobre a Empresa" 
                title="Sólida Experiência em Engenharia e Tecnologia" 
              />
              <p className="text-slate-600 mb-6 leading-relaxed">
                A C&M Global Services nasceu da necessidade de integrar competências técnicas de engenharia com a agilidade da era digital. Nossa missão é ser o parceiro estratégico de infraestrutura para empresas que não podem parar.
              </p>
              <ul className="space-y-4 mb-10">
                {[
                  "Equipe técnica altamente qualificada e certificada.",
                  "Foco total em segurança do trabalho (SST).",
                  "Uso de tecnologia de ponta em diagnósticos.",
                  "Comprometimento com prazos e orçamentos."
                ].map((item, i) => (
                  <li key={i} className="flex items-center gap-3 text-sm font-medium text-slate-700">
                    <CheckCircle className="text-brand-accent w-5 h-5 flex-shrink-0" />
                    {item}
                  </li>
                ))}
              </ul>
              <button className="text-brand-secondary font-bold flex items-center gap-2 hover:gap-4 transition-all">
                Nossa história completa <ArrowRight className="w-4 h-4" />
              </button>
            </div>
          </div>
        </div>
      </section>

      {/* CTA / Contact Section */}
      <section id="contato" className="py-24 bg-slate-50">
        <div className="max-w-7xl mx-auto px-6">
          <div className="bg-white rounded-[3rem] shadow-2xl overflow-hidden border border-slate-100">
            <div className="grid lg:grid-cols-5">
              <div className="lg:col-span-2 bg-brand-primary p-12 text-white">
                <SectionHeading 
                  subtitle="Fale Conosco" 
                  title="Pronto para otimizar sua estrutura?" 
                  light 
                />
                <p className="opacity-70 text-sm mb-12">
                  Preencha o formulário ou utilize nossos canais diretos para um atendimento consultivo imediato.
                </p>
                
                <div className="space-y-8">
                  <div className="flex items-start gap-4">
                    <div className="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center text-brand-secondary">
                      <Phone className="w-5 h-5" />
                    </div>
                    <div>
                      <div className="text-xs font-bold uppercase tracking-widest opacity-50 mb-1">Telefone</div>
                      <div className="text-lg font-bold">+55 (11) 98765-4321</div>
                    </div>
                  </div>
                  <div className="flex items-start gap-4">
                    <div className="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center text-brand-secondary">
                      <Mail className="w-5 h-5" />
                    </div>
                    <div>
                      <div className="text-xs font-bold uppercase tracking-widest opacity-50 mb-1">E-mail</div>
                      <div className="text-lg font-bold">comercial@cmglobalservices.com.br</div>
                    </div>
                  </div>
                  <div className="flex items-start gap-4">
                    <div className="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center text-brand-secondary">
                      <MapPin className="w-5 h-5" />
                    </div>
                    <div>
                      <div className="text-xs font-bold uppercase tracking-widest opacity-50 mb-1">Sede</div>
                      <div className="text-lg font-bold">Av. das Nações, 1200 - São Paulo, SP</div>
                    </div>
                  </div>
                </div>
              </div>

              <div className="lg:col-span-3 p-12">
                <form 
                  onSubmit={async (e) => {
                    e.preventDefault();
                    const formData = new FormData(e.currentTarget);
                    const statusDiv = document.getElementById('form-status');
                    
                    try {
                      if (statusDiv) statusDiv.innerText = 'Enviando...';
                      const response = await fetch('/contact.php', {
                        method: 'POST',
                        body: formData
                      });
                      const result = await response.text();
                      if (statusDiv) {
                        statusDiv.innerText = result;
                        statusDiv.className = response.ok ? 'mt-4 text-sm font-bold text-brand-accent' : 'mt-4 text-sm font-bold text-red-500';
                      }
                      if (response.ok) (e.target as HTMLFormElement).reset();
                    } catch (error) {
                      if (statusDiv) {
                        statusDiv.innerText = 'Erro ao conectar com o servidor.';
                        statusDiv.className = 'mt-4 text-sm font-bold text-red-500';
                      }
                    }
                  }}
                  className="space-y-6"
                >
                  <div className="grid md:grid-cols-2 gap-6">
                    <div className="space-y-2">
                      <label className="text-xs font-bold uppercase tracking-widest text-slate-500">Nome Completo</label>
                      <input name="name" required type="text" className="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:border-brand-secondary focus:ring-1 focus:ring-brand-secondary outline-none transition-all" placeholder="Ex: João Silva" />
                    </div>
                    <div className="space-y-2">
                      <label className="text-xs font-bold uppercase tracking-widest text-slate-500">E-mail Corporativo</label>
                      <input name="email" required type="email" className="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:border-brand-secondary focus:ring-1 focus:ring-brand-secondary outline-none transition-all" placeholder="nome@empresa.com.br" />
                    </div>
                  </div>
                  <div className="space-y-2">
                    <label className="text-xs font-bold uppercase tracking-widest text-slate-500">Assunto</label>
                    <select name="subject" className="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:border-brand-secondary focus:ring-1 focus:ring-brand-secondary outline-none transition-all">
                      <option>Engenharia Elétrica</option>
                      <option>Infraestrutura de Redes</option>
                      <option>Segurança Eletrônica</option>
                      <option>Orçamento Geral</option>
                    </select>
                  </div>
                  <div className="space-y-2">
                    <label className="text-xs font-bold uppercase tracking-widest text-slate-500">Mensagem</label>
                    <textarea name="message" required rows={4} className="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 focus:border-brand-secondary focus:ring-1 focus:ring-brand-secondary outline-none transition-all" placeholder="Como podemos ajudar no seu projeto?" />
                  </div>
                  <button type="submit" className="w-full bg-brand-secondary text-white font-black py-4 rounded-xl shadow-xl hover:bg-blue-600 transition-colors uppercase tracking-widest text-sm">
                    ENVIAR SOLICITAÇÃO
                  </button>
                  <div id="form-status" className="mt-4 text-center text-sm"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Footer */}
      <footer className="bg-brand-primary pt-20 pb-10 text-white">
        <div className="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-12 mb-20">
          <div className="col-span-2">
            <div className="flex items-center gap-2 mb-6">
              <div className="w-8 h-8 bg-brand-secondary rounded-lg flex items-center justify-center">
                <Cpu className="text-white w-5 h-5" />
              </div>
              <span className="font-bold text-xl uppercase">C&M GLOBAL</span>
            </div>
            <p className="text-slate-400 text-sm max-w-sm mb-8 leading-relaxed">
              Líder em soluções de infraestrutura elétrica e digital. Atuamos com os mais altos padrões de segurança e tecnologia para garantir a continuidade do seu negócio.
            </p>
            <div className="flex gap-4">
              {['Instagram', 'LinkedIn', 'Facebook'].map(social => (
                <div key={social} className="w-10 h-10 border border-white/20 rounded-full flex items-center justify-center hover:bg-white/10 cursor-pointer transition-colors text-[10px] font-bold uppercase">{social[0]}</div>
              ))}
            </div>
          </div>
          <div>
            <h4 className="font-bold uppercase tracking-widest text-xs mb-6 text-brand-secondary">Links Rápidos</h4>
            <ul className="space-y-4 text-sm text-slate-400">
              <li><a href="#" className="hover:text-white transition-colors">Home</a></li>
              <li><a href="#servicos" className="hover:text-white transition-colors">Serviços</a></li>
              <li><a href="#sobre" className="hover:text-white transition-colors">Sobre Nós</a></li>
              <li><a href="#contato" className="hover:text-white transition-colors">Contato</a></li>
            </ul>
          </div>
          <div>
            <h4 className="font-bold uppercase tracking-widest text-xs mb-6 text-brand-secondary">Suporte</h4>
            <ul className="space-y-4 text-sm text-slate-400">
              <li><a href="#" className="hover:text-white transition-colors">Atendimento 24h</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Central de Ajuda</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Política de Privacidade</a></li>
              <li><a href="#" className="hover:text-white transition-colors">Certificações</a></li>
            </ul>
          </div>
        </div>
        <div className="max-w-7xl mx-auto px-6 pt-10 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-4 text-[10px] text-slate-500 font-bold uppercase tracking-widest">
          <div>&copy; {new Date().getFullYear()} C&M Global Services. Todos os direitos reservados.</div>
          <div>Desenvolvido com Tecnologia de Ponta</div>
        </div>
      </footer>
    </div>
  );
}
