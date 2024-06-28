<?php require_once("templates/head.php"); ?>

	<body class="index-page">
		<?php require_once("templates/header.php"); ?>

			<div class="container navbar-fixed-top-padding bg-white">
				<div class="row">
					<div class="col-md-12">
						<div id="slider-carousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
								<li data-target="#slider-carousel" data-slide-to="1"></li>
								<li data-target="#slider-carousel" data-slide-to="2"></li>
								<li data-target="#slider-carousel" data-slide-to="3"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<div class="item">
									<img src="img/slider/slide-1-commercial-fish-w1600.jpg" alt="">
									<div class="carousel-caption">
										<h3>Продажа товарной рыбы (опт и розница)</h3>
									</div>
								</div>

								<div class="item">
									<img src="img/slider/slide-2-fish-seed-w1600.jpg" alt="">
									<div class="carousel-caption">
										<h3>Реализация рыбопосадочного материала</h3>
									</div>
								</div>

								<div class="item">
									<img src="img/slider/slide-3-services-w1600.jpg" alt="">
									<div class="carousel-caption">
										<h3>Доставка рыбопосадочного материала</h3>
									</div>
								</div>

                                <div class="item active">
									<img src="img/slider/slide-4-pay-fishing-w1600.jpg" alt="">
									<div class="carousel-caption">
										<h3>
                                            <a href="#pay-fishing-details" class="fancybox-modal">
                                                <i class="fa fa-hand-o-right"></i>
                                                <!-- Платная рыбалка завершена -->
												С 28 июня 2024 г. открывается платная рыбалка
                                            </a>
                                        </h3>
									</div>
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#slider-carousel" role="button" data-slide="prev">
								<i class="fa fa-chevron-left left"></i>
							</a>
							<a class="right carousel-control" href="#slider-carousel" role="button" data-slide="next">
								<i class="fa fa-chevron-right right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="container bg-white commercial-fish-wrapper">
				<div class="text-center">
					<h1 data-cat-title="Товарная рыба">Товарная рыба</h1>
					<h5>опт и розница</h5>
				</div>

				<div class="row commercial-fish">
					<div class="col-md-4">
						<div class="commercial-item">
							<div class="item-bg bg-carp"></div>
							<div class="item-sign">Карп
								<p><a href="#order-form" class="fancybox-modal btn btn-btn-small btn-bordered btn-order" data-product="Карп">Заказать</a></p>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="commercial-item">
							<div class="item-bg bg-tolstolobik"></div>
							<div class="item-sign">Толстолобик
								<p><a href="#order-form" class="fancybox-modal btn btn-btn-small btn-bordered btn-order" data-product="Толстолобик">Заказать</a></p>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="commercial-item">
							<div class="item-bg bg-white-amur"></div>
							<div class="item-sign">Белый амур
								<p><a href="#order-form" class="fancybox-modal btn btn-btn-small btn-bordered btn-order" data-product="Белый амур">Заказать</a></p>
							</div>
						</div>
					</div>
				</div>

				<div class="text-center btn-wrapper">
					<a href="#order-form" class="fancybox-modal btn btn-small btn-blue btn-order btn-index"><i class="fa fa-check"></i> Заказать</a>
				</div>
			</div>

			<div class="container bg-white fish-seed-wrapper">
				<div class="text-center">
					<h1 data-cat-title="Рыбопосадочный материал">Рыбопосадочный материал</h1>
					<h5>реализация годовика и двухлетки</h5>
				</div>

				<div class="row fish-seed">
					<div class="col-md-4">
						<div class="commercial-item">
							<div class="item-bg bg-carp-this-year"></div>
							<div class="item-sign">Карп
								<p><a href="#order-form" class="fancybox-modal btn btn-btn-small btn-bordered btn-order" data-product="Карп">Заказать</a></p>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="commercial-item">
							<div class="item-bg bg-tolstolobik-this-year"></div>
							<div class="item-sign">Толстолобик
								<p><a href="#order-form" class="fancybox-modal btn btn-btn-small btn-bordered btn-order" data-product="Толстолобик">Заказать</a></p>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="commercial-item">
							<div class="item-bg bg-white-amur-this-year"></div>
							<div class="item-sign">Белый амур
								<p><a href="#order-form" class="fancybox-modal btn btn-btn-small btn-bordered btn-order" data-product="Белый амур">Заказать</a></p>
							</div>
						</div>
					</div>
				</div>

				<div class="text-center btn-wrapper">
					<a href="#order-form" class="fancybox-modal btn btn-small btn-blue btn-order btn-index"><i class="fa fa-check"></i> Заказать</a>
				</div>
			</div>

			<div class="container bg-white services-wrapper">
				<div class="fullwidth-block services">
					<div class="text-center">
						<h1>Услуги</h1>
					</div>

					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="services-item">
								<i class="fa fa-shopping-basket"></i>
								<div class="services-item-sign"><a href="commercial-fish.php">Продажа <br> товарной рыбы</a></div>
								<p>(опт и розница)</p>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="services-item">
								<i class="fa fa-shopping-cart"></i>
								<div class="services-item-sign"><a href="fish-seed.php">Реализация рыбо- <br>посадочного материала</a></div>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="services-item">
								<i class="fa fa-truck"></i>
								<div class="services-item-sign"><a href="services.php">Доставка рыбо- <br>посадочного материала</a></div>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="services-item">
								<i class="fa fa-thumbs-o-up"></i>
								<!--<div class="services-item-sign"><a href="services.php">Платная <br> рыбная ловля</a></div>-->
                                <div class="services-item-sign"><a href="#pay-fishing-details" class="fancybox-modal">Платная <br> рыбная ловля</a></div>
								<!--<p>(скоро - уточняйте <a href="contacts.php">по телефону</a>)</p>-->
							</div>
						</div>
					</div>

					<div class="text-center btn-wrapper">
						<a href="services.php" class="btn btn-small btn-blue btn-index">Узнать больше <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>

			<div class="container bg-ochre facts-wrapper">
				<div class="fullwidth-block">
					<div class="text-center">
						<h1>Несколько фактов</h1>
					</div>

					<div class="row facts-in-numbers">
						<div class="col-md-3">
							<div class="spincrement-wrapper">
								<div class="spincrement">> 25 лет</div>
								<span>лет</span>
							</div>
							<div class="number-description">сотрудничаем с ГНУ ВНИИ Ирригационного рыбоводства</div>
						</div>

						<div class="col-md-3">
							<div class="spincrement-wrapper">
								<div class="spincrement">330</div>
								<span>га</span>
							</div>
							<div class="number-description">общая площадь прудов <br> рыбхоза</div>
						</div>

						<div class="col-md-3">
							<div class="spincrement-wrapper">
								<div class="spincrement">~ 100</div>
								<span>тонн</span>
							</div>
							<div class="number-description">товарной рыбы <br> в год</div>
						</div>

						<div class="col-md-3">
							<div class="spincrement-wrapper">
								<div class="spincrement">35</div>
								<span>тонн</span>
							</div>
							<div class="number-description">годовиков племенных гибридных карпов <br> в год</div>
						</div>
					</div>

					<div class="row facts-in-string">
						<div class="col-md-6">
							<div class="string-wrapper">
								<i class="fa fa-star"></i>
								<p>«Киря» - полносистемное рыбоводное предприятие. <br>В рыбхозе функционирует инкубационный цех для получения личинки.</p>
							</div>
						</div>

						<div class="col-md-6">
							<div class="string-wrapper">
								<i class="fa fa-star"></i>
								<p>«Киря» - единственное в Чувашии племенное хозяйство. Породы карпа: «Чувашский чешуйчатый», «Анишский зеркальный».</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container bg-white">
				<div class="fullwidth-block contacts">
					<div id="yandex-map-construct">

					</div>

					<div class="row">
						<div class="text-center contacts-heading-wrapper">
							<h1>Будьте с нами на связи!</h1>
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
			</div>

<?php require_once("templates/footer.php"); ?>
