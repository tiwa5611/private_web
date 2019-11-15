<!DOCTYPE html>
<html>
    <head>
        <title>Garler</title>
        @include('template.metadata')
        @include('template.stylesheet')
    </head>
    <body id="top">
        <div class="bgded overlay" style="background-image:url('images/backgrounds/bg.png');"> 
            @include('navbar')
            @include('slide')
            @include('btndetail')
        </div>
            @include('mainbody')
            @include('bottomdetail')
            @include('template.javascript')
    </body>
</html>