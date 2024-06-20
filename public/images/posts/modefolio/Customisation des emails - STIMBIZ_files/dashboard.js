$(document).ready(function ()
{
    // Affichage du menu en mode responsive
    $("#menu-toggle").click(function(e)
    {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    // Au clic sur une erreur nous la supprimons
    $(document).on('click', '.show-errors', function(evt)
    {
        var message = '<div class="text-left">';
        $(this).parent().find('.list-errors .error').each(function() {
            message += $(this).html()+'<br>';
        });
        message += '</div>';

        displaySwal(message, 'warning');

        evt.stopImmediatePropagation();
        return false;
    });

    // Suppression des evenements sur les liens vides
    $('a[href="#"]').click(function(e) {
        e.preventDefault();
    });

    // Affichage des modals d'aide
    $("a#help_modal").on("click",function(){
        $("#myModal").slideToggle(150);
        $("#main").addClass("first_calque");
    });

    // Fermeture des modals d'aide
    $(".close").on("click",function(){
        $("#main").removeClass("first_calque");
        $("#myModal").slideToggle(150);
    });

    // Planning : autoplay
    if($('#list-planning').length){
        var count = 1;
        var maxLength = $('#list-planning').find('li').length;
        setInterval(function(){
            $('#list-planning').find('li:nth-child('+count+') a').tab('show');
            (count > maxLength) ? count = 0 : count++;
        }, 5000);
    }

    // Efface le contenu de l'input frère
    $('.clean-input').on('click', function(){
       $(this).siblings('input').val('');
    });

});