<section id="landingContact" class="section-py bg-body landing-contact">
        <div class="container">
          <div class="text-center mb-3 pb-1">
            <span class="badge bg-label-primary">Contact US</span>
          </div>
          <h3 class="text-center mb-1">
            <span class="position-relative fw-bold z-1"
              >Let's work
              <img
                src="<?= $db->url(); ?>/assets/img/front-pages/icons/section-title-icon.png"
                alt="laptop charging"
                class="section-title-img position-absolute object-fit-contain bottom-0 z-n1" />
            </span>
            together
          </h3>
          <p class="text-center mb-4 mb-lg-5 pb-md-3">Any question or remark? just write us a message</p>
          <div class="row gy-4">
            <div class="col-lg-5">
              <div class="contact-img-box position-relative border p-2 h-100">
                <img
                  src="<?= $db->url(); ?>/assets/img/front-pages/icons/contact-border.png"
                  alt="contact border"
                  class="contact-border-img position-absolute d-none d-md-block scaleX-n1-rtl" />
                <img
                  src="<?= $db->url(); ?>/assets/img/front-pages/landing-page/contact-customer-service.png"
                  alt="contact customer service"
                  class="contact-img w-100 scaleX-n1-rtl" />
                <div class="pt-3 px-4 pb-1">
                  <div class="row gy-3 gx-md-4">
                    <div class="col-md-6 col-lg-12 col-xl-6">
                      <div class="d-flex align-items-center">
                        <div class="badge bg-label-primary rounded p-2 me-2"><i class="ti ti-mail ti-sm"></i></div>
                        <div>
                          <p class="mb-0">Email</p>
                          <h5 class="mb-0">
                            <a href="mailto:example@gmail.com" class="text-heading">example@gmail.com</a>
                          </h5>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-12 col-xl-6">
                      <div class="d-flex align-items-center">
                        <div class="badge bg-label-success rounded p-2 me-2">
                          <i class="ti ti-phone-call ti-sm"></i>
                        </div>
                        <div>
                          <p class="mb-0">Phone</p>
                          <h5 class="mb-0"><a href="tel:+1234-568-963" class="text-heading">+1234 568 963</a></h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="card">
                <div class="card-body">
                  <h4 class="mb-1">Send a message</h4>
                  <p class="mb-4">
                    If you would like to discuss anything related to payment, account, licensing,<br
                      class="d-none d-lg-block" />
                    partnerships, or have pre-sales questions, you’re at the right place.
                  </p>
                  <form>
                    <div class="row g-3">
                      <div class="col-md-6">
                        <label class="form-label" for="contact-form-fullname">Full Name</label>
                        <input type="text" class="form-control" id="contact-form-fullname" placeholder="john" />
                      </div>
                      <div class="col-md-6">
                        <label class="form-label" for="contact-form-email">Email</label>
                        <input
                          type="text"
                          id="contact-form-email"
                          class="form-control"
                          placeholder="johndoe@gmail.com" />
                      </div>
                      <div class="col-12">
                        <label class="form-label" for="contact-form-message">Message</label>
                        <textarea
                          id="contact-form-message"
                          class="form-control"
                          rows="8"
                          placeholder="Write a message"></textarea>
                      </div>
                      <div class="col-12">
                        <button type="submit" class="btn btn-primary">Send inquiry</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>