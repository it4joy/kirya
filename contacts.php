<?php require_once("templates/head.php"); ?>

	<body class="other-pages">
		<?php require_once("templates/header.php"); ?>

			<div class="container bg-white">
				<div class="text-center">
					<h1>Контакты</h1>
				</div>
				
				<div class="fullwidth-block contacts">
					<div id="yandex-map-construct">
						
					</div>

					<div class="row">
						<div class="text-center contacts-heading-wrapper">
							<h3>Наши контакты</h3>
						</div>
						
						<div class="col-md-5 col-sm-4">
							<div class="contacts-details-wrapper">
								<div class="contacts-details">
									<p><strong>Адрес:</strong> 429030 Чувашская Республика, Порецкий р-н, <br> с. Кудеиха, ул. Ленина, д. 100</p>
									<p><strong>Тел.:</strong> <a href="tel:78354323295">(83543) 23-2-95</a>, <a href="tel:+79278539000">+7 927 853-90-00</a></p>
									<p><strong>E-mail:</strong> <a href="mailto:rubxoz@cbx.ru">rubxoz@cbx.ru</a></p>
									<p><i class="fa fa-phone"></i> <a href="#callback-form" class="fancybox-modal">Заказать обратный звонок</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row feedback-wrapper">
					<div class="col-md-8 col-md-offset-2">
						<h3 class="text-center dark-brown-txt">Напишите нам!</h3>
						<p class="text-center">Будем рады получить от вас любую обратную связь. <br> Обязательно ответим на все ваши вопросы и предложения!</p>
						<form action="php/handler.php" method="post" class="theme-form feedback-form">
							<div class="form-wrapper">
								<div class="row">
									<div class="col-md-6">
										<input type="text" name="name" placeholder="Имя *" required>
										<input type="number" name="phone" placeholder="Номер телефона (цифры) *" required>
										<input type="email" name="email" placeholder="E-mail">
									</div>
									
									<div class="col-md-6">
										<textarea name="comment" placeholder="Комментарий"></textarea>
										<input type="hidden" name="type" value="feedback-form">
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-7">
										<p class="note"><sup>*</sup> Поля обязательны для заполнения.</p>
									</div>
									
									<div class="col-md-5">
										<div class="btn-wrapper">
											<button type="reset" class="btn btn-small btn-blue"><i class="fa fa-eraser"></i>Очистить</button>
											<button type="submit" class="btn btn-small btn-blue callback-form-hook"><i class="fa fa-paper-plane"></i>Отправить</button>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>

<?php require_once("templates/footer.php"); ?>