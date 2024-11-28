import { useEffect,useState } from "react"
import { Container,Table } from "react-bootstrap"
import employeeService from '../service/employeeService'

function EmployeeTable (){
    const [employeeTable, setEmployeeTable] = useState([])
    
    const cargarEmployeeTable = async () => {
        try {
            const response = await employeeService.obtenerTodas([])
            setEmployeeTable(response.data)
            
        } catch (error) {
            console.error("Error al obtener la tabla de empleados",error)
        }
    }

    useEffect(() => {
        cargarEmployeeTable();
    }, [])
    

    return (
        <>
            <Container>
                <Table bordered hover responsive="sm">
                    <thead>
                       <tr> 
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Cargo</th>
                       </tr> 
                    </thead>
                    <tbody>
                        {employeeTable.map(employee => (
                            <tr key={employee.id}>
                            <td>{employee.id}</td>
                            <td>{employee.name}</td>
                            <td>{employee.email}</td>
                            <td>{employee.phone}</td>
                            <td>{employee.role}</td>
                           </tr>
                        ))}   
                    </tbody>
                </Table>
            </Container>
        </>)
}
export default EmployeeTable