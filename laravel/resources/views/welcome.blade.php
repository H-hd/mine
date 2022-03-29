<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello</title>
</head>
<body onload="refresh()">
<div id="time">

</div>
</body>
<script>
    function refresh() {
        setTime(time)
        setInterval('setTime(time)', 1000)
    }

    function setTime(time) {
        var d = new Date();
        var year = d.getFullYear();
        var month = d.getMonth() + 1;
        var date = d.getDate();
        var hour = (d.getHours() < 10) ? ("0" + d.getHours()) : d.getHours();
        var min = (d.getMinutes() < 10) ? ("0" + d.getMinutes()) : d.getMinutes();
        var sec = (d.getSeconds() < 10) ? ("0" + d.getSeconds()) : d.getSeconds();
        var now = year + "-" + month + "-" + date + " " + hour + ":" + min + ":" + sec;
        time.innerHTML = now;
    }

</script>
</html>
