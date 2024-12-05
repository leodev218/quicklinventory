import { useState, useEffect } from "react";
import { Form, Button } from "react-bootstrap";
import roleService from "../service/roleService";

function EmployeeForm(employee, setEmployee, errors, handleSave) {
  const [roles, setRoles] = useState([]);
  const [selectedRole, setSelectedRole] = useState(""); // Agregué este estado para almacenar el rol seleccionado

  const cargarRole = async () => {
    try {
      const response = await roleService.obtenerTodas();
      setRoles(response.data);
    } catch (error) {
      console.error("Error al obtener la vista de empleados", error);
    }
  };

  useEffect(() => {
    cargarRole();
  }, []);

  return (
    <>
      <Form.Group className="mb-3">
        <Form.Label>Nombre del empleado</Form.Label>
        <Form.Control
          type="text"
          value={employee.employee_name}
          placeholder="Ingrese el nombre y apellido"
        />
      </Form.Group>
      <Form.Group className="mb-3">
      
      <Form.Group className="mb-3">
        <Form.Label>Documento del empleado</Form.Label>
        <Form.Control
          type="number"
          value={employee.document}
          placeholder="Ingrese el documento"
        />
      </Form.Group>

      <Form.Group className="mb-3">
        <Form.Label>Correo del empleado</Form.Label>
        <Form.Control
          type="email"
          value={employee.email}
          placeholder="Ingrese el correo electronico"
        />
      </Form.Group>

      <Form.Group className="mb-3">
        <Form.Label>Telefono del empleado</Form.Label>
        <Form.Control
          type="text"
          value={employee.phone}
          placeholder="Ingrese el numero telefonico"
        />
      </Form.Group>
      
      <Form.Group className="mb-3"></Form.Group>
        <Form.Label>Cargo</Form.Label>
        <Form.Select
          value={selectedRole} // Asigno el valor del estado selectedRole
          onChange={(e) => setSelectedRole(e.target.value)} // Actualizo el estado selectedRole cuando se selecciona un nuevo rol
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
      {console.log(roles)}
    </>
  );
}
export default EmployeeForm;