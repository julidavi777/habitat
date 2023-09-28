<x-header></x-header>
<form action="{{url('/houses')}}" method="post" enctype="multipart/form-data">
@method('PATCH')
@csrf

@include('houses.form', ['mode'=>'editar', 'action'=>''])

<x-footer></x-footer>