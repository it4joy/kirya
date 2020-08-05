<?php require_once("templates/head.php"); ?>

	<body class="other-pages">
		<?php require_once("templates/header.php"); ?>

			<div class="container bg-white">
				<div class="text-center">
					<h1>Товарная рыба</h1>
					<h5>Рыбхоз «Киря» производит и реализует товарную рыбу</h5>
				</div>

				<div class="fullwidth-block">
					<div class="row">
						<div class="col-md-4">
							<div class="commercial-fish-item">
								<div class="img bg-carp"></div>
								<div class="sign">Карп</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="commercial-fish-item">
								<div class="img bg-tolstolobik"></div>
								<div class="sign">Толстолобик</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="commercial-fish-item">
								<div class="img bg-white-amur"></div>
								<div class="sign">Белый амур</div>
							</div>
						</div>
					</div>
				</div>

				<div class="fullwidth-block fullwidth-shift commercial-fish">
					<div class="row">
						<div class="col-md-12">
							<h5 class="text-center">Подробности</h5>
							<p class="text-left">В настоящее время ООО рыбхоз &laquo;Киря&raquo; принимает заявки на живую рыбу (карп) в количестве не менее 10 кг. по цене 230 руб. за 1 кг.</p>
                            <p class="text-left">Массовая реализация товарной рыбы начнется в сентябре 2020 г.</p>
							<table class="default hidden-block">
								<tr>
									<th>Наименование</th>
									<th>Навеска</th>
									<th>от 1 до 100 кг</th>
									<th>от 100 до 1000 кг</th>
									<th>от 1000 кг</th>
								</tr>
								<tr>
									<td>Карп</td>
									<td>1200-2000 гр</td>
									<td>140 руб/кг</td>
									<td>130 руб/кг</td>
									<td rowspan="3">договорная</td>
								</tr>
								<tr>
									<td>Толстолобик</td>
									<td>2500-3000 гр</td>
									<td>100 руб/кг</td>
									<td>90 руб/кг</td>
								</tr>
								<tr>
									<td>Белый амур</td>
									<td>2000-3000 гр</td>
									<td>160 руб/кг</td>
									<td>150 руб/кг</td>
								</tr>
							</table>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="text-center btn-wrapper">
								<a href="#order-form" class="fancybox-modal btn btn-small btn-blue btn-order" data-product="Товарная рыба"><i class="fa fa-check"></i> Заказать</a>
							</div>
						</div>
					</div>
				</div>

				<div class="fullwidth-block">
					<div class="row">
						<div class="col-md-12">
							<h3 class="text-center dark-brown-txt">Фотогалерея</h3>
							<div class="gallery-wrapper">
								<a href="img/content/commercial-fish/com-fish-1.jpg" rel="commercial-fish-gallery" class="fancybox-modal gallery-item"><img src="img/content/commercial-fish/com-fish-1.jpg"></a>
								<a href="img/content/commercial-fish/karp-zerkal.jpg" rel="commercial-fish-gallery" class="fancybox-modal gallery-item"><img src="img/content/commercial-fish/karp-zerkal.jpg"></a>
								<a href="img/content/commercial-fish/near-coast.jpg" rel="commercial-fish-gallery" class="fancybox-modal gallery-item"><img src="img/content/commercial-fish/near-coast.jpg"></a>
							</div>
						</div>
					</div>
				</div>
			</div>

<?php require_once("templates/footer.php"); ?>
