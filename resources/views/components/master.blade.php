<!doctype html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Netflix-Clone') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app" style="background-color: #111">
        <main>
            {{ $slot }}
        </main>
    </div>
    
    <script>
        //runing the youtube with jquery 
         $(document).ready(function(){
        $("body").on("click",".trailer",function(e){
            e.preventDefault();
            
                var name = $(this).data("name");//this get the data-name of the div
                //this run the api to get the videoId
                    $.getJSON("https://www.googleapis.com/youtube/v3/search?part=snippet&q="+name+"&key=Your-Api-Key", function(json) {
                        //this get the videoid
                        const videoId = json.items[0].id.videoId;
                        //this display the youtube view
            $('#log').html("<embed src='http://www.youtube.com/v/"+videoId+"&autoplay=1&fs=1' wmode='transparent' allowfullscreen='true' width='100%' height='390px' class='mt-4 mb-4'></embed>");
            
                    });
                       
        });

    });



    </script>
</body>
</html>
