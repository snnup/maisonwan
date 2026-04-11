# 📄 Configuração da Página 404

## 📋 Arquivos Criados

### 1. **404.php** (Página de Erro)
- Página principal de erro 404 com design responsivo
- Integrada com o tema Maison Wan
- Carrega configurações do arquivo `config/config-404.php`
- Registra erros em log (opcional)

### 2. **config/config-404.php** (Configuração)
Arquivo configurável com as seguintes opções:

```php
[
    'title'                 => Título da página
    'heading'              => Heading principal (ex: "404")
    'subtitle'             => Subtítulo (ex: "Página não encontrada")
    'description'          => Descrição do erro
    'button_text'          => Texto do botão
    'button_link'          => URL do botão (default: "/")
    'show_technical_info'  => Mostrar informações técnicas (false em produção)
    'show_requested_uri'   => Exibir a URI solicitada
    'theme_color'          => Cor do tema em hex
    'accent_color'         => Cor de destaque em hex
    'enable_logging'       => Ativar log de erros 404
    'log_file'             => Caminho do arquivo de log
]
```

### 3. **.htaccess** (Configuração do Servidor)
Arquivo com configurações:
- Redirecionamento de erros 404 para `/404.php`
- Rewrite de URLs (remove trailing slash)
- URLs sem extensão .php
- Compressão gzip
- Cache de navegador
- Cabeçalhos de segurança
- Bloqueio de arquivos sensíveis

### 4. **logs/** (Diretório de Logs)
Armazena os erros 404 registrados (se habilitado)

## 🔧 Como Usar

### Personalizar o Conteúdo
Edite o arquivo `config/config-404.php`:

```php
return [
    'title' => '404 - Página Não Encontrada',
    'heading' => '404',
    'subtitle' => 'Oops! Página não encontrada',
    'description' => 'Desculpe, a página que você está procurando não existe.',
    'button_text' => 'Voltar à Home',
    'button_link' => '/',
    'theme_color' => '#1a1a1a',
    'accent_color' => '#d4af37',
    'show_technical_info' => false,  // ⚠️ Desativar em produção!
    'enable_logging' => true,
];
```

### Ativar/Desativar Recursos

**Exibir informações técnicas:**
```php
'show_technical_info' => true,  // Mostra URI, método, timestamp
```

**Ativar log de erros:**
```php
'enable_logging' => true,  // Registra em logs/errors-404.log
```

## 🎨 Personalização CSS

Toda a estilização está **dentro do arquivo 404.php**. Você pode modificar:
- Cores (tema e destaque)
- Animações
- Layout
- Fontes

## 📊 Logs

Se `enable_logging` estiver ativado, os erros serão registrados em `logs/errors-404.log`:

```
2026-04-09 14:23:45 | /pagina-inexistente | IP: 192.168.1.1
2026-04-09 14:24:12 | /produto/123 | IP: 192.168.1.2
```

## ✅ Verificar Funcionamento

1. Acesse uma URL inexistente:
   - `http://localhost/maisonwan/pagina-inexistente`
   - `http://localhost/maisonwan/produtos/xyz`

2. Você deve ver a página 404 personalizada

3. Verifique o log:
   - `logs/errors-404.log`

## ⚠️ Requisitos

- Módulo Apache `mod_rewrite` ativado
- Permissões de escrita no diretório `logs/`
- Hospedagem com suporte a `.htaccess`

## 🔐 Segurança

- ✅ Bloqueia acesso direto a `.htaccess` e `config-404.php`
- ✅ Remove informações técnicas em produção
- ✅ Cabeçalhos de segurança configurados
- ✅ Compressão ativada
- ✅ Cache configurado

## 📝 Notas

- A página 404 mantém o header e navegação do site
- Design responsivo (mobile-friendly)
- Animação de entrada suave (fade-in)
- Compatível com ícones Phosphor

---

**Última atualização:** 2026-04-09
