<script type="text/javascript">

        ymaps.ready(init);
        var myMap,
        myPlacemark;

        function init () {
        var myMap = new ymaps.Map('map', {
        center: [<?= $config['longitude'] ?>, <?= $config['latitude'] ?>],
        zoom: 12
    }),

        myPlacemark = new ymaps.GeoObject({
        geometry: {
        type: "Point",
        coordinates: [<?= $config['longitude'] ?>, <?= $config['latitude'] ?>]
    },

        // Data
        properties: {
        hintContent: "<?= $config['title'] ?>",
        balloonContentHeader: "<?= $config['address'] ?>",
    },
    });
        myMap.geoObjects.add(myPlacemark);
    }


    document.addEventListener('DOMContentLoaded', function(){
        init();
    });
</script>