import React from 'react';
import { Link } from 'react-router-dom';

export default function Header() {
  return (
    <div>
    {/* ======= Header ======= */}
        <header id="header" className="fixed-top d-flex align-items-center header-transparent">
            <div className="container d-flex justify-content-between align-items-center">

            <div className="logo">
                <h1 className="text-light"><span>Pathao Courier</span></h1>
                 {/* Uncomment below if you prefer to use an image logo  */}
                 {/* <a href="index.html"><img src="assets/img/logo.png" alt="" className="img-fluid"></a> */}
            </div>

            <nav id="navbar" className="navbar">
                <ul>
                    <li>
                        <Link to="/" className="active">Home</Link>
                    </li>
                    <li>
                        <Link to="/about">About</Link>
                    </li>
                    <li>
                    <Link to="/services">Services</Link>
                    </li>
                    <li>
                        <Link to="/gallery">Gallery</Link>
                    </li>
                    <li>
                        <Link to="/team">Team</Link>
                    </li>
                    <li>
                        <Link to="/contact">Contact Us</Link>
                    </li>
                     <li>
                        <Link to="/staffs">Staffs</Link>
                    </li>
                    <li>
                        <Link to="/branches">Branches</Link>
                    </li>
                    <li>
                        <Link to="/products">Products</Link>
                    </li>
                    <li>
                        <Link to="/parcels">Tracking</Link>
                    </li>
                    <li>
                        <a href="http://localhost:8080/admin">Register/Login</a>
                    </li>

                </ul>
                <i className="bi bi-list mobile-nav-toggle"></i>
            </nav>
            {/* .navbar */}

            </div>
        </header>
        {/* End Header */}
    </div>
  )
}


{/* <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>  */}


{/* <style>
.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style> */}