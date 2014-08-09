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

