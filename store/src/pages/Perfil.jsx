import ViewEmployeeTable from "../components/ViewEmployeeTable"
import { HiOutlineChartBar } from "react-icons/hi"
import Menu from "../layouts/Menu"
import {ListGroup,Button} from "react-bootstrap"

function Perfil () {

    return (
        <>
            <ListGroup className='rounded-0' horizontal="sm">
                <ListGroup.Item className='border-0'><Menu/></ListGroup.Item>
                <ListGroup.Item className='border-0'><Button variant="outline-dark" className="rounded-0"><HiOutlineChartBar /></Button></ListGroup.Item>
            </ListGroup>

                <h1>Perfil</h1>
                <h1>Lista empleados</h1>
                <ViewEmployeeTable/>
        </>
        
    )
}
export default Perfil