import axios from "axios"

const url = "http://127.0.0.1:8000/api/v1/"
const res = axios.get(url)
console.log(res) 