function draw_empty_board() {
    var t='<table id="blokus_table">';
    for(var i=1;i<21;i++) {
    t += '<tr>';
    for(var j=1;j<21;j++) {
    t += '<td class="blokus_square", id="square_'+j+'_'+i+'">' + j +','+i+'</td>';
    }
    t+='</tr>';
    }
    t+='</table>';
    $('#blokus_board').html(t);
}    
    $(draw_empty_board);