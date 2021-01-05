<x-master>

    <div class="">
        
        @include('header_row.navbar')
        <!-- header banner -->
            <x-header-banner :netflixOriginals=$netflixOriginals :times=$times  />
        <!-- ending -->
        
        <div class="ml-6">
            <!-- netflix originals -->
                <x-netflix-original :netflixOriginals=$netflixOriginals />            
            <!-- ending of netflix originals --> 
            
            <!-- youtube views -->
            <div id="log">

            </div>
            <!-- ending -->

            <!--  Trending --> 
                <x-trending-now :trendings=$trendings />
            <!-- ending of Trending --> 

            <!-- Top rated --> 
                <x-top-rated :topRateds=$topRateds />
            <!-- ending  --> 

            <!-- Action --> 
                <x-action-movies :actionMovies=$actionMovies />
            <!-- ending  --> 

            <!-- comedy --> 
                <x-comedy-movies :comedyMovies=$comedyMovies /> 
            <!-- ending  --> 

            <!-- Horror--> 
                <x-horror-movies :horrorMovies=$horrorMovies />
            <!-- ending -->

            <!-- romance--> 
                <x-romance-movies :romanceMovies=$romanceMovies />
            <!-- ending  --> 

            <!-- Documentaries -->
                <x-documentaries :documentaries=$documentaries />
            <!-- ending --> 

        </div>

    </div>
   
    
</x-master>







