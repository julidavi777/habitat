@props(['price', 'company', 'address', 'city','beds','baths','square_meters', 'id'])
<div class="card">

    <div class="card-banner">

        <figure class="img-holder" style="--width: 585; --height: 390;">
            <img {{$attributes }} height="390" class="img-cover">
        </figure>

        <!-- <span class="badge label-medium">Nuevo</span> -->

        <button class="icon-btn fav-btn" aria-label="add to favorite" data-toggle-btn>
            <span class="material-symbols-rounded" aria-hidden="true">favorite</span>
        </button>

    </div>

    <div class="card-content">
    <a  {{$attributes }} class="title-small card-title"> <span class="title-large">{{$company}}</span></a>

        <h3>
            {{$price}}
        </h3>

        <address class="body-medium card-text">
            {{$address}} {{$city}}
        </address>

        <div class="card-meta-list">

            <div class="meta-item">
                <span class="material-symbols-rounded meta-icon" aria-hidden="true">bed</span>

                <span class="meta-text label-medium">{{$beds}} camas</span>
            </div>

            <div class="meta-item">
                <span class="material-symbols-rounded meta-icon" aria-hidden="true">bathtub</span>

                <span class="meta-text label-medium"> {{$baths}} baños</span>
            </div>

            <div class="meta-item">
                <span class="material-symbols-rounded meta-icon" aria-hidden="true">straighten</span>

                <span class="meta-text label-medium">{{$square_meters}} m² </span>
            </div>

        </div>

    </div>

</div>