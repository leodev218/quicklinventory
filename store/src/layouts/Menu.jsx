import { useState } from 'react'
import Button from 'react-bootstrap/Button'
import Offcanvas from 'react-bootstrap/Offcanvas'
import Accordion from 'react-bootstrap/Accordion'
import { FiTool } from "react-icons/fi"

function Menu({ ...props }) {
  const [show, setShow] = useState(false)

  const handleClose = () => setShow(false)
  const handleShow = () => setShow(true)

  return (
    <>
      <Button variant="outline-dark" size='sm' onClick={handleShow} className="m-1">
        <FiTool className='mb-1'/>
      </Button>
      <Offcanvas show={show} onHide={handleClose} {...props}>
        <Offcanvas.Header className='bg-dark text-light' closeButton>
          <Offcanvas.Title>Opciones</Offcanvas.Title>
        </Offcanvas.Header>
        <Offcanvas.Body>
          Some text as placeholder. In real life you can have the elements you
          have chosen. Like, text, images, lists, etc.
          <Accordion className='align-button' defaultActiveKey='0'>
            <Accordion.Item eventKey='0'>
              <Accordion.Header className='bg-dark'>Configuracion</Accordion.Header>
              <Accordion.Body className='d-grid gap-2'>
                <Button variant='outline-dark' size='sm'>Opciones avanzadas</Button>
                <Button variant='outline-dark' size='sm'>Panel de control</Button>
              </Accordion.Body>
            </Accordion.Item>
            <Accordion.Item eventKey='1'>
              <Accordion.Header>Servicio tecnico</Accordion.Header>
              <Accordion.Body className='d-grid gap-2'>
                <Button variant='outline-dark' size='sm'>Enviar reporte</Button>
              </Accordion.Body>
            </Accordion.Item>
          </Accordion>
        </Offcanvas.Body>
      </Offcanvas>
    </>
  );
}
export default Menu