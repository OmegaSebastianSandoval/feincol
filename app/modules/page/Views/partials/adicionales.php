<?php
function resaltarTexto($cadena)
{
    // Expresión regular para encontrar texto entre corchetes
    $pattern = '/\[([^\]]+)\]/';
    // Reemplazar con un span y clase "resaltado"
    $replacement = '<span class="resaltado">$1</span>';
    // Realizar el reemplazo
    $resultado = preg_replace($pattern, $replacement, $cadena);
    return $resultado;
}

?>
<div class="loader-bx">
    <span class="loader"></span>
</div>
<style>
    .loader-bx {
        display: none;
        position: fixed;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, .5);
        z-index: 99999;
        top: 0;
        left: 0;
        justify-content: center;
        align-items: center;
    }

    .loader-bx.show {
        display: flex;
    }

    .loader {
        width: 48px;
        height: 48px;
        display: block;
        margin: 15px auto;
        position: relative;
        color: #FFF;
        box-sizing: border-box;
        animation: rotation 1s linear infinite;
    }

    .loader::after,
    .loader::before {
        content: '';
        box-sizing: border-box;
        position: absolute;
        width: 24px;
        height: 24px;
        top: 50%;
        left: 50%;
        transform: scale(0.5) translate(0, 0);
        background-color: #FFF;
        border-radius: 50%;
        animation: animloader 1s infinite ease-in-out;
    }

    .loader::before {
        background-color: var(--verde);
        transform: scale(0.5) translate(-48px, -48px);
    }

    @keyframes rotation {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes animloader {
        50% {
            transform: scale(1) translate(-50%, -50%);
        }
    }
</style>

<?php

function replaceBracketsWithSpan(string $text): string {
    return preg_replace_callback(
        '/\[(.*?)\]/',
        function ($matches) {
            return '<span class="text-yellow">' . $matches[1] . '</span>';
        },
        $text
    );
}

?>



<!-- Modal -->
<div class="modal fade" id="modalPoliticas" tabindex="-1" aria-labelledby="modalPoliticasLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalPoliticasLabel"><?php echo $this->infopage->info_pagina_titulo_legal ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo $this->infopage->info_pagina_descripcion_legal ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary d-none">Save changes</button>
            </div>
        </div>
    </div>
</div>