// JavaScript Document
$('.fca6').click(function() {

    if($(this).attr('data') == 'graphics')
    {
        $('.GR').css({'display': 'inherit'});
    }
    else if($(this).attr('data') == 'packaging')
    {
        $('.PA').css({'display': 'inherit'});
    }
    else if($(this).attr('data') == 'Marketing')
    {
        $('.MA').css({'display': 'inherit'});
    }
    else if($(this).attr('data') == 'Raw')
    {
        $('.RA').css({'display': 'inherit'});
    }
    else if($(this).attr('data') == 'Formulation')
    {
        $('.FO').css({'display': 'inherit'});
    }
    else if($(this).attr('data') == 'analysis')
    {
        $('.AN').css({'display': 'inherit'});
    }

});
$('.Xx').click(function () {

    $('.Modal').css({'display': 'none'});

});