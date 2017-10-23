$(document).ready(function(){
    $('#add-message').click(function(){
        // alert('sd')
        $('.message').slideDown(300);
        $(this).hide();
    })
    $('#add-time').click(function(){
        // alert('sd')
        $('.time-date').slideDown(300);
        $(this).hide();
    })
});
