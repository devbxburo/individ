;
$(() => {
    ymaps.ready(function() {
        const
            initCoords = [55.753653, 37.621220],
            placeCoords = [55.648570, 37.862139],
            contactingMap = new ymaps.Map("contacting-map-body", {
                center: initCoords,
                zoom: 11,
                controls: []
            }, {
                suppressMapOpenBlock: true
            });
        const initMark = new ymaps.Placemark(initCoords, {}, {
            iconLayout: 'default#image',
            iconImageHref: '/local/templates/main/media/initMark.svg',
            iconImageSize: [100, 100]
        });
        contactingMap.geoObjects.add(initMark);

        const placeMark = new ymaps.Placemark(placeCoords, {}, {
            iconLayout: 'default#image',
            iconImageHref: '/local/templates/main/media/placeMark.svg',
            iconImageSize: [100, 100]
        });
        contactingMap.geoObjects.add(placeMark);
    });
});