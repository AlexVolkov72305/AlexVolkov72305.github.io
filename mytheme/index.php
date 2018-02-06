<? get_header();?>
<div class="do-order-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p>Для уточнения деталей заказа, укажите свой номер телефона, наш менеджер свяжется с вами в ближайшее время</p>
			</div>
			<div class="col-md-6">
				<form id="contact-inline" action="../mail.php" method="post" class="form-inline">
				 	<div id="note-inline"></div>
	                <div id="fields-inline">
	                    <input type="hidden" name="sub" value="Новое письмо">
	                    <div class="form-group has-feedback">
	                        <input type="text" name="username" class="form-control" placeholder="Ваше имя">
	                        <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
	                        <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
	                    </div>
	                    <div class="form-group has-feedback">
	                        <input type="text" name="phone" id="phone-inline" class="form-control" placeholder="Номер телефона">
	                        <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
	                        <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
	                    </div>
	                    <input type="submit" class="btn_submit-inline disabled white-btn" value="Заказать звонок" />
	                </div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="services-bg" id="f1">
	<div class="container">
		<div class="row title">
			<div class="col-md-12">
				<p>Наши услуги</p>
				<div class="separator"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<h3>Упаковка</h3>
				<ul>
					<li>Переупаковка товаров</li>
					<li>Упаковка паллет в стрейч-пленку</li>
					<li>Упаковка штучной продукции</li>
					<li>Упаковка любой групповой продукции различного объема</li>
					<li>Упаковка сыпучих продуктов от 0,5 кг до 1000 кг.</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h3>Грануляция</h3>
				<ul>
					<li>Химические вещества</li>
					<li>Удобрения</li>
					<li>Средств защиты растений</li>
					<li>Кормовые добавки, комбикормы</li>
					<li>Минералы (известь, доломит, магнезию, и тд)</li>
					<li>Сварочные флюсы</li>
					<li>Адсорбенты</li>
					<li>Пигментные красители</li>
					<li>Моющие средства</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h3>Фасовка</h3>
				<ul>
					<li>Фасовка кормов, трав, семян, удобрений</li>
					<li>Фасовка в тубы</li>
					<li>Мобильная фасовка</li>
					<li>Автоматическая фасовка в 3-х шовные пакеты (с логотипом и без) от 500 г. до 5 кг. любых сыпучих продуктов</li>
				</ul>
			</div>
			<div class="col-md-3">
				<h3>Другие услуги</h3>
				<ul>
					<li>Смешивание сыпучих материалов</li>
					<li>Таблетирование металлических порошков и неорганической химии</li>
					<li>Приёмка вагонов, контейнеров, погрузка-разгрузка, хранение</li>
					<li>Укладка в коробку и нанесение на нее даты и другой информации</li>
					<li>Промышленная сушка сыпучих материалов</li>
					<li>Наклейка штрих-кодов на штучную и групповую упаковку</li>
				</ul>
			</div>
		</div>
		<div class="row calculate-box">
			<div class="col-md-12">
				<p>Вы можете заполнить форму с указанием нужных вам услуг, а мы рассчитаем их стоимость и перезвоним вам</p>
				<a href="/zayavka-na-fasovku" class="calculate-box-btn">Рассчитать стоимость</a>
			</div>
		</div>
	</div>
</div>
	
<div class="price-list-bg">
	<div class="container">
		<div class="row title">
			<div class="col-md-12">
				<p>Прайс-лист</p>
				<div class="separator"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="price-box price-bg">
					<p>Фасовка сухих материалов</p>
					<table class="table">
						<tr>
							<td><span>1-5 кг</span></td>
							<td align="right"><span>350</span><i class="fa fa-rub"></i></td>
						</tr>
						<tr>
							<td><span>5-24 кг</span></td>
							<td align="right"><span>450</span> <i class="fa fa-rub"></i></td>
						</tr>
						<tr>
							<td><span>25 кг</span></td>
							<td align="right"><span>500</span> <i class="fa fa-rub"></i></td>
						</tr>
						<tr>
							<td><span>1000 кг</span></td>
							<td align="right"><span>550</span> <i class="fa fa-rub"></i></td>
						</tr>
					</table>
					<p>Цены с НДС руб/тонна</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="price-box price-bg-granul">
					<p>Грануляция</p>
					<span>Цена рассчитывается индивидуально,<br /> в зависимости <br />от сырья, фракции <br />и партии товара</span>
					<a href="#" class="granul-button">Сделать заказ</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="price-box">
					<p>Цены на другие услуги</p>
					<table class="table">
						<tr>
							<td><span>Измельчение <br />материала</span></td>
							<td><span>200</span> <i class="fa fa-rub"></i></td>
						</tr>
						<tr>
							<td><span>Смешение материалов <br /><m>(2 и более компонентов)</m></span></td>
							<td><span>150</span> <i class="fa fa-rub"></i></td>
						</tr>
						<tr>
							<td><span>Таблетирование <br />любых порошков <br /><m>от 0,2 до 2 кг</m></span></td>
							<td><span>350</span> <i class="fa fa-rub"></i></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="download-price"><a href="#" class="white-link">Скачать прайс-лист – PDF, 25 Мб</a></div>
	</div>
	
