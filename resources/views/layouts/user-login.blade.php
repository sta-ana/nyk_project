<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ $title }}</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    @livewireStyles

</head>

    <style>
    .background{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        min-height: 100vh;
        background-image: url('/bg.jpg');
        background-size: cover;
        z-index: -1;
        filter: blur(1.50px) brightness(50%);
        transform: scale(1.1); 
    }
    </style>

<body>
    <div id="layoutAuthentication">
        
        <div id="layoutAuthentication_content">
            
    <div class="background"></div>
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    @livewireScripts
</body>

</html>
