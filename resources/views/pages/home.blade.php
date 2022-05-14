@extends('layouts.app')

@section('title')
Happy Meat
@endsection

@section('content')
 <!-- Header -->
    <header class="section-hero-lp">
      <div class="container-hero-lp">
        <div class="flexbox-hero-lp">
          <div class="left-block-hero-lp">
            <h2 class="hero-heading-lp">Apa itu Happy Meat?</h2>
            <p class="hero-paragraf-lp">
              Happy Meat merupakan wirausah daging dan distributor yang
              menyediakan berbagai produk beku seperti daging sapi, daging
              daging kerbau, daging iga, dll. Dengan semangat yang tinggi kami
              terus berkomitmen untuk memberikan produk yang berkualitas dengan
              harga yang terjangkau.
            </p>
          </div>
          <div class="right-block-hero-lp">
            <img class="image-hero-lp" src="{{ url('frontend/image/Image.png') }}" />
          </div>
        </div>
      </div>
    </header>

    <main>
    <section class="section-what">
      <div class="container-section-what">
        <div class="flexbox-section-what">
          <div class="section-what-img-box">
            <img
              src="{{ url('frontend/image/daging.png') }}"
              class="section-what-img"
              alt="Daging merah"
            />
          </div>
          <div class="conten-wrapper-section-what">
            <h1 class="heading-primary">Kami menyediakan daging terbaik</h1>
            <p class="section-what-description">
              Perusahaan kami menyediakan berbagai macam produk beku berkualitas
              untuk kepuasan dan kenyamanan pelanggan
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-why">
      <div class="container-why">
        <h1 class="heading-section-why">Mengapa Happy Meat</h1>
        <p class="section-why-description">
          Kami menyediakan segala kebutuhan produk dan jasa terkait dengan
          daging sapi dan olahannya.
        </p>
        <div class="section-why-images-description">
          <div class="col">
            <img src="{{ url('frontend/image/Daging-ilustration.png') }}" alt="daging-ilustrasi" />
            <p>Berasal dari daging pilihan</p>
          </div>
          <div class="col">
            <img
              src="{{ url('frontend/image/Perusahaan-Ilustration.png') }}"
              alt="perusahaan-ilustrasi"
            />
            <p>Diambil dari suppllier terpercaya</p>
          </div>
          <div class="col">
            <img src="{{ url('frontend/image/Harga-Ilustration.png') }}" alt="harga-ilustrasi" />
            <p>Harga terjangkau dengan kualitas terbaik</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-product">
      <div class="container-product">
        <h1 class="heading-section-product">Produk terbaru</h1>
        <p class="section-product-description">
          Dapatkan penawaran harga terbaik dengan kualitas prima mulai dari
          pembelian daging sapi segar, impor beku hingga aneka frozen food.
          Hubungi kami segera untuk mendapatkan penawaran terbaik.
        </p>
        {{-- <div class="product-grid">
          <div href="#" class="product-card business">
            <div class="card-thumbnail-product-1">
              <span class="category-name">business</span>
            </div>
            <div class="card-content-product">
              <h2 class="heading-card-product">Daging Wahyu Premium</h2>
              <div class="price-cart-card">
                <div class="price-card">Rp.290000/kg</div>
                <div>
                  <a href="#" class="buy"
                    ><i class="fas fa-shopping-cart"></i>Add</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div href="#" class="product-card w-inline-block">
            <div class="card-thumbnail-product-2" style="background-image: url(frontend/image/daging/Image-1.png)"></div>
            <div class="card-content-product">
              <h2 class="heading-card-product">Daging Wahyu Premium</h2>
              <div class="price-cart-card">
                <div class="price-card">Rp.290000/kg</div>
                <div>
                  <a href="#" class="buy"
                    ><i class="fas fa-shopping-cart"></i>Add</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div href="#" class="product-card w-inline-block">
            <div class="card-thumbnail-product-3"></div>
            <div class="card-content-product">
              <h2 class="heading-card-product">Daging Wahyu Premium</h2>
              <div class="price-cart-card">
                <div class="price-card">Rp.290000/kg</div>
                <div>
                  <a href="#" class="buy"
                    ><i class="fas fa-shopping-cart"></i>Add</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div> --}}
        <div class="product-grid">
          @foreach ($latest_product as $items => $item)
              <div href="" class="product-card rib">
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
        </div>
        <div class="button-lihat-semua">
          <a href="/product" class="button-lihat-produk">Lihat Semua</a>
        </div>
      </div>
    </section>

    <section class="section-article">
      <div class="container-article">
        <h1 class="heading-section-article">Artikel terbaru</h1>
        <p class="section-article-description">
          Kami menyediakan berbagai artikel untuk pengguna agar mendapatkan
          berita terkini seputar daging sapi
        </p>
        <div class="article-grid">
          <a href="#" class="article-card w-inline-block">
            <div class="card-thumbnail-article-1"></div>
            <div class="card-content-article">
              <div>
                <h2 class="heading-card-article">
                  10 secret tips for managing report team
                </h2>
                <p class="caption-card">
                  There are 10 secret tips that you have to know for managing
                  your team remotely. Don’t let this situatuon make the team
                  feel uncomfortable
                </p>
              </div>
              <div class="author-date-card">
                <div class="avatar-1"></div>
                <div class="author-name">Danielo Adnan</div>
                <div class="publish-date">28 Juni 2020</div>
              </div>
            </div>
          </a>
          <a href="#" class="article-card w-inline-block">
            <div class="card-thumbnail-article-2"></div>
            <div class="card-content-article">
              <div>
                <h2 class="heading-card-article">
                  10 secret tips for managing report team
                </h2>
                <p class="caption-card">
                  There are 10 secret tips that you have to know for managing
                  your team remotely. Don’t let this situatuon make the team
                  feel uncomfortable
                </p>
              </div>
              <div class="author-date-card">
                <div class="avatar-1"></div>
                <div class="author-name">Danielo Adnan</div>
                <div class="publish-date">28 Juni 2020</div>
              </div>
            </div>
          </a>
          <a href="#" class="article-card w-inline-block">
            <div class="card-thumbnail-article-3"></div>
            <div class="card-content-article">
              <div>
                <h2 class="heading-card-article">
                  10 secret tips for managing report team
                </h2>
                <p class="caption-card">
                  There are 10 secret tips that you have to know for managing
                  your team remotely. Don’t let this situatuon make the team
                  feel uncomfortable
                </p>
              </div>
              <div class="author-date-card">
                <div class="avatar-1"></div>
                <div class="author-name">Danielo Adnan</div>
                <div class="publish-date">28 Juni 2020</div>
              </div>
            </div>
          </a>
        </div>
        <div class="button-lihat-semua">
          <a href="#" class="button-lihat-article">Lihat Semua</a>
        </div>
      </div>
    </section>
    </main>
@endsection