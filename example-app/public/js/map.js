function initMap() {
    // тырим масивы из html
    var arrDolg = document.getElementsByName('dolg');
    var arrShir = document.getElementsByName('shir');
    var arrName = document.getElementsByName('name');

    let map = new ymaps.Map("map",
        {
            center: [arrDolg[0].textContent, arrShir[0].textContent],
            zoom: 14,
            controls: ['routePanelControl', 'zoomControl']
        }
    );

    let control = map.controls.get('routePanelControl');

    // корды в текст
    var hotel = ymaps.geocode([arrDolg[0].textContent, arrShir[0].textContent]);
    hotel.then(function (res) {
        let hotelAdress = res.geoObjects.get(0).properties.get('text');

        // настройка маршрута
        control.routePanel.state.set({
            type: 'pedestrian',
            fromEnabled: false,
            from: hotelAdress,
            toEnabled: false
        });
    });
    
    // метка отеля
    var myPlacemark = new ymaps.Placemark(
        [arrDolg[0].textContent, arrShir[0].textContent], 
        // [53.97679414348657,58.42430181816809],
        {
            iconContent: arrName[0].textContent
        }, {
            preset: 'islands#greenStretchyIcon'
        }
    );
    map.geoObjects.add(myPlacemark)
    // метки мест
    for(let j = 1; j < arrDolg.length; j++){
        var myPlacemark = new ymaps.Placemark(
            [arrDolg[j].textContent,arrShir[j].textContent], 
            {
                hintContent: arrName[j].textContent,
            }, 
            {
                
            }
        );

        // при клике на неё
        myPlacemark.events.add(['click'],  function () {
            // корды в текст
            var myReverseGeocoder = ymaps.geocode([arrDolg[j].textContent, arrShir[j].textContent]);
            myReverseGeocoder.then(function (res) {
                let adress = res.geoObjects.get(0).properties.get('text');

                control.routePanel.state.set({
                    to: adress
                });
            });
        });
        map.geoObjects.add(myPlacemark);
    }
}

ymaps.ready(initMap);