import React from 'react';

export default function Footer() {
  return (
    <div>
       {/* ======= Footer ======= */}
        <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

            <div className="footer-newsletter">
            <div className="container">
                <div className="row">
                <div className="col-lg-6">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                </div>
                <div className="col-lg-6">
                    <form action="" method="post">
                    <input type="email" name="email"/><input type="submit" value="Subscribe"/>
                    </form>
                </div>
                </div>
            </div>
            </div>

            <div className="footer-top">
            <div className="container">
                <div className="row">

                <div className="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                    <li><i className="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                    <li><i className="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                    <li><i className="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                    <li><i className="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                    <li><i className="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div className="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                    <li><i className="bx bx-chevron-right"></i> <a href="#">Parcel Pickup</a></li>
                    <li><i className="bx bx-chevron-right"></i> <a href="#">Parcel Delivery</a></li>
                    <li><i className="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                    <li><i className="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                    <li><i className="bx bx-chevron-right"></i> <a href="#">Reporting</a></li>
                    </ul>
                </div>

                <div className="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                    New Circular Road <br/>
                    New Paltan, Dhaka 1000<br/>
                    Bangladesh <br/><br/>
                    <strong>Phone:</strong> +1 5589 55488 55<br />
                    <strong>Email:</strong> sharmin@gmail.com<br />
                    </p>

                </div>

                <div className="col-lg-3 col-md-6 footer-info">
                    <h3>About Patho Courier</h3>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                    <div className="social-links mt-3">
                    <a href="#" className="twitter"><i className="bx bxl-twitter"></i></a>
                    <a href="#" className="facebook"><i className="bx bxl-facebook"></i></a>
                    <a href="#" className="instagram"><i className="bx bxl-instagram"></i></a>
                    <a href="#" className="linkedin"><i className="bx bxl-linkedin"></i></a>
                    </div>
                </div>

                </div>
            </div>
            </div>

            <div className="container">
            <div className="copyright">
                &copy; Copyright <strong><span>Patho Courier</span></strong>. All Rights Reserved
            </div>
            <div className="credits">
                Designed by <a href="https://sharminsultana.com/">SharminSultana</a>
            </div>
            </div>
        </footer>
        {/* End Footer */}

        <a href="#" className="back-to-top d-flex align-items-center justify-content-center"><i className="bi bi-arrow-up-short"></i></a>
    </div>
  )
}
