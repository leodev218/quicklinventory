import ViewEmployeeTable from "../components/ViewEmployeeTable"
import Menu from "../layouts/Menu"
import {Container, ListGroup} from "react-bootstrap"

function Perfil () {

    return (
        <>
            <Container>
              <ListGroup.Item className='border-0'><Menu/></ListGroup.Item>        
                <h1>Perfil</h1>
                <h1>Detalle empleados</h1>
                 <ViewEmployeeTable/>
            </Container>
            
        </>
        
    )
}
export default Perfil