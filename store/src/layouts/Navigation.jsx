import Container from 'react-bootstrap/Container'
import Nav from 'react-bootstrap/Nav'
import Navbar from 'react-bootstrap/Navbar'
import {Link,useLocation} from 'react-router-dom'
import { FiUser } from "react-icons/fi"
import logo from '../assets/2.png'

function Navigation () {
    const location = useLocation()
    return (
      <Navbar className="navbar">
        <Container>
          <Navbar.Brand as={Link} to="/" className={location.pathname === '/' ? 'text-info' : 'text-light'} expand="sm">
            <img
              alt=""
              src={logo}
              width="40"
              height="40"
              className="d-inline-block align-center"
            />{' '}
            Q´Inv
          </Navbar.Brand>
          <Nav className="me-auto">
            <Nav.Link as={Link} to="/products" className={location.pathname === '/products' ? 'text-info' : 'text-light'}>Productos</Nav.Link>
            <Nav.Link as={Link} to="/info" className={location.pathname === '/info' ? 'text-info' : 'text-light'}>Contactanos</Nav.Link>
          </Nav>   
        </Container>
            <Nav.Link as={Link} to='/perfil' className={location.pathname === '/perfil' ? 'text-info' : 'text-light'}><FiUser className='me-4'/></Nav.Link>    
      </Navbar>
    )
}
export default Navigation
