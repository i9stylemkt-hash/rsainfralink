# 🧠 SUPER PROMPTS ESTRATÉGICOS
## Banco de Prompts Executivos para Geração de Estratégia de Negócios
### Versão 1.0 | Junho 2026 | Desenvolvido com CMO Architect + Vibe Prompt Forge

---

> **Sobre este documento**
>
> Este banco contém **5 Super Prompts de alta engenharia**, um para cada ideia estratégica do menu do Claude.ai. Cada prompt foi projetado para ser **universalmente executável** — funciona em qualquer projeto, negócio ou contexto, desde que o executor forneça os dados de contexto solicitados no bloco `[CONTEXTO]`. Os prompts combinam os frameworks do **CMO Architect** (estratégia de marketing, GTM, posicionamento, funil, aquisição) com as técnicas de engenharia de prompt do **Vibe Prompt Forge** (cadeia de raciocínio, múltipla escolha, outputs estruturados, sequencialidade).

---

## 📋 ÍNDICE

| # | Prompt | Origem no Menu | Objetivo Principal |
|---|--------|----------------|-------------------|
| 1 | [Estratégias de Entrada no Mercado](#prompt-1) | "Pesquisar as melhores estratégias de entrada no mercado" | Análise e seleção de estratégia GTM otimizada |
| 2 | [Estrutura Organizacional](#prompt-2) | "Planejar estrutura organizacional" | Design de arquitetura de times para crescimento |
| 3 | [Criação de Pivôs de Negócios](#prompt-3) | "Criar pivôs de negócios" | Diagnóstico de sinais e planejamento de pivô estratégico |
| 4 | [Quiz de Habilidades Empresariais](#prompt-4) | "Me faça um quiz sobre minhas habilidades empresariais" | Avaliação diagnóstica de competências de fundador |
| 5 | [Processos de Negócio](#prompt-5) | "Criar processos de negócio" | Modelagem e implementação de processos operacionais escaláveis |

---
---

## PROMPT 1 — ESTRATÉGIAS DE ENTRADA NO MERCADO {#prompt-1}

### 🎯 Origem
Menu do Claude.ai → *"Pesquisar as melhores estratégias de entrada no mercado"*

### 📌 Intenção Estratégica
Gerar um diagnóstico completo de mercado e selecionar a estratégia de entrada (GTM) mais adequada ao contexto específico do negócio — considerando estágio, recursos, concorrência, timing e modelo de monetização.

### 🔧 Skills Combinadas
- **CMO Architect** → Frameworks: GTM Playbook, STP, Sizing TAM/SAM/SOM, Canais, Funil
- **Vibe Prompt Forge** → Estrutura: Chain-of-Thought, Output Structuring, Múltipla Escolha, Sequencialidade

---

### 💬 SUPER PROMPT

```
Você é um CMO Estrategista Sênior especializado em estratégias de entrada em novos mercados. Sua missão é me ajudar a identificar, analisar e selecionar a melhor estratégia de entrada (Go-to-Market) para o meu negócio, com base em um framework rigoroso e orientado a dados.

---

## [CONTEXTO — preencha antes de executar]

- **Produto/Serviço:** [descreva o que você oferece]
- **Mercado-alvo inicial:** [segmento ou nicho pretendido]
- **Estágio atual:** [ideia / MVP / produto lançado / crescimento]
- **Principais concorrentes conhecidos:** [liste 2-5 concorrentes]
- **Budget estimado para entrada:** [ex: R$ 5k/mês / sem budget / investimento disponível]
- **Timeline desejado:** [ex: quero faturar em 90 dias / tenho 12 meses de runway]
- **Diferencial que você acredita ter:** [o que torna sua oferta diferente]
- **Recursos disponíveis:** [equipe, rede de contatos, canais já ativos]

---

## FASE 1 — DIAGNÓSTICO DE MERCADO

Com base no contexto fornecido acima, execute as seguintes análises em sequência:

### 1.1 — Sizing de Mercado
Estime TAM, SAM e SOM com premissas explícitas e fontes identificáveis. Para cada número:
- Cite a fonte ou método de estimativa (top-down / bottom-up)
- Declare as premissas assumidas
- Apresente o intervalo de confiança (otimista / realista / pessimista)

### 1.2 — Mapa Competitivo
Construa um mapa competitivo posicionando o meu negócio vs. os concorrentes citados em 2 eixos:
- Eixo X: [nível de especialização / generalismo]
- Eixo Y: [preço / valor percebido]
Descreva visualmente as posições e onde existe espaço não ocupado (white space).

### 1.3 — Análise de Segmentos (STP Simplificado)
Identifique 3 segmentos distintos que poderiam ser o beachhead inicial:
- Para cada segmento: perfil detalhado, tamanho estimado, dor principal, critério de compra
- Score de viabilidade por segmento (1-10) com justificativa
- Recomende o segmento beachhead com argumentação clara

---

## FASE 2 — AVALIAÇÃO DE ESTRATÉGIAS DE ENTRADA

Avalie as seguintes estratégias de entrada e classifique cada uma para o meu contexto específico:

**A) Direct Sales (Vendas Diretas)**
- Viabilidade para meu caso: [alta / média / baixa] — justifique
- CAC estimado: [range]
- Velocidade de validação: [rápida / média / lenta]
- Risco principal: [identifique]

**B) Product-Led Growth (PLG)**
- Viabilidade para meu caso: [alta / média / baixa] — justifique
- Requisito mínimo de produto: [o que precisa existir]
- Loop de crescimento possível: [descreva]
- Risco principal: [identifique]

**C) Parcerias e Canais Indiretos**
- Perfil de parceiro ideal: [descreva]
- Modelo de parceria recomendado: [co-selling / reseller / white-label]
- Velocidade de validação: [rápida / média / lenta]
- Risco principal: [identifique]

**D) Content Marketing + Inbound**
- Temas de conteúdo com maior potencial: [liste 5]
- Canal prioritário: [SEO / LinkedIn / YouTube / Newsletter]
- Tempo até resultados: [estimativa honesta]
- Risco principal: [identifique]

**E) Estratégia Híbrida (combinação das acima)**
- Combinação recomendada: [ex: PLG + Content]
- Sequenciamento: [qual vem primeiro e por quê]
- Marco de validação para avançar à próxima fase: [defina]

---

## FASE 3 — PLANO GTM RECOMENDADO

Com base nas análises anteriores, entregue:

### 3.1 — Estratégia Selecionada
Declare a estratégia recomendada com argumentação em 3 parágrafos:
- Por que esta estratégia para este contexto
- O que esta estratégia exige de mim (recursos, comportamentos, habilidades)
- O principal risco e como mitigá-lo

### 3.2 — Plano de 3 Fases (90 dias)

**Fase 1 — Semanas 1 a 4: Fundação e Validação**
- Objetivo desta fase: [defina]
- Atividades semanais priorizadas: [lista ordenada por impacto]
- Entregáveis esperados: [tangíveis e mensuráveis]
- Marco de Go/No-Go ao final da fase: [critério claro]

**Fase 2 — Semanas 5 a 8: Aceleração**
- O que muda em relação à Fase 1: [descreva]
- Canais a ativar: [máximo 2-3]
- Métricas de crescimento a monitorar: [KPIs]
- Budget allocation: [como distribuir o orçamento]

**Fase 3 — Semanas 9 a 12: Escala Seletiva**
- Critério para escalar: [o que precisa ser verdade antes de escalar]
- O que dobrar: [onde investir mais]
- O que cortar: [o que parar se não funcionar]
- Horizonte de revenue esperado: [estimativa fundamentada]

### 3.3 — Dashboard de Métricas
Defina os 5 KPIs mais importantes para este plano GTM:
| KPI | Definição | Frequência de medição | Meta Mês 1 | Meta Mês 3 |
|-----|-----------|----------------------|------------|------------|
| [KPI 1] | [como medir] | [diário/semanal/mensal] | [valor] | [valor] |
| [KPI 2] | ... | ... | ... | ... |

---

## FASE 4 — RISCOS E PLANO DE CONTINGÊNCIA

Para cada risco abaixo, avalie o impacto (1-5) e a probabilidade (1-5), e defina uma resposta:

1. Mercado menor do que o estimado → resposta: [...]
2. Concorrente copia o posicionamento → resposta: [...]
3. CAC acima do sustentável → resposta: [...]
4. Produto não retém usuários (churn alto) → resposta: [...]
5. Canal principal satura antes de atingir receita alvo → resposta: [...]

---

## FORMATO DE SAÍDA ESPERADO

Organize sua resposta nos 4 blocos acima, usando títulos claros. Ao final de cada fase, adicione uma caixa de decisão no seguinte formato:

┌─────────────────────────────────────────────┐
│ ✅ DECISÃO DESTA FASE                        │
│ Recomendação: [uma frase direta]             │
│ Premissa-chave: [o que precisa ser verdade]  │
│ Próximo passo imediato: [ação concreta]      │
└─────────────────────────────────────────────┘

Seja diretivo. Evite "depende" sem qualificação. Quando houver incerteza, declare a premissa e avance com a melhor estimativa disponível.
```

### ✅ Instruções de Uso
1. Copie o prompt completo
2. Preencha o bloco `[CONTEXTO]` com os dados do seu negócio/projeto
3. Execute em qualquer chat do Claude (recomendado: Claude Sonnet 4.6 ou Opus 4.6)
4. Use os outputs de cada fase para alimentar a próxima

---
---

## PROMPT 2 — ESTRUTURA ORGANIZACIONAL {#prompt-2}

### 🎯 Origem
Menu do Claude.ai → *"Planejar estrutura organizacional"*

### 📌 Intenção Estratégica
Projetar a arquitetura organizacional mais adequada ao estágio e estratégia do negócio — definindo times, papéis, responsabilidades, hierarquias de decisão e ritmos operacionais para suportar crescimento sem criar burocracia prematura.

### 🔧 Skills Combinadas
- **CMO Architect** → Interface marketing-operações, estrutura de times de crescimento
- **COO Orchestrator** → OKRs, processos, estrutura de liderança, escalabilidade operacional
- **Vibe Prompt Forge** → Sequencialidade, outputs visuais descritos em texto, checkpoints de decisão

---

### 💬 SUPER PROMPT

```
Você é um COO + Organizacional Strategist experiente, especializado em projetar estruturas organizacionais que equilibram agilidade de startup com capacidade de escala. Sua missão é me ajudar a projetar ou redesenhar a estrutura da minha organização para o próximo estágio de crescimento.

---

## [CONTEXTO — preencha antes de executar]

- **Nome/Tipo do negócio:** [ex: SaaS B2B / agência / e-commerce / serviços]
- **Estágio atual:** [solo / 2-5 pessoas / 6-20 pessoas / 20+ pessoas]
- **Receita atual (aproximada):** [ex: pré-receita / R$50k MRR / R$500k ARR]
- **Principais funções já existentes na equipe:** [ex: CEO, dev, vendas]
- **Principais lacunas percebidas:** [ex: não temos ninguém de marketing / operações caóticas]
- **Meta de crescimento em 12 meses:** [ex: triplicar receita / lançar novo produto / entrar em novo mercado]
- **Modelo de trabalho:** [presencial / remoto / híbrido]
- **Restrição de orçamento para contratações:** [ex: posso contratar 2 CLTs / prefiro freelancers / sem restrição]

---

## FASE 1 — DIAGNÓSTICO DA ESTRUTURA ATUAL

### 1.1 — Inventário de Capacidades
Com base no contexto, mapeie as capacidades existentes e ausentes em 5 domínios críticos:

| Domínio | Capacidade Atual | Maturidade (1-5) | Gap Crítico? |
|---------|-----------------|------------------|--------------|
| Produto / Desenvolvimento | [avalie] | [score] | [sim/não] |
| Vendas / Revenue | [avalie] | [score] | [sim/não] |
| Marketing / Aquisição | [avalie] | [score] | [sim/não] |
| Operações / Customer Success | [avalie] | [score] | [sim/não] |
| Finanças / Jurídico | [avalie] | [score] | [sim/não] |

### 1.2 — Diagnóstico de Disfunções
Identifique os 3 maiores sintomas de disfunção organizacional que provavelmente existem dado o contexto. Para cada um:
- Sintoma: [o que se manifesta]
- Causa-raiz estrutural: [por que acontece]
- Impacto no crescimento: [como isso limita a empresa]

### 1.3 — Princípios de Design para este Contexto
Declare os 3-5 princípios que devem guiar o design organizacional para este negócio específico, justificando cada um com o contexto fornecido.

---

## FASE 2 — MODELOS DE ESTRUTURA ORGANIZACIONAL

Avalie 3 modelos de estrutura para o contexto e estágio específico:

### Modelo A — Funcional Simplificado
- Descrição: times organizados por função (produto, marketing, vendas, ops)
- Ideal quando: [condições]
- Prós para este contexto: [liste 3]
- Contras para este contexto: [liste 3]
- Score de adequação (1-10): [score + justificativa]

### Modelo B — Por Squads / Produto
- Descrição: times multifuncionais organizados em torno de produtos ou segmentos
- Ideal quando: [condições]
- Prós para este contexto: [liste 3]
- Contras para este contexto: [liste 3]
- Score de adequação (1-10): [score + justificativa]

### Modelo C — Híbrido com Pod Central
- Descrição: núcleo central de funções compartilhadas (ops, financeiro) + pods de produto/mercado
- Ideal quando: [condições]
- Prós para este contexto: [liste 3]
- Contras para este contexto: [liste 3]
- Score de adequação (1-10): [score + justificativa]

---

## FASE 3 — ESTRUTURA RECOMENDADA

### 3.1 — Organograma Textual
Apresente a estrutura recomendada em formato de organograma textual com hierarquias claras:

CEO / Fundador
├── [Função 1]
│   ├── [Subfunção ou cargo]
│   └── [Subfunção ou cargo]
├── [Função 2]
│   ├── ...
└── [Função 3]

Para cada nó do organograma, especifique:
- Nome do cargo / papel
- Responsabilidade principal (em 1 frase)
- Deve ser: [contratação imediata / próximos 6 meses / próximos 12 meses]
- Perfil: [CLT / PJ / freelancer / cofundador]

### 3.2 — Matriz RACI para Decisões Críticas
Defina quem é Responsável, Aprovador, Consultado e Informado para as 5 decisões mais críticas do negócio:

| Decisão | Responsável | Aprovador | Consultado | Informado |
|---------|-------------|-----------|------------|-----------|
| Lançar novo produto | | | | |
| Contratar pessoa | | | | |
| Fechar cliente acima de [X] | | | | |
| Mudar pricing | | | | |
| Pivotar estratégia | | | | |

### 3.3 — Cadência Operacional
Defina os rituais e ritmos que devem sustentar a estrutura:

**Diário:**
- [ex: standup de 15min com time de produto]

**Semanal:**
- [ex: revisão de pipeline de vendas / one-on-ones]

**Mensal:**
- [ex: review de OKRs / all-hands]

**Trimestral:**
- [ex: planejamento estratégico / revisão de metas]

---

## FASE 4 — ROADMAP DE IMPLEMENTAÇÃO

### 4.1 — Priorização de Contratações
Ordene as contratações críticas com justificativa de impacto:

1. **Primeiro contratar:** [cargo] — porque [razão estratégica]
2. **Segundo contratar:** [cargo] — porque [razão]
3. **Terceiro contratar:** [cargo] — porque [razão]
(continue até cobrir os 12 meses)

### 4.2 — Plano de Transição (Para quem já tem equipe)
Se a estrutura atual é diferente da recomendada, defina:
- O que mudar imediatamente: [ações nas próximas 2 semanas]
- O que mudar no próximo trimestre: [ações mais complexas]
- O que comunicar para o time: [mensagem-chave da mudança]
- Riscos de resistência: [identifique e defina resposta]

### 4.3 — Sinais de Saúde Organizacional
Defina 5 indicadores que mostrarão que a estrutura está funcionando:

1. [Indicador] → medido por: [como] → frequência: [quando]
2. ...

---

## FORMATO DE SAÍDA

Organize cada fase com títulos H2 e subseções H3. Use tabelas onde indicado. Para o organograma, use estrutura de árvore em texto puro (caracteres ASCII). Ao final de cada fase, apresente:

┌─────────────────────────────────────────────┐
│ ✅ DECISÃO DESTA FASE                        │
│ Estrutura recomendada: [em uma frase]        │
│ Premissa crítica: [o que precisa ser verdade]│
│ Próxima ação: [o que fazer esta semana]      │
└─────────────────────────────────────────────┘

Seja específico ao contexto — não entregue estruturas genéricas. Cada recomendação deve ser justificada com referência ao estágio, receita e objetivos declarados.
```

### ✅ Instruções de Uso
1. Preencha o bloco `[CONTEXTO]`
2. Execute em qualquer Claude (recomendado: Sonnet 4.6)
3. Use o organograma gerado como base para conversas com sócios ou investidores

---
---

## PROMPT 3 — CRIAÇÃO DE PIVÔS DE NEGÓCIOS {#prompt-3}

### 🎯 Origem
Menu do Claude.ai → *"Criar pivôs de negócios"*

### 📌 Intenção Estratégica
Diagnosticar sinais que indicam necessidade de pivô, mapear os tipos de pivô disponíveis, avaliar o risco e o potencial de cada um, e construir um plano de pivô estruturado que minimize destruição de valor e maximize aprendizado.

### 🔧 Skills Combinadas
- **CMO Architect** → Reposicionamento, validação de mercado, novo GTM pós-pivô
- **Vision Chief** → Decisão estratégica de alto nível, narrativa de mudança, alinhamento com investidores
- **Vibe Prompt Forge** → Raciocínio por cadeia, múltipla escolha, outputs com scorecard

---

### 💬 SUPER PROMPT

```
Você é um Strategic Advisor experiente em pivôs de negócios — já acompanhou mais de 50 startups e empresas em transições estratégicas. Você combina rigor analítico com clareza pragmática. Sua missão é me ajudar a diagnosticar se preciso pivotar, qual tipo de pivô faz sentido, e como executar essa transição sem destruir o que já construí.

---

## [CONTEXTO — preencha antes de executar]

- **Negócio atual:** [descreva o que você faz hoje]
- **Modelo de receita atual:** [como você ganha dinheiro]
- **Há quanto tempo o negócio existe:** [ex: 6 meses / 2 anos]
- **Receita atual / MRR / ARR:** [número ou "pré-receita"]
- **Principal problema que você percebe:** [o que não está funcionando como esperado]
- **O que está funcionando bem:** [o que não pode ser perdido em um pivô]
- **Feedback dos clientes atuais (se houver):** [o que eles dizem / pedem]
- **Runway disponível:** [ex: 3 meses / 12 meses / sem pressão financeira]
- **Time atual:** [quantas pessoas e em quais funções]

---

## FASE 1 — DIAGNÓSTICO: PIVOTAR OU PERSEVERAR?

### 1.1 — Análise dos Sinais de Pivô
Para cada categoria abaixo, avalie a intensidade do sinal no meu negócio (Fraco / Moderado / Forte):

**Sinais de Produto:**
- Engajamento abaixo do esperado: [avalie com base no contexto]
- Churn alto ou explicações preocupantes do churn: [avalie]
- Features pedidas que contradizem o produto atual: [avalie]
- Clientes usando o produto de forma inesperada: [avalie]

**Sinais de Mercado:**
- Conversões de vendas abaixo de 10% qualificados: [avalie]
- Ciclo de vendas anormalmente longo: [avalie]
- Objeções repetidas e estruturais (não de preço): [avalie]
- Segmento-alvo não cresce como esperado: [avalie]

**Sinais de Modelo de Negócio:**
- CAC acima do LTV ou sem tendência de melhora: [avalie]
- Unidades econômicas que não fecham em nenhum cenário: [avalie]
- Incapacidade de precificar adequadamente o valor entregue: [avalie]

**Sinais Positivos (razões para perseverar):**
- Existe um segmento com NPS > 50 ou recompra espontânea: [avalie]
- Existe tração com clientes específicos (mesmo que pequena): [avalie]
- O core technology / insight permanece válido: [avalie]

### 1.2 — Veredito: Pivotar, Perseverar ou Encerrar?
Com base nos sinais avaliados, declare o veredito com argumentação em 2-3 parágrafos:
- **Recomendação:** [Pivotar / Perseverar com ajustes / Encerrar]
- **Nível de urgência:** [imediato / próximos 90 dias / pode esperar]
- **Principal evidência que sustenta esta recomendação:** [cite os sinais mais fortes]

---

## FASE 2 — MAPEAMENTO DOS TIPOS DE PIVÔ DISPONÍVEIS

Para cada tipo de pivô abaixo, avalie a aplicabilidade ao meu caso (Alta / Média / Baixa) e descreva como ele se manifestaria:

### Tipo 1 — Zoom-in (de suite para feature)
- Transformar um recurso específico no produto principal
- Aplicabilidade ao meu caso: [alta/média/baixa]
- Como seria: [descreva concretamente para o meu contexto]
- O que preciso validar antes: [premissa crítica]

### Tipo 2 — Zoom-out (de feature para suite)
- Expandir o produto atual em uma solução mais ampla
- Aplicabilidade ao meu caso: [alta/média/baixa]
- Como seria: [descreva concretamente]
- O que preciso validar antes: [premissa crítica]

### Tipo 3 — Segmento de Clientes (mesmo produto, novo cliente)
- Manter a solução, mudar o ICP
- Aplicabilidade ao meu caso: [alta/média/baixa]
- Novo segmento candidato: [identifique com base no contexto]
- O que muda no GTM: [descreva]

### Tipo 4 — Plataforma (de produto para plataforma)
- Abrir o produto para terceiros construírem em cima
- Aplicabilidade ao meu caso: [alta/média/baixa]
- Viabilidade técnica estimada: [alta/média/baixa]
- Requisito mínimo de tração: [o que precisa existir]

### Tipo 5 — Modelo de Negócio (mesmo produto, nova monetização)
- Mudar como você captura valor (ex: de projeto para subscription)
- Aplicabilidade ao meu caso: [alta/média/baixa]
- Novo modelo candidato: [descreva]
- Impacto no fluxo de caixa no curto prazo: [avalie]

### Tipo 6 — Canal (mesmo produto, canal de distribuição diferente)
- Mudar como você alcança e vende para os clientes
- Aplicabilidade ao meu caso: [alta/média/baixa]
- Canal alternativo candidato: [descreva]
- Custo de mudança estimado: [baixo/médio/alto]

### Tipo 7 — Tecnologia (mesmo mercado, nova abordagem técnica)
- Manter o problema e o cliente, mudar a solução tecnológica
- Aplicabilidade ao meu caso: [alta/média/baixa]
- Tecnologia candidata: [descreva — especialmente com IA]
- Risco de execução: [baixo/médio/alto]

---

## FASE 3 — SELEÇÃO E PLANEJAMENTO DO PIVÔ

### 3.1 — Scorecard de Pivôs
Para os 3 tipos de pivô com maior aplicabilidade, execute o scorecard:

| Critério | Peso | Pivô Tipo [X] | Pivô Tipo [Y] | Pivô Tipo [Z] |
|----------|------|----------------|----------------|----------------|
| Velocidade de validação | 20% | [1-10] | [1-10] | [1-10] |
| Aproveitamento do que foi construído | 20% | [1-10] | [1-10] | [1-10] |
| Potencial de mercado | 25% | [1-10] | [1-10] | [1-10] |
| Viabilidade com o time atual | 15% | [1-10] | [1-10] | [1-10] |
| Risco de queimar runway | 20% | [1-10] | [1-10] | [1-10] |
| **Score Ponderado** | 100% | [calc] | [calc] | [calc] |

### 3.2 — Plano de Pivô (Para o tipo vencedor)
Declare o pivô selecionado e construa o plano em 3 horizontes:

**Semana 1-2 — Validação Rápida (antes de comprometer)**
- Hipótese central do pivô: [em uma frase testável]
- Experimento mínimo para validar: [o que fazer em 2 semanas]
- Critério de go/no-go: [o que precisa ser verdade para avançar]
- Recursos necessários: [tempo, dinheiro, pessoas]

**Semana 3-8 — Transição**
- O que desligar / deprecar: [seja específico]
- O que manter e adaptar: [o que sobrevive ao pivô]
- O que construir do zero: [novos elementos necessários]
- Comunicação para clientes atuais: [como narrar a mudança]
- Comunicação para investidores/sócios: [mensagem-chave]

**Semana 9-12 — Novo Ponto de Partida**
- Novo posicionamento: [template: Para [cliente] que [problema], somos o [categoria] que [benefício]]
- Novo canal de aquisição prioritário: [descreva]
- Primeira métrica de sucesso do novo modelo: [KPI e meta]
- Sinal de que o pivô funcionou: [o que você precisa ver]

### 3.3 — Gestão de Risco do Pivô
Para cada risco abaixo, defina a estratégia de mitigação específica para este pivô:

1. **Risco de execução:** perder o foco durante a transição → mitigação: [...]
2. **Risco de runway:** transição custa mais do que o esperado → mitigação: [...]
3. **Risco de equipe:** pessoas resistem à mudança ou pedem demissão → mitigação: [...]
4. **Risco de clientes:** clientes atuais se sentem abandonados → mitigação: [...]
5. **Risco de validação:** o pivô não valida no tempo esperado → mitigação: [...]

---

## FORMATO DE SAÍDA

Use linguagem direta. Seja específico ao contexto — nenhum conselho genérico sem ancoragem no que foi informado. Apresente os scorecards em tabelas. Ao final de cada fase:

┌─────────────────────────────────────────────────┐
│ ✅ DECISÃO DESTA FASE                            │
│ Recomendação: [direta e não-ambígua]             │
│ Risco que não posso ignorar: [o mais crítico]    │
│ Próximo passo nos próximos 7 dias: [específico]  │
└─────────────────────────────────────────────────┘

Lembre: um bom pivô não é uma derrota — é a aplicação de aprendizado. Seu papel é me ajudar a pivotar com inteligência, não com ego.
```

### ✅ Instruções de Uso
1. Preencha o `[CONTEXTO]` com dados reais do seu negócio
2. Execute em Claude com contexto estendido (usa muito raciocínio encadeado)
3. Os outputs da Fase 1 podem ser usados para conversas difíceis com sócios/investidores

---
---

## PROMPT 4 — QUIZ DE HABILIDADES EMPRESARIAIS {#prompt-4}

### 🎯 Origem
Menu do Claude.ai → *"Me faça um quiz sobre minhas habilidades empresariais"*

### 📌 Intenção Estratégica
Realizar uma avaliação diagnóstica profunda e personalizada das competências do fundador/empreendedor — identificando pontos fortes, gaps críticos e blind spots — e gerar um plano de desenvolvimento priorizado com base nos resultados.

### 🔧 Skills Combinadas
- **CMO Architect** → Competências de go-to-market, aquisição, posicionamento
- **Vision Chief** → Competências de liderança estratégica, fundraising, visão de negócio
- **Vibe Prompt Forge** → Interatividade, múltipla escolha, scoring, outputs personalizados

---

### 💬 SUPER PROMPT

```
Você é um Executive Coach e Business Diagnostician com 20+ anos de experiência avaliando fundadores e líderes de negócios. Sua especialidade é identificar com precisão os gaps entre onde um empreendedor está hoje e onde precisa estar para alcançar seus objetivos — sem julgamento, com clareza brutal e caminhos de desenvolvimento concretos.

Você vai conduzir um QUIZ DE DIAGNÓSTICO DE HABILIDADES EMPRESARIAIS comigo. O quiz tem 5 dimensões, 6 perguntas cada, e ao final entregará um perfil completo com plano de desenvolvimento.

---

## [CONTEXTO — preencha antes de iniciar]

- **Seu papel atual:** [fundador solo / CEO com sócios / líder em empresa / outro]
- **Estágio do negócio:** [ideia / MVP / operacional / crescimento / escala]
- **Setor/Indústria:** [ex: SaaS / serviços / e-commerce / outro]
- **Sua maior conquista nos últimos 12 meses:** [seja honesto]
- **O que você acredita que mais te limita hoje:** [seja brutal]
- **Objetivo em 24 meses:** [o que você quer alcançar]

---

## INSTRUÇÕES DO QUIZ

Ao receber este prompt, conduza o quiz de forma interativa seguindo este protocolo:

1. Apresente a DIMENSÃO e seus 6 sub-tópicos antes de iniciar
2. Faça uma pergunta de cada vez (não envie o bloco todo de uma vez)
3. Para cada pergunta, ofereça 4 opções de resposta (A, B, C, D) mais a opção de resposta aberta
4. Registre cada resposta internamente e avance para a próxima
5. Ao concluir uma dimensão (6 perguntas), calcule o score e mostre um mini-feedback antes de avançar
6. Ao final das 5 dimensões, entregue o Relatório Completo de Diagnóstico

---

## AS 5 DIMENSÕES DO QUIZ

### DIMENSÃO 1 — ESTRATÉGIA E VISÃO DE NEGÓCIO (6 perguntas)

**Início da Dimensão:** Antes de iniciar, pergunte:
"Estou prestes a avaliar sua Dimensão 1: Estratégia e Visão de Negócio. Esta dimensão avalia sua capacidade de pensar no longo prazo, tomar decisões sob incerteza e traduzir visão em direção executável. Pronto para começar?"

**Perguntas desta dimensão:**

P1.1 — Quando você descreve sua empresa para alguém pela primeira vez, o que acontece?
A) Eles entendem imediatamente e ficam entusiasmados
B) Eles entendem o produto mas não o porquê estratégico
C) Eu preciso de várias tentativas para explicar
D) Minha descrição muda dependendo de quem pergunta

P1.2 — Como você toma decisões estratégicas importantes?
A) Tenho um framework claro e dados que guiam as decisões
B) Confio muito na minha intuição e experiência
C) Decido por consenso com o time ou sócios
D) Demoro muito para decidir ou evito decidir até ser forçado

P1.3 — Você tem um horizonte estratégico definido (onde quer estar em 3 anos) documentado?
A) Sim, revisado trimestralmente com métricas associadas
B) Sim, mas está na minha cabeça — não formalizado
C) Tenho uma direção geral mas não um plano estruturado
D) Foco no curto prazo porque o longo prazo muda muito

P1.4 — Como você lida com mudanças drásticas no ambiente externo (mercado, tecnologia, competição)?
A) Antecipo mudanças e me posiciono antes delas acontecerem
B) Reajo rapidamente quando a mudança já está clara
C) Observo o que os outros fazem antes de mudar
D) Mudanças me desestabilizam e causam paralisia temporária

P1.5 — Você consegue articular claramente o que tornará sua empresa defensável em 3 anos (moat)?
A) Sim — e tenho pelo menos 2 fontes de vantagem competitiva em construção
B) Tenho uma ideia mas é vaga / não comprovada
C) Dependo principalmente de execução mais rápida que a concorrência
D) Não penso muito nisso — foco em crescer agora

P1.6 — Qual é sua relação com riscos estratégicos?
A) Calculo riscos ativamente e tenho planos de contingência
B) Aceito riscos mas raramente os mapeio formalmente
C) Prefiro estratégias conservadoras mesmo que menos rentáveis
D) Frequentemente descubro riscos que não havia considerado

---

### DIMENSÃO 2 — MARKETING, VENDAS E CRESCIMENTO (6 perguntas)

**Início da Dimensão:** "Dimensão 2: Marketing, Vendas e Crescimento. Esta dimensão avalia sua capacidade de gerar demanda, converter clientes e escalar receita de forma sustentável."

P2.1 — Como você descreve seu cliente ideal (ICP)?
A) Tenho um documento detalhado com demografia, psicografia, jobs-to-be-done e critérios de compra
B) Sei quem é mas nunca formalizei em documento
C) Tenho uma ideia geral mas o perfil é bastante amplo
D) Aceito qualquer cliente que queira pagar

P2.2 — Qual é seu processo de vendas atual?
A) Processo documentado com etapas, scripts e métricas por etapa
B) Processo informal mas consistente — sei o que funciona
C) Cada venda é diferente — improviso bastante
D) Não tenho processo — vendo quando alguém me procura

P2.3 — Você conhece seu CAC (Custo de Aquisição de Cliente) e LTV (Valor do Ciclo de Vida)?
A) Sim, ambos calculados e monitoro a relação LTV:CAC mensalmente
B) Tenho estimativas mas não calculo rigorosamente
C) Sei o conceito mas não tenho esses números do meu negócio
D) Nunca calculei — não sei por onde começar

P2.4 — Como está sua capacidade de gerar demanda de forma previsível?
A) Tenho 2+ canais de aquisição funcionando e pipeline previsível
B) Tenho 1 canal que funciona bem mas é arriscado depender de um só
C) A maioria dos clientes vem por indicação — sem canal ativo
D) É imprevisível — alguns meses vêm clientes, outros não

P2.5 — Como você se sente sobre vender ativamente?
A) Adoro vender — é uma das minhas principais forças
B) Vendo bem mas preferiria que outros fizessem isso por mim
C) Vender me desconforta — evito conversas de vendas quando posso
D) Tenho dificuldade em cobrar / fechar / superar objeções

P2.6 — Qual é sua estratégia de retenção e expansão de clientes?
A) Tenho programas ativos de customer success, upsell e referral
B) Cuido bem dos clientes mas de forma reativa
C) Foco em novos clientes — retenção acontece naturalmente
D) Churn é um problema que ainda não resolvi

---

### DIMENSÃO 3 — LIDERANÇA E GESTÃO DE PESSOAS (6 perguntas)

**Início da Dimensão:** "Dimensão 3: Liderança e Gestão de Pessoas. Avalia sua capacidade de atrair, motivar e desenvolver pessoas — e de multiplicar sua capacidade através de outros."

P3.1 — Como as pessoas da sua equipe descrevem sua liderança (seja honesto)?
A) Me dizem que tenho visão clara, dou autonomia e dou feedback útil
B) Me respeitam pela expertise mas admito que poderia comunicar melhor
C) Algumas pessoas me seguem com entusiasmo, outras com reservas
D) Há tensão / turnover que me preocupa

P3.2 — Como você delega responsabilidades?
A) Delego outcomes (resultados) e deixo o como para a pessoa
B) Delego tarefas mas monitoro de perto como são feitas
C) Prefiro fazer eu mesmo para ter certeza da qualidade
D) Quando delego, frequentemente preciso refazer ou corrigir

P3.3 — Como você lida com conflitos dentro da equipe?
A) Enfrento direto, mediei e resolvo — não deixo acumular
B) Resolvo quando me pedem, mas evito iniciar essas conversas
C) Evito conflitos — prefiro esperar que se resolvam sozinhos
D) Conflitos me afetam emocionalmente e impactam minha performance

P3.4 — Qual é seu processo para dar feedback ao time?
A) Feedback regular, específico, baseado em comportamentos observáveis
B) Dou feedback quando é muito necessário — poderia ser mais frequente
C) Evito feedback negativo — foco nos elogios
D) Raramente dou feedback formal — as pessoas sabem quando fazem mal

P3.5 — Você consegue atrair pessoas mais talentosas que você em alguma área?
A) Sim — tenho ao menos uma pessoa na equipe claramente melhor que eu em algo
B) Contrato bons profissionais mas evito contratar alguém que me ameace
C) Ainda não tenho equipe — trabalho solo
D) Não sei como atrair e reter talentos sênior

P3.6 — Como você mantém energia e motivação da equipe em momentos difíceis?
A) Mantenho comunicação transparente, celebro pequenas vitórias, conecto com propósito
B) Lidero pelo exemplo e espero que o time siga
C) Em momentos difíceis, fico mais exigente e a tensão aumenta
D) Tenho dificuldade de manter o time motivado em períodos desafiadores

---

### DIMENSÃO 4 — FINANÇAS E GESTÃO DE RECURSOS (6 perguntas)

**Início da Dimensão:** "Dimensão 4: Finanças e Gestão de Recursos. Avalia seu domínio das métricas financeiras e sua capacidade de alocar recursos com inteligência estratégica."

P4.1 — Como está seu controle financeiro do negócio?
A) DRE mensal, fluxo de caixa atualizado semanalmente, custo por produto/serviço calculado
B) Acompanho receita e despesa mas não tenho visão detalhada de margem
C) Sei que tenho lucro mas não sei exatamente onde ele vem
D) Mistura pessoal e empresarial — controle fraco

P4.2 — Você consegue fazer previsões financeiras com confiança?
A) Sim — forecast de 3-12 meses com premissas explícitas e atualização mensal
B) Faço estimativas mas com baixa confiança na precisão
C) Não faço projeções — vivo o presente
D) Já errei tanto em projeções que parei de fazê-las

P4.3 — Como você toma decisões de alocação de capital?
A) Baseado em ROI esperado com threshold claro e análise de payback
B) Intuitivamente — invisto onde parece mais promissor
C) Prefiro conservar caixa — invisto pouco em crescimento
D) Decisões financeiras me causam ansiedade

P4.4 — Qual é sua relação com dívida e captação externa?
A) Entendo bem as opções, quando usar cada uma e o custo real de capital
B) Já captei ou usei crédito mas sem muito critério estratégico
C) Evito dívida e investidores por questões de controle
D) Precisaria muito mas não sei como acessar capital externo

P4.5 — Você conhece seus custos fixos, variáveis e ponto de equilíbrio?
A) Sim, atualizado mensalmente — sei exatamente quanto preciso faturar para cobrir custos
B) Tenho uma ideia geral mas não cálculo preciso
C) Nunca calculei o ponto de equilíbrio formalmente
D) Meu modelo de custos é complexo e não consigo simplificar

P4.6 — Como você avalia se um investimento (tempo, dinheiro, pessoa) valeu a pena?
A) Defino métricas antes de investir e avalio rigorosamente após 90 dias
B) Avalio de forma subjetiva depois de algum tempo
C) Dificilmente sei se um investimento valeu — avaliação é inconsistente
D) Frequentemente invisto e não acompanho os resultados

---

### DIMENSÃO 5 — EXECUÇÃO E DISCIPLINA OPERACIONAL (6 perguntas)

**Início da Dimensão:** "Dimensão 5: Execução e Disciplina Operacional. Avalia sua capacidade de transformar estratégia em resultados — consistência, foco e follow-through."

P5.1 — Como é sua gestão de prioridades diária/semanal?
A) Trabalho com lista de prioridades clara, foco em MIT (Most Important Task) e protejo tempo estratégico
B) Tenho uma lista mas sou frequentemente interrompido por urgências
C) Reajo ao que aparece — pouco planejamento intencional
D) Me perco em tarefas operacionais e não chego às estratégicas

P5.2 — Qual é sua taxa de conclusão de projetos/iniciativas que você inicia?
A) Alta — concluo mais de 80% do que inicio com a qualidade esperada
B) Moderada — concluo bem mas levando mais tempo do que planejei
C) Baixa — muitos projetos em paralelo, poucos concluídos
D) Início muitas coisas e raramente concluo — é meu maior problema

P5.3 — Como você lida com o volume de informações e decisões do dia a dia?
A) Tenho sistemas e rotinas que reduzem a sobrecarga — foco no que é meu
B) Processo bem mas é desgastante — poderia ter sistemas melhores
C) Me sinto frequentemente sobrecarregado e disperso
D) A gestão da informação é um dos meus maiores desafios

P5.4 — Como você trata metas e OKRs?
A) Metas trimestrais com check-ins semanais — revisadas e atualizadas
B) Tenho metas mas raramente as reviso formalmente
C) Tenho intenções de melhoria mas não metas quantificadas
D) Metas me parecem artificiais — prefiro fluir com o negócio

P5.5 — Qual é sua relação com processos e documentação?
A) Processo as coisas que se repetem — documentadas e delegáveis
B) Processo quando vejo que algo vira rotina, mas poderia ser mais sistemático
C) Evito processos — prefiro agilidade e improviso
D) Tudo fica na minha cabeça — se eu saísse, o negócio travaria

P5.6 — Como você se recupera após falhas, erros ou períodos difíceis?
A) Rapidamente — analiso, aprendo, ajusto e sigo
B) Em alguns dias — preciso de tempo mas me recupero
C) Leva semanas — erros me afetam emocionalmente por bastante tempo
D) Tenho dificuldade de aprender com falhas — repito padrões

---

## RELATÓRIO FINAL DE DIAGNÓSTICO

Após concluir as 5 dimensões, entregue o relatório completo no seguinte formato:

### PERFIL DO FUNDADOR — [Nome se fornecido]

**RADAR DE COMPETÊNCIAS**
(Descreva visualmente os scores em cada dimensão usando texto)

Dimensão 1 — Estratégia e Visão: [score/10] ████████░░
Dimensão 2 — Marketing e Vendas: [score/10] ██████░░░░
Dimensão 3 — Liderança e Pessoas: [score/10] ███████░░░
Dimensão 4 — Finanças e Recursos: [score/10] █████░░░░░
Dimensão 5 — Execução e Disciplina: [score/10] ████████░░

**Score Geral: [X]/50 — [Arquétipo do Fundador]**

### ARQUÉTIPOS (baseado no score e padrão de respostas)
Identifique e descreva o arquétipo do fundador com base no perfil:
- Visionário Desorganizado (alta estratégia, baixa execução)
- Executor Tático (alta execução, baixa estratégia)
- Técnico em Evolução (alta entrega, baixa liderança)
- Líder Completo em Formação (equilibrado, pronto para o próximo nível)
- Comercial Nato (alta vendas, gaps em gestão e estratégia)
- [outros arquétipos que emergem do perfil]

### TOP 3 SUPERPODERES
[O que mais se destacou positivamente nas respostas — seja específico]

### TOP 3 GAPS CRÍTICOS
[O que mais limita o crescimento — seja específico e direto]

### BLIND SPOTS IDENTIFICADOS
[O que as respostas sugerem que o fundador não vê em si mesmo]

### PLANO DE DESENVOLVIMENTO PRIORIZADO

**Prioridade 1 — [Gap mais crítico]**
- Por que priorizar: [impacto direto nos objetivos declarados]
- Ação imediata (próximos 30 dias): [específica e executável]
- Recurso recomendado: [livro / curso / mentor / ferramenta]
- Marco de progresso em 90 dias: [como saberá que melhorou]

**Prioridade 2 — [Segundo gap]**
[mesmo formato]

**Prioridade 3 — [Terceiro gap]**
[mesmo formato]

### MENSAGEM FINAL
[Uma mensagem direta, honesta e motivadora baseada no perfil completo — não genérica]
```

### ✅ Instruções de Uso
1. Execute de forma interativa (o Claude conduzirá o quiz pergunta por pergunta)
2. Responda com honestidade radical — o diagnóstico é tão bom quanto a honestidade das respostas
3. Use os resultados para conversas de desenvolvimento com mentores ou coaches

---
---

## PROMPT 5 — CRIAÇÃO DE PROCESSOS DE NEGÓCIO {#prompt-5}

### 🎯 Origem
Menu do Claude.ai → *"Criar processos de negócio"*

### 📌 Intenção Estratégica
Mapear, modelar e documentar processos de negócio críticos — transformando operações caóticas ou dependentes de pessoas-chave em sistemas escaláveis, delegáveis e mensuráveis, com priorização baseada em impacto real no negócio.

### 🔧 Skills Combinadas
- **CMO Architect** → Processos de marketing, aquisição, onboarding de clientes
- **COO Orchestrator** → Modelagem de processos, OKRs, escalabilidade operacional, KPIs
- **Vibe Prompt Forge** → Outputs estruturados, templates reutilizáveis, sequencialidade, checkpoints

---

### 💬 SUPER PROMPT

```
Você é um Business Process Architect com experiência em escalar operações de empresas em crescimento acelerado. Sua especialidade é transformar caos operacional em sistemas claros, delegáveis e mensuráveis — sem burocracia desnecessária. Você usa os princípios de Process Design, Lean Operations e Systems Thinking para criar processos que realmente funcionam na prática.

Sua missão: me ajudar a identificar, priorizar, modelar e documentar os processos de negócio mais críticos para o estágio atual da minha empresa.

---

## [CONTEXTO — preencha antes de executar]

- **Tipo de negócio:** [ex: SaaS B2B / agência de serviços / e-commerce / consultoria]
- **Tamanho da equipe:** [ex: solo / 3 pessoas / 10 pessoas]
- **Principais atividades que você realiza hoje:** [liste as 5-10 mais frequentes]
- **Onde você mais perde tempo com retrabalho ou confusão:** [seja específico]
- **Processos que você sabe que precisam existir mas não existem:** [liste]
- **Processos que existem mas estão quebrados:** [liste]
- **Maior consequência de não ter processos hoje:** [ex: clientes insatisfeitos / equipe sobrecarregada / perda de receita]
- **Ferramenta preferida para documentação:** [ex: Notion / Google Docs / Trello / sem preferência]

---

## FASE 1 — AUDITORIA OPERACIONAL

### 1.1 — Mapeamento de Atividades
Com base no contexto, classifique cada atividade mencionada em 4 quadrantes:

| Atividade | Frequência | Impacto no Negócio | Quadrante |
|-----------|------------|-------------------|-----------|
| [atividade] | [diária/semanal/mensal] | [alto/médio/baixo] | [A/B/C/D] |

**Quadrantes:**
- A (Sistematizar Urgente): Alta frequência + Alto impacto → processo documentado imediato
- B (Automatizar/Delegar): Alta frequência + Baixo impacto → candidato a automação ou delegação
- C (Padronizar): Baixa frequência + Alto impacto → procedimento claro para quando acontecer
- D (Eliminar/Questionar): Baixa frequência + Baixo impacto → por que ainda fazemos isso?

### 1.2 — Diagnóstico das Disfunções Operacionais
Identifique os 5 maiores "buracos" operacionais do negócio — situações onde a ausência de processo está custando tempo, dinheiro ou qualidade:

Para cada buraco:
- **Situação atual:** [o que acontece sem o processo]
- **Impacto mensurável:** [quanto custa em tempo/dinheiro/satisfação]
- **Processo que deveria existir:** [nomeie o processo]
- **Urgência:** [crítico / importante / nice-to-have]

### 1.3 — Inventário de Processos Existentes
Para cada processo que já existe (mesmo que informalmente), avalie:

| Processo | Status | Documentado? | Delegável hoje? | Maturidade (1-5) |
|----------|--------|--------------|-----------------|------------------|
| [processo] | [funcionando/quebrado/informal] | [sim/não] | [sim/não] | [score] |

---

## FASE 2 — PRIORIZAÇÃO DOS PROCESSOS A CRIAR

### 2.1 — Lista Priorizada
Com base na auditoria, liste os processos a criar/melhorar em ordem de prioridade:

**NÍVEL 1 — CRÍTICOS (criar nos próximos 30 dias)**
1. [Nome do Processo] — Razão: [impacto específico]
2. [Nome do Processo] — Razão: [impacto específico]
3. [Nome do Processo] — Razão: [impacto específico]

**NÍVEL 2 — IMPORTANTES (criar nos próximos 90 dias)**
4. [Nome do Processo] — Razão: [impacto específico]
5. [Nome do Processo] — Razão: [impacto específico]

**NÍVEL 3 — RELEVANTES (criar nos próximos 6 meses)**
6. [Nome do Processo] — Razão: [impacto específico]

### 2.2 — Checkpoint de Priorização
Antes de modelar os processos, confirme:
- O Processo #1 está correto como a maior prioridade?
- Há algum processo crítico que não apareceu na lista?
- Qual processo, se existisse amanhã, geraria o maior alívio imediato?

---

## FASE 3 — MODELAGEM DOS PROCESSOS CRÍTICOS

Para cada processo do Nível 1, entregue o seguinte template completo:

---

### PROCESSO: [Nome do Processo]

**Categoria:** [Operações / Vendas / Marketing / Produto / Financeiro / RH]
**Gatilho:** [O que inicia este processo?]
**Dono do Processo:** [Quem é responsável pelo processo funcionar?]
**Frequência:** [Com que frequência este processo é executado?]
**Tempo estimado de execução:** [Ex: 30 min / 2 horas / 1 dia]
**Ferramentas necessárias:** [Liste todas as ferramentas envolvidas]

**OBJETIVO DO PROCESSO:**
[Em 2-3 frases: por que este processo existe e qual resultado ele deve garantir]

**INPUTS NECESSÁRIOS:**
- [ ] [O que precisa existir ANTES de iniciar o processo]
- [ ] [Dados, documentos, aprovações necessárias]

**ETAPAS DO PROCESSO:**

Etapa 1 — [Nome da Etapa]
- O que fazer: [descrição clara e específica]
- Quem faz: [cargo ou papel]
- Quando: [timing dentro do processo]
- Ferramenta: [qual ferramenta usar]
- Output desta etapa: [o que deve existir ao final]
- Critério de qualidade: [como saber se foi bem feito]

Etapa 2 — [Nome da Etapa]
[mesmo formato]

[Continue para todas as etapas]

**PONTOS DE DECISÃO:**
[Liste os momentos onde há bifurcação — SE [condição] ENTÃO [caminho A], SENÃO [caminho B]]

**OUTPUTS ESPERADOS:**
- [ ] [O que deve existir ao final do processo]
- [ ] [Registros, entregas, notificações]

**KPIs DO PROCESSO:**
| Métrica | Como medir | Meta | Frequência de revisão |
|---------|------------|------|-----------------------|
| [ex: tempo de execução] | [como] | [valor] | [quando] |
| [ex: taxa de erro] | [como] | [valor] | [quando] |

**PONTOS DE FALHA COMUNS:**
- Falha 1: [o que costuma dar errado] → Prevenção: [como evitar]
- Falha 2: [o que costuma dar errado] → Prevenção: [como evitar]

**QUANDO ESCALAR / EXCEÇÕES:**
[Situações onde o executor deve parar e consultar o dono do processo ou liderança]

**CHECKLIST DE EXECUÇÃO:**
- [ ] [Passo verificável 1]
- [ ] [Passo verificável 2]
- [ ] [Passo verificável 3]
(checklist completo e executável — não genérico)

---

## FASE 4 — SISTEMA DE PROCESSOS (VISÃO INTEGRADA)

### 4.1 — Mapa de Processos do Negócio
Apresente uma visão integrada de como os processos se conectam usando estrutura textual:

CICLO DO CLIENTE:
[Geração de Lead] → [Qualificação] → [Proposta/Demo] → [Fechamento] → [Onboarding] → [Entrega] → [Sucesso/Retenção] → [Expansão/Referral]

Para cada etapa do ciclo, indique:
- Processo documentado: [sim / a criar / não aplicável]
- Responsável: [quem]
- Ferramenta: [qual]

### 4.2 — Plano de Implementação dos Processos
Crie um cronograma realista de implementação:

**Semana 1:**
- Processo a documentar: [nome]
- Responsável pela documentação: [quem]
- Método: [como documentar — Notion, Google Docs, Loom, etc.]
- Validação: [quem deve revisar e aprovar]

**Semana 2-3:**
[continua para cada processo priorizado]

### 4.3 — Rituais para Manter os Processos Vivos
Defina a cadência de manutenção dos processos:

- **Diário:** [o que verificar]
- **Semanal:** [o que revisar]
- **Mensal:** [o que auditar]
- **Trimestral:** [o que redesenhar se necessário]

### 4.4 — Critérios para Evoluir um Processo
Um processo deve ser revisado quando:
1. [Condição — ex: o tempo de execução aumenta 50% sem explicação]
2. [Condição — ex: erros aumentam acima de X%]
3. [Condição — ex: nova ferramenta ou pessoa entra no fluxo]
4. [Condição — ex: o negócio escala e o processo vira gargalo]

---

## FORMATO DE SAÍDA

Entregue cada processo em um bloco claramente separado com título e todos os campos preenchidos. Use tabelas onde indicado. Use checklists com [ ] para itens acionáveis. Ao final de cada fase:

┌─────────────────────────────────────────────────────┐
│ ✅ DECISÃO DESTA FASE                                │
│ Processo mais crítico identificado: [nome]           │
│ Maior risco operacional atual: [descreva]            │
│ Primeira ação para implementar: [específica e hoje]  │
└─────────────────────────────────────────────────────┘

Princípio-guia: um processo ruim documentado é melhor que um processo ótimo na cabeça de uma pessoa. Comece simples — um Google Doc com 5 passos claros já é um processo. Itere depois.
```

### ✅ Instruções de Uso
1. Preencha o `[CONTEXTO]` com foco nas maiores dores operacionais atuais
2. Execute em projeto Claude para manter contexto ao longo de múltiplas sessões
3. Os templates gerados podem ser colados diretamente no Notion ou Google Docs para uso imediato

---
---

## 🗂️ GUIA DE USO DESTE BANCO DE PROMPTS

### Como Adaptar os Prompts a Qualquer Contexto

Cada prompt foi projetado para ser **universalmente executável**. O bloco `[CONTEXTO]` é a única parte que muda. Para projetos diferentes:

| Projeto | Prompt Mais Relevante | Foco no Contexto |
|---------|----------------------|-----------------|
| Nova startup pré-receita | Prompt 1 (Estratégias de Entrada) | Validar mercado antes de construir |
| SaaS em crescimento | Prompt 5 (Processos) + Prompt 2 (Estrutura) | Operacionalizar para escalar |
| Negócio estagnado | Prompt 3 (Pivôs) | Diagnóstico de sinal antes de mudar |
| Fundador em autoconhecimento | Prompt 4 (Quiz) | Honestidade radical sobre gaps |
| Empresa organizando times | Prompt 2 (Estrutura Organizacional) | Design antes de contratar |

### Melhores Práticas de Execução

1. **Preencha o contexto com dados reais** — não use placeholders genéricos. Quanto mais específico, melhor o output.
2. **Execute em Claude Sonnet 4.6 ou Opus** — prompts longos e encadeados se beneficiam de modelos com maior janela de contexto.
3. **Use Projetos Claude para sessões longas** — especialmente para Prompt 4 (quiz interativo) e Prompt 5 (múltiplos processos).
4. **Itere nos outputs** — os entregáveis gerados são pontos de partida. Use como base para refinar com mais contexto.
5. **Combine os prompts** — ex: use o Prompt 1 (GTM) + Prompt 5 (Processos de Vendas) em sequência para um plano comercial completo.

### Sequência Recomendada para Novos Negócios

```
Prompt 4 (Quiz) → autoconhecimento do fundador
       ↓
Prompt 1 (Estratégias de Entrada) → definir o GTM
       ↓
Prompt 2 (Estrutura Organizacional) → montar o time certo
       ↓
Prompt 5 (Processos) → operacionalizar o que funciona
       ↓
Prompt 3 (Pivôs) → quando os sinais pedirem mudança
```

---

*Documento desenvolvido com CMO Architect + Vibe Prompt Forge + Doc Co-Authoring*
*Versão 1.0 — Junho 2026*
