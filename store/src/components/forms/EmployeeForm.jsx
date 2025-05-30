import { useNavigate, useParams } from "react-router-dom"
import {useForm} from "react-hook-form"
import { Container, Form } from "react-bootstrap"
import { HiOutlineSave, HiOutlineHand, HiOutlineTrash } from "react-icons/hi"
import employeeService from "../../service/employeeService"
import roleService from "../../service/roleService"
import { useEffect, useState } from "react"

function EmployeeForm () {
    const [roles, setRoles] = useState([])
    const {register, handleSubmit, formState: {errors},setValue} = useForm()
    const navigate = useNavigate()
    const params = useParams()
    const submitEmployee = handleSubmit(async (data) =>{
        if (params.id) {
          try {
            await employeeService.actualizar(params.id, data)
          } catch (error) {
            console.error(error)
          }
        } else {
          try {
            await employeeService.crear(data)
          } catch (error) {
            console.error(error)
          }
        }
        navigate("/perfil")
    })
    const deleteEmployee = (
      async ()=> {
        const accepted = window.confirm("are you sure to delete")
        if(accepted){
          await employeeService.eliminar(params.id)
          navigate("/employee")
        }
      }
    )
    const cancel = () => {navigate("/employee")}
    const loadRoles = async () => {
        try {
            const res = await roleService.obtenerTodas()
            setRoles(res.data)
        } catch (error) {
            console.error(error)
        }
    }
  
    useEffect(()=>{loadRoles()},[])
    useEffect(()=>{
      async function loadEmployee(){
        if(params.id){
          const res = await productService.obtenerPorId(params.id)
            setValue("employee_name", res.data.employee_name)
            setValue("document", res.data.document)
            setValue("email", res.data.email)
            setValue("phone", res.data.phone)
            setValue("role", res.data.role)
          console.log(res.data)
        }
      }
      loadEmployee()
    },[params.id, setValue])
    return (
      <Container>
        <form onSubmit={submitEmployee}>
          <Form.Group className="mb-3">
            <Form.Label>Nombre del empleado</Form.Label>
              <Form.Control 
                type="text"
                placeholder="Ingrese el nombre y apellido"
                {...register("employee_name",{required: true})}              
              />
                {errors.employee_name && <span>Error de input</span>}
          </Form.Group>
          <Form.Group className="mb-3">
            <Form.Label>Numero de documento</Form.Label>
              <Form.Control 
                type="number"
                placeholder="Ingrese documento del empleado"
                {...register("document",{required: true})}          
              />
              {errors.document && <span>Error de input</span>}
          </Form.Group>
          <Form.Group className="mb-3">
            <Form.Label>Correo electronico</Form.Label>
              <Form.Control 
                type="email"
                placeholder="Ingrese el correo electronico"
                {...register("email",{required: true})}            
              />
              {errors.email && <span>Error de input</span>}
          </Form.Group>
          <Form.Group className="mb-3">
            <Form.Label>Telefono</Form.Label>
              <Form.Control 
                type="number"
                placeholder="Ingrese el telefono del empleado"
                {...register("phone",{required: true})}              
              />
              {errors.phone && <span>Error de input</span>}
          </Form.Group>
          <Form.Group className="mb-3">
            <Form.Label>Cargo del empleado</Form.Label>
              <Form.Select
                  {...register("role",{required: true})}
              >
                {roles.map(role => (
                    <option key={role.id} value={role.id}>{role.role_name}</option>
                ))}
              </Form.Select>
          </Form.Group>
          <button className="btn btn-primary rounded-0" type="submit">
            <HiOutlineSave className="m-1"/> Guardar
          </button>
          <button className="btn btn-dark rounded-0 ms-1" type="button" onClick={cancel}>
            <HiOutlineHand className="m-1"/> Cancelar
          </button>
          {params.id && 
            <button className="btn btn-danger rounded-0 ms-1" type="button" onClick={deleteEmployee}>
              <HiOutlineTrash className="m-1"/> Eliminar
            </button>
          }
        </form>
      </Container>
        
    )
}

export default EmployeeForm