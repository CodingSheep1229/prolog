<?php
echo form_open('user/register' , $attributes);
   ?>
	  <span>姓名：</span>
      <input name="name" type="text" style="width:250px;" maxlength="32" placeholder="記得輸入本名rrrrr" /><br>
      <span>出生年月日:</span>
      <input name="birthday" type="date" style="width:250px;" maxlength="32"/><br>
      <span>生理性別:</span>
        <input type="radio" name="gender" value="男"> 男
  		<input type="radio" name="gender" value="女"> 女<br>
      <span>電子郵件:</span>
      <input name="email" type="email" style="width:250px;" maxlength="128" placeholder="填學校的或自己的皆可"/><br>
      <span>連絡電話:</span>
      <input name="phone" type="tel" style="width:250px;" maxlength="32" placeholder="Ex: 09XXXXXXXX"/><br>
      <span>緊急聯絡人:</span>
      <input name="emergency_contact" type="text" style="width:250px;" maxlength="9" placeholder="緊急聯絡人的名字"/><br>
      <span>緊急連絡人電話:</span>
      <input name="emergency_phone" type="text" style="width:250px;" maxlength="32" placeholder="Ex: 09XXXXXXXX"/><br>
      <span>與緊急聯絡人的關係:</span>
      <input name="emergency_relation" type="text" style="width:250px;" maxlength="9" placeholder="Ex: 父子/母子/祖孫..."/><br>
      <span>身分證字號:</span>
      <input id='idd' name="id" type="text" style="width:250px;" maxlength="32" placeholder="Ex: 輸入你的身分證字號，保險用的"/><br>
      <span>營服尺寸:</span>
      <select name="size">
      	<option value='XS'>XS</option>
      	<option value='S'>S</option>
      	<option value='M' SELECTED>M</option>
      	<option value='L'>L</option>
      	<option value='XL'>XL</option>
      	<option value='2L'>2L</option>
      	<option value='3L'>3L</option>
      </select>
      <br>	
      <span>特殊食性:</span>
      <input name="eat" type="text" style="width:250px;" maxlength="32" placeholder="有沒有特別不吃什麼的，沒有就填無"/><br>
      <span>備註:</span>
      <input name="other" type="text" style="width:500px;" maxlength="128" placeholder="有什麼想告訴我們的，或是哪幾天不能到都麻煩再這告訴我們：）"/><br>
      
      <input name="Submit" type="submit" style="margin-left:0" value="報名!!!">
  

   <?=form_close()?>
