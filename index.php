<?php
/*
Theme Name: Wordpress Contact Form
Version: 1.00
Description: Contact form theme for wordpress
Author: igoriankrg@gmail.com
*/
get_header(); ?>
<h1>Добро пожаловать!</h1>
<div class="contact-form__main-page">
<span>
	Данная тема создана чтобы продемонстрировать следующие пункты, которые показывают уровень владения инструментами Worpress:
</span>
	<ul>
		<li>
			Тема содержит шаблон страницы контактной формы
		</li>
		<li>
			Тема реализует элемент иерархии page-$slug.php
		</li>
		<li>
			Контактная форма валидируется регулярными выражениями
		</li>
		<li>
			Для контактного телефона была добавлена маска ввода
		</li>
		<li>
			Контактная форма отправляется с помощью ajax на соответсвующий плагин и показывает ответ от него
		</li>
	</ul>
</div>
<?php get_footer(); ?>
