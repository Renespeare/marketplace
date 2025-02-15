@extends('layouts.app')

@section('title')
    ArtSneakers.id - Stay Hype
@endsection

@section('content')
<!-- Page Content -->
<div class="page-content page-cart">
    <section
      class="store-breadcrumbs"
      data-aos="fade-down"
      data-aos-delay="100"
    >
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="breadcrumb-item active">Cart</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <section class="store-cart">
      <div class="container">
        <!-- Product -->
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-12 table-responsive">
            <table
              class="table table-borderless table-cart"
              aria-describedby="Cart"
            >
              <thead>
                <tr>
                  <th scope="col">Image</th>
                  <th scope="col">Name &amp; Seller</th>
                  <th scope="col">Price</th>
                  <th scope="col">Size</th>
                  <th scope="col">Menu</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td style="width: 25%">
                    <img
                      src="/images/cart/produk_cart_1.jpg"
                      alt=""
                      class="cart-image"
                      style="width: 180px"
                    />
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">NMD R1 Shoes</div>
                    <div class="product-subtitle">by ArtSneakersId</div>
                  </td>
                  <td style="width: 25%">
                    <div class="product-title">1,760,000</div>
                    <div class="product-subtitle">IDR</div>
                  </td>
                  <td style="width: 20%">
                    <div class="product-size">11</div>
                  </td>
                  <td style="width: 20%">
                    <a href="#" class="btn btn-remove-cart"> Remove </a>
                  </td>
                </tr>

                <tr>
                  <td style="width: 25%">
                    <img
                      src="/images/cart/produk_cart_2.jpg"
                      alt=""
                      class="cart-image"
                      style="width: 180px"
                    />
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">NIKE KYRIE KYBRID S2 EP</div>
                    <div class="product-subtitle">by ArtSneakersId</div>
                  </td>
                  <td style="width: 25%">
                    <div class="product-title">1,979,000</div>
                    <div class="product-subtitle">IDR</div>
                  </td>
                  <td style="width: 20%">
                    <div class="product-size">10.5</div>
                  </td>
                  <td style="width: 20%">
                    <a href="#" class="btn btn-remove-cart"> Remove </a>
                  </td>
                </tr>

                <tr>
                  <td style="width: 25%">
                    <img
                      src="/images/cart/produk_cart_3.jpg"
                      alt=""
                      class="cart-image"
                      style="width: 180px"
                    />
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">NIKE KYRIE 6 TB EP</div>
                    <div class="product-subtitle">by ArtSneakersId</div>
                  </td>
                  <td style="width: 25%">
                    <div class="product-title">1,979,000</div>
                    <div class="product-subtitle">IDR</div>
                  </td>
                  <td style="width: 20%">
                    <div class="product-size">9</div>
                  </td>
                  <td style="width: 20%">
                    <a href="#" class="btn btn-remove-cart"> Remove </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- Shipping -->
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr />
          </div>
          <div class="col-12">
            <h2 class="mb-4">Shipping Details</h2>
          </div>
        </div>
        <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-6">
            <div class="form-group">
              <label for="addressOne">Address 1</label>
              <input
                type="text"
                class="form-control"
                id="addressOne"
                aria-describedby="emailHelp"
                name="addressOne"
                value="Jl Rawamangun Muka"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="addressTwo">Address 2</label>
              <input
                type="text"
                class="form-control"
                id="addressTwo"
                aria-describedby="emailHelp"
                name="addressTwo"
                value="Blok B2 No. 34"
              />
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="province">Province</label>
              <select name="province" id="province" class="form-control">
                <option value="DKI JAKARTA">DKI JAKARTA</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control">
                <option value="Jakarta">Jakarta Pusat</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="postalCode">Postal Code</label>
              <input
                type="number"
                class="form-control"
                id="postalCode"
                name="postalCode"
                value="10120"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="country">Country</label>
              <input
                type="text"
                class="form-control"
                id="country"
                name="country"
                value="Indonesia"
              />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="mobile">Mobile Phone</label>
              <input
                type="text"
                class="form-control"
                id="mobile"
                name="mobile"
                value="+628 388905 6778"
              />
            </div>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr />
          </div>
          <div class="col-12">
            <h2>Payment Informations</h2>
          </div>
        </div>

        <!-- Price -->
        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-4 col-md-2">
            <div class="product-title">IDR 0</div>
            <div class="product-subtitle">Country Tax</div>
          </div>
          <div class="col-4 col-md-3">
            <div class="product-title">IDR 250,000</div>
            <div class="product-subtitle">Product Insurance</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title">IDR 0</div>
            <div class="product-subtitle">Ship to Jakarta</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title text-success">IDR 5,768,000</div>
            <div class="product-subtitle">Total</div>
          </div>
          <div class="col-8 col-md-3">
            <a
              href="/success"
              class="btn btn-success mt-4 px-4 btn-block"
            >
              Checkout Now
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection