<?php
function menu($paginaAtiva) {
    $abas = [
        'Cadastrar' => 'formulario.php',
        'Mostrar' => 'mostra.php',
        'Idade' => 'mostra_idade.php',
        'Sair' => 'sair.php'
    ];
    echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">';
    echo '<ul class="navbar-nav">';
    
    foreach ($abas as $nome => $link) {
        $active = ($paginaAtiva === $nome) ? 'active' : '';
        echo '<li class="nav-item ' . $active . '">';
        echo '<a class="nav-link" href="' . $link . '">' . $nome . '</a>';
        echo '</li>';
    }
    
    echo '</ul>';
    echo '</nav>';
}
?>
