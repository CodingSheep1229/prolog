<!DOCTYPE>
<html>
<head>
<meta charset="utf-8">

<title>PROLOG</title>
<?php
date_default_timezone_set("Asia/Taipei");
$this->load->helper('url');
$this->load->view('empty.php');

?>
<link rel="stylesheet" type="text/css" href="/operation_skylight/application/views/Prolog.css">
</head>

<body>
<!-- HEAD -->
<?php
echo form_open('user/register' , $attributes);
   ?>
	  <div id="picture-space">
	</div>
	<hr>
	<div id="select-bar">
		<a href="#intro"><div class="btn">簡介</div></a>
		<a href="#schedule"><div class="btn">流程</div></a>
		<a href="#register"><div class="btn">報名</div></a>
		<a href="#pay"><div class="btn">匯款</div></a>
		<a href="#game"><div class="btn">遊戲</div></a>
		<a href="#contact"><div class="btn">聯絡</div></a>
	</div>
	<hr>
	<a class="anchor" name="intro"></a>
	<div id="intro-space">
		<div>簡介</div>
	</div> 
	<hr>
	<a class="anchor" name="schedule"></a>
	<div id="schedule-space">
		<div>流程</div>
	</div>
	<hr>
	<div id="first-footer">
		<div>心動了嗎立即報名之類的~~</div>
	</div>
	<hr>
	<a class="anchor" name="register"></a>
	<div id="register-space">
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
	</div>
	<hr>
	<a class="anchor" name="pay"></a>
	<div id="pay-space">
		<div>匯款</div>
	</div>
	<hr>
	<a class="anchor" name="game"></a>
	<div id="game-space">
		<div>遊戲</div>
	</div>
	<hr>
	<a class="anchor" name="contact"></a>
	<div id="contact-space">
		<div>聯絡</div>
	</div>
   <?=form_close()?>



</body>
<footer>
    <center>copyright © 2017 NTUIM. all rights reserved</center>
</footer>

<script
  src="http://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="/operation_skylight/application/views/Prolog.js"></script>
</html>

<?php
$this->session->set_flashdata('redirect_from', current_url());
?>
