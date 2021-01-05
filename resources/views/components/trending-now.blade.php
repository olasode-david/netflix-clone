@php
    $trending = count($trendings['results']);
@endphp
<div class="uppercase font-bold text-lg px-2 text-white">
    Trending Now
</div>
<div class="p-4 flex overflow-y-hidden overflow-x-scroll row-posters">
    @for ( $i = 0; $i < $trending; $i++) 
        <img src="https://image.tmdb.org/t/p/original/{{$trendings['results'][$i]['backdrop_path']}}" 
            data-name = '{{$trendings["results"][$i]["title"] ?? $trendings["results"][$i]["name"] }}'
            alt = '{{$trendings["results"][$i]["title"] ?? $trendings["results"][$i]["name"] }}'
            key='{{$trendings["results"][$i]["id"]}}'
            class=" w-full object-contain mr-5 trailer  row-poster" style="max-height:100px">
    @endfor
</div>