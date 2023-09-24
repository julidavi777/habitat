@foreach ($houses as $house)
<x-card
price="{{$house->price}}"
company="{{$house->company}}"
address="{{$house->address}}"
city="{{$house->city}}"
beds="{{$house->beds}}"
baths="{{$house->beds}}"
square_metters="{{$house->square_metters}}"
src="{{$house->cover}}"

>
</x-card>
@endforeach
