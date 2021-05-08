			
<?php include("connect.php");
if(!empty($_SESSION['username'])){
print <<<HERE
<div class="row object-non-visible" data-animation-effect="fadeIn">
					<div class="col-md-12">

						<!-- isotope filters start -->
						<div class="filters text-center">
							<ul class="nav nav-pills">
								<li class="active"><a href="#" data-filter="*">Все</a></li>
								<li><a href="#" data-filter=".web-design">Веб-дизайн</a></li>
								<li><a href="#" data-filter=".app-development">Веб-разработка</a></li>
								<li><a href="#" data-filter=".site-building">SEO</a></li>
								<li></li><a href="create-video.php">+</a>
							</ul>
						</div>
						<!-- isotope filters end -->

						<!-- portfolio items start -->
						<div class="isotope-container row grid-space-20">
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-1.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-1">
											<i class="fa fa-search-plus"></i>
											<span>Web Design</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-1">Видео о Веб-дизайне</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-1" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-1-label">Видео о Веб-дизайне</h4>
											</div>
											<div class="modal-body">
												<h3>Информация о видео</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item app-development">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-2.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-2">
											<i class="fa fa-search-plus"></i>
											<span>Открыть видео о разработке</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-2">Видео о Веб-разработке</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-2" tabindex="-1" role="dialog" aria-labelledby="project-2-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-2-label">Видео о Веб-разработке</h4>
											</div>
											<div class="modal-body">
												<h3>Видео о Веб-разработке</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-3.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-3">
											<i class="fa fa-search-plus"></i>
											<span>Web Design</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-3">Правила веб-дизайна</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-3" tabindex="-1" role="dialog" aria-labelledby="project-3-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-3-label">Правила веб-дизайна</h4>
											</div>
											<div class="modal-body">
												<h3>Правила веб-дизайна</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item site-building">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-4.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-4">
											<i class="fa fa-search-plus"></i>
											<span>Site Building</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-4">SEO-продвижение</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-4" tabindex="-1" role="dialog" aria-labelledby="project-4-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-4-label">SEO-продвижение</h4>
											</div>
											<div class="modal-body">
												<h3>SEO-продвижение</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item app-development">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-5.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-5">
											<i class="fa fa-search-plus"></i>
											<span>App Development</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-5">PHP фремворки</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-5" tabindex="-1" role="dialog" aria-labelledby="project-5-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-5-label">PHP фремворки</h4>
											</div>
											<div class="modal-body">
												<h3>PHP фремворки</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-6.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-6">
											<i class="fa fa-search-plus"></i>
											<span>Web Design</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-6">Веб-цвета</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-6" tabindex="-1" role="dialog" aria-labelledby="project-6-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-6-label">Веб-цвета</h4>
											</div>
											<div class="modal-body">
												<h3>Веб-цвета</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item site-building">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-7.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-7">
											<i class="fa fa-search-plus"></i>
											<span>Site Building</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-7">Внутренняя оптимизация</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-7" tabindex="-1" role="dialog" aria-labelledby="project-7-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-7-label">Внутренняя оптимизация</h4>
											</div>
											<div class="modal-body">
												<h3>Внутренняя оптимизация</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>
							
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-8.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-8">
											<i class="fa fa-search-plus"></i>
											<span>Web Design</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-8">Создание дизайна в figma</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-8" tabindex="-1" role="dialog" aria-labelledby="project-8-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-8-label">Создание дизайна в figma</h4>
											</div>
											<div class="modal-body">
												<h3>Создание дизайна в figma</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-9.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-9">
											<i class="fa fa-search-plus"></i>
											<span>Web Design</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-9">Дизайн landing page</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-9" tabindex="-1" role="dialog" aria-labelledby="project-9-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-9-label">Дизайн landing page</h4>
											</div>
											<div class="modal-body">
												<h3>Дизайн landing page</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item site-building">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-10.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-10">
											<i class="fa fa-search-plus"></i>
											<span>Site Building</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-10">Внешняя оптимизация</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-10" tabindex="-1" role="dialog" aria-labelledby="project-10-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-10-label">Внешняя оптимизация</h4>
											</div>
											<div class="modal-body">
												<h3>Внешняя оптимизация</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-11.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-11">
											<i class="fa fa-search-plus"></i>
											<span>Web Design</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-11">Что такое типографика</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-11" tabindex="-1" role="dialog" aria-labelledby="project-11-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-11-label">Что такое типографика</h4>
											</div>
											<div class="modal-body">
												<h3>Что такое типографика</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item app-development">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-12.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-12">
											<i class="fa fa-search-plus"></i>
											<span>App Development</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-12">Язык JavaScript</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-12" tabindex="-1" role="dialog" aria-labelledby="project-12-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Закрыть</span></button>
												<h4 class="modal-title" id="project-12-label">Язык JavaScript</h4>
											</div>
											<div class="modal-body">
												<h3>Язык JavaScript</h3>
												<div class="row">
													<div class="col-md-6">
														<p><span style="color: #55acee; font-weight: 900;">Название: </span>Видео о Веб-дизайне</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во лайков: </span>54 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Кол-во дизлайков:</span> 7 000</p>
														<p><span style="color: #55acee; font-weight: 900;">Дата и время загрузки:</span>16.03.2021 </p>
														<br>
														<p><span style="color: #55acee; font-weight: 900;">Комментарии:</span> <br> <span style="color: #55acee; font-weight: 900;">Текст комментария: </span> Текст текст текст <br><span style="color: #55acee; font-weight: 900;">Имя автора: </span> Иванов Иван<br><span style="color: #55acee; font-weight: 900;">Дату и время:</span> 19.03.2021</p>
														<p><span style="color: #55acee; font-weight: 900;">Описание ролика:</span> </p>
														<p>Значимость этих проблем настолько очевидна, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании дальнейших направлений развития.</p>
									
													</div>
													<div class="col-md-6">
														<video width="500" height="300" controls="controls" poster="video/duel.jpg">

													   <source src="video/Веб дизайн. Рубрика «пара минут» Как быстро вытащить цвет в фотошоп.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
													   Тег video не поддерживается вашим браузером. 
													   <a href="video/duel.mp4">Скачайте видео</a>.
													  </video>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Закрыть</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

						</div>
						<!-- portfolio items end -->
					
					</div>
				</div>
HERE;
}
else{
print <<<HERE
<p><a href="../authert.php#contact">войдите</a> чтобы просмотреть ваши видео</p>
HERE;
}
?>