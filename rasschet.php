<!DOCTYPE html>
<html>
  <head>
    <div id="envelope" class="envelope">
   <a class="close-btn" href="javascript:void(0)" onclick = "document.getElementById('envelope').style.display='none';document.getElementById('fade').style.display='none'">Закрыть</a>
     <h1 class="title">Отправить нам сообщение</h1>
      <form method="post" action="mail/sendletter.php">
	<input type="text" name="sender" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'* Ваше Имя':this.value;" value="* Ваше Имя" class="your-name"/>
	<input type="text" name="email" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'* Ваш Email':this.value;" value="* Ваш Email" class="email-address"/>
	<textarea class="your-message">Пожалуйста, введите своё сообщение здесь ..</textarea>
	<input type="submit" name="send" value="Отправить" class="send-message">
      </form>
</div>
   </body>
</html>
