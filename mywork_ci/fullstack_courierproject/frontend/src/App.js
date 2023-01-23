import { Routes, Route } from 'react-router-dom';
import Index from './pages/Index';
import Home from './pages/Home';
import About from './pages/About';
import Gallery from './pages/Gallery';
import Services from './pages/Services';
import Team from './pages/Team';
import Contact from './pages/Contact';
import StaffList from './components/StaffList';
import BranchList from './components/BranchList';
import ProductList from './components/ProductList';




function App() {
  return (
    <Routes>
      <Route path='/' element={<Index />} >
        <Route index element={<Home />} />
        <Route path='/about' element={<About />} />
        <Route path='/gallery' element={<Gallery />} />
        <Route path='/services' element={<Services />} />
        <Route path='/team' element={<Team />} />
        <Route path='/contact' element={<Contact />} />
        {/* <Route path='/users' element={<UserList />} />
        <Route path="/adduser" element={<Adduser />} />
        <Route path="/users/edit/:uid" element={<Edit />} /> */}
        <Route exact path="/staffs" element={<StaffList />} />
        <Route exact path="/branches" element={<BranchList />} />
        <Route exact path='/products' element={<ProductList />} />
        

      </Route>
    </Routes>
  );
}

export default App;
