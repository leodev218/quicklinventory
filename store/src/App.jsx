import {Container} from 'react-bootstrap'
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'
import Navigation from './layouts/Navigation'
import Home from './pages/Home'
import Products from './pages/Products'
import Info from './pages/Info'
import Perfil from './pages/Perfil'
import './css/App.css'
import 'bootstrap/dist/css/bootstrap.min.css'
import Empleado from './pages/Empleado'
import Proveedor from './pages/Proveedor'
import Cliente from './pages/Cliente'

function App() {
 
  return (
  <Router>
    <Navigation/>
      <Container fluid>
        <Routes>
          <Route path='/' element = {<Home/>}/>
          <Route path='/products' element = {<Products/>}/>
          <Route path='/info' element = {<Info/>}/>
          <Route path='/perfil' element = {<Perfil/>}/>
          <Route path='/employee' element = {<Empleado/>}/>
          <Route path='/customer' element = {<Cliente/>}/>
          <Route path='/provider' element = {<Proveedor/>}/>
        </Routes>
      </Container>
  </Router>    
  )
}

export default App
