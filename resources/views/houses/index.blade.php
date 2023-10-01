<x-header></x-header>
<x-hero></x-hero>
@if (Session::has('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">

                <strong> {{ Session::get('msg') }}</strong>.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
@endif

<section class="section property" aria-labelledby="property-label">
    <div class="container">
        <div class="title-wrapper">

            <div>
                <h2 class="section-title headline-small">La mejor casa en tu ciudad</h2>

                <p class="section-text body-large">
                    Encuentra tu hogar
                </p>
            </div>

            <a href="#" class="btn btn-outline">
                <span class="label-medium">Ver más</span>

                <span class="material-symbols-rounded" aria-hidden="true">arrow_outward</span>
            </a>

        </div> 
        <div class="property-list">
            <!-- Card 1 -->
            @foreach ($houses as $house)
            <x-card href="{{url('/houses', $house->id)}}" price="{{$house->price}}" company="{{$house->company}}" address="{{$house->address}}" city="{{$house->city}}" beds="{{$house->beds}}" baths="{{$house->beds}}" square_meters="{{$house->square_meters}}" src="storage/{{$house->cover}}">
            </x-card>
            @endforeach

        </div>
    </div>
</section>

<x-footer></x-footer>