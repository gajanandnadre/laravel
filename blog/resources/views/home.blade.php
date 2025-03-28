<h1> This is home page  </h1>
<!-- <h1> {{$name}} </h1> -->
<!-- <h1> {{$users[0]}} </h1> -->

@if($name === 'gajanand')
<h2>this is gajanand </h2>
@elseif($name === 'datta')
<h2>this is datta</h2>
@else
<h2>this is other user </h2>
@endif