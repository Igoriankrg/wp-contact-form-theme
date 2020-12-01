<?php
/*
Template Name: Страница с контактной формой
*/
get_header();
?>
	<div id="content">
		<h1> Свяжитесь со мной </h1>
		<form id="contact-form" method="post" autocomplete="on">
			<p>
				<label for="phone" class="iconic user"> Ваш номер телефона <span class="required">*</span></label>
				<input type="text" name="phone" id="phone" required="required" placeholder="7(777)777-77-77"/>
			</p>

			<p>
				<label for="email" class="iconic mail-alt"> Ваш Email <span class="required">*</span></label>
				<input type="email" name="email" id="email" placeholder="email@mail.com" required="required"/>
			</p>

			<p class="indication"> Все поля отмеченные <span class="required">*</span> являются обязательным</p>

			<input type="submit" value="Отправить заявку!"/>
		</form>
	</div>
<?php
get_footer();
?>