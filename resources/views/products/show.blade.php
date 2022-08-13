<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>
<p>Price: {{ $product->price }}</p>

<h2>Seller information</h2>
<p>Name: {{ $product->users->first()->name }}</p>
<p>Email: {{ $product->users->first()->email }}</p>