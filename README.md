# arquip_site_2.0

Projeto de Atualização do Site
Guia de Trabalho para Estagiários

Este repositório centraliza o desenvolvimento do projeto de atualização do site, permitindo que cada estagiário trabalhe de forma isolada, organizada e sem conflitos de código, utilizando o fluxo padrão do GitHub.

1. Conceitos-chave (leitura obrigatória)

Antes de qualquer atividade prática, entenda estes princípios:

<li>A branch main representa exatamente o que está em produção

<li>Cada tarefa ou funcionalidade deve ter sua própria branch

<li>A branch main não é usada para desenvolvimento

<li>Toda alteração na main acontece via Pull Request

<li>Código em produção deve ser estável, revisado e rastreável

<li>Organização e rastreabilidade são mais importantes que velocidade

2. Regras do projeto

Estas regras não são opcionais:

❌ Nunca desenvolver diretamente na branch main

❌ Nunca misturar tarefas diferentes na mesma branch

❌ Nunca apagar arquivos sem autorização

❌ Nunca fazer merge do próprio Pull Request

❌ Nunca subir código quebrado ou não testado

✅ Sempre trabalhar em sua branch pessoal

✅ Sempre criar uma branch para cada desenvolvimento

✅ Sempre descrever claramente seus commits e Pull Requests

O não cumprimento dessas regras compromete o projeto e o ambiente de produção.

3. Primeiro acesso ao repositório

Este passo é feito apenas uma vez.

Clonar o repositório
git clone https://github.com/VictorMacabu/arquip_site_2.0.git
cd arquip_site_2.0

4. Fluxo correto de trabalho

4.1 Atualizar a branch principal localmente

Antes de criar qualquer branch:

git checkout main
git pull origin main

4.2 Criar uma branch para o desenvolvimento

Cada funcionalidade, correção ou melhoria deve ter uma branch própria, criada a partir da main.

Padrão de nome:

feature/nome_sobrenome-descricao


Exemplos:

feature/joao_silva-header-responsivo
feature/maria_souza-layout-home


Comando:

git checkout -b feature/joao_silva-header-responsivo

5. Trabalhando no código

Durante o desenvolvimento:

Trabalhe apenas no escopo da tarefa definida

Não inclua mudanças não relacionadas

Faça commits pequenos e objetivos

Garanta que o site continue funcional

5.1 Commit das alterações
git add .
git commit -m "Implementa header responsivo com menu mobile"


Boas práticas de commit:

Mensagem clara

Descrevendo o que foi feito

Evitar termos genéricos como “update” ou “ajustes”

6. Trabalhando no código (rotina diária)

6.1 Antes de começar a programar

Sempre sincronize sua branch com a main:

git checkout dev-joao_silva
git pull origin main

7.2 Desenvolvimento

Trabalhe apenas na sua branch

Não altere arquivos globais sem autorização

Mantenha o código organizado e funcional

7.3 Salvar alterações (commit)
git status
git add *arquivo.php*
git commit -m "Atualiza layout da página inicial"


Boas mensagens de commit:

O que foi feito de forma clara e objetiva

Sem mensagens genéricas como “update” ou “teste”

8. Enviar seu código para o repositório remoto

git push origin feature/joao_silva-header-responsivo

9. Criar Pull Request (integração oficial)
No GitHub:

Acesse o repositório

Clique em Compare & Pull Request

Base: main

Compare: feature/...

Descreva claramente:

O que foi alterado e qual parte do site foi impactada

Se existe algo pendente ou ponto de atenção

Crie o Pull Request
⚠️ Não faça o merge.
A integração será feita pelo responsável técnico após revisão.

10. O que NÃO fazer

❌ Trabalhar na branch main
❌ Alterar código de outro estagiário
❌ Subir código quebrado sem testar/avisar
❌ Resolver conflitos sem entender o impacto
❌ Apagar ou sobrescrever arquivos globais
❌ Criar uma branch e deixá-la aberta indefinidamente
❌ Criar branches sem padrão de nome

11. Fluxo resumido
Clone o repositório
Crie sua branch pessoal
Desenvolva apenas nela
Commit
Push
Pull Request

12. Responsabilidade do estagiário

Cada estagiário é responsável por:

Manter seu código funcional

Seguir este guia rigorosamente

Atualizar sua branch com frequência

Comunicar problemas antes de gerar conflitos


12.1 Após o merge:

A branch da funcionalidade deve ser excluída 

O código integrado passa a fazer parte da base de produção

Novas tarefas exigem novas branches