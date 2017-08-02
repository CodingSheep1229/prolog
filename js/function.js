//Document Setting

function menu_ready()
{
	$('#Nav > li').hover(function()
	{
		if(! ($(this).hasClass('current')))
		{
			$('#Nav > li').removeClass('current');
			$("#Nav > li > ul").fadeOut(100);
			$(this).children('ul').fadeIn(100);
			$(this).addClass('current');
		}
	},function()
	{
		
	});
	$("#Nav > li > ul").mouseleave(function()
	{
		$('#Nav > li').removeClass('current');
		$("#Nav > li > ul").fadeOut(100);
	});
}

function rejudge_check()
{
	//jQuery.noConflict();
	$(".rejudge > a").click(function(e)
	{
		var link = this;
		e.preventDefault();
		
		if (confirm('Rejudge it or not?'))
		{
			window.location = link.href;
		}
	});
}

function delete_check()
{
	//jQuery.noConflict();
	$(".delete > a").click(function(e)
	{
		var link = this;
		e.preventDefault();
		
		if (confirm('Delete it or not?'))
		{
			window.location = link.href;
		}
	});
}

jQuery(document).ready(function($)
{
	menu_ready();
	
	rejudge_check();
	
	
	$(".box-title").css({cursor:"pointer"}).click(function()
	{
		$(this).nextAll(".box-text").first().toggle("normal");
	});
	
	$("#login_open").css({cursor:"pointer"}).click(function()
	{
		$("#loginform").first().toggle("normal");
	});
	
	$("math").each(function()
	{
		$(this).replaceWith('<img class="math" src="' + '/cgi-bin/mimetex.cgi?' + $(this).text() +' " alt=" ' + $(this).text()  +' " /> ');
		$(this).load();
	});
	
	$(".activity tr:odd").addClass("odd");
	
	
});
