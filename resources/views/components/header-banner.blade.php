<header style="background-size:cover;
        background-image: url('https://image.tmdb.org/t/p/original/{{$netflixOriginals["results"][$times]["backdrop_path"]}}');
        background-position:center center;
        height:448px;" class="text-white object-contain relative">

    <div class="ml-6" style="padding-top:140px; height:190px">
        <h1 class="pb-2 font-semibold text-5xl">
            {{$netflixOriginals["results"][$times]["name"]}}
        </h1>
        <div>
            <button class="cursor-pointer text-white focus:outline-none border-0 font-semibold px-8 mr-4 py-2 bg-love">
                Play
            </button>
            <button class="cursor-pointer text-white focus:outline-none border-0 font-semibold px-8 mr-4 py-2 bg-love">
                My List
            </button>
        </div>

        <div class="pt-4 text-sm describtion">
                        
            {{ Str::length($netflixOriginals["results"][$times]["overview"]) > 150 ? substr($netflixOriginals["results"][$times]["overview"],0, 150 - 1)."..." : $netflixOriginals["results"][$times]["overview"] }}
                            
        </div>
    </div>
                
    <div class="banner--fadebutton" style="position:absolute; bottom:0;"></div>

</header>