</div>

<div class="example-bg">
	<div class="container">
		<div class="row title">
			<div class="col-md-12">
				<p>Примеры наших работ</p>
				<div class="separator"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="example-box">
					<p class="title">Групповая упаковка в экологическую <br />пленку с наклейкой этикетки</p>
					<img src="<?= get_template_directory_uri();?>/img/example-1.png" class="img-responsive" alt="Групповая упаковка в экологическую пленку с наклейкой этикетки">
					<div class="info">
						<div>
							<p class="main-title">Групповая упаковка в экологическую <br />пленку с наклейкой этикетки</p>
							<p class="main-descr">Возможный упаковочный материал: полипропилен, термосвариваемый полиэтилен, многослойная пленка. Изготавливаем еврослот.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="example-box">
					<p class="title">Упаковка в пленку <br />с этикеткой</p>
					<img src="<?= get_template_directory_uri();?>/img/example-2.png" class="img-responsive" alt="Упаковка в пленку с этикеткой">
					<div class="info">
						<div>
							<p class="main-title">Упаковка в пленку <br />с этикеткой</p>
							<p class="main-descr">Возможный упаковочный материал: полипропилен, термосвариваемый полиэтилен, многослойная пленка. Изготавливаем еврослот.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="example-box">
					<p class="title">Групповая упаковка в экологическую <br />пленку с наклейкой этикетки</p>
					<img src="<?= get_template_directory_uri();?>/img/example-3.png" class="img-responsive" alt="Групповая упаковка в экологическую пленку с наклейкой этикетки">
					<div class="info">
						<div>
							<p class="main-title">Групповая упаковка в экологическую <br />пленку с наклейкой этикетки</p>
							<p class="main-descr">Возможный упаковочный материал: полипропилен, термосвариваемый полиэтилен, многослойная пленка. Изготавливаем еврослот.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="example-box">
					<p class="title">Термоусадка <br />с листовкой <br />под пленкой</p>
					<img src="<?= get_template_directory_uri();?>/img/example-4.png" class="img-responsive" alt="Термоусадка с листовкой под пленкой">
					<div class="info">
						<div>
							<p class="main-title">Термоусадка <br />с листовкой <br />под пленкой</p>
							<p class="main-descr">Возможный упаковочный материал: полипропилен, термосвариваемый полиэтилен, многослойная пленка. Изготавливаем еврослот.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row calculate-box">
			<div class="col-md-12">
				<p>Оставьте свои данные, мы перезвоним и порекомендуем упаковку для вашего товара</p>
				<a href="#" class="calculate-box-btn" data-toggle="modal" data-target="#myModal">Отправить заявку</a>
			</div>
		</div>
	</div>
</div>

<div class="reason-bg" id="f2">
	<div class="container">
		<div class="row title">
			<div class="col-md-12">
				<p>Причины работать с нами</p>
				<div class="separator"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<ul class="list-unstyled">
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-1.png" alt="Большой опыт по фасовке различных не продовольственных товаров">
						<p>Большой опыт <br />по фасовке различных не продовольственных товаров</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-2.png" alt="Минимальные цены">
						<p>Минимальные цены</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-3.png" alt="Оперативное выполнение фасовочных работ">
						<p>Оперативное выполнение фасовочных работ</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-4.png" alt="Большой парк фасовочного оборудования">
						<p>Большой парк фасовочного оборудования</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-5.png" alt="Нами зафасованно более 500000 т">
						<p>Нами зафасованно более 500000 т</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-6.png" alt="Лаборатория, контролирующая сырье и конечный продукт">
						<p>Лаборатория, контролирующая сырье и конечный продукт</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-7.png" alt="Доставка до заказчика">
						<p>Доставка до заказчика</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-8.png" alt="Cобственное производство">
						<p>Cобственное производство</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-9.png" alt="Нас рекомендуют!">
						<p>Нас рекомендуют!</p>
					</li>
					<li>
						<img src="<?= get_template_directory_uri();?>/img/reason-10.png" alt="Разрабатываем упаковку">
						<p>Разрабатываем упаковку</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="text-align: center;">
				<a href="/zayavka-na-fasovku" class="white-link">Заказать фасовку</a>
			</div>
		</div>
	</div>
