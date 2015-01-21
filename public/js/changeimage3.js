$(document).ready(function ()
{
	var change = function()
	{

	var current = ($('div.contain img.show') ? $('div.contain img.show') : $('div.contain img:first'));
	if (!current.length) current = $('div.contain img:first');
	var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('div.contain img:first') : current.next()) : $('div.contain img:first'));
	next.css (
	{
		opacity: 0.0
	})
		.addClass('show')
		.animate(
		{
			opacity: 1.0
		}, 1000);
		current.animate(
		{
			opacity: 0.0
		}, 1000)
			.removeClass('show');

	};

	var roundchange = function() 
	{

	var roundcurrent = ($('div.roundfade_contain img.show') ? $('div.roundfade_contain img.show') : $('div.roundfade_contain img:first'));
	if (!roundcurrent.length) roundcurrent = $('div.roundfade_contain img:first');
	var roundnext = ((roundcurrent.next().length) ? ((roundcurrent.next().hasClass('show')) ? $('div.roundfade_contain img:first') : roundcurrent.next()) : $('div.roundfade_contain img:first'));
	roundnext.css (
	{
		opacity: 0.0
	})
		.addClass('show')
		.animate(
		{
			opacity: 1.0
		}, 1000);
		roundcurrent.animate(
		{
			opacity: 0.0
		}, 1000)
			.removeClass('show');

	};

	var roundchange2 = function() 
	{

	var roundcurrent2 = ($('div.roundfade_contain2 img.show') ? $('div.roundfade_contain2 img.show') : $('div.roundfade_contain2 img:first'));
	if (!roundcurrent2.length) roundcurrent2 = $('div.roundfade_contain2 img:first');
	var roundnext2 = ((roundcurrent2.next().length) ? ((roundcurrent2.next().hasClass('show')) ? $('div.roundfade_contain2 img:first') : roundcurrent2.next()) : $('div.roundfade_contain2 img:first'));
	roundnext2.css (
	{
		opacity: 0.0
	})
		.addClass('show')
		.animate(
		{
			opacity: 1.0
		}, 1000);
		roundcurrent2.animate(
		{
			opacity: 0.0
		}, 1000)
			.removeClass('show');

	};

	var thebackground = function ()
	{
		$('div.contain img').css(
		{
			opacity: 0.0
		});
		$('div.contain img:first').css(
		{
			opacity: 1.0
		});
		setInterval(function () {change()}, 5000);
	}

	var theroundfade = function ()
	{
		$('div.roundfade_contain img').css(
		{
			opacity: 0.0
		});
		$('div.roundfade_contain img:first').css(
		{
			opacity: 1.0
		});
		setInterval(function () {roundchange()}, 5000);
	}

	var theroundfade2 = function ()
	{
		$('div.roundfade_contain2 img').css(
		{
			opacity: 0.0
		});
		$('div.roundfade_contain2 img:first').css(
		{
			opacity: 1.0
		});
		setInterval(function () {roundchange2()}, 5000);
	}

		thebackground();
		$('div.contain').fadeIn(1000); // works for all browsers other than IE
		$('div.contain img').fadeIn(1000); // IE tweak

		theroundfade();
		$('div.roundfade_contain').fadeIn(1000); // works for all browsers other than IE
		$('div.roundfade_contain img').fadeIn(1000); // IE tweak

		theroundfade2();
		$('div.roundfade_contain2').fadeIn(1000); // works for all browsers other than IE
		$('div.roundfade_contain2 img').fadeIn(1000); // IE tweak

});



