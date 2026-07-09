<div class="card my-3" style="width: 18rem;">
    @if($product->img)
    <img src="{{Storage::url($product->img)}}" alt="{{$product->name}}" class="img-fluid img-custom">
    @else
    <img src="http://picsum.photos/300" alt="{{'Prodotto senza immagine'}}" class="img-fluid img-custom">
    @endif
  <div class="card-body">
    <h5 class="card-title">{{$product->name}}</h5>
    <p class="card-text">{{$product->description}}</p>
    <p class="card-text"> Il prezzo è {{$product->price}} €</p>
    <a href="#" class="btn btn-primary">Vai al dettaglio</a>
  </div>
</div>