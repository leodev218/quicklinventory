import { useState } from 'react'
import Button from 'react-bootstrap/Button'
import Offcanvas from 'react-bootstrap/Offcanvas'
import { FiTool } from "react-icons/fi"
import ListGroup from 'react-bootstrap/ListGroup'
import { HiOutlineIdentification ,HiOutlineUserGroup,HiOutlineUsers,HiOutlineTruck } from "react-icons/hi"

function Menu({ ...props }) {
  const [show, setShow] = useState(false)

  const handleClose = () => setShow(false)
  const handleShow = () => setShow(true)

  return (
    <>
      <Button variant="outline-dark" size='sm' onClick={handleShow} className="m-1 rounded-0">
        <FiTool className='mb-1'/>
      </Button>
      <Offcanvas show={show} onHide={handleClose} {...props}>
        <Offcanvas.Header className='bg-dark text-light' closeButton>
          <Offcanvas.Title>Opciones</Offcanvas.Title>
        </Offcanvas.Header>
        <Offcanvas.Body className='bg-light'>
          <ListGroup className="rounded-0">
            <ListGroup.Item action variant='light'><HiOutlineIdentification  className='me-2'/>Empleado</ListGroup.Item>
            <ListGroup.Item action variant='light'><HiOutlineUserGroup className='me-2'/>Roles</ListGroup.Item>
            <ListGroup.Item action variant='light'><HiOutlineUsers className='me-2'/>Clientes</ListGroup.Item>
            <ListGroup.Item action variant='light'><HiOutlineTruck className='me-2'/>Proveedores</ListGroup.Item>
          </ListGroup>
        </Offcanvas.Body>
      </Offcanvas>
    </>
  );
}
export default Menu