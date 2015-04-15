/**
 * Created by User2 on 3/31/2015.
 */
$(document).ready(function(){
    $('input,textarea,select').focus(function(){
        $(this).data('placeholder',$(this).attr('placeholder'))
        $(this).attr('placeholder','');
    });
    $('input,textarea,select').blur(function(){
        $(this).attr('placeholder',$(this).data('placeholder'));
    });
});