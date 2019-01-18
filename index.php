<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HoroscopeEeEEEEee</title>

    <link rel="stylesheet" href="./styles.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./main.js"></script>
</head>
<body onload="viewHoroscope()">
    <div id="horoscope"></div>
    
    <div class="buttonsContent">
        <form action="./addHoroscope.php" method="POST">
            <input id="birthMf" type="date"></input><br/>
            <button type="button" onClick="addHoroscope()">SAVE</button>
            <button type="button" onClick="deleteHoroscope()">DELETE</button>
            <button type="button" onClick="updateHoroscope()">UPDATE</button>
        </form>
    </div>

    
</body>
</html>