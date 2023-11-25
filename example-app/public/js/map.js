function initMap() {
    let map = new ymaps.Map("map",
        {
            center: [53.94891463054324,58.42061895480514],
            zoom: 17
        }
    );

    // тырим масивы из html
    var arrDolg = document.getElementsByName('dolg');
    var arrShir = document.getElementsByName('shir');
    var arrName = document.getElementsByName('name');
    
    var myPlacemark = new ymaps.Placemark([arrDolg[0].textContent,arrShir[0].textContent], {}, {
        preset: 'islands#greenStretchyIcon'
    });
    map.geoObjects.add(myPlacemark)
    for(let j = 1; j < arrDolg.length; j++){
        var myPlacemark = new ymaps.Placemark([arrDolg[j].textContent,arrShir[j].textContent], {}, {
            
        });
        map.geoObjects.add(myPlacemark);
    }
}

ymaps.ready(initMap);