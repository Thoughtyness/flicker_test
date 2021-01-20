<!DOCTYPE html>
<html>
  <head>
    <title>Test Flixker</title>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <link href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" rel="stylesheet"/>
  </head>
  <body>
  <div id="mapid" style="height:100vh;"></div>
    <script type="text/javascript">
      const region=L.tileLayer(
        'https://localhost/flicker_test/response.php?z={z}&x={x}&y={y}',
        //'https://localhost/flicker_test/tiles_with_alpha/{z}-{x}-{y}.png',
        {
          minZoom: 2,
          maxZoom: 5,
          tileSize: 256,
          renderer: L.canvas(),
        }
      );

      let map = L.map('mapid',{
        center: [70,45],
        zoom: 3,
        layers: [region],
      });
    </script>
  </body>
</html>






















































