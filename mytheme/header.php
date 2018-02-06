<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fasovkin</title>

    <!-- Bootstrap -->
    <link href="<?= get_template_directory_uri();?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?= get_template_directory_uri();?>/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php echo wp_head(); ?>
</head>
<body>
<div id="top">
    <span class="fa-stack fa-lg">
        <i class="fa fa-circle fa-stack-2x"></i>
        <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
    </span>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="contact" action="../mail.php" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Заказать звонок</h4>
                </div>
                <div class="modal-body">
                    <div class="form_box">
                        <div id="note"></div>
                        <div id="fields">
                            <input type="hidden" name="sub" value="Новое письмо">
                            <div class="form-group has-feedback">
                                <input type="text" name="username" class="form-control" placeholder="Имя">
                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Телефон">
                                <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                                <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    <input type="submit" class="btn_submit disabled btn-primary" value="Отправить" />
                </div>
            </div>
        </form>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modal-inline" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="ok">
                    <img src="<?= get_template_directory_uri();?>/img/ok.png">
                    <p class="good">Ваша заявка успешно отправлена</p>
                    <p>Она будет рассмотрена в течение трёх рабочих дней, после чего наш менеджер свяжется с вами</p>
                    <button type="button" class="reason-btn" data-dismiss="modal">Спасибо</button>
                </div>
            </div>
        </div>
    </div>
</div>


<header class="header-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-2 logo">
                <a href="<?=home_url();?>">Fasovkin.ru</a>
            </div>
            <div class="col-md-5 navbar">
                <?if (is_page(6)){?>
                    <nav class="main-nav">
                        <ul class="list-unstyled">
                            <li><a href="#f1">Услуги</a></li>
                            <li><a href="#f2">Заказ фасовки</a></li>
                            <li><a href="#f3">Контакты</a></li>
                        </ul>
                    </nav>
                <?}else{?>
                    <nav>
                        <ul class="list-unstyled">
                            <li><a href="<?=home_url();?>#f1">Услуги</a></li>
                            <li><a href="<?=home_url();?>#f2">Заказ фасовки</a></li>
                            <li><a href="<?=home_url();?>#f3">Контакты</a></li>
                        </ul>
                    </nav>
                <?}?>
            </div>
            <div class="col-md-3 phone">
                <a href="tel:+74956486904">+7 (495) 648-69-04</a>
            </div>
            <div class="col-md-2 white-btn-box">
                <a href="#" class="white-btn" data-toggle="modal" data-target="#myModal">Заказать звонок</a>
            </div>
        </div>
        
            <div class="row title">
                <div class="col-md-7">
                    <p>Упакуем любые виды товаров,</p>
                    <span>на современном оборудовании и в короткий срок</span>
                    <div class="separator"></div>
                </div>
            </div>  
            <div class="row descr">
                <div class="col-md-5">
                    <p>Мы оказываем услуги по грануляции, дроблению, смешиванию, фасовки, брикетированию, упаковке сыпучей продукции более 10 лет, имеем большой опыт в данной области и успели зарекомендовать себя профессиональным и надёжным партнером.</p>
                </div>
            </div>
       
    </div>
</header>