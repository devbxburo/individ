;
$(() => {
    const
        headerInner = $('.h-inner'),
        menuToggle = $('.menu-toggle button');

    menuToggle.on('click', function() {
        headerInner.toggleClass('active');
    });
});