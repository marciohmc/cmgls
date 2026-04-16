# C&M Global Services - Reconstrução do Site

Este projeto foi reconstruído utilizando **React + Tailwind CSS** para oferecer performance máxima e segurança moderna.

## 🚀 Como fazer o Deploy na HostGator (Plano P)

### 1. Preparação Local
Antes de subir para a HostGator, você deve gerar a versão de produção do site:
1. Instale as dependências: `npm install`
2. Gere o build: `npm run build`
3. Isso criará uma pasta chamada `dist/`. É este conteúdo que deve ir para o servidor.

### 2. Configuração de Segurança (HostGator)

#### Acesso SSH
1. No cPanel, vá em **Acesso SSH** > **Gerenciar Chaves SSH**.
2. Gere uma nova chave e autorize-a.
3. Adicione a **Chave Pública** ao seu GitHub em **Settings > SSH and GPG keys**.

#### Automação com .cpanel.yml
O arquivo `.cpanel.yml` na raiz já está configurado. **IMPORTANTE:** Edite o arquivo e substitua `SEU_USUARIO_CPANEL` pelo seu nome de usuário real da HostGator.

#### Proteção com .htaccess
O arquivo `.htaccess` (dentro de `public/`) bloqueia automaticamente o acesso à pasta `.git` e outros arquivos de configuração sensíveis.

### 3. Git Version Control no cPanel
1. No cPanel, use a ferramenta **Git™ Version Control**.
2. Use o link SSH do seu repositório **Privado** do GitHub.
3. Após clonar, clique em **Manage** > **Deploy Head** para que o cPanel execute as tarefas de cópia para a `public_html`.

---

## 🛡️ Segurança de Credenciais
*   As chaves de API estão no arquivo `.env` (que está no `.gitignore` e nunca será enviado para o GitHub).
*   Na produção (HostGator), as variáveis são injetadas durante o processo de `npm run build`.

---
Desenvolvido com ❤️ no Google AI Studio.
