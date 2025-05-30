import { Nav, Button } from "react-bootstrap"
import { HiOutlinePlusSm } from "react-icons/hi"
import { Link } from "react-router-dom"

function Employees () {
    
    return (
        <>
                <h1>Empleados</h1>
                    <Nav.Link>
                        <Button as={Link} to={"/employee-add"} className="rounded-0 mt-1 mb-1 border-0" variant="primary">
                            <HiOutlinePlusSm className="mb-1"/> Crear empleado
                        </Button>
                    </Nav.Link>
        </>
    )
}
export default Employees