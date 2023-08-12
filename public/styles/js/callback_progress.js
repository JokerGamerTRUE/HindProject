$(window).scroll(function() {
    if (typeof $isset === "undefined") {
        if (window.scrollY >= 350){
            animateValue(76, 0, 1000, 'HTML')
            // animateValue(26, 0, 1000, 'CSS3')
            animateValue(80, 0, 1000, 'JAVA')
            animateValue(45, 0, 1000, 'JAVASCRIPT')
            $isset = 1;
        }
    }
    if (typeof $isset_2 === "undefined") {
        if (window.scrollY >= 1750){
            animateValueService(15, 0, 3500, 'count-works')
            animateValueService(2, 0, 3500, 'count-years')
            animateValueService(10, 0, 3500, 'count-clients')
            animateValueService(3, 0, 3500, 'count-award')
            $isset_2 = 1;
        }
    }
});
