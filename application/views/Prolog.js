let barPosition = $('#select-bar').offset();
let barWidth = document.getElementById('select-bar').offsetWidth;
let barHeight = document.getElementById('select-bar').offsetHeight;

// sticker bar
$(window).scroll(function(){
    if($(window).scrollTop() > barPosition.top){
        $('#select-bar').css('position','fixed').css('top','0').css('width',barWidth);
    } else {
        $('#select-bar').css('position','static');
    }    
});