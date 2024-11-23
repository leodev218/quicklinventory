import {Container} from 'react-bootstrap'
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'
import Navigation from './layouts/Navigation'
import Home from './pages/Home'
import Products from './pages/Products'
import Info from './pages/Info'
import Perfil from './pages/Perfil'
import './css/App.css'
import 'bootstrap/dist/css/bootstrap.min.css'

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
        </Routes>
      </Container>
  </Router>    
  )
}

export default App
