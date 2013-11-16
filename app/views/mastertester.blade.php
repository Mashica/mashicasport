<!doctype html>
<html lang="en">
<head><meta charset="UTF-8"><title>Mashica Sport</title>
<style>
* { margin: 0; 
    /*padding: 0;*/ 
    border: 0;
    font: 11px/14px Verdana, Arial, Helvetica, sans-serif;
    }
body {
    text-align: center;
    min-width: 500px;
    background-color:#311e22;
    }
#wrapper {
    width: 495px;
    margin: 220px auto;
    text-align: left;
    }
#header {
    width: 495px;
    height: 100px;
    color: #999;
    background-color:#333;
    }
#pagebody {
    width: 495px;
    height: 100px;
    color:#000;
    background-color:#666;
    }
#footer {
    width: 495px;
    height: 100px;
    color:#333;
    background-color:#999;
    }

</style>
</head><body>

<div id="wrapper">

    <div id="header">
        @section('header')
            <p>Something first</p>
            <p>Something second</p>
        @show

    </div>

    <div id="pagebody">
        @yield('pagebody')
    </div>

    <div id="footer">
        @yield('footer')
    </div>


</div>

</body></html>
