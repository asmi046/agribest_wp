<!-- В этом файле описываем все  всплывающие окна -->

<div style="display: none;">
    <div class="box-modal" id="messgeModal">
        <div class="box-modal_close arcticmodal-close"><?_e("закрыть","rubex");?></div>
        
        <div class = "modalline" id = "lineIcon">
        </div>
    
        <div class = "modalline" id = "lineMsg">
        </div>
    </div>
</div> 

<div style="display: none;">
	<div class="box-modal" id="agriwind">
		<div class="box-modal_close arcticmodal-close"><?_e("закрыть","rubex");?></div>
		<h3>Заказать звонок</h3>
		<form action="#" class="reviews__form">
			<div class = "SendetMsg" style = "display:none"> 
				Ваш сообщение успешно отправлено
			</div>
			<div class="headen_form_blk">
				<input type="text" name="name" placeholder="Ваше имя" id="form-namew" class="reviews__form-input input">
				<input type="email" name="email" placeholder="*Email" id="form-emailw" class="reviews__form-input input">
				<input type="tel" name="tel" placeholder="Телефон" id="form-telw" class="reviews__form-input input">
				<button type="submit" class="reviews__form-btn agriwind btn">Отправить</button>
			</div>
		</form> 
	</div>
</div> 