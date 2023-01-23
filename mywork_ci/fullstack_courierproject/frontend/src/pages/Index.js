import React from 'react';
import Header from '../components/Header';
import Footer from '../components/Footer';
import { Outlet } from 'react-router-dom';

export default function Index() {
  return (
    <div>
      <Header />
      <br/><br/><br/>
      <Outlet />
      <br/><br/>
      <Footer />
    </div>
  )
}
