$(document).ready(() => {
    $('#mostrar_circulo_color').hide();
    $('#boton_traducir').click(() => {
        let obtener_color_es = $('#color_es').val().toLowerCase().trim();
        $.ajax({
            type: 'POST',
            url: 'control/control-color.php',
            data: {
                'color_es': obtener_color_es
            },
            success: resultado => {
                $('#mostrar_circulo_color').show();
                $('#color_en').val(resultado);
                $('#circulo_color').css('background-color', resultado.replace(' ', ''));
            }
        });
    });
});