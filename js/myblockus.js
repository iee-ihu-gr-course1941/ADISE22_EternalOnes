function draw_empty_board() {
    var t='<table id="chess_table">';
    for(var i=1;i<21;i++) {
    t += '<tr>';
    for(var j=1;j<21;j++) {
    t += '<td class="chess_square", id="square_'+j+'_'+i+'">' + j +','+i+'</td>';
    }
    t+='</tr>';
    }
    t+='</table>';
    $('#blockus_board').html(t);
}    
    $(draw_empty_board);