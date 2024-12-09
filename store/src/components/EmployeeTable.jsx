import { Table, Button} from "react-bootstrap"

// eslint-disable-next-line react/prop-types
function EmployeeTable ({ employees, viewDetail, handleShow, handleDelete }){
   
    return (
        <>
                <Table bordered hover responsive="sm">
                    <thead>
                       <tr> 
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Documento</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Cargo</th>
                        <th>Opciones</th>
                       </tr> 
                    </thead>
                    <tbody>
                        
                        {// eslint-disable-next-line react/prop-types
                        employees.map(employee => (
                          <tr key={employee.id} onClick={() => viewDetail(employee.id)}>
                            <td>{employee.id}</td>
                            <td>{employee.employee_name}</td>
                            <td>{employee.document}</td>
                            <td>{employee.email}</td>
                            <td>{employee.phone}</td>
                            <td>{employee.role}</td>
                            <td className="d-grid">
                                <Button className="m-1 rounded-0" size="sm" variant="info" 
                                    onClick={e => { e.stopPropagation(); handleShow(employee) }} >Editar</Button>
                                <Button className="m-1 rounded-0" size="sm" variant="dark"
                                    onClick={e => { e.stopPropagation(); handleDelete(employee.id) }} >Elliminar</Button>
                            </td>
                          </tr>
                        ))}   
                    </tbody>
                </Table>
        </>)
}
export default EmployeeTable