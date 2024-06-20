//Haut, haut, bas, bas, gauche, droite, gauche, droite, B, A
var k = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65],
    n = 0;
$(document).keydown(function (e) {
    if (e.keyCode === k[n++]) {
        if (n === k.length) {
            $(document).on('click', function() {
                $('.sidebar').css('transition', 'none');
                $('.card').css('transition', 'none');
                $('.header').css('background-color', '#'+Math.floor(Math.random()*16777215).toString(16));
                $('.sidebar').css('background-color', '#'+Math.floor(Math.random()*16777215).toString(16));
                $('.card').css('background-color', '#'+Math.floor(Math.random()*16777215).toString(16));
                $('.main-content').css('background-color', '#'+Math.floor(Math.random()*16777215).toString(16));
            });

            n = 0;
            return false;
        }
    }
    else {
        n = 0;
    }
});