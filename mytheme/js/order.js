// Проверка формы
(function($){
    $(function(){
        $('#contact-order').each(function(){
        // Объявляем переменные (форма и кнопка отправки)
        var form = $(this),
        btn = form.find('.btn_submit-order');

    // Добавляем каждому проверяемому полю, указание что поле пустое
    form.find('.form-control').addClass('empty_field');

    // Функция проверки полей формы
    function checkInput(){
        form.find('.form-control:not(.mail)').each(function(){
            // Если поле не пустое удаляем класс-указание
            if($(this).val() != ''){
            $(this).removeClass('empty_field');
            $(this).parent().addClass('has-success');
            $(this).parent().find('.glyphicon-ok').css('display', 'block');
        }else{
            // Если поле пустое добавляем класс-указание
            $(this).addClass('empty_field');
            $(this).parent().removeClass('has-success');
            $(this).parent().find('.glyphicon-ok').css('display', 'none');
        }

        form.find('.form-control.mail').each(function(){
            var mailfield = $(this);
            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
                if(pattern.test(mailfield.val())){
                    $(this).removeClass('empty_field');
                    $(this).parent().addClass('has-success');
                    $(this).parent().find('.glyphicon-ok').css('display', 'block');
                }else{
                    $(this).addClass('empty_field');
                    $(this).parent().removeClass('has-success');
                    $(this).parent().find('.glyphicon-ok').css('display', 'none');
                }
        });

      });
    }

    // Функция подсветки незаполненных полей
    function lightEmpty(){
        form.find('.empty_field').parent().addClass('has-error');
        form.find('.empty_field').parent().children('.glyphicon-remove').css('display', 'block');
        // Через полсекунды удаляем подсветку
        setTimeout(function(){
        form.find('.empty_field').parent().removeClass('has-error');
        form.find('.empty_field').parent().children('.glyphicon-remove').css('display', 'none');
    },1000);}

    // Проверка в режиме реального времени
    setInterval(function(){
        // Запускаем функцию проверки полей на заполненность
        checkInput();
        // Считаем к-во незаполненных полей
        var sizeEmpty = form.find('.empty_field').size();
        // Вешаем условие-тригер на кнопку отправки формы
        if(sizeEmpty > 0){
            if(btn.hasClass('disabled')){
                return false
        }else{
            btn.addClass('disabled')
        }
        }else{
            btn.removeClass('disabled')
        }
    },500);

    // Событие клика по кнопке отправить
    btn.click(function(){
        if($(this).hasClass('disabled')){
            // подсвечиваем незаполненные поля и форму не отправляем, если есть незаполненные поля
            lightEmpty();
            return false
        }else{
        // Все хорошо, все заполнено, отправляем форму
        }
    });
    });
});
})( jQuery );
jQuery("#contact-order").submit(function(){
    var str = jQuery(this).serialize();
    jQuery.ajax({
        type: "POST",
        url: "../wp-content/themes/myTheme/mail-order.php",
        data: str,
        success: function(msg) {
            if(msg == 'OK') {
                jQuery("#modal-inline").modal("show");
            }
            else {result = msg;}
            jQuery('#note').html(result);
        }
    });
    return false;
});





jQuery(".right .mixing").change(function(){
    if(this.checked){
        jQuery(".right .number").css('display', 'inline-block');
        jQuery(".right .number-text").css('display', 'block');
    }
    else{
        jQuery(".right .number").css('display', 'none');
        jQuery(".right .number-text").css('display', 'none');
    }
});
