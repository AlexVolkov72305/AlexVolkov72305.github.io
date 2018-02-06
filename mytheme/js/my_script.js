/*Маска для телефона*/
jQuery(function(){
	jQuery("#phone").mask("+7 (999) 999-99-99");
});
jQuery(function(){
    jQuery("#phone-inline").mask("+7 (999) 999-99-99");
});
jQuery(function(){
    jQuery("#contact-phone").mask("+7 (999) 999-99-99");
});


jQuery("#carousel-example-generic .item:first-child").addClass('active');
jQuery(".carousel-indicators li:first-child").addClass('active');


// Проверка формы
(function($){
    $(function(){
        $('#contact').each(function(){
        // Объявляем переменные (форма и кнопка отправки)
        var form = $(this),
        btn = form.find('.btn_submit');

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
jQuery("#contact").submit(function(){
    var str = jQuery(this).serialize();
    jQuery.ajax({
        type: "POST",
        url: "../wp-content/themes/myTheme/mail.php",
        data: str,
        success: function(msg) {
            if(msg == 'OK') {
                result = '<div class="ok"><img src="img/ok.png"><p class="good">Ваша заявка успешно отправлена</p><p>Она будет рассмотрена в течение трёх рабочих дней, после чего наш менеджер свяжется с вами</p><button type="button" class="reason-btn" data-dismiss="modal">Спасибо</button></div>';
                jQuery("#fields").hide();
                jQuery(".modal-header").hide();
                jQuery(".modal-footer").hide();
            }
            else {result = msg;}
            jQuery('#note').html(result);
        }
    });
    return false;
});



// Проверка формы
(function($){
    $(function(){
        $('#contact-inline').each(function(){
        // Объявляем переменные (форма и кнопка отправки)
        var form = $(this),
        btn = form.find('.btn_submit-inline');

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
jQuery("#contact-inline").submit(function(){
    var str = jQuery(this).serialize();
    jQuery.ajax({
        type: "POST",
        url: "../wp-content/themes/myTheme/mail.php",
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

jQuery(document).ready(function() {
    jQuery('.minus').click(function () {
        var $input = jQuery(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    jQuery('.plus').click(function () {
        var $input = jQuery(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
});

jQuery(document).ready(function(){
    jQuery(".main-nav").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
        //забираем идентификатор бока с атрибута href
        var id  = jQuery(this).attr('href'),
        //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = jQuery(id).offset().top;
        //анимируем переход на расстояние - top за 1500 мс
        jQuery('body,html').animate({scrollTop: top}, 1000);
    });
});

var top_show = 400; // В каком положении полосы прокрутки начинать показ кнопки "Наверх"
  var delay = 1000; // Задержка прокрутки
  jQuery(document).ready(function() {
    jQuery(window).scroll(function () { // При прокрутке попадаем в эту функцию
      /* В зависимости от положения полосы прокрукти и значения top_show, скрываем или открываем кнопку "Наверх" */
      if (jQuery(this).scrollTop() > top_show) jQuery('#top').fadeIn();
      else jQuery('#top').fadeOut();
    });
    jQuery('#top').click(function () { // При клике по кнопке "Наверх" попадаем в эту функцию
      /* Плавная прокрутка наверх */
      jQuery('body, html').animate({
        scrollTop: 0
      }, delay);
    });
  });