<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ url('frontend/css/produk.css') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.7/css/all.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish&display=swap"
      rel="stylesheet"
    />
    <script src="js/main.js" crossorigin="anonymous"></script>
    <title>Document</title>
  </head>
  <body class="body">
    <div class="header">
      @include('../includes/navbar')
    </div>

    <section class="section-hero">
      <div class="container-hero">
        <div class="flexbox-hero">
          <div class="right-block-hero">
            <img class="image-hero" src="frontend/image/Image.png" />
          </div>
          <div class="left-block-hero">
            <h2 class="hero-heading">Happy Meat Product</h2>
            <p class="hero-paragraf">
              Happy Meat menyediakan berbagai produk beku seperti daging sapi,
              daging bagian daging sapi, daging sapi olahan, dll. Dengan
              dedikasi yang tinggi kami terus berkomitmen untuk memberikan
              produk yang berkualitas dengan harga yang terjangkau
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-product">
      <div class="container-product">
        <h1 class="heading-section-product">Product terbaru</h1>
        <!-- <p class="section-product-description">
          Project Discussions, important documents and get to know the news
          project earlier. Its easy to use and has a good Interface and
          comfortable with all good services.
        </p> -->
        <div class="filter-container">
          {{-- <div class="category-head">
            <ul>
              <div class="category-title active" id="all">
                <li>All</li>
              </div>
              <div class="category-title" id="rib">
                <li>Rib</li>
              </div>
              <div class="category-title" id="tenderloin">
                <li>Tenderloin</li>
              </div>
              <div class="category-title" id="chunk">
                <li>Chunk</li>
              </div>
            </ul>
          </div> --}}
          <div class="product-grid">
            @foreach ($items as $item)
              <div href="/detail-product" class="product-card rib">
                <div class="card-thumbnail-product-1" style="background-image: url('{{ $item->galleries->count() ? Storage::url
                  ($item->galleries->first()->image) : '' }}')">
                  <span class="category-name">{{ $item->type }}</span>
                </div>
                <div class="card-content-product">
                  <h2 class="heading-card-product">
                    <a href="{{ route('detail_produk', $item->slug) }}">{{ $item->title }}</a>
                  </h2>
                  <p class="caption-card">
                    {{ $item->about }}
                    </p>
                  <div class="price-cart-card">
                    <div class="price-card">Rp {{ $item->price }}</div>
                    <div>
                      <a href="{{ route('detail_produk', $item->slug) }}" class="buy"
                        >Beli</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            {{-- <div href="/detail-product" class="product-card rib">
              <div class="card-thumbnail-product-1" style="background-image: url(frontend/image/daging/Image.png)">
                <span class="category-name">Rib</span>
              </div>
              <div class="card-content-product">
                <h2 class="heading-card-product">
                  <a href="/detail-product">Boneless prime rib | Miyazakgyu Japanese Wagyu</a>
                </h2>
                <p class="caption-card">
                    There are 10 secret tips that you have to know for managing
                    your team remotely.
                  </p>
                <div class="price-cart-card">
                  <div class="price-card">Rp.290000/kg</div>
                  <div>
                    <a href="mycart" class="buy"
                      ><i class="fas fa-shopping-cart"></i>Add</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div href="/detail-product" class="product-card w-inline-block">
              <div class="card-thumbnail-product-2" style="background-image: url(frontend/image/daging/Image-1.png)"></div>
              <div class="card-content-product">
                <h2 class="heading-card-product">
                  <a href="/detail-product">Boneless prime rib | Miyazakgyu Japanese Wagyu</a>
                </h2>
                <p class="caption-card">
                    There are 10 secret tips that you have to know for managing
                    your team remotely.
                  </p>
                <div class="price-cart-card">
                  <div class="price-card">Rp.290000/kg</div>
                  <div>
                    <a href="mycart" class="buy"
                      ><i class="fas fa-shopping-cart"></i>Add</a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="product-card w-inline-block">
              <div class="card-thumbnail-product-3" style="background-image: url(frontend/image/daging/Image-2.png)"></div>
              <div class="card-content-product">
                <h2 class="heading-card-product">
                    <a href="/detail-product">Boneless prime rib | Miyazakgyu Japanese Wagyu</a>
                  </h2>
                  <p class="caption-card">
                      There are 10 secret tips that you have to know for managing
                      your team remotely.
                    </p>
                <div class="price-cart-card">
                  <div class="price-card">Rp.290000/kg</div>
                  <div>
                    <a href="/mycart" class="buy"
                      ><i class="fas fa-shopping-cart"></i>Add</a
                    >
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
        <div class="button-loading">
          <a href="#" class="button-loading-product">Load More</a>
        </div>
      </div>
    </section>

    @include('../includes/footer')

  </body>
</html>
