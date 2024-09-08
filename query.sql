--union entre tablas employees, roles y status, permite ver nombre, email, nombre del rol y nombre del estado
SELECT api_employee.name,api_employee.email,api_role.name AS "role name",api_status.name AS "status name"
FROM api_employee
INNER JOIN api_role ON api_employee.role_id = api_role.id
INNER JOIN api_status ON api_employee.status_id = api_status.id
ORDER BY api_employee.id ASC;
--insetar datos en employee
INSERT INTO api_employee (name,email,phone,role_id,status_id)
VALUES ('test','test2@gmail','3132232333',3,1);
--conteo por tabla
SELECT COUNT(id) FROM api_status;
--seleccionar todo
SELECT * FROM api_employee;
--seleccionar por coincidencia de texto
SELECT COUNT(id) FROM api_employee
WHERE name LIKE 'test%';
--eliminar por criterio en especifico
DELETE FROM api_employee WHERE name IN (
SELECT name FROM api_employee
WHERE role_id = 3
);