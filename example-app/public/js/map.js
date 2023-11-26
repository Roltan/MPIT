function initMap() {
    // тырим масивы из html
    var arrDolg = document.getElementsByName('dolg');
    var arrShir = document.getElementsByName('shir');
    var arrName = document.getElementsByName('name');

    let map = new ymaps.Map("map",
        {
            center: [arrDolg[0].textContent, arrShir[0].textContent],
            zoom: 14,
            controls: ['zoomControl']
        }
    );
    
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
                // стили
            }
        );

        // при клике на неё
        myPlacemark.events.add(['click'],  function () {
            // Создаем мультимаршрут и настраиваем его внешний вид с помощью опций.
            var multiRoute = new ymaps.multiRouter.MultiRoute(
                {
                    referencePoints: [[arrDolg[0].textContent, arrShir[0].textContent],[arrDolg[j].textContent, arrShir[j].textContent]],
                    params: {
                        routingMode: 'pedestrian'
                    }
                }, 
                {
                    // стили
                    wayPointVisible:false,
                    routeActiveMarkerVisible: false,
                    boundsAutoApply: true
                }
            );
            map.geoObjects.add(multiRoute);
        });
        map.geoObjects.add(myPlacemark);
    }
}

ymaps.ready(initMap);