import { Container } from 'react-bootstrap';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.min.css';
import './css/App.css';

import Navigation from './layouts/Navigation';
import Home from './pages/Home';
import Products from './pages/Products';
import ProductForm from './components/forms/ProductForm';
import Info from './pages/Info';
import Perfil from './pages/Perfil';
import Employees from './pages/Employees';
import EmployeeForm from './components/forms/EmployeeForm';
import Proveedor from './pages/Proveedor';
import Cliente from './pages/Cliente';

const routes = [
  { path: '/', element: <Home /> },
  { path: '/products', element: <Products /> },
  { path: '/products/:id', element: <ProductForm /> },
  { path: '/products-add', element: <ProductForm /> },
  { path: '/info', element: <Info /> },
  { path: '/perfil', element: <Perfil /> },
  { path: '/employee', element: <Employees /> },
  { path: '/employee/:id', element: <EmployeeForm /> },
  { path: '/employee-add', element: <EmployeeForm /> },
  { path: '/customer', element: <Cliente /> },
  { path: '/provider', element: <Proveedor /> },
];

function App() {
  return (
    <Router>
      <Navigation />
      <Container fluid>
        <Routes>
          {routes.map((route, index) => (
            <Route key={index} path={route.path} element={route.element} />
          ))}
        </Routes>
      </Container>
    </Router>
  );
}

export default App;