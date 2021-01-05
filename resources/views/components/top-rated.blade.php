@php
    $topRated = count($topRateds['results']);
@endphp
<div class="uppercase font-bold text-lg px-2 text-white">
    Top rated
</div>
<div class="p-4 flex overflow-y-hidden overflow-x-scroll row-posters">
    @for ( $i = 0; $i < $topRated; $i++) 
        <img src="https://image.tmdb.org/t/p/original/{{$topRateds['results'][$i]['backdrop_path']}}" 
            data-name="{{$topRateds['results'][$i]['name'] ?? $topRateds['results'][$i]['title']}}"
            alt="{{$topRateds['results'][$i]['name'] ?? $topRateds['results'][$i]['title']}}"
            key="{{$topRateds['results'][$i]['id']}}"
            class=" w-full object-contain mr-5 trailer  row-poster" style="max-height:100px">
    @endfor
</div>