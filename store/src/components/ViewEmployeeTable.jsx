import { useEffect,useState } from "react"
import { Container,Table } from "react-bootstrap"
import viewEmployeeService from "../service/viewEmployeeService"

function ViewEmployeeTable () {
    const [viewEmployee, setViewEmployee]= useState([])

    const cargarViewEmployee= async () =>{

        try {
            const response= await viewEmployeeService.getViewEmployee()
            setViewEmployee(response.data)

        } catch (error) {
            console.log("Error al obtener la vista de empleados", error)
        }
    }

    useEffect(()=>{
        cargarViewEmployee()
    }, [])
    return (
    <Container>
            {console.log(viewEmployee)}
        <Table triped bordered hover responsive="sm">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Cargo</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
                {viewEmployee.map(view => (
                <tr key={view.id}>
                    <td>{view.id}</td>
                    <td>{view.name}</td>
                    <td>{view.role_name}</td>
                    <td>{view.email}</td>
                    <td>{view.phone}</td>
                </tr>
                ))}
            </tbody>
        </Table>
    </Container>
    )
}

export default ViewEmployeeTable