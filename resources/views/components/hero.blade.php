<section class="hero">
  <main>
    <article>

      <!-- 
        - #HERO
      -->

        <div class="container">

          <div class="hero-content">

            <h1 class="headline-large hero-title">Propiedades que te brindan más que un espacio </h1>

            <p class="body-large hero-text">
             Si buscas más que un espacio, Aquí encontraras el lugar que se siente mejor que en casa.
            </p>

            <form action="./" method="get" class="search-bar">

              <label class="search-item">
                <span class="label-medium label">Quieres</span>

                <select name="want-to" class="search-item-field body-medium">
                  <option value="buy" selected>Comprar</option>
                  <option value="sell" >Vender</option>
                  <option value="rent" >Rentar</option>
                </select>

                <span class="material-symbols-rounded" aria-hidden="true">real_estate_agent</span>
              </label>

              <label class="search-item">
                <span class="label-medium label">Tipo de propiedad</span>

                <select name="property-type" class="search-item-field body-medium">
                  <option value="any" selected>cualquiera</option>
                  <option value="houses" >Casas</option>
                  <option value="apartments" >Apartmentos</option>
                  <option value="villa" >Casa rural</option>
                  <option value="townhome" >Residencial</option>
                  <option value="bungalow" >cabaña</option>
                  <option value="loft" >Loft</option>
                </select>

                <span class="material-symbols-rounded" aria-hidden="true">gite</span>
              </label>

              <label class="search-item">
                <span class="label-medium label">ubicación</span>

                <input type="text" name="location" placeholder="Carrera, Ciudad ..." class="search-item-field body-medium">

                <span class="material-symbols-rounded" aria-hidden="true">location_on</span>
              </label>

              <button type="submit" class="search-btn">
                <span class="material-symbols-rounded" aria-hidden="true">search</span>

                <span class="label-medium">Buscar</span>
              </button>
            </form>

          </div>

          <img src="{{asset('images/hero.png')}}" width="816" height="659" role="presentation" class="hero-banner">

          <img src="{{asset('images/bg-pattern.png')}}" width="1240" height="840" role="presentation" class="bg-pattern">

        </div>
      </section>

