$( document ).ready(function() {
    $('.opennav').click(function(){
        $('.sidebar-panel').addClass('activate');
        $('.sidebar-panel').removeClass('unactivate');
        $('.black-overlay').addClass('dark'); 
    });
    
    $('.closeing').click(function(){
       $('.sidebar-panel').addClass('unactivate');
       $('.sidebar-panel').removeClass('activate');
       $('.black-overlay').removeClass('dark');
    });
    
       $('.black-overlay').click(function(){
       $('.black-overlay').removeClass('dark');
       $('.sidebar-panel').addClass('unactivate');
    });
});