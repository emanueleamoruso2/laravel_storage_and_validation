<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($product->img)}}" alt="{{ $product->name ?? 'Prodotto senza immagine' }}">
  <div class="card-body">
    <h5 class="card-title">{{$product->name}}</h5>
    <p class="card-text">{{$product->description}}</p>
    <p class="card-text"> Il prezzo è {{$product->price}} €</p>
    <a href="#" class="btn btn-primary">Vai al dettaglio</a>
  </div>
</div>