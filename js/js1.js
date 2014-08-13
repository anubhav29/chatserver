/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$("document").ready(function(){
    $("#get-started").click(function(){
        $('html, body').animate({
            scrollTop: $('#login-section').offset().top
        }, '15000');
    });
    $("#main-section li a:first").click(function(){
    		$('html, body').animate({
                scrollTop: $('#about-us').offset().top
            }, '15000');
    });
    $("#main-section li a:eq(1)").click(function(){
		$('html, body').animate({
            scrollTop: $('#contact-us').offset().top
        },'50000','linear');
    });
    $("#main-section li a:last").click(function(){
		$('html, body').animate({
            scrollTop: $('#feedback').offset().top
        },'50000','linear');
    });
    $("#needAnAccount").click(function(e){
        e.preventDefault();
        $("#sign-in-form").slideUp(1000);
        $("#sign-up-form").slideDown(1000);
    });
    
    $("#login").click(function(e){
        e.preventDefault();
        $("#sign-up-form").slideUp(1000);
        $("#sign-in-form").slideDown(1000);
    });
});

