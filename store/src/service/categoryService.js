import axios from 'axios'

const url = "http://127.0.0.1:8000/api/v1/categories"

const obtenerTodas= ()=> axios.get(url)
const obtenerPorId= (id)=> axios.get(`${url}/${id}`)
const crear= (data)=> axios.post(url, data)
const actualizar= (id, data)=> axios.put(`${url}/${id}`, data)
const eliminar= (id)=> axios.delete(`${url}/${id}`)

const categoryService = {
    obtenerTodas,
    obtenerPorId,
    crear,
    actualizar,
    eliminar
}

export default categoryService