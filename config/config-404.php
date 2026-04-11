<?php
/**
 * Configuração da Página 404
 * Arquivo configurável para personalizar a página de erro 404
 */

return [
    // Título da página
    'title' => '404 - Página Não Encontrada',
    
    // Mensagem principal
    'heading' => '404',
    'subtitle' => 'Oops! Página não encontrada',
    
    // Descrição
    'description' => 'Desculpe, a página que você está procurando não existe ou foi movida.',
    
    // Botão de ação
    'button_text' => 'Voltar à Home',
    'button_link' => '/',
    
    // Mostrar informações técnicas (desativar em produção)
    'show_technical_info' => false,
    
    // Incluir o arquivo solicitado na mensagem
    'show_requested_uri' => false,
    
    // Cor do tema (hex)
    'theme_color' => '#1a1a1a',
    'accent_color' => '#d4af37',
    
    // Ativar log de erros 404
    'enable_logging' => true,
    'log_file' => __DIR__ . '/../logs/errors-404.log',
];
?>
