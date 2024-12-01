import { useState } from 'react'
import Button from 'react-bootstrap/Button'
import Offcanvas from 'react-bootstrap/Offcanvas'
import { HiChevronDoubleRight } from "react-icons/hi"
import ListGroup from 'react-bootstrap/ListGroup'
import { HiOutlineIdentification,HiOutlineUsers,HiOutlineTruck } from "react-icons/hi"
import { CardGroup, Nav}from 'react-bootstrap'
import { Link } from 'react-router-dom'
import logo from '../assets/4.gif'
import Card from 'react-bootstrap/Card'

function Menu({ ...props }) {
  const [show, setShow] = useState(false)

  const handleClose = () => setShow(false)
  const handleShow = () => setShow(true)

  return (
    <>
      <Button variant="outline-light" size='sm' onClick={handleShow} className="text-dark rounded-0">
        <HiChevronDoubleRight className='mb-1'/>
      </Button>
      <Offcanvas show={show} onHide={handleClose} {...props}>
        <Offcanvas.Header className='navbar text-light' closeButton>
          <Offcanvas.Title>Opciones</Offcanvas.Title>
        </Offcanvas.Header>
        <Offcanvas.Body className='bg-light'>  
            <CardGroup>
              <Card border='light'>
                <Card.Img variant='top' src={logo}/>
              </Card>
            </CardGroup>    
          <ListGroup className="rounded-0">
            <Nav.Link>
              <ListGroup.Item action onClick={handleClose} as={Link} to="/employee" variant='light'>
                <HiOutlineIdentification className='me-2'/>Empleado</ListGroup.Item>
            </Nav.Link>
            <Nav.Link>
              <ListGroup.Item action onClick={handleClose} as={Link} to="/customer" variant='light'>
                <HiOutlineUsers className='me-2'/>Clientes</ListGroup.Item>
            </Nav.Link>
            <Nav.Link>
              <ListGroup.Item action onClick={handleClose} as={Link} to="/provider" variant='light'>
                <HiOutlineTruck className='me-2'/>Proveedores</ListGroup.Item>
            </Nav.Link>
          </ListGroup> 
        </Offcanvas.Body>
      </Offcanvas>
    </>
  );
}
export default Menu