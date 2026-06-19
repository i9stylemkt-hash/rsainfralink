# 📒 SÚMULA — FASE 5 · PROJETO DO SITE (PRD, DESIGN, ARQUITETURA)
### Conselho Consultivo Estratégico · Projeto RSA Infralink
**Transcrição detalhada das Etapas 1, 2 e 3 · Atualizado em 19/06/2026**

> Marca de trabalho: **RSA Infralink** (provisória; decisão final do Rafael). Documento canônico da Fase 5.

---

## 0. Contexto e decisões herdadas

- **Marca:** RSA Infralink (provisório). Identidade visual completa e aprovada na Fase 1: logo "Torre de Precisão" (4 cores × 3 layouts, todas vetorizadas em 19/06/2026 — pendência de fonte resolvida), paleta de 6 cores, sistema tipográfico (Space Grotesk / Manrope / JetBrains Mono).
- **Modelo de negócio:** asset-light — núcleo enxuto + rede de técnicos sob demanda. Segmentos-alvo: ISPs regionais → towercos → integradores.
- **Vendas:** funil em 3 estágios (Converter SLA → Expandir → Escalar). Portfólio mínimo viável = dossiê de serviço + one-pager + registro de capacidade.
- **Marketing:** WhatsApp Business e Google Meu Negócio como P0; zero paid media até mês 9+; orçamento R$200–500/mês; dossiês de serviço acumulando (meta 12 em 6 meses).
- **Domínios:**
  - `rsaemprendimentos.com.br` — already ativo, hospeda a Enciclopédia do Negócio (Fases 1–4, atualizada a cada fase concluída até a Fase 10). Decisão desta fase: **continua nesse papel permanentemente**.
  - `rsainfralink.com.br` — **já registrado e ativo**. Será o site comercial oficial (objeto desta fase).
- **Infraestrutura confirmada nesta fase:** hospedagem **Hostinger** já contratada (plano com cPanel/hPanel, WordPress 1-clique, MySQL disponível). Mediador já possui acesso operacional (login/FTP).
- **Logos vetorizadas:** nesta sessão, as 8 variantes de logo (horizontal/quadrado × azul/branco/laranja/preto) enviadas pelo Mediador tiveram o texto convertido de `<text>` (dependente de fonte) para `<path>` vetorial real, usando a fonte oficial Space Grotesk (peso 700) via fontTools. QA visual lado a lado confirmou fidelidade 1:1 ao original. Pendência da Fase 1 ("vetorização de fonte pendente") está **resolvida**.

---

## 1. ETAPA 1 — Teses

**Elenco:** CTO Architect (lead), Brand Chief, CMO Architect, PRD Architect.

*Justificativa do elenco:* CAIO Architect não convocado (IA aplicada ao site é mais natural na Fase 9). CIO Engineer não convocado (sem dados sensíveis de cliente ou compliance regulatório pesado — site institucional B2B simples).

- **CTO Architect:** tese inicial (pré-restrição Hostinger) avaliou três opções — HTML estático puro, estático + CMS headless leve, ou Next.js/Vercel completo. Recomendação inicial: estático + CMS leve, por equilibrar "zero código no dia a dia" com "zero manutenção". **Revisada após o Mediador informar hospedagem Hostinger já contratada**: a melhor prática passa a ser **WordPress nativo via Hostinger** (CMS completo, sem peça extra), resolvendo a mesma tensão de forma mais simples — usa o que já está pago.
- **Brand Chief:** o site deve herdar 1:1 o sistema visual já aprovado (paleta, tipografia, arquétipo Herói+Sábio) — não é onde se inventa nova identidade. Alerta de risco: temas WordPress prontos tendem a "diluir" a marca num visual genérico de site institucional.
- **CMO Architect:** arquitetura de informação deve servir diretamente ao funil de vendas (Fase 3) e aos canais de marketing (Fase 4) — não é vitrine genérica. Propõe 5 páginas: Home, Serviços, Portfólio/Casos, Sobre, Contato.
- **PRD Architect:** antes de qualquer design, o site precisa de PRD funcional enxuto — páginas, dados, requisitos não-funcionais — com atenção especial ao schema de dados do "dossiê de serviço" (Fase 4), que vira o conteúdo estrutural do Portfólio.

---

## 2. ETAPA 2 — Debate Cruzado

### 2.1 Restrição real introduzida pelo Mediador (durante a Etapa 1)

O Mediador informou, no meio do processo: (1) já possui hospedagem **Hostinger** contratada e quer usá-la; (2) quer **CMS simples sem editar código** e, simultaneamente, **HTML estático/zero manutenção** — tensão que o CTO precisou resolver; (3) quer uma **landing rápida hoje**, com o site completo evoluindo em paralelo.

**Resolução do CTO:** a contradição CMS-sem-código vs. estático-zero-manutenção se resolve de forma simples com Hostinger + WordPress (CMS de verdade, sem precisar de peça extra tipo Decap/Tina). Para "landing hoje + site completo em paralelo", duas abordagens foram avaliadas:

| Abordagem | Descrição | Trade-off |
|---|---|---|
| A — Landing estática hoje, troca depois | HTML/CSS puro sobe no domínio raiz hoje; WordPress construído em paralelo num subdomínio; troca de apontamento quando pronto | Mais rápido (horas); zero retrabalho de design se a landing reaproveitar os mesmos componentes visuais |
| B — Home do WordPress definitiva primeiro | Instala WordPress já no domínio raiz, publica só a Home | Sem nenhum retrabalho, mas leva 1–2 dias a mais para o primeiro ar |

