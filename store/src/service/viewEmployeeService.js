import axios from "axios"

const url = "http://127.0.0.1:8000/api/v1.1/employees/roles/"

const getViewEmployee = axios.get(url)

const viewEmployeeService = () => {
    getViewEmployee
}

export default viewEmployeeService