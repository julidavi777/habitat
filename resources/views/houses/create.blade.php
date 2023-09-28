<x-header></x-header>

<form action="{{url('/houses')}}" method="post" enctype="multipart/form-data">
@csrf

@include('houses.form', ['mode'=>'Añadir', 'action'=>'nuevo'])

<x-footer></x-footer>