# Guia de Conteúdo e Implantação do Portal Principal - RSA Infralink

Este documento contém todas as instruções de instalação do tema filho, a copy profissional em português brasileiro para as páginas institucionais, a estrutura do grid filtrável por JavaScript nativo, e a redação refinada dos 7 casos de sucesso do portfólio.

---

## 1. Como Instalar o Tema Filho Personalizado

O tema filho contém todos os estilos visuais do **Signal/NOC escuro**, tipografia Space Grotesk e Manrope, e as funções necessárias para os filtros dinâmicos de portfólio e upload de arquivos SVG.

### Passo a Passo de Instalação:
1. Acesse o painel administrativo do seu WordPress (`novo.rsainfralink.com.br/wp-admin/` ou URL temporária).
2. Vá para **Aparência** -> **Temas** -> **Adicionar Novo**.
3. Clique em **Enviar Tema** no topo da página.
4. Selecione o arquivo ZIP criado na raiz do projeto: [rsa-infralink-theme.zip](file:///C:/Users/Dubes/Desktop/RSA-INFRALINK/rsa-infralink-theme.zip).
5. Clique em **Instalar agora** e depois em **Ativar**.
6. **Configuração da Logo**: Em **Personalizar** -> **Identidade do Site**, envie o arquivo [logo.svg](file:///C:/Users/Dubes/Desktop/RSA-INFRALINK/rsa-infralink-theme/logo.svg) como logotipo oficial.

---

## 2. Como Importar as Páginas e Posts no WordPress

Para manter a fidelidade absoluta do design visual sem depender de Elementor, nós criamos o layout das páginas em **HTML Personalizado** otimizado para o editor de blocos nativo (Gutenberg).

### Instruções para Importar os Códigos:
1. No WordPress, crie uma nova Página (ex: "Home") ou Post (ex: "Caso 1").
2. No canto superior direito do editor Gutenberg, clique nos três pontinhos verticais e mude o modo de visualização para **Editor de código** (ou use o atalho `Ctrl + Shift + Alt + M`).
3. Cole o código HTML correspondente fornecido abaixo diretamente no editor.
4. Volte para o **Editor visual** para ver o layout estruturado.
5. Publique a página ou post.

---

## 3. Códigos e Conteúdos das Páginas Principais

### PÁGINA: HOME (Markup Gutenberg)
Cole o código abaixo em uma nova página chamada **Home** e defina-a como a página inicial nas configurações de leitura do WordPress.

```html
<!-- wp:html -->
<section class="hero-section">
  <div class="hero-eyebrow">Disponível agora · RS · SC · PR</div>
  <h1 class="hero-title">O parceiro de campo que chega onde os grandes não chegam — e <span>documenta tudo</span>.</h1>
  <p class="hero-lead">Vistorias, manutenções e instalações em torres de telecomunicações no Sul do Brasil. Mobilização ágil, execução técnica rigorosa (NR-35) e Relatório Fotográfico Técnico (RFT) entregue em cada serviço.</p>
  <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-bottom: 40px;">
    <a href="https://wa.me/5547992780061?text=Olá! Vim pelo site e gostaria de solicitar um orçamento técnico." class="btn-primary" target="_blank">
      <svg viewBox="0 0 24 24" fill="currentColor" style="width: 18px; height: 18px;"><path d="M17.6 6.3A8.86 8.86 0 0 0 12.06 4a8.94 8.94 0 0 0-7.74 13.4L3 21l3.7-1.27a8.93 8.93 0 0 0 5.36 1.8h0a8.94 8.94 0 0 0 6.32-15.23ZM12.06 19.9a7.4 7.4 0 0 1-3.77-1.04l-.27-.16-2.8.97.94-2.73-.18-.28a7.43 7.43 0 0 1 11.6-9.2 7.4 7.4 0 0 1-5.52 12.44Zm4.08-5.56c-.22-.11-1.32-.65-1.53-.73-.2-.08-.35-.11-.5.11-.15.22-.57.73-.7.88-.13.15-.26.16-.48.05a6.1 6.1 0 0 1-1.8-1.1 6.7 6.7 0 0 1-1.24-1.55c-.13-.22-.01-.34.1-.45.1-.1.22-.26.33-.4.11-.13.15-.22.22-.37.07-.15.04-.28-.02-.4-.06-.11-.5-1.2-.68-1.65-.18-.43-.36-.37-.5-.38h-.43a.82.82 0 0 0-.6.28 2.5 2.5 0 0 0-.78 1.86c0 1.1.8 2.16.91 2.31.11.15 1.57 2.4 3.8 3.36.53.23.95.37 1.27.47.54.17 1.02.15 1.41.09.43-.06 1.32-.54 1.5-1.06.19-.52.19-.96.13-1.06-.05-.1-.2-.16-.42-.27Z"/></svg>
      Solicitar Orçamento
    </a>
    <a href="/portfolio" class="btn-secondary">Ver Casos de Sucesso</a>
  </div>
</section>

<section style="padding: 60px 0; border-top: 1px solid var(--line-color);">
  <div style="font-family: var(--font-mono); font-size: 12px; color: var(--color-cyan); letter-spacing: 0.16em; text-transform: uppercase;">Nossos Números</div>
  <h2 style="font-size: 28px; margin: 10px 0 30px 0;">Presença regional e compromisso com o resultado</h2>
  <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
    <div style="background-color: var(--bg-sec); border: 1px solid var(--line-color); border-radius: 12px; padding: 20px; text-align: center;">
      <div style="font-family: var(--font-display); font-size: 36px; font-weight: 700; color: var(--color-orange);">3</div>
      <div style="font-size: 13px; color: var(--color-muted); margin-top: 8px;">Estados de Atuação ativa (RS, SC, PR)</div>
    </div>
    <div style="background-color: var(--bg-sec); border: 1px solid var(--line-color); border-radius: 12px; padding: 20px; text-align: center;">
      <div style="font-family: var(--font-display); font-size: 36px; font-weight: 700; color: var(--color-orange);">24h</div>
      <div style="font-size: 13px; color: var(--color-muted); margin-top: 8px;">Mobilização para chamados de emergência</div>
    </div>
    <div style="background-color: var(--bg-sec); border: 1px solid var(--line-color); border-radius: 12px; padding: 20px; text-align: center;">
      <div style="font-family: var(--font-display); font-size: 36px; font-weight: 700; color: var(--color-orange);">100%</div>
      <div style="font-size: 13px; color: var(--color-muted); margin-top: 8px;">Dos serviços finalizados com laudo técnico fotográfico</div>
    </div>
  </div>
</section>

<section style="padding: 60px 0; border-top: 1px solid var(--line-color);">
  <div style="font-family: var(--font-mono); font-size: 12px; color: var(--color-cyan); letter-spacing: 0.16em; text-transform: uppercase;">Serviços Chave</div>
  <h2 style="font-size: 28px; margin: 10px 0 10px 0;">Soluções integradas de infraestrutura e telecomunicações</h2>
  <p style="color: var(--color-muted); max-width: 600px; margin-bottom: 30px;">Atendemos ISPs regionais, operadoras e towercos com equipe especializada.</p>
  
  <div class="services-grid-custom">
    <div class="service-card-custom">
      <div class="service-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 22px; height: 22px;"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
      </div>
      <h3>Vistorias e Laudos</h3>
      <p>Inspeção estrutural completa em torres, abrigos e sistemas irradiantes com emissão de Relatório Fotográfico Técnico (RFT) detalhado.</p>
    </div>
    <div class="service-card-custom">
      <div class="service-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 22px; height: 22px;"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
      </div>
      <h3>Manutenção em Altura</h3>
      <p>Manutenções preventivas e corretivas em torres e antenas de transmissão, seguindo rigorosamente os padrões de segurança NR-35.</p>
    </div>
    <div class="service-card-custom">
      <div class="service-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 22px; height: 22px;"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"/><rect x="2" y="14" width="20" height="8" rx="2" ry="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/></svg>
      </div>
      <h3>Sistemas Elétricos & BTS</h3>
      <p>Manutenção e adequação de quadros de comando, climatização de shelters e proteção de geradores de energia de abrigos BTS.</p>
    </div>
  </div>
  <div style="text-align: center; margin-top: 20px;">
    <a href="/servicos" class="btn-secondary">Ver Detalhes dos Serviços</a>
  </div>
</section>
<!-- /wp:html -->
```

---

### PÁGINA: SERVIÇOS (Markup Gutenberg)
Cole o código abaixo em uma nova página chamada **Serviços**.

```html
<!-- wp:html -->
<section style="padding: 40px 0;">
  <div class="hero-eyebrow">Especialidades</div>
  <h1 class="hero-title">O que fazemos em campo</h1>
  <p class="hero-lead">Nosso escopo cobre todo o ciclo de manutenção, adequação e vistorias de infraestrutura de telecomunicações no Sul do país.</p>
</section>

<section style="display: flex; flex-direction: column; gap: 40px; padding: 40px 0; border-top: 1px solid var(--line-color);">
  
  <div style="display: grid; grid-template-columns: 1fr; gap: 20px; background-color: var(--bg-sec); border: 1px solid var(--line-color); border-radius: 18px; padding: 30px;">
    <h2 style="color: var(--color-orange-soft) !important; font-size: 22px; margin: 0 0 10px 0;">1. Vistoria Técnica e Elaboração de Relatórios (RFT)</h2>
    <p style="color: var(--color-muted); line-height: 1.6; margin: 0;">Antes de qualquer tomada de decisão, realizamos uma inspeção completa em campo. Isso inclui análise estrutural de torres (verticalidade, oxidação, parafusos), sistemas de aterramento e para-raios, quadros de energia, equipamentos e cabeamentos nos abrigos. O cliente recebe um Relatório Fotográfico Técnico (RFT) detalhado com todas as inconformidades e soluções recomendadas.</p>
  </div>

  <div style="display: grid; grid-template-columns: 1fr; gap: 20px; background-color: var(--bg-sec); border: 1px solid var(--line-color); border-radius: 18px; padding: 30px;">
    <h2 style="color: var(--color-orange-soft) !important; font-size: 22px; margin: 0 0 10px 0;">2. Instalações e Modernizações (Ativações de 5G)</h2>
    <p style="color: var(--color-muted); line-height: 1.6; margin: 0;">Executamos a troca e modernização de sistemas irradiantes, incluindo a substituição de antenas antigas por tecnologia 5G ativa, alinhamento de rádio enlaces, lançamento de cabos de alimentação (coaxiais e híbridos) e comissionamento técnico das estações para grandes operadoras (como Claro e Vivo).</p>
  </div>

  <div style="display: grid; grid-template-columns: 1fr; gap: 20px; background-color: var(--bg-sec); border: 1px solid var(--line-color); border-radius: 18px; padding: 30px;">
    <h2 style="color: var(--color-orange-soft) !important; font-size: 22px; margin: 0 0 10px 0;">3. Adequação Elétrica e Climatização de Shelters (BTS)</h2>
    <p style="color: var(--color-muted); line-height: 1.6; margin: 0;">Garantimos o correto funcionamento do ambiente interno onde ficam os computadores e roteadores de transmissão. Realizamos manutenção preventiva e corretiva em quadros de distribuição elétrica (QTA), ar condicionado industrial para shelters, e proteção física de geradores de energia.</p>
  </div>

  <div style="display: grid; grid-template-columns: 1fr; gap: 20px; background-color: var(--bg-sec); border: 1px solid var(--line-color); border-radius: 18px; padding: 30px;">
    <h2 style="color: var(--color-orange-soft) !important; font-size: 22px; margin: 0 0 10px 0;">4. Infraestrutura Civil e Lançamento de Fibra Óptica</h2>
    <p style="color: var(--color-muted); line-height: 1.6; margin: 0;">Construção e adequação de obras civis complementares essenciais para estações de telecom, como bacias de contenção de óleo para geradores (proteção ambiental) e suportação física de cabos em travessias de pontes e ferrovias. Além disso, fazemos escavações e abertura de valas para instalação e fusão de anéis ópticos terrestres.</p>
  </div>

</section>
<!-- /wp:html -->
```

---

### PÁGINA: SOBRE NÓS (Markup Gutenberg)
Cole o código abaixo em uma nova página chamada **Sobre Nós**.

```html
<!-- wp:html -->
<section style="padding: 40px 0;">
  <div class="hero-eyebrow">Quem Somos</div>
  <h1 class="hero-title">Operação ágil, foco regional e segurança absoluta</h1>
</section>

<section style="display: grid; grid-template-columns: 1fr; gap: 30px; padding: 40px 0; border-top: 1px solid var(--line-color); line-height: 1.7; color: var(--color-muted);">
  <p>A <strong>RSA Infralink</strong> nasceu com o propósito de resolver o gargalo de atendimento técnico de campo (field services) para empresas de telecomunicações no Sul do Brasil. Atuamos fortemente nos estados do <strong>Rio Grande do Sul</strong>, <strong>Santa Catarina</strong> e <strong>Paraná</strong>.</p>
  
  <p>Diferente de grandes corporações burocráticas, nosso modelo operacional é <strong>asset-light</strong>: possuímos uma equipe central enxuta altamente especializada em engenharia de requisitos e supervisão de campo, combinada com uma ampla rede credenciada de técnicos posicionados estrategicamente em diversas cidades da região Sul. Isso nos permite realizar mobilizações em tempo recorde (até 24 horas para chamados urgentes).</p>

  <div style="background-color: var(--bg-sec); border-left: 4px solid var(--color-orange); border-radius: 4px 12px 12px 4px; padding: 20px; margin: 15px 0;">
    <h3 style="margin: 0 0 10px 0; font-size: 18px;">Compromisso Inegociável com a Segurança</h3>
    <p style="margin: 0; font-size: 14.5px;">Todos os nossos profissionais e parceiros atuam em total conformidade com as normas regulamentadoras nacionais de segurança do trabalho em altura (<strong>NR-35</strong>) e segurança em instalações elétricas (<strong>NR-10</strong>), equipados com EPIs e EPCs certificados de última geração.</p>
  </div>

  <p>Nosso grande diferencial comercial é a <strong>transparência e a documentação completa</strong>: todo serviço executado pela RSA Infralink gera um Relatório Fotográfico Técnico (RFT) detalhado enviado imediatamente ao cliente, servindo como registro histórico confiável para auditorias e manutenções futuras.</p>
</section>
<!-- /wp:html -->
```

---

### PÁGINA: SEJA UM PARCEIRO (Markup Gutenberg)
Cole o código abaixo em uma nova página chamada **Seja um Parceiro**. Esta página conterá a estrutura do formulário de recrutamento que você conectará ao plugin de formulários (ex: WPForms ou Contact Form 7).

```html
<!-- wp:html -->
<section style="padding: 40px 0;">
  <div class="hero-eyebrow">Rede Operacional</div>
  <h1 class="hero-title">Trabalhe conosco na região Sul</h1>
  <p class="hero-lead">Se você é técnico autônomo especializado em telecomunicações B2B e reside no RS, SC ou PR, envie seus dados para nossa base de prestadores credenciados.</p>
</section>

<section style="padding: 40px 0; border-top: 1px solid var(--line-color);">
  <div style="max-width: 600px; background-color: var(--bg-sec); border: 1px solid var(--line-color); border-radius: 16px; padding: 30px;">
    <h2 style="font-size: 20px; margin: 0 0 20px 0; color: var(--color-orange-soft) !important;">Cadastro de Prestador Técnico</h2>
    
    <!-- NOTA: Substitua o shortcode abaixo pelo shortcode gerado pelo seu plugin de formulário (WPForms/Contact Form 7) -->
    <!-- Caso prefira, segue a estrutura dos campos recomendados para criar no plugin:
         1. Nome Completo (Texto)
         2. Telefone/WhatsApp (Telefone)
         3. E-mail (E-mail)
         4. Cidade e Estado de residência (Texto ou Select)
         5. Especialidades (Fibra Óptica, Trabalho em Altura, Elétrica BTS, Obra Civil)
         6. Possui Certificações NR-35/NR-10 ativas? (Select Sim/Não)
         7. Observações e Experiências (Área de Texto)
    -->
    
    <form action="#" method="post" style="display: flex; flex-direction: column; gap: 15px;">
      <div>
        <label style="display: block; margin-bottom: 6px; font-size: 13px; color: var(--color-muted);">Nome Completo</label>
        <input type="text" name="nome" placeholder="Digite seu nome completo" required>
      </div>
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
        <div>
          <label style="display: block; margin-bottom: 6px; font-size: 13px; color: var(--color-muted);">WhatsApp</label>
          <input type="tel" name="whatsapp" placeholder="(47) 99999-9999" required>
        </div>
        <div>
          <label style="display: block; margin-bottom: 6px; font-size: 13px; color: var(--color-muted);">E-mail</label>
          <input type="email" name="email" placeholder="nome@provedor.com" required>
        </div>
      </div>
      <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 15px;">
        <div>
          <label style="display: block; margin-bottom: 6px; font-size: 13px; color: var(--color-muted);">Cidade</label>
          <input type="text" name="cidade" placeholder="Ex: Chapecó" required>
        </div>
        <div>
          <label style="display: block; margin-bottom: 6px; font-size: 13px; color: var(--color-muted);">Estado</label>
          <select name="estado" required>
            <option value="SC">SC</option>
            <option value="RS">RS</option>
            <option value="PR">PR</option>
          </select>
        </div>
      </div>
      <div>
        <label style="display: block; margin-bottom: 6px; font-size: 13px; color: var(--color-muted);">Certificação NR-35 ativa?</label>
        <select name="nr35" required>
          <option value="sim">Sim, possuo certificação ativa</option>
          <option value="nao">Não possuo</option>
        </select>
      </div>
      <div>
        <label style="display: block; margin-bottom: 6px; font-size: 13px; color: var(--color-muted);">Breve resumo da sua experiência técnica</label>
        <textarea name="experiencia" rows="4" placeholder="Fale sobre os tipos de torres, antenas ou fusões de fibra que já realizou..."></textarea>
      </div>
      <div style="margin-top: 10px;">
        <input type="submit" value="Enviar Cadastro para Análise">
      </div>
    </form>
  </div>
</section>
<!-- /wp:html -->
```

---

### PÁGINA: PORTFÓLIO / CASOS (Markup Gutenberg com Filtros)
Cole o código abaixo em uma nova página chamada **Portfólio** (ou **Casos de Sucesso**). Certifique-se de que o slug dessa página nas configurações do WordPress seja `portfolio` ou `casos-de-sucesso` para que o JavaScript de filtros seja carregado dinamicamente (conforme programado no `functions.php`).

> [!IMPORTANT]
> - Para que as imagens carreguem corretamente, faça o upload das imagens otimizadas da pasta `C:\Users\Dubes\Desktop\RSA-INFRALINK\fotos-otimizadas/` para a Biblioteca de Mídia do WordPress.
> - Substitua os links das imagens `src="/wp-content/uploads/.../servico-X-01.webp"` abaixo pelas URLs reais das imagens geradas após carregá-las no WordPress.

```html
<!-- wp:html -->
<section style="padding: 40px 0;">
  <div class="hero-eyebrow">Em Campo</div>
  <h1 class="hero-title">Casos de Sucesso</h1>
  <p class="hero-lead">Confira o registro técnico fotográfico de alguns serviços que executamos recentemente na região Sul do Brasil.</p>
</section>

<!-- Barra de Filtros Combinada (Vanilla JS) -->
<section style="padding: 10px 0 30px 0;">
  <div style="font-family: var(--font-mono); font-size: 11px; color: var(--color-faint); margin-bottom: 8px; text-transform: uppercase;">Filtrar por Estado:</div>
  <div class="portfolio-filters">
    <button class="filter-btn active" data-filter-type="state" data-filter-value="all">Todos os Estados</button>
    <button class="filter-btn" data-filter-type="state" data-filter-value="rs">Rio Grande do Sul (RS)</button>
    <button class="filter-btn" data-filter-type="state" data-filter-value="sc">Santa Catarina (SC)</button>
    <button class="filter-btn" data-filter-type="state" data-filter-value="pr">Paraná (PR)</button>
  </div>

  <div style="font-family: var(--font-mono); font-size: 11px; color: var(--color-faint); margin-bottom: 8px; text-transform: uppercase; margin-top: 15px;">Filtrar por Categoria:</div>
  <div class="portfolio-filters">
    <button class="filter-btn active" data-filter-type="category" data-filter-value="all">Todas as Áreas</button>
    <button class="filter-btn" data-filter-type="category" data-filter-value="fibra">Fibra Óptica</button>
    <button class="filter-btn" data-filter-type="category" data-filter-value="equipamentos">Torres e Equipamentos</button>
    <button class="filter-btn" data-filter-type="category" data-filter-value="infraestrutura">Infraestrutura Civil/BTS</button>
  </div>
</section>

<!-- Grid de Cards do Portfólio -->
<section class="portfolio-grid-custom">

  <!-- CARD CASO 1 -->
  <div class="portfolio-card-custom" data-state="sc" data-category="fibra">
    <div class="card-media">
      <!-- Substitua a URL src abaixo pela URL da imagem carregada no WordPress (servico-1-01.webp) -->
      <img src="/wp-content/uploads/servico-1-01.webp" alt="Recuperação de fibra óptica sobre ferrovia">
      <span class="card-tag">Fibra Óptica</span>
      <span class="card-uf">SC</span>
    </div>
    <div class="card-body">
      <h3>Recuperação de Enlace Óptico em Trecho Ferroviário</h3>
      <p>Lançamento mecânico e fusão de fibra óptica ao longo de 8 km de domínio ferroviário na região da Serra Catarinense sob geografia adversa.</p>
    </div>
    <div class="card-footer">
      <span>Serra Catarinense - SC</span>
      <span>Postado em: Jun/2026</span>
    </div>
  </div>

  <!-- CARD CASO 2 -->
  <div class="portfolio-card-custom" data-state="rs" data-category="equipamentos">
    <div class="card-media">
      <!-- Substitua pela URL de servico-2-01.webp -->
      <img src="/wp-content/uploads/servico-2-01.webp" alt="Instalação de antenas 5G">
      <span class="card-tag">Torres e Antenas</span>
      <span class="card-uf">RS</span>
    </div>
    <div class="card-body">
      <h3>Troca e Ativação de Tecnologia de Transmissão 5G</h3>
      <p>Substituição e alimentação elétrica de antenas ativas de transmissão para rede móvel de grande operadora (Claro) na região de Passo Fundo - RS.</p>
    </div>
    <div class="card-footer">
      <span>Passo Fundo - RS</span>
      <span>Postado em: Jun/2026</span>
    </div>
  </div>

  <!-- CARD CASO 3 -->
  <div class="portfolio-card-custom" data-state="pr" data-category="infraestrutura">
    <div class="card-media">
      <!-- Substitua pela URL de servico-3-01.webp -->
      <img src="/wp-content/uploads/servico-3-01.webp" alt="Bacia de contenção para geradores">
      <span class="card-tag">Infraestrutura Civil</span>
      <span class="card-uf">PR</span>
    </div>
    <div class="card-body">
      <h3>Bacia de Contenção Ecológica para Geradores BTS</h3>
      <p>Obras civis e impermeabilização de tanques de contenção de óleo combustível de geradores de energia da operadora Vivo no Litoral Paranaense.</p>
    </div>
    <div class="card-footer">
      <span>Litoral Paranaense - PR</span>
      <span>Postado em: Jun/2026</span>
    </div>
  </div>

  <!-- CARD CASO 4 -->
  <div class="portfolio-card-custom" data-state="sc" data-category="infraestrutura">
    <div class="card-media">
      <!-- Substitua pela URL de servico-4-01.webp -->
      <img src="/wp-content/uploads/servico-4-01.webp" alt="Proteção de geradores em pontes">
      <span class="card-tag">Infraestrutura</span>
      <span class="card-uf">SC</span>
    </div>
    <div class="card-body">
      <h3>Blindagem Mecânica e Cabeamento Técnico em Pontes</h3>
      <p>Projeto de proteção física antivandalismo para geradores e suportes de cabeamento fixados ao longo de estruturas aéreas de pontes.</p>
    </div>
    <div class="card-footer">
      <span>Interior - SC</span>
      <span>Postado em: Jun/2026</span>
    </div>
  </div>

  <!-- CARD CASO 5 -->
  <div class="portfolio-card-custom" data-state="rs" data-category="equipamentos">
    <div class="card-media">
      <!-- Substitua pela URL de servico-5-01.webp -->
      <img src="/wp-content/uploads/servico-5-01.webp" alt="Vistoria técnica de infraestrutura">
      <span class="card-tag">Vistoria e RFT</span>
      <span class="card-uf">RS</span>
    </div>
    <div class="card-body">
      <h3>Vistoria Estrutural Técnica de Integridade</h3>
      <p>Inspeção completa de verticalidade, oxidação e estado de cablagens em estruturas de telecom com geração de laudo fotográfico RFT.</p>
    </div>
    <div class="card-footer">
      <span>Região Norte - RS</span>
      <span>Postado em: Jun/2026</span>
    </div>
  </div>

  <!-- CARD CASO 6 -->
  <div class="portfolio-card-custom" data-state="rs" data-category="infraestrutura">
    <div class="card-media">
      <!-- Substitua pela URL de servico-6-01.webp -->
      <img src="/wp-content/uploads/servico-6-01.webp" alt="Manutenção elétrica e climatização de abrigos">
      <span class="card-tag">Manutenção BTS</span>
      <span class="card-uf">RS</span>
    </div>
    <div class="card-body">
      <h3>Manutenção Elétrica e Climatização de Abrigos (Shelter)</h3>
      <p>Revisão de quadros elétricos de força, sistemas de backup e troca de componentes do sistema de ar condicionado de abrigos BTS.</p>
    </div>
    <div class="card-footer">
      <span>Passo Fundo - RS</span>
      <span>Postado em: Jun/2026</span>
    </div>
  </div>

  <!-- CARD CASO 7 -->
  <div class="portfolio-card-custom" data-state="pr" data-category="fibra">
    <div class="card-media">
      <!-- Substitua pela URL de servico-7-01.webp -->
      <img src="/wp-content/uploads/servico-7-01.webp" alt="Abertura de valas e lançamento de cabos">
      <span class="card-tag">Fibra Óptica</span>
      <span class="card-uf">PR</span>
    </div>
    <div class="card-body">
      <h3>Abertura de Valas e Lançamento de Rede Subterrânea</h3>
      <p>Escavação, envelopamento de dutos protetores e passagem de anel de fibra óptica subterrânea metropolitana.</p>
    </div>
    <div class="card-footer">
      <span>Interior - PR</span>
      <span>Postado em: Jun/2026</span>
    </div>
  </div>

</section>
<!-- /wp:html -->
```

---

## 4. Redação Refinada para os Posts Individuais de Portfólio

Para cada post individual que você criar, utilize a estrutura abaixo. Crie os posts e adicione a categoria **Casos**.

### CASO 1: Recuperação de Enlace Óptico em Trecho Ferroviário de Serra
- **Estado (UF)**: SC
- **Área**: Fibra Óptica
- **Copy**:
  - *Problema*: Um rompimento de fibra óptica na faixa de domínio de uma ferrovia localizada na Serra Catarinense paralisou as comunicações de dados de transporte. O local apresentava acesso geográfico altamente instável, mata fechada e trecho de serra.
  - *Solução*: A RSA Infralink mobilizou uma equipe experiente equipada com EPIs para trabalho remoto selvagem. Foi realizada a escavação manual de valas de proteção, passagem de sub-dutos, lançamento aéreo sob suportação reforçada em trechos onde não era possível escavar, e fusão de fibra de alta precisão.
  - *Resultado*: Restabelecimento do link óptico em tempo recorde de comissionamento. Toda a faixa de 8 km foi documentada fotocodificada e entregue no Relatório Fotográfico Técnico (RFT) ao cliente.

### CASO 2: Troca e Instalação de Antenas 5G em Passo Fundo (RS)
- **Estado (UF)**: RS
- **Área**: Torres e Equipamentos
- **Copy**:
  - *Problema*: Necessidade de modernização das estações rádio base (ERB) de telefonia móvel da operadora Claro para habilitar a rede de transmissão ativa 5G na cidade de Passo Fundo - RS.
  - *Solução*: Planejamento e montagem com equipe de 5 especialistas qualificados. A operação exigiu trabalho em altura (NR-35) e desconexão controlada do sistema antigo para a rápida ancoragem física e elétrica das novas antenas ativas 5G nos suportes da torre, além do lançamento de cabos de força blindados.
  - *Resultado*: Ativação limpa da portadora de sinal 5G sem intercorrências operacionais e 100% registrada com laudo visual das ancoragens de suportes técnicos.

### CASO 3: Bacias de Contenção de Óleo para Geradores no Litoral do Paraná
- **Estado (UF)**: PR
- **Área**: Infraestrutura Civil
- **Copy**:
  - *Problema*: Exigências regulatórias ambientais exigiam a adequação e impermeabilização da área dos geradores de backup das estações BTS da operadora Vivo no litoral do Paraná, mitigando riscos de contaminação por vazamento de diesel.
  - *Solução*: Envio de equipe com pedreiros e eletricistas para a execução de bacias civis de contenção. O serviço incluiu a concretagem de bases reforçadas, impermeabilização química contra agentes hidrocarbonetos, instalação de válvulas de drenagem de água e realinhamento elétrico do gerador.
  - *Resultado*: Estações totalmente adequadas à legislação de proteção ambiental, com bacias testadas por estanqueidade.

### CASO 4: Blindagem de Geradores e Suportes de Cabeamento em Pontes
- **Estado (UF)**: SC
- **Área**: Infraestrutura Civil
- **Copy**:
  - *Problema*: Trecho crítico de interconexão sobre ponte rodoviária sofria com riscos constantes de vandalismo em geradores e vibração mecânica excessiva nos cabos fixados sob a laje.
  - *Solução*: Fabricação e instalação de caixas metálicas de blindagem antivandalismo para os geradores, associadas a amortecedores de vibração. Adicionalmente, foi realizada a fixação de suportes mecânicos aéreos ao longo da extensão da ponte para canalização segura do cabeamento.
  - *Resultado*: Proteção física efetiva dos ativos da rede e redução a zero dos rompimentos causados por fadiga mecânica ou tentativas de roubo.

### CASO 5: Vistoria Técnica Preventiva de Integridade de Torres
- **Estado (UF)**: RS
- **Área**: Vistoria e RFT
- **Copy**:
  - *Problema*: Ausência de dados confiáveis sobre a integridade estrutural e segurança técnica de uma série de torres de transmissão no norte do RS, levantando suspeitas de desgaste precoce.
  - *Solução*: Execução de vistoria completa por técnicos em altura. Foi aferido o torque dos parafusos de sustentação, análise visual de oxidação em emendas, medição do sistema de para-raios (SPDA) e integridade dos abrigos BTS.
  - *Resultado*: Emissão imediata de Relatório Fotográfico Técnico (RFT) detalhado com o mapeamento e diagnóstico de urgência, permitindo o agendamento preventivo de reparos pontuais.

### CASO 6: Manutenção Preventiva e Climatização de Shelter BTS
- **Estado (UF)**: RS
- **Área**: Infraestrutura Civil
- **Copy**:
  - *Problema*: Superaquecimento frequente nos roteadores de transmissão de estação BTS em Passo Fundo devido a falhas operacionais recorrentes no sistema elétrico e de climatização.
  - *Solução*: Equipe eletrotécnica realizou a higienização completa e carga de gás no sistema de climatização, troca de contatores e disjuntores com desgaste no QTA, e calibração de sensores de alarme térmico.
  - *Resultado*: Temperatura operacional interna do shelter estabilizada na faixa ideal de conservação eletrônica, eliminando as paradas por proteção térmica.

### CASO 7: Lançamento de Infraestrutura de Dutos Subterrâneos
- **Estado (UF)**: PR
- **Área**: Fibra Óptica
- **Copy**:
  - *Problema*: Ampliação da malha de fibra óptica urbana necessitando de novas vias físicas de interligação subterrânea protegida contra ações climáticas e intervenções urbanas.
  - *Solução*: Execução mecânica de abertura de valas com largura e profundidade padronizadas, instalação de tubos PEAD envelopados em concreto nas áreas de tráfego pesado de veículos e passagem pneumática de cabos de fibra óptica com caixas de passagem seladas.
  - *Resultado*: Lançamento e proteção mecânica concluídos, com rede subterrânea ativada e devidamente mapeada geograficamente.
