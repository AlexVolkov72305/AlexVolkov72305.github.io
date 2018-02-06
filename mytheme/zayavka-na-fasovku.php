<?
/**
 * Template Name: zayavka-na-fasovku
 */
?>


<?get_header(); ?>
<div class="packing-application-bg">
	<div class="container">
		<div class="row title">
			<div class="col-md-12">
				<p>Заявка на фасовку</p>
				<div class="separator"></div>
				<p class="choose">Выберите из списка основные услуги:</p>
			</div>
		</div>
		<form id="contact-order" action="" method="post">
			<div class="row">
				<div class="col-md-6 left">
					<input type="hidden" name="sub" value="Заявка на фасовку">
					<div class="form-block">
						<div class="checkbox">
						    <label>
						        <input type="checkbox" name="operation" value="Механизированные погрузочно-рагрузочные операции" checked> Механизированные погрузочно-рагрузочные операции
						    </label>
						</div>
					</div>

					<div class="form-block">
						<strong>Фасовка в тару</strong>
						<table class="table">
							<tr>
								<td>
									<div class="radio">
										<label><input type="radio" name="packing_one" value="Менее 5 кг" checked>Менее 5 кг</label>
									</div>
								</td>
								<td>
									<div class="radio">
										<label><input type="radio" name="packing_one" value="От 5 до 10 кг">От 5 до 10 кг</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="radio">
										<label><input type="radio" name="packing_one" value="От 10 до 25 кг">От 10 до 25 кг</label>
									</div>
								</td>
								<td>
									<div class="radio">
										<label><input type="radio" name="packing_one" value="От 25 до 50 кг">От 25 до 50 кг</label>
									</div>
								</td>
							</tr>
						</table>
					</div>

					<div class="form-block">
						<strong>Фасовка в клапанные мешки</strong>
						<table class="table">
							<tr>
								<td>
									<div class="radio">
										<label><input type="radio" name="packing_two" value="по 10 кг" checked>по 10 кг</label>
									</div>
								</td>
								<td>
									<div class="radio">
										<label><input type="radio" name="packing_two" value="по 12 кг">по 12 кг</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="radio">
										<label><input type="radio" name="packing_two" value="по 20 кг">по 20 кг</label>
									</div>
								</td>
								<td>
									<div class="radio">
										<label><input type="radio" name="packing_two" value="по 25 кг">по 25 кг</label>
									</div>
								</td>
							</tr>
						</table>
					</div>

					<div class="form-block">
						<strong>Фасовка в пакеты, автоматическая</strong>
						<table class="table">
							<tr>
								<td>
									<div class="radio">
										<label><input type="radio" name="packing_three" value="по 3 кг" checked>по 3 кг</label>
									</div>
								</td>
								<td>
									<div class="radio">
										<label><input type="radio" name="packing_three" value="по 5 кг">по 5 кг</label>
									</div>
								</td>
							</tr>
						</table>
					</div>

				</div>
				<div class="col-md-6 right">
					<div class="form-block">
						<div class="checkbox">
						    <label>
						        <input type="checkbox" name="mixing" class="mixing"> Смешивание
						    </label>
						    <p class="number-text">Укажите количество компонентов для смешивания:</p>
						</div>

							<div class="btn-group number">
								<button type="button" class="btn btn-default minus">-</button>
								<button type="button" class="btn btn-default"><input type="text" name="number" value="1"/></button>
								<button type="button" class="btn btn-default plus">+</button>
							</div>
					</div>

					<div class="form-block">
						<div class="checkbox">
						    <label>
						        <input type="checkbox" name="laying_one" value="Укладка продукции на палет и запалечивание стрейч-плёнкой (1 палета)" checked> Укладка продукции на палет и запалечивание стрейч-плёнкой (1 палета)
						    </label>
						</div>
					</div>

					<div class="form-block">
						<div class="checkbox">
						    <label>
						        <input type="checkbox" name="laying_two" value="Укладка зафасованной продукции в МКР" checked> Укладка зафасованной продукции в МКР
						    </label>
						</div>
					</div>

					<div class="form-block">
						<div class="checkbox">
						    <label>
						        <input type="checkbox" name="storage" value="Хранение готовой продукции свыше 3-х дней 1 палета/МКР" checked> Хранение готовой продукции свыше 3-х дней 1 палета/МКР
						    </label>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 v-packing">
					<strong>Общий объём фасовки</strong>
					<div class="form-block">
						<div class="radio">
							<label><input type="radio" name="v_packing" value="до 1 тонны" checked>до 1 тонны</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="v_packing" value="от 1 до 19 тонн">от 1 до 19 тонн</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="v_packing" value="от 20 до 69 тонн">от 20 до 69 тонн</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="v_packing" value="от 70 до 138 тонн">от 70 до 138 тонн</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="v_packing" value="свыше 138 тонн">свыше 138 тонн</label>
						</div>
					</div>
				</div>
			</div>
			<div class="row dop">
				<div class="col-md-12">
					<strong>Выберите из списка дополнительные услуги:</strong>
				</div>
				<div class="col-md-6">
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value="Продажа палеты" checked> Продажа палеты
						</label>
					</div>
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value="Продажа МКР/Биг-Бега"> Продажа МКР/Биг-Бега
						</label>
					</div>
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value="Укладка сборной палеты 1шт."> Укладка сборной палеты 1шт.
						</label>
					</div>
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value="Укладка продукции в короба"> Укладка продукции в короба
						</label>
					</div>
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value="Маркировка товара согласно требованиям Заказчика"> Маркировка товара согласно требованиям Заказчика
						</label>
					</div>
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value="Доставка готовой продукции на склад Заказчика"> Доставка готовой продукции на склад Заказчика
						</label>
					</div>
				</div>
				<div class="col-md-6">
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value="Приёмка/отправка ж/д вагонов"> Приёмка/отправка ж/д вагонов
						</label>
					</div>
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value="Погрузо/разгрузочные работы ж/д вагонов"> Погрузо/разгрузочные работы ж/д вагонов
						</label>
					</div>
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value="Консультация по упаковке"> Консультация по упаковке
						</label>
					</div>
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value="Разработка Технических Условий (ТУ) на готовый продукт"> Разработка Технических Условий (ТУ) на готовый продукт
						</label>
					</div>
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value="Разработка дизайна упаковки"> Разработка дизайна упаковки
						</label>
					</div>
					<div class="checkbox">
						<label>
						    <input type="checkbox" name="dop[]" value="Получение сертификатов на готовый продукт"> Получение сертификатов на готовый продукт
						</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<strong>Контактная информация</strong>
				</div>
			</div>
			<div class="row contact-info">
				<div class="col-md-6">
					<div class="form-group">
						<div class="form-group has-feedback">
							<input type="text" name="company_name" class="form-control" placeholder="Наименование компании">
							<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
		                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
		                </div>
					</div>
					<div class="form-group">
						<div class="form-group has-feedback">
							<input type="text" name="company_user" class="form-control" placeholder="Контактное лицо">
							<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
		                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
		                </div>
					</div>
					<div class="form-group">
						<div class="form-group has-feedback">
							<input type="text" name="company_phone" id="contact-phone" class="form-control" placeholder="Контактный телефон">
							<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
		                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
		                </div>
					</div>
					<div class="form-group">
						<div class="form-group has-feedback">
							<input type="email" name="company_email" class="form-control mail" placeholder="Электронная почта">
							<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
		                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
		                </div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<div class="form-group has-feedback">
							<textarea name="company_message" class="form-control" placeholder="Примечание"></textarea>
							<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
		                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
		                </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="text-align: center;">
					<input type="submit" class="btn_submit-order disabled calculate-box-btn" value="Сделать заказ" style="border: none;" />
				</div>
			</div>
		</form>
	</div>
</div>
<? get_footer(); ?>