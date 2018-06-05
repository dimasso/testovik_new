<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <title>KeepGo</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />

    <meta name="theme-color" content="#3F6EBF" />
    <meta name="msapplication-navbutton-color" content="#3F6EBF" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#3F6EBF" />

    <link rel="shortcut icon" href="/static/img/favicon.ico">
    <link rel="apple-touch-icon" href="/static/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/static/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/static/img/apple-touch-icon-114x114.png">

    <link rel="stylesheet" href="/static/css/style.min.css" type="text/css">

    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Open+Sans:300,400,500','Lato:900', 'Poppins:400', 'Catamaran:300,400,500,600,700'] }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <script type="text/javascript" src="/static/js/device.min.js"></script>

</head>
@yield('layout')

</html>
