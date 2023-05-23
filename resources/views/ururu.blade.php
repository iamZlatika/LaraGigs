<h1>{{ $heading }}</h1>


@unless (count($ururu) == 0)
    @foreach ($ururu as $u)
        
        <p>{{ $u['description'] }}</p>
    @endforeach
@else
    <p>No listings found</p>
@endunless