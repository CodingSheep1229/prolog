<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8"></meta>
	<title>Prolog</title>
	<?php
date_default_timezone_set("Asia/Taipei");
$this->load->helper('url');
$this->load->view('empty.php');

?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Prolog.css">
</head>

<body>
<?php
echo form_open('user/register' , $attributes);
   ?>
	<div id="picture-space">
		<img id='prolog-pic' src="prolog_text.png">
	</div>
	<div class="container btn-row" id="select-bar">
		<!-- <div class="row btn-row"> -->
		<span class="col-sm-4 col-md-2">
				<span id="select-intro" class="bar-button">&emsp;&emsp;簡介&emsp;&emsp;</span>
		</span>
		<span class="col-sm-4 col-md-2">
				<span id="select-schedule" class="bar-button">&emsp;&emsp;流程&emsp;&emsp;</span>
		</span>
		<span class="col-sm-4 col-md-2">
				<span id="select-register" class="bar-button">&emsp;&emsp;報名&emsp;&emsp;</span>
		</span>
		<span class="col-sm-4 col-md-2">
				<span id="select-pay" class="bar-button">&emsp;&emsp;匯款&emsp;&emsp;</span>
		</span>
		<span class="col-sm-4 col-md-2">
				<span id="select-game" class="bar-button">&emsp;&emsp;遊戲&emsp;&emsp;</span>
		</span>
		<span class="col-sm-4 col-md-2">
				<span id="select-contact" class="bar-button">&emsp;&emsp;聯絡&emsp;&emsp;</span>
		</span>
		<!-- </div> -->
	</div>
	<div class="container btn-row" id="fixed-bar">
		<!-- <div class="row btn-row"> -->
		<span class="col-sm-4 col-md-2">
				<span id="fixed-intro" class="bar-button">&emsp;&emsp;簡介&emsp;&emsp;</span>
		</span>
		<span class="col-sm-4 col-md-2">
				<span id="fixed-schedule" class="bar-button">&emsp;&emsp;流程&emsp;&emsp;</span>
		</span>
		<span class="col-sm-4 col-md-2">
				<span id="fixed-register" class="bar-button">&emsp;&emsp;報名&emsp;&emsp;</span>
		</span>
		<span class="col-sm-4 col-md-2">
				<span id="fixed-pay" class="bar-button">&emsp;&emsp;匯款&emsp;&emsp;</span>
		</span>
		<span class="col-sm-4 col-md-2">
				<span id="fixed-game" class="bar-button">&emsp;&emsp;遊戲&emsp;&emsp;</span>
		</span>
		<span class="col-sm-4 col-md-2">
				<span id="fixed-contact" class="bar-button">&emsp;&emsp;聯絡&emsp;&emsp;</span>
		</span>
		<!-- </div> -->
	</div>
	<!--     <div id="select-bar">
            <a href="#intro" class="btn">
                    <div>簡介</div>
            </a>
            <a href="#schedule" class="btn">
                    <div>流程</div>
            </a>
            <a href="#register" class="btn">
                    <div>報名</div>
            </a>
            <a href="#pay" class="btn">
                    <div>匯款</div>
            </a>
            <a href="#game" class="btn">
                    <div>遊戲</div>
            </a>
            <a href="#contact" class="btn">
                    <div>聯絡</div>
            </a>
    </div>
    <div id="fixed-bar">
            <a id="intron" href="#intro" class="btn">
                    <div>簡介</div>
            </a>
            <a id="schedulen" href="#schedule" class="btn">
                    <div>流程</div>
            </a>
            <a id="registern" href="#register" class="btn">
                    <div>報名</div>
            </a>
            <a id="payn" href="#pay" class="btn">
                    <div>匯款</div>
            </a>
            <a id="gamen" href="#game" class="btn">
                    <div>遊戲</div>
            </a>
            <a id="contactn" href="#contact" class="btn">
                    <div>聯絡</div>
            </a>
    </div> -->
	<a id='intro' class="anchor" name="intro"></a>
	<div id="intro-space">
		<div id="intro-text">
			<!-- -->
		</div>
		<div id="book-btn"></div>
	</div>
	<a id='schedule' class="anchor" name="schedule"></a>
	<div id="schedule-space">
		<div>
			<!-- 流程 -->
		</div>
	</div>
	<div id="first-footer">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				<li data-target="#carousel-example-generic" data-slide-to="3"></li>
				<li data-target="#carousel-example-generic" data-slide-to="4"></li>
				<li data-target="#carousel-example-generic" data-slide-to="5"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="foot1.jpg">
					<div class="carousel-caption">
					</div>
				</div>
				<div class="item">
					<img src="foot2.jpg">
					<div class="carousel-caption">
					</div>
				</div>
				<div class="item">
					<img src="foot3.jpg">
					<div class="carousel-caption">
					</div>
				</div>
				<div class="item">
					<img src="foot4.jpg">
					<div class="carousel-caption">
					</div>
				</div>
				<div class="item">
					<img src="foot5.jpg">
					<div class="carousel-caption">
					</div>
				</div>
				<div class="item">
					<img src="foot6.jpg">
					<div class="carousel-caption">
					</div>
				</div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
		</div>
	</div>
	<a id='register' class="anchor" name="register"></a>
	<div id="register-space">
		<div id='reg'>
			<span>姓名：</span>
			<input name="name" type="text" style="width:18vw;" maxlength="32" placeholder="記得輸入本名rrrrr" />
			<span>出生年月日:</span>
			<input name="birthday" type="date" style="width:11.75vw;" maxlength="32" />
			<br>
			<span>生理性別:</span>
			<input type="radio" name="gender" value="男"> 男
			<input type="radio" name="gender" value="女"> 女
			<br>
			<span>電子郵件:</span>
			<input name="email" type="email" style="width:20vw;" maxlength="128" placeholder="填學校的或自己的皆可" />
			<br>
			<span>連絡電話:</span>
			<input name="phone" type="tel" style="width:20vw;" maxlength="32" placeholder="Ex: 09XXXXXXXX" />
			<br>
			<span>緊急聯絡人:</span>
			<input name="emergency_contact" type="text" style="width:15vw;" maxlength="9" placeholder="緊急聯絡人的名字" />
			<span>緊急連絡人電話:</span>
			<input name="emergency_phone" type="text" style="width:20vw;" maxlength="32" placeholder="Ex: 09XXXXXXXX" />
			<br>
			<span>與緊急聯絡人的關係:</span>
			<input name="emergency_relation" type="text" style="width:18vw;" maxlength="9" placeholder="Ex: 父子/母子/祖孫..." />
			<br>
			<span>身分證字號:</span>
			<input id='idd' name="id" type="text" style="width:25vw;" maxlength="32" placeholder="Ex: 輸入你的身分證字號，保險用的" />
			<br>
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
			<input name="eat" type="text" style="width:47vw;" maxlength="32" placeholder="有沒有特別不吃什麼的，沒有就填無" />
			<br>
			<span>備註:</span>
			<input name="other" type="text" style="width:50vw;" maxlength="128" placeholder="有什麼想告訴我們的，或是哪幾天不能到都麻煩再這告訴我們：）" />
			<br>
			<input id='sub' name="Submit" type="submit" value="報名" style="padding-top: 0vw;">
		</div>
	</div>
	<a id="pay" class="anchor" name="pay"></a>
	<div class="container-fluid" id="pay-space">
		<div class="row" id="pay-text">
			<div class="col-md-4 col-sm-4"></div>
			<div class="col-md-6 col-sm-6">
				<p>
					<br>銀行代號：009
					<br>帳號：6117-50-001813-00 潘美菁
					<br>費用：3500元整
					<br>報名與繳費期限：即日起至8/20
					<br>匯款完成後請將匯款帳號後五碼寄到
					<br>b04101049@NTUIMu.edu.tw 給我們做確認：）
				</p>
			</div>
			<div class="col-md-2 col-sm-2"></div>
		</div>
	</div>
	<a id="game" class="anchor" name="game"></a>
	<div id="game-space">
		<div>
			<!-- 遊戲 -->
		</div>
	</div>
	<a id="contact" class="anchor" name="contact"></a>
	<div class="container-fluid" id="contact-space">
		<div class="row" id="contact-text">
			<div class="col-sm-4 col-md-4 ">
				<a target="_blank" href="https://www.facebook.com/profile.php?id=100000302855014&fref=ts">	
					<img src="yiru.png" class="img-responsive img-circle pic">
				</a>
				<p>隊輔長
					<br>簡翊如
					<br>0989-265-165</p>
			</div>
			<div class="col-sm-4 col-md-4 ">
				<a target="_blank" href="https://www.facebook.com/herofrank?fref=ts">
					<img src="han.png" class="img-responsive img-circle pic">
				</a>
				<p>副召
					<br>陳漢威
					<br>0975-932-702</p>
			</div>
			<div class="col-sm-4 col-md-4 ">
				<a target="_blank" href="https://www.facebook.com/profile.php?id=100002029314996">
					<img src="wei.png" class="img-responsive img-circle pic">
				</a>
				<p>隊輔長
					<br>李和維
					<br>0975-510-169</p>
			</div>
		</div>
	</div>
	   <?=form_close()?>
</body>
<footer>
	<center>copyright © 2017 NTUIM. all rights reserved</center>
</footer>
<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="Prolog.js"></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>

</html>

<?php
$this->session->set_flashdata('redirect_from', current_url());
?>