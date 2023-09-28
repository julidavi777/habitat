<br><br><br><br><br><br><br><br>
@if (Session::has('alert'))
<h1>{{$mode.' '.$action}} Casas</h1>
<div class="alert alert-danger alert-dismissible fade show" role="alert">

    <strong> {{ Session::get('alert') }}</strong>.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<input type="text" name="price" placeholder="precio" >
<input type="text" name="company" placeholder="inmobiliaria / vendedor" >
<input type="text" name="address" placeholder="dirección " >
<input type="text" name="city" placeholder="vendedor" >
<input type="number" name="beds" placeholder="camas" >
<input type="number" name="baths" placeholder="baños " >
<input type="text" name="square_meters" placeholder="m²" >
<input type="file" name="cover">
<button  class="rounded-lg p-3 bg-yellow-600 text-white" >{{$mode}}</button>
@if($mode == 'editar')
</form>
<form action="/houses/{{$house->id}}" method="post">
@method('DELETE')
@csrf
    <button class="rounded-lg p-3 bg-red-600 text-white">Eliminar</button>
</form>
@endif

<br><br><br><br><br><br><br><br>
