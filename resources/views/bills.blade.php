<h1> {{$heading  }}</h1>

@if(count($bills)== 0)
<p>No Bills found</p>

@foreach($bills as $bill)
<h2>{{$bill['title']  }}</h2>
<p>{{$bill['title']  }}</p>

@endforeach