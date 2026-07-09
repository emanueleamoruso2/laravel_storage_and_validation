<x-layout>
<header class="header">
<div class="container h-100">
<div class="row justify-content-center align-items-center h-100">
<div class="col-12 col-md-6 d-flex justify-content-center">
<h1 class="text-center">
Benvenuti alla pagina di accesso
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
<form action="{{route('login')}}" method="POST" class="p-4 shadow rounded-4 bg-dark">
@csrf
<div class="mb-3">
<label for="email" class="form-label">Email</label>
<input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="{{old('email')}}" autocomplete="off">
</div>
<div class="mb-3">
<label for="password" class="form-label">Password</label>
<input type="password" class="form-control" id="password" name="password" value="" autocomplete="new-password">
</div>
<button type="submit" class="btn btn-primary">Accedi</button>
</form>
</div>
</div>
</div>
</x-layout>