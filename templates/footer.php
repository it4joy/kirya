			<div class="page-buffer"></div>
		</div>

		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<p>&copy; ООО рыбхоз &laquo;Киря&raquo;, 2016 <br> Все права защищены</p>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-12">
						<p>
							<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,twitter,viber,whatsapp,skype"></div>
						</p>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-12">
						<p>Разработка сайта: <a href="http://profitek.su/" target="_blank">ГК &laquo;Профитек&raquo;</a></p>
					</div>
				</div>
			</div>
		</footer>

		<a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>

		<a href="#callback-form" data-toggle="tooltip" data-placement="left" title="Оставьте свой номер и мы перезвоним!" class="callback-icon fancybox-modal"> <i class="fa fa-phone"></i> </a>

		<div id="callback-form" class="theme-form hidden-block">
			<h5><i class="fa fa-phone fa-heading"></i>Заявка на обратный звонок</h5>
			<form action="php/handler.php" method="post">
				<input type="text" name="name" placeholder="Имя">
				<input type="number" name="phone" placeholder="Номер телефона (цифры)" required>
				<input type="hidden" name="type" value="callback-form">
				<button type="reset" class="btn btn-small btn-blue"><i class="fa fa-eraser"></i>Очистить</button>
				<button type="submit" class="btn btn-small btn-blue callback-form-hook"><i class="fa fa-paper-plane"></i>Отправить</button>
			</form>
		</div>
		
		<div id="order-form" class="theme-form hidden-block">
			<h5 class="text-center"><i class="fa fa-check fa-heading"></i>Заявка</h5>
			<h6 class="current-cat-title text-center"></h6>
			<form action="php/handler.php" method="post">
				<input type="text" name="name" placeholder="Имя" required>
				<input type="number" name="phone" placeholder="Номер телефона (цифры)" required>
				<input type="text" name="product" placeholder="Что вас интересует?">
				<textarea name="comment" placeholder="Комментарий"></textarea>
				<input type="hidden" name="service-category">
				<input type="hidden" name="type" value="order-form">
				<button type="reset" class="btn btn-small btn-blue"><i class="fa fa-eraser"></i>Очистить</button>
				<button type="submit" class="btn btn-small btn-blue order-form-hook"><i class="fa fa-paper-plane"></i>Отправить</button>
			</form>
		</div>

        <div id="pay-fishing-details" class="theme-form hidden-block">
			<h5 class="text-center">Условия платной рыбалки</h5>
			<p class="text-left">С 1 июля 2019 г. открыта платная рыбалка на карпа на следующих условиях:</p>
            <ul class="default-list">
              <li>стоимость - 1000 руб.</li>
              <li>норма вылова - 6 кг.</li>
              <li>время рыбалки: с 04:00 до 19:00</li>
              <li>за рыбу, выловленную сверх нормы, производить оплату по цене 170 руб. за 1 кг.</li>
            </ul>
		</div>

		<!-- jQuery -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

		<!-- fancybox by fancyapps -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

		<!-- twitter-bootstrap -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>		

		<!-- jQuery Validation Plugin -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>
		
		<!-- Yandex Share -->
		<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
		<script src="//yastatic.net/share2/share.js"></script>

		<!-- Custom scripts -->
		<script type="text/javascript" src="js/custom.js"></script>
	</body>
</html>