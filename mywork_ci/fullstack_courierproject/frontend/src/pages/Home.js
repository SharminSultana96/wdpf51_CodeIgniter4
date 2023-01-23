import React from 'react';

export default function Home() {
  return (
    <div>
    <section id="hero" className="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" className="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      {/* Slide 1 */}
      <div className="carousel-item active">
        <div className="carousel-container">
          <h2 className="animate__animated animate__fadeInDown">Welcome to <span>Pathao Courier</span></h2>
          <p className="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="" className="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      {/* Slide 2 */}
      <div className="carousel-item">
        <div className="carousel-container">
          <h2 className="animate__animated animate__fadeInDown">Best Courier Services in Bangladesh </h2>
          <p className="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="" className="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

       {/* Slide */}
      <div className="carousel-item">
        <div className="carousel-container">
          <h2 className="animate__animated animate__fadeInDown">Door-to-door deliveries</h2>
          <p className="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="" className="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <a className="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span className="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a className="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span className="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section>
  {/* End Hero */}

  <main id="main">

    {/* ======= Services Section =======  */}
    <section className="services">
      <div className="container">

        <div className="row">
          <div className="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div className="icon-box icon-box-pink">
              <div className="icon"><i className="bx bxl-dribbble"></i></div>
              <h4 className="title"><a href="">On-demand logistics</a></h4>
              <p className="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>

          <div className="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div className="icon-box icon-box-cyan">
              <div className="icon"><i className="bx bx-file"></i></div>
              <h4 className="title"><a href="">Both way shipment</a></h4>
              <p className="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>

          <div className="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div className="icon-box icon-box-green">
              <div className="icon"><i className="bx bx-tachometer"></i></div>
              <h4 className="title"><a href="">Next day shipping</a></h4>
              <p className="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div className="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div className="icon-box icon-box-blue">
              <div className="icon"><i className="bx bx-world"></i></div>
              <h4 className="title"><a href="">Domestic cargo shipments</a></h4>
              <p className="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    {/* End Services Section */}

   {/* ======= Why Us Section =======  */}
    <section className="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div className="container">

        <div className="row">
          <div className="col-lg-6 video-box">
            <img src="assets/img/why-us.jpg" className="img-fluid" alt=""/>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" className="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div className="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div className="icon-box">
              <div className="icon"><i className="bx bx-fingerprint"></i></div>
              <h4 className="title"><a href="">Domestic cargo shipments</a></h4>
              <p className="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div className="icon-box">
              <div className="icon"><i className="bx bx-gift"></i></div>
              <h4 className="title"><a href="">On-demand logistics</a></h4>
              <p className="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

          </div>
        </div>

      </div>
    </section>
    {/* End Why Us Section */}

   {/* ======= Features Section =======  */}
    <section className="features">
      <div className="container">

        <div className="section-title">
          <h2>Features</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div className="row" data-aos="fade-up">
          <div className="col-md-5">
            <img src="assets/img/features-1.jpg" className="img-fluid" alt="" />
          </div>
          <div className="col-md-7 pt-4">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p className="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i className="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i className="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            </ul>
          </div>
        </div>

        <div className="row" data-aos="fade-up">
          <div className="col-md-5 order-1 order-md-2">
            <img src="assets/img/features-2.jpg" className="img-fluid" alt=""/>
          </div>
          <div className="col-md-7 pt-5 order-2 order-md-1">
            <h3>Corporis temporibus maiores provident</h3>
            <p className="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

        <div className="row" data-aos="fade-up">
          <div className="col-md-5">
            <img src="assets/img/features-3.jpg" className="img-fluid" alt=""/>
          </div>
          <div className="col-md-7 pt-5">
            <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
            <ul>
              <li><i className="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i className="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i className="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
          </div>
        </div>

        <div className="row" data-aos="fade-up">
          <div className="col-md-5 order-1 order-md-2">
            <img src="assets/img/features-4.jpg" className="img-fluid" alt="" />
          </div>
          <div className="col-md-7 pt-5 order-2 order-md-1">
            <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
            <p className="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

      </div>
    </section>
    {/* End Features Section */}

  </main>
  {/* End #main */}
    </div>
  )
}
