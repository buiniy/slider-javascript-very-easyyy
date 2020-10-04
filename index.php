<!DOCTYPE html>
<html>
<title>Открытие кейсов brawlstars</title>
<meta charset="utf-8">
<script src="https://pocketmine.ru/donate/js/jquery.min.js?req=1"></script>
<script src="https://www.w3schools.com/lib/w3.js"></script>
<link rel="stylesheet" href="__styles.css" />
<body>
<div class="container">
	<div class="block-one">
		<h2>Слайдер W3.js Кнопочный (Демо)</h2>
			<div class="__m-b40"></div> 
			<span class="__slide-btn" id="__slide-prev">Назад</span>
			<span class="__slide-btn" id="__slide-next">Вперед</span> 
			<div class="__m-b40"></div> 
			<img class="__minecraft_pictures" src="__img/__mc-1.png" width="100%">
			<img class="__minecraft_pictures" src="__img/__mc-2.png" width="100%">
			<img class="__minecraft_pictures" src="__img/__mc-3.png" width="100%">
			<img class="__minecraft_pictures" src="__img/__mc-4.png" width="100%">
			<img class="__minecraft_pictures" src="__img/__mc-5.png" width="100%">
	</div>
	<div class="block-two">
		<h2>Слайдер W3.js Автоматический</h2> Стандартный интервал обновления 1500 ms
			<div class="__m-b40"></div> 
			<img class="__minecraft_pictures2" src="__img/__mc-1.png" width="100%">
			<img class="__minecraft_pictures2" src="__img/__mc-2.png" width="100%">
			<img class="__minecraft_pictures2" src="__img/__mc-3.png" width="100%">
			<img class="__minecraft_pictures2" src="__img/__mc-4.png" width="100%">
			<img class="__minecraft_pictures2" src="__img/__mc-5.png" width="100%">
	</div>
</div>
 <script>
	$(document).ready(function() {
		/// Кнопочный слайдер
		var Slider = w3.slideshow(".__minecraft_pictures",0);
		
		let $button_next, $button_prev;
			$button_prev = $("#__slide-prev");
			$button_next = $("#__slide-next"); 
			
		function updateSliderIndex ( index ) {
			switch(index) {
				case 'prev': Slider.previous(); break;
				case 'next': Slider.next(); break;
			}
		}
		
		// EventHandler
		$button_prev.on('click',function() { updateSliderIndex('prev'); });
		$button_next.on('click',function() { updateSliderIndex('next'); });
		
		
		// Автоматический слайдер
		w3.slideshow(".__minecraft_pictures2", 1500);
	});
  </script>
</body>
</html>