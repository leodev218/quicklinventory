import ViewEmployeeTable from "../components/ViewEmployeeTable"
import Menu from "../layouts/Menu"

function Perfil () {

    return (
        <>
            <Menu/>
                <h1>Perfil</h1>
                <h1>Lista empleados</h1>
                <ViewEmployeeTable/>
        </>
        
    )
}
export default Perfil