**Decisão do Mediador: Abordagem A.** Quer algo no ar em horas.

### 2.2 Debate cruzado pleno (pós-restrição)

- **Brand Chief → CTO:** alerta que a escolha de WordPress não pode virar desculpa para tema genérico de page builder ("visual de corretor de imóveis"). Exige tema com CSS customizável total, preservando as variáveis de marca.
- **CMO Architect → Brand Chief:** reforça do ponto de vista técnico — temas pesados com muito plugin prejudicam Core Web Vitals, o que afeta tanto SEO orgânico (prioridade da Fase 4) quanto a experiência do público-alvo (gestores de ISP/towerco acessando via celular, possivelmente com conexão rural fraca).
- **CTO Architect → Brand + CMO:** recomendação refinada — tema **GeneratePress ou Astra** (leves, gratuitos, CSS customizável, sem "personalidade visual" própria que compita com a marca).
- **PRD Architect → CMO:** o schema do "dossiê de serviço" precisa ser decidido nesta fase para escolher entre Custom Post Type (mais robusto, exige plugin) vs. posts padrão + categoria (mais simples, zero plugin extra). Recomendação: **posts padrão + categoria "Portfólio"**, dado o teto de orçamento e o princípio de baixa manutenção.
- **Vision Chief → Todos:** lembrete estratégico — o debate técnico sobre o site completo não deve atrasar a entrega da landing de hoje, que tem valor de negócio imediato (substitui o domínio com erro de grafia).

### 2.3 Convergência

| Tema | Decisão convergente |
|---|---|
| Landing de hoje | HTML/CSS estático puro, sobe imediatamente no domínio raiz da Hostinger |
| Tema WordPress (site completo) | Leve, customizável via CSS (GeneratePress ou Astra) |
| Portfólio/Casos | Posts padrão do WordPress + categoria, sem plugin de Custom Post Type extra |
| Performance | Requisito de primeira classe — poucos plugins, otimizado para mobile/conexão fraca |
| Prioridade de execução | Landing hoje → WordPress em paralelo, sem pressa |

---

## 3. ETAPA 3 — Decisões do Mediador

| # | Pergunta | Decisão |
|---|---|---|
| 1 | Construtor de páginas do WordPress | **Código direto no tema** — sem Elementor; performance e limpeza priorizadas; edição futura mediada pelo Dubes via Claude |
| 2 | Arquitetura de páginas (CMO) | **Aprovada como proposta** — Home, Serviços, Portfólio/Casos, Sobre, Contato |
| 3 | Tom visual do site | **Signal/NOC escuro** — herdado 1:1 da Enciclopédia (contraria a recomendação inicial do Brand Chief de fundo claro; aceito porque o ganho de consistência de marca entre Enciclopédia e site supera o risco de legibilidade, mitigável com contraste WCAG AA e tipografia maior em mobile) |
| 4 | Local de instalação do WordPress durante construção | **Subdomínio** (`novo.rsainfralink.com.br`) — decisão técnica do CTO: evita migração de URLs no banco de dados que uma subpasta exigiria |
| 5 | Fotos reais de campo para a landing de hoje | **Ainda não enviadas** — Mediador vai enviar em seguida; landing é estruturada agora com placeholders e fica pronta para receber as fotos reais antes da publicação final |

**Nota de governança registrada nesta fase:** `rsaemprendimentos.com.br` segue sendo atualizado a cada fase concluída (5 a 10) como o ativo "Enciclopédia/processo" — decisão confirmada explicitamente pelo Mediador, mantendo a separação de propósito já estabelecida na Fase 4 entre o domínio de processo e o domínio comercial.

---

## 4. ENTREGÁVEIS DESTA FASE

1. **Landing page estática** (`index.html` autocontido) — pronta para upload imediato no domínio raiz de `rsainfralink.com.br` via Hostinger. Aguardando fotos reais do Mediador para substituição dos placeholders antes da publicação final.
2. **PRD do site completo** — documento de requisitos funcionais para a construção em WordPress (páginas, schema de dados do Portfólio, requisitos não-funcionais, especificação de tema).
3. **Logos vetorizadas** (10 arquivos SVG, texto convertido em path real) — entregue nesta sessão, resolve pendência da Fase 1.
4. **Enciclopédia atualizada** — nova seção "Fase 5 · Site" adicionada ao ativo web `Enciclopedia-RSA_Fases1-4.html` (torna-se `Fases1-5`), seguindo o mesmo sistema de abas e tema Signal/NOC.

---

## 5. Pendências antes do fechamento total da Fase 5

1. Mediador enviar fotos reais de serviços/torres para finalizar a landing.
2. Mediador fazer upload da landing estática no domínio raiz via hPanel/FTP da Hostinger.
3. Mediador instalar WordPress no subdomínio `novo.rsainfralink.com.br` (ou solicitar orientação passo a passo, se necessário).
4. Decisão futura (não bloqueante): GeneratePress vs. Astra como tema base — ambos pré-aprovados; escolha final pode ocorrer no início da implementação.
5. Confirmar nome de domínio final da marca (RSA Infralink segue provisório desde a Fase 1 — decisão de naming definitiva ainda pendente do Rafael).

➡️ Segue para a **Fase 6 — Geração de Copy e Imagens** (que also vai nutrir o conteúdo definitivo do site completo).

---

*Súmula viva — atualizada a cada etapa concluída.*
