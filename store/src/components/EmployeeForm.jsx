import { useState, useEffect } from "react"
import { Form, Button } from "react-bootstrap"
import roleService from "../service/roleService"
import {useForm} from "react-hook-form"

function EmployeeForm(employee, setEmployee, errors, handleSave) {
  const handleChange = (e) => {
    const { name, value } = e.target
    setEmployee((prevState) => ({ ...prevState, [name]: value }))
  }

  const [roles, setRoles] = useState([])
  const [selectedRole, setSelectedRole] = useState(employee.role_id) // Inicializa con el valor de employee.role_id
  const {register, handleSumit} = useForm()
  const onSumit = handleSumit(data => {
    console.log(data)})

  const cargarRole = async () => {
    try {
      const response = await roleService.obtenerTodas()
      setRoles(response.data)
    } catch (error) {
      console.error("Error al obtener la vista de empleados", error)
    }
  };

  useEffect(() => {
    cargarRole()
  }, [])

  return (
    <>
    <Form onSubmit={onSumit}>
      <Form.Group className="mb-3">
        <Form.Label>Nombre del empleado</Form.Label>
        <Form.Control
          type="text"
          value={employee.employee_name}
          onChange={handleChange}
          name="employee_name"
          placeholder="Ingrese el nombre y apellido"
          {...register("employee_name",{required:true})}
        />
      </Form.Group>

      <Form.Group className="mb-3">
        <Form.Label>Documento del empleado</Form.Label>
        <Form.Control
          type="number"
          value={employee.document}
          onChange={handleChange}
          name="document"
          placeholder="Ingrese el documento"
          {...register("document",{required:true})}
        />
      </Form.Group>

      <Form.Group className="mb-3">
        <Form.Label>Correo del empleado</Form.Label>
        <Form.Control
          type="email"
          value={employee.email}
          onChange={handleChange}
          name="email"
          placeholder="Ingrese el correo electronico"
          {...register("email",{required:true})}
        />
      </Form.Group>

      <Form.Group className="mb-3">
        <Form.Label>Telefono del empleado</Form.Label>
        <Form.Control
          type="text"
          value={employee.phone}
          onChange={handleChange}
          name="phone"
          placeholder="Ingrese el numero telefonico"
          {...register("phone",{required:true})}
        />
      </Form.Group>

      <Form.Group className="mb-3">
        <Form.Label>Cargo</Form.Label>
        <Form.Select
          value={selectedRole}
          {...register("role",{required:true})}
          onChange={(e) => {
            handleChange(e)
            setSelectedRole(e.target.value)
          }}
          name="role_id"
        >
          {roles.map((role) => (
            <option key={role.id} value={role.id}>
              {role.role_name}
            </option>
          ))}
        </Form.Select>
      </Form.Group>

      <Form.Group className="mb-3">
        <Button variant="dark" onClick={handleSave}>
          Confirmar
        </Button>
      </Form.Group>
      </Form>
    </>
  );
}
export default EmployeeForm