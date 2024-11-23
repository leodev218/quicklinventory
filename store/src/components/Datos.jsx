import { useState, useEffect } from 'react'
import { Container,Table } from 'react-bootstrap'
import axios from 'axios'

function Datos() {
  const [datos, setDatos] = useState([]);

  useEffect(() => {
    axios.get('http://localhost:8000/api/v1.1/employees/roles/')
      .then(response => {
        setDatos(response.data);
      })
      .catch(error => {
        console.error(error);
      });
  }, []);

  return (
    <Container>
      <h1>Datos de empleados</h1>
      <Table triped bordered hover responsive="sm">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Rol</th>
            <th>Correo electrónico</th>
            <th>Teléfono</th>
          </tr>
        </thead>
        <tbody>
          {datos.map(dato => (
            <tr key={dato.id}>
              <td>{dato.id}</td>
              <td>{dato.name}</td>
              <td>{dato.role__name}</td>
              <td>{dato.email}</td>
              <td>{dato.phone}</td>
            </tr>
          ))}
        </tbody>
      </Table>
    </Container>
  );
}

export default Datos;