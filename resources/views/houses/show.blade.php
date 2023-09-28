<x-header></x-header><br>

<br><br><br>

<div class="flex justify-between py-5  ">
    <div class="ms-3 bg-gray-300 rounded-lg p-5 title-large">
        <h2 class="">Hermosa casa en <span class="  text-green-800">{{$house->city}},</span> ven a verla <br> {{$house->address}}</h2>

    </div>
    <div class="flex ">
        <h4><b></b></h4>
        <button class="my-auto   bg-green-500 p-5 me-5 rounded-lg"><i class="fa-brands fa-whatsapp fa-2xl me-2" style="color: #ffffff;"></i><b class="text-white">Compartir</b></button>
    </div>
</div>

<x-show.carousel> </x-show.carousel>

<div class="grid grid-cols-4 gap-4">
  <div class=" p-3 rounded-lg text-white col-span-2 bg-green-800 mb-5 ms-3">
  <h2 class="text-4xl" >Descripción</h2><br>
    <b>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum sunt aliquam commodi, incidunt nostrum ad labore consequuntur in, eius dolor molestias deserunt est pariatur amet?
    </b>
    <div class="card-meta-list">

<div class="meta-item">
    <span class="material-symbols-rounded meta-icon" aria-hidden="true">bed</span>

    <span class="meta-text label-medium">{{$house->beds}} camas</span>
</div>

<div class="meta-item">
    <span class="material-symbols-rounded meta-icon" aria-hidden="true">bathtub</span>

    <span class="meta-text label-medium"> {{$house->baths}} baños</span>
</div>

<div class="meta-item">
    <span class="material-symbols-rounded meta-icon" aria-hidden="true">straighten</span>

    <span class="meta-text label-medium">{{$house->square_meters}} m² </span>
</div>

</div>
  </div>
  <div></div>
  <div class=" p-3 rounded-lg  col-span-1 bg-gray-200 mb-5 me-3">

   <button class=" mx-auto p-3 rounded-lg text-white bg-green-500 "><i class="fa-sharp fa-solid fa-phone" style="color: #fff;" ></i> <b>Ver Telefono</b></button><br>
  <button class=" mx-auto p-3 rounded-lg text-white bg-green-500 "><i class="fa-brands fa-whatsapp fa-2xl me-2" style="color: #ffffff;"></i> <b>Contactar </b></button><br>
  
  <div class="text-3xl align-items-center text-center" ><b class="" >Precio: <i class="fa-solid fa-dollar-sign" style="color: #22C55E" ></i>{{ number_format($house->price, 0, '.') }}</b> </div> <br>
  </div>
  
</div><br>
<x-footer></x-footer>
