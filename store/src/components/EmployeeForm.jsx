import { useState } from "react"
import {Form, Button} from "react-bootstrap"

function EmployeeForm (employee, setEmployee, errors, handleSave){
    
    const [update,setUpdate] = useState("")
    
    
    return (
        <>
          <Form.Group className="mb-3">
            <Form.Label>Nombre del empleado</Form.Label>
            <Form.Control 
                type="text"
                value={employee.name}
                placeholder="Ingrese el nombre y apellido"/>
          </Form.Group>
          <Form.Group className="mb-3">
            <Form.Label>Cargo</Form.Label>
            <Form.Select>
              <option value={1}>Administrador</option>
              <option value={2}>Contador</option>
              <option value={3}>Asesor comercial</option>
              <option value={4}>Supervisor</option>
            </Form.Select>
            <Form.Control value={employee.role}/>
          </Form.Group>
          <Form.Group className="mb-3">
            <Button variant="dark" >Confirmar</Button>
          </Form.Group>
          {console.log(employee)}
        </>
    )
}
export default EmployeeForm