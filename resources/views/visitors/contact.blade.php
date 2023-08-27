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
                                      <p class="mb-4">We're open for any suggestion or just to have a chat</p>
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






                                      <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                          <div class="row">
                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                      <input type="text" class="form-control" name="name"
                                                          id="name" placeholder="Name">
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                      <input type="email" class="form-control" name="email"
                                                          id="email" placeholder="Email">
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                      <input type="text" class="form-control" name="number"
                                                          id="number" placeholder="Phone numbers">
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                      <input type="text" class="form-control" name="subject"
                                                          id="subject" placeholder="Subject">
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                      <textarea name="message" class="form-control" id="message" cols="30" rows="4"
                                                          placeholder="Create a message here"></textarea>
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="form-group">
                                                      <input type="submit" value="Send Message" class="btn btn-primary">
                                                      <div class="submitting"></div>
                                                  </div>
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
