import { useState,useEffect } from "react"
import Menu from "../layouts/Menu"
import { useNavigate } from "react-router-dom"
import employeeService from '../service/employeeService'
import { Button, Container, Modal} from "react-bootstrap"
import ModalConfirm from "../components/ModalConfirm"
import EmployeeForm from "../components/EmployeeForm"
import EmployeeTable from "../components/EmployeeTable"

function Empleado (){
    const [employees, setEmployees] = useState([])
    const [showModal, setShowModal ] = useState(false)
    const [confirmModal, setConfirmModal] = useState(false)
    const [selectedEmployee, setSelectedEmployee] = useState({name:"",email:"",phone:"",role:"" })
    const [errors, setErrors] = useState({})
    const [deleteEmployeeId, setDeleteEmployeeId] = useState(null)
    const navigate = useNavigate()

    const loadEmployees= async () =>{

        try {
            const response= await employeeService.obtenerTodas()
            setEmployees(response.data)

        } catch (error) {
            console.log("Error al obtener las areas criticas", error)
        }
    }

    useEffect(()=>{
        loadEmployees()
    }, [])

    
    const viewDetail= (id)=>{
        navigate(`/employees/${id}`)
    }

    const handleShow = (employee={name:"",email:"",phone:"",role:"" }) => {
        setSelectedEmployee(employee)
        setErrors({})
        setShowModal(true)
    }

    const handleDelete = (id) => {
        setDeleteEmployeeId(id)
        setConfirmModal(true)
    }

    const handleClose = () => {
        setShowModal(false)
    }

    const confirmDelete = async () => {
        try {
            await employeeService.eliminar(deleteEmployeeId)
            loadEmployees()
        } catch (error) {
            console.log("Error al eliminar el empleado", error)
        }

        setConfirmModal(false)
    }

    const handleSave= async ()=>{
        if(!validateForm()){
            return
        }

        try {
            if (selectedEmployee.id) {
                await employeeService.actualizar(selectedEmployee.id, selectedEmployee)
            } else {
                await employeeService.crear(selectedEmployee)
            }

            loadEmployees()

        } catch (error) {
            console.log("Error al guardar el área critica", error)
        }

        setShowModal(false)
    }

    const validateForm= ()=>{
        const newErrors= {}

        if(selectedEmployee.name.length < 3 || selectedEmployee.name.length > 30){
            newErrors.name= "El nombre debe tener entre 3 y 30 carateres"
        }

        if(selectedEmployee.email.length < 10 || selectedEmployee.email.length > 254){
            newErrors.email = "el correo electronico debe tener entre 10 y 254 carateres"
        }

        if(selectedEmployee.phone.length < 7 || selectedEmployee.phone.length > 15){
            newErrors.phone= "La telefono tinene un numero no valido"
        }

        if(selectedEmployee.role.length < 0 || selectedEmployee.role.length > 4){
            newErrors.role= "Rango no valido"
        }

        setErrors(newErrors)

        return Object.keys(newErrors).length === 0
    }

    return (
        <>
            <Container>
              <Menu/>
                <h1>Empleado</h1>
              
                 <Button className="mb-1 rounded-0" variant="info" onClick={() => {handleShow()}}>Crear empleado</Button>

                  <EmployeeTable 
                    employees = {employees}
                    viewDetail = {viewDetail}
                    handleShow = {handleShow}
                    handleDelete = {handleDelete}
                  />

                  <ModalConfirm
                    confirmModal = {confirmModal}
                    handleClose = {() => setConfirmModal(false)}
                    hadleConfirm = {confirmDelete}
                    message = "¿Esta seguro que desea eliminar este empleado?"
                  />

                  <Modal show={showModal} onHide={handleClose}>
                    <Modal.Header closeButton>
                        <Modal.Title>{selectedEmployee.id ? "Editar empleado": "Crear empleado"}</Modal.Title>
                    </Modal.Header>
                    <Modal.Body>
                        <EmployeeForm
                            employee = {selectedEmployee}
                            setEmployee = {setSelectedEmployee}
                            errors = {errors}
                            handleSave ={handleSave}
                        />
                    </Modal.Body>
                    <Modal.Footer></Modal.Footer>
                  </Modal>
            </Container>
        </>)
}
export default Empleado