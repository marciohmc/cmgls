# Guia de Segurança e Hardening - C&M Global Services

Fiz modificações no código do tema para aumentar a segurança, mas alguns pontos precisam ser feitos manualmente no seu painel da **HostGator (cPanel)** ou no arquivo **wp-config.php**.

## 1. Bloqueio de Arquivos Sensíveis (.htaccess)
Abra seu arquivo `.htaccess` na raiz do site (dentro da `public_html`) e adicione as seguintes linhas ao final para resolver o alerta de "install.php" e "upgrade.php":

```apache
# Bloquear acesso direto ao arquivo de configuração
<Files wp-config.php>
    order allow,deny
    deny from all
</Files>

# Bloquear acesso aos arquivos de instalação e atualização
<Files install.php>
    order allow,deny
    deny from all
</Files>
<Files upgrade.php>
    order allow,deny
    deny from all
</Files>

# Desativar listagem de diretórios (Impede ver o conteúdo das pastas)
Options -Indexes
```

## 2. Prefixo do Banco de Dados
O scanner alertou sobre o prefixo `wp_`. 
*   **Aviso:** Mudar isso exige conhecimento técnico avançado, pois envolve alterar tabelas no banco de dados e o arquivo `wp-config.php`. Se o site já estiver no ar com conteúdo, **não recomendo mudar** sem um backup completo.
*   Se for fazer, mude a linha no `wp-config.php`: `$table_prefix = 'cm_global_';` e execute o RENAME em todas as tabelas via phpMyAdmin.

## 3. Ocultar /wp-content e /wp-admin
O scanner sugeriu ocultar esses caminhos. 
- Já removi do código-fonte as meta-tags que facilitam a descoberta desses caminhos (como o link do XML-RPC e a versão do WordPress).
- Para ocultar completamente (/wp-content virar /assets, por exemplo), o melhor é usar o plugin **WP Ghost** que você já mencionou, pois ele faz isso via rewrite no servidor.

## 4. Versão do MySQL
Seu servidor está na versão 5.7. 
- A recomendação atual do WordPress é **MySQL 8.0** ou **MariaDB 10.4**.
- **Como resolver:** Entre no chat da HostGator e peça: *"Gostaria de migrar minha conta para um servidor com MySQL 8.0 para melhor compatibilidade com o WordPress"*.

---
*As melhorias de código (Hardening do functions.php) já foram aplicadas no seu tema.*