</div>

<div class="equipment-bg">
	<div class="container">
		<div class="row title">
			<div class="col-md-12">
				<p>Наше оборудование</p>
				<div class="separator"></div>
			</div>
		</div>

		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				
				<div class="slider">
					<?php echo do_shortcode('[metaslider id="27"]'); ?>
				</div>
				<div class="blog_info">
					<p>Автоматические, полуавтоматическое фасовочное оборудование подойдет для фасовки и упаковки не только специй, но и любых сыпучих продуктов, типа кофе, сахара, соли и т. д.</p>
					<p>Машина упаковывает в трехшовные пакеты («подушка»):</p>
					<ul>
						<li>штучную упаковку такой продукции, как мороженное, глазированные сырки, шоколадные батончики, вата, мыло и т.п.; </li>
						<li>групповую упаковку в ряд или столбиком: вафель, котлет, хлебцев, мыла, губок и т.д.;</li>
						<li>электрокомпоненты, комплектующие, запчасти.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="reviews-bg">
	<div class="container">
		<div class="row title">
			<div class="col-md-12">
				<p>Отзывы наших клиентов</p>
				<div class="separator"></div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6 review">
					<img src="<?= get_template_directory_uri();?>/img/quotes.png" style="float: left; margin-top: -7px; margin-right: 10px;" alt="#"><p>Очень довольны работой этой команды. Мы обращались к ним с не простой задачей: нужно было расфасовать порошок из мешков в банки и сделать это с точностью до грамма. Не смотря на все эти сложности, они сделали все прекрасно. »</p>
					<img class="avatar" src="<?= get_template_directory_uri();?>/img/admin1.png" alt="#">
					<ul>
						<li style="padding-bottom: 10px;">Светлана</li>
						<li>Поставщик</li>
						<li>Reagent Inc</li>
					</ul>
				</div>
				<div class="col-md-6 review">
					<img src="<?= get_template_directory_uri();?>/img/quotes.png" style="float: left; margin-top: -7px; margin-right: 10px;" alt="#"><p>Мы обращались к ним с не простой задачей: нужно было расфасовать порошок из мешков в банки и сделать это с точностью до грамма. Не смотря на все эти сложности, они сделали все прекрасно. »</p>
					<img class="avatar" src="<?= get_template_directory_uri();?>/img/admin2.png" alt="#">
					<ul>
						<li style="padding-bottom: 10px;">Роман</li>
						<li>Закупщик</li>
						<li>Reagent Inc</li>
					</ul>
				</div>
				<div class="col-md-6 review">
					<img src="<?= get_template_directory_uri();?>/img/quotes.png" style="float: left; margin-top: -7px; margin-right: 10px;" alt="#"><p>Очень довольны работой этой команды. Мы обращались к ним с не простой задачей: нужно было расфасовать порошок из мешков в банки и сделать это с точностью до грамма. Не смотря на все эти сложности, они сделали все прекрасно. »</p>
					<img class="avatar"	src="<?= get_template_directory_uri();?>/img/admin3.png" alt="#">
					<ul>
						<li style="padding-bottom: 10px;">Мария</li>
						<li>Поставщик</li>
						<li>Reagent Inc</li>
					</ul>
				</div>
				<div class="col-md-6 review">
					<img src="<?= get_template_directory_uri();?>/img/quotes.png" style="float: left; margin-top: -7px; margin-right: 10px;" alt="#"><p style="margin-bottom: 94px;">Работа выполняется качественно и в указанные сроки, как раз то что нам нужно! »</p>
					<img class="avatar" src="<?= get_template_directory_uri();?>/img/admin4.png" alt="#">
					<ul>
						<li style="padding-bottom: 10px;">Федор Р.</li>
						<li>Закупщик</li>
						<li>Trevel Inc</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<? get_footer();?>