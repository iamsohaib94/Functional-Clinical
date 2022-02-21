var takeValue;
var msgCondition = 'false';
var weight;
var extarnalWeight;

$(document).ready(function() {

    changeConcernValue();
    // window.history.replaceState('page2', 'Title', '/FCA/FCA Test5.php');
    // $('#bookeo_position').css({'display': 'none'});
    // if(newCheck === 'Service_QuizResult_VideoConsult')
    // {
    // 	$('#link').css({"display": "block"});
    // 	$('#Service').css({"display": "block"});
    // 	$('#price').text('TOTAL: $125');
    //     $('#miniPop').addClass('PopTop');
    //     $('#miniPop').css({"height": "80vh", "overflow-y": "scroll"});
    //     $('#bookeo_position').css({"display": "block"});
    // }

});

// ------------FCA Test Page 1------------
$('.skinConcern').click(function() {

    chco(this);

});

function changeConcernValue() {
    if ($('#concern1').prop("checked") == true) {
        takeValue = '.skinConcern:nth-child(1)';
        chco(takeValue);
    } else if ($('#concern2').prop("checked") == true) {
        takeValue = '.skinConcern:nth-child(2)';
        chco(takeValue);
    } else if ($('#concern3').prop("checked") == true) {
        takeValue = '.skinConcern:nth-child(3)';
        chco(takeValue);
    } else if ($('#concern4').prop("checked") == true) {
        takeValue = '.skinConcern:nth-child(4)';
        chco(takeValue);
    } else if ($('#concern5').prop("checked") == true) {
        takeValue = '.skinConcern:nth-child(5)';
        chco(takeValue);
        msgCondition = 'true';
        OtherRadioNew();
    }
}

function chco(reqColor) {

    $(reqColor).css({ 'background-color': '#0dcaf0', 'color': '#fff' }).siblings().css({ 'background-color': 'transparent', 'color': '#000' });

}
$('.normal').click(function() {

    msgCondition = 'false';
    OtherRadioNew();

});
$('.otherRadio').click(function() {

    msgCondition = 'true';
    OtherRadioNew();

});

function OtherRadioNew() {

    if (msgCondition == 'true') {
        $('#msg').attr('required', 'true');
        $('#msg').css({ 'display': 'block' });
    } else {
        $('#msg').removeAttr('required', 'true');
        $('#msg').css({ 'display': 'none' });
    }
}
// ------------FCA Test Page 4------------
$('.pics').click(function() {

    addWeight(this);

});

function addWeight(ww) {
    $(ww).addClass('acc').siblings().removeClass('acc');
    weight = $(ww).attr('weight');
    $('#txtholder').val(weight);
}
$('.pics').each(function() {

    $('#txtholder').val(extarnalWeight);
    var newWeight = $('#txtholder').val();
    if ($(this).attr('weight') === newWeight) {
        addWeight(this);
    }

});
$(".next4").click(function(e) {
    var getText = $('#txtholder').val();
    if (getText == "" || getText == " ") {
        alert('Please select body your weight.');
        e.preventDefault();
    } else {
        // e.preventDefault();

        $('#form4').attr('action', 'FCA Test5.php');
        // window.history.pushState({"html":response.html,"pageTitle":response.pageTitle},"FCA Tst5.php", urlPath);
    }
});
//FCA Test 5

function displayNone() {
    $('#b3-Skin').css({ "display": "none" });
    $('#b3-Hair').css({ "display": "none" });
    $('#b3-Adiposity').css({ "display": "none" });
    $('#b3-Nails').css({ "display": "none" });
}
$('#FC').click(function() {

    $('#Face').css({ "display": "block" });
    $('#Body').css({ "display": "none" });
    $('.b3-item').removeClass('b3-itemActive');
    b3_block3 = 'false';
});
$('#BD').click(function() {

    $('#Face').css({ "display": "none" });
    $('#Body').css({ "display": "block" });
    $('.face1').removeClass('faceActive');
    b3_block3 = 'false';
});

$('.face1').click(function() {

    $(this).addClass('faceActive').siblings().removeClass('faceActive');

});
$('.b3-item').click(function() {

    $(this).addClass('b3-itemActive').siblings().removeClass('b3-itemActive');

});
$('#form5').submit(function() {

    return false;

});
$('#next5').click(function() {
    b3_block3_img();
    if (b3_block3 == 'true') {
        $('#popup').css({ "visibility": "visible" });
        $('body').css({ "overflow": "hidden" });
        $('#smart-button-container').css({ "display": "inherit" });
    }
    var newCheck = $('#YourChoice').val();
    if (newCheck === 'Service_QuizResult_VideoConsult') {
        $('#bookeo_position').css({ "visibility": "visible", "height": "auto" });

    }
});

function b3_block3_img() {
    if ($('.face1').hasClass('faceActive')) {
        b3_block3 = 'true';
    } else if ($('.b3-op1').hasClass('b3-itemActive') && $('.b3-op2').hasClass('b3-itemActive') && $('.b3-op3').hasClass('b3-itemActive') && $('.b3-op4').hasClass('b3-itemActive') && $('.b3-op5').hasClass('b3-itemActive') && $('.b3-op6').hasClass('b3-itemActive')) {
        b3_block3 = 'true';
    } else {
        alert('Plaese Select An Option');
    }

}
// -------Pop Up--------
$('#close').click(function() {

    $('#popup').css({ "visibility": "hidden" });
    $('body').css({ "overflow": "visible" });
    $('body').css({ "overflow-x": "hidden" });
    $('#bookeo_position').css({ "visibility": "hidden", "height": "0px" });
    $('#smart-button-container').css({ "display": "none" });

});
$('#YourChoice').change(function() {

    var newCheck = $('#YourChoice').val();
    if (newCheck === 'QuizResult') {
        $('#link').css({ "display": "none" });
        $('#Service').css({ "display": "none" });
        $('#price').text('TOTAL: $5');
        $('#miniPop').removeClass('PopTop');
        $('#miniPop').css({ "height": "auto", "overflow-y": "hidden" });
        $('#bookeo_position').css({ "visibility": "hidden", "height": "0px" });

    } else if (newCheck === 'Service_QuizResult_VideoConsult') {
        $('#link').css({ "display": "block" });
        $('#Service').css({ "display": "block" });
        $('#price').text('TOTAL: $125');
        $('#miniPop').addClass('PopTop');
        $('#miniPop').css({ "height": "80vh", "overflow-y": "scroll" });
        $('#bookeo_position').css({ "visibility": "visible", "height": "auto" });

    }

});