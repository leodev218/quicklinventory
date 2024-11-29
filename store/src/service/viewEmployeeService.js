import axios from "axios";

const url = "http://127.0.0.1:8000/api/v1.1/employees/roles/"

const viewEmployeeService = async () => {
  try {
    const response = await axios.get(url);
    return response.data;
  } catch (error) {
    console.error(error);
    throw error;
  }
};

export default viewEmployeeService;