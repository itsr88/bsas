$(function()	{
    //при нажатии на ячейку таблицы с классом edit
    $('.edit').click(function(){
//находим input внутри элемента с классом ajax и вставляем вместо input его значение
        $('.ajax').html($('.ajax input').val());
//удаляем все классы ajax
        $('.ajax').removeClass('ajax');
//Нажатой ячейке присваиваем класс ajax
        $(this).addClass('ajax');
//внутри ячейки создаём input и вставляем текст из ячейки в него
        $(this).html('<input id="editbox" size="'+ $(this).text().length+'" type="text" value="' + $(this).text() + '" />');
//устанавливаем фокус на созданном элементе
        $('#editbox').focus();
    });
});





$('.edit').on('focusout', function(){

    var project_id = $(this).parent().attr('id');
    var field_name = $(this).attr('data-name');
    var value = $('.ajax input').val();





    // $('#editbox').live('blur',function(){
    //     $('.ajax').html($('.ajax input').val());
    //     $('.ajax').removeClass('ajax');
    // });


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $.ajax({
        type: "POST",
        url: "/project/ajaxupdate/",
        dataType: 'json',
        data: {
            'project_id' : project_id,
            'field_name' : field_name,
            'value' : value,
        },
        //при удачном выполнении скрипта, производим действия
        success: function(){
            alert('Привет');
            //находим input внутри элемента с классом ajax и вставляем вместо input его значение
            $('.ajax').html($('.ajax input').val());
            //удаялем класс ajax
            $('.ajax').removeClass('ajax');
        }});
});

