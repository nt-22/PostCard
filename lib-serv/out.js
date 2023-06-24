function init(){
    
}

function DraftsOut(draft){
    console.log(draft);
    var out = '';
    for (var key in draft){
        out += '<div class="draft">';
        out += '<img src="materials/postcards/8.jpg">';
        out += '<div class="lib-send">';
        out += '<p id="share" class="lib-send-text open-form">Отправить</p>';
        out += '</div>';
        out += '</div>';
    }
    $('.drafts').html(out);
}

$(document).ready(function(){
    init();
})