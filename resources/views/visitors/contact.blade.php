  @extends('layouts.main')

  @section('container')
      <section class="ftco-section">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-6 text-center mb-5">
                      <h2 class="heading-section">Hubungi Kami</h2>
                  </div>
              </div>
              <div class="row justify-content-center">
                  <div class="col-md-12">
                      <div class="wrapper">
                          <div class="row no-gutters">
                              <div class="col-lg-6 d-flex align-items-stretch">
                                  <div class="info-wrap w-100 p-5 img"
                                      style="background-image: url(assets/img/galeri/tandem5.jpeg);">
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="contact-wrap w-100 p-md-5 p-4">
                                      <h3>Kontak Kami</h3>
                                      {{-- <p class="mb-4">We're open for any suggestion or just to have a chat</p> --}}
                                      <div id="form-message-warning" class="mb-4"></div>

                                      <div class="row mb-4">
                                          <div class="col-md-6">
                                              <div class="dbox w-100 d-flex align-items-start">
                                                  <div class="text">
                                                      <p><span>Alamat:</span>Cihampelas, Cililin Bandung. | Bukit Santiong,
                                                          Ciater Subang. </p>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="dbox w-100 d-flex align-items-start">
                                                  <div class="text">
                                                      <p><span>Telfon:</span> <a href="tel://6281321500808">+62
                                                              813-2150-0808</a>
                                                      </p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>


                                      @if (session()->has('berhasil'))
                                          <div class="alert alert-info alert-dismissible fade show" role="alert">
                                              {{ session('berhasil') }}
                                              <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                  aria-label="Close"></button>
                                          </div>
                                      @endif



                                      <form action="/contacts" method="POST" class="contactForm">
                                          @csrf
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                      <input class="form-control @error('name') is-invalid @enderror"
                                                          id=" name" name="name" type="text" required
                                                          placeholder="Nama" value="{{ old('name') }}" />
                                                  </div>
                                              </div>

                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                      <input class="form-control @error('email') is-invalid @enderror"
                                                          id=" email" name="email" type="email" required
                                                          placeholder="Email" value="{{ old('email') }}" />
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                      <input
                                                          class="form-control @error('phone_number') is-invalid @enderror"
                                                          id=" phone_number" name="phone_number" type="tel" required
                                                          placeholder="Nomor Telepon" value="{{ old('phone_number') }}" />
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                      <textarea class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}"
                                                          id=" description" name="description" type="text" cols="30" rows="4"
                                                          placeholder="Pesan yang ini disampaikan"></textarea>
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="d-grid"><button class="w-100 btn btn-lg btn-primary"
                                                          type="submit">Kirim</button></div>
                                              </div>
                                          </div>
                                      </form>






                                      <div class="w-100 social-media mt-5">
                                          <h3>Media Sosial Kami</h3>
                                          <p>
                                              <a href="https://www.instagram.com/paralayang_bandung/" target="_blank"
                                                  role="button">Instagram
                                                  <i class="fab fa-instagram"></i>
                                              </a>
                                              <a href="https://wa.me/6281321500808/?text=Hallo ada yang ingin saya tanyakan !!"
                                                  target="_blank" role="button">Whatsapp
                                                  <i class="fab fa-whatsapp"></i>
                                              </a>
                                          </p>
                                      </div>



                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  @endsection
