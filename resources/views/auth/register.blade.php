<x-layout>
<header class="header">
<div class="container h-100">
<div class="row justify-content-center align-items-center h-100">
<div class="col-12 col-md-6 d-flex justify-content-center">
<h1 class="text-center">
Benvenuti alla pagina di registrazione
</h1>
</div>
</div>
</div>
</header>


@if($errors->any())
    <div class="alert alert-danger text-dark">
        <ul style="list-style-type: disc; padding-left: 10px; color:white">
    @foreach ($errors->all() as $error)
        <li class="text-white">{{ $error }}</li>
    @endforeach
</ul>
    </div>
@endif

<div class="container">
<div class="row mt-5 justify-content-center">
<div class="col-12 col-md-6">
<form action="{{route('register')}}" method="POST" class="p-4 shadow rounded-4 bg-dark">
@csrf
<div class="mb-3">
<label for="email" class="form-label">Email</label>
<input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="" autocomplete="off">
</div>
<div class="mb-3">
<label for="name" class="form-label">Nome</label>
<input type="text" class="form-control" id="name" name="name" value="" autocomplete="off">
</div>
<div class="mb-3">
<label for="password" class="form-label">Password</label>
<input type="password" class="form-control" id="password" name="password" value="" autocomplete="new-password">
</div>
<div class="mb-3">
<label for="password_confirmation" class="form-label">Conferma Password</label>
<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="" autocomplete="new-password">
</div>
<button type="submit" class="btn btn-primary">Registrati</button>
</form>
</div>
</div>
</div>
</x-layout>