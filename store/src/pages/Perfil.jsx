import ViewEmployeeTable from "../components/ViewEmployeeTable"
import Menu from "../layouts/Menu"
import {ListGroup} from "react-bootstrap"

function Perfil () {

    return (
        <>
            <ListGroup.Item className='border-0'><Menu/></ListGroup.Item>        
                <h1>Perfil</h1>
                <h1>Lista empleados</h1>
                 <ViewEmployeeTable/>
        </>
        
    )
}
export default Perfil