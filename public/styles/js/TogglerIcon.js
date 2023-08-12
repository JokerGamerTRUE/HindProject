function toggler_icon(){
    if($('.navbar-toggler').hasClass('collapsed') == true){
        $('.navbar-toggler span').html('<i class="fa-solid fa-bars text-white pt-3"></i>')
        // $('#list-nav-items').css('background', 'red')
    }else{
        $('.navbar-toggler span').html('<i class="fa-solid fa-x text-white pt-3"></i>')
        // $('#list-nav-items').css({
        //     "background": "rgb(87, 82, 82, 0.6)"
        // })
        $('#list-nav-items').css('background', 'rgb(87, 82, 82, 0.6)')
    }
}
