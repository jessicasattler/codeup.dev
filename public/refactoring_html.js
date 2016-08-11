<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        #my-map {
            width: 750px;
            height: 500px;
            border: 1px solid black;
            margin: 1.5em 0;
        }

        button {
            margin: 0 10px;
            background: navy;
            color: white;
            padding: 10px 15px;
            font-size: 1.3em;
        }
    </style>
</head>
<body>

<h1>Google Maps Api</h1>

<select id="change-zoom">
    <option disabled selected>Change Zoom Level</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
</select>



<div id="my-map"></div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArxbeIFcfsS3T7B2B6wwN7U2tgqqKVP_Q"></script>
<script src="/js/google-maps.js"></script>

</body>
</html>