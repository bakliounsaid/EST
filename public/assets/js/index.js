$('.side-menu-togller').on('click', () => {
    $('#collapseSideBar').toggleClass('collapsed')
});

$('#closeSidebar').on('click', () => {
    $('#collapseSideBar').toggleClass('collapsed')
});

// $(window).on('resize', function () {
//     var width = $(window).width();
//     if (width <= 990)
//         $('#collapseSideBar').addClass('collapsed')
//     else
//         $('#collapseSideBar').removeClass('collapsed')
// })
