<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
    <style>
        video {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 9999;
        opacity: 1;
    }
    </style>
</head>
<body>
    
    <video id="myVideo" width="100%" height="auto" autoplay muted>
        <source src="{{ asset('demarrage.mp4') }}" type="video/mp4">
        Votre navigateur ne supporte pas la balise vidéo.
    </video>

    <script>
        const video = document.getElementById("myVideo");

        video.onended = function() {
            window.location.href = "/login";
        };
    </script>

</body>
</html>




