import { useNavigate, useParams } from "react-router-dom"
import {useForm} from "react-hook-form"
import { Container, Form } from "react-bootstrap"
import { HiOutlineSave, HiOutlineHand, HiOutlineTrash } from "react-icons/hi"
import productService from "../service/productService"
import categoryService from "../service/categoryService"
import { useEffect, useState } from "react"

function ProductForm () {
    const [categories, setCategories] = useState([])
    const {register, handleSubmit,formState: {errors},setValue} = useForm()
    const navigate = useNavigate()
    const params = useParams()
    const submitProduct = handleSubmit(async (data) =>{
        if (params.id) {
          try {
            await productService.actualizar(params.id, data)
          } catch (error) {
            console.error(error)
          }
        } else {
          try {
            await productService.crear(data)
          } catch (error) {
            console.error(error)
          }
        }
        navigate("/products")
    })
    const deleteProduct = (
      async ()=> {
        const accepted = window.confirm("are you sure to delete")
        if(accepted){
          await productService.eliminar(params.id)
          navigate("/products")
        }
      }
    )
    const cancel = () => {navigate("/products")}
    const loadCategories = async () => {
        try {
            const res = await categoryService.obtenerTodas()
            setCategories(res.data)
        } catch (error) {
            console.error(error)
        }
    }
    useEffect(()=>{loadCategories()},[])
    useEffect(()=>{
      async function loadProduct(){
        if(params.id){
          const res = await productService.obtenerPorId(params.id)
            setValue("product_name", res.data.product_name)
            setValue("brand", res.data.brand)
            setValue("price", res.data.price)
            setValue("description", res.data.description)
            setValue("stock", res.data.stock)
            setValue("category", res.data.category)
          console.log(res.data)
        }
      }
      loadProduct()
    },[params.id, setValue])
    return (
      <Container>
        <form onSubmit={submitProduct}>
          <Form.Group className="mb-3">
            <Form.Label>Nombre del producto</Form.Label>
              <Form.Control 
                type="text"
                placeholder="Ingrese el nombre y apellido"
                {...register("product_name",{required: true})}              
              />
                {errors.product_name && <span>Error de input</span>}
          </Form.Group>
          <Form.Group className="mb-3">
            <Form.Label>Marca del producto</Form.Label>
              <Form.Control 
                type="text"
                placeholder="Ingrese la marca del producto"
                {...register("brand",{required: true})}              
              />
              {errors.brand && <span>Error de input</span>}
          </Form.Group>
          <Form.Group className="mb-3">
            <Form.Label>Precio del producto</Form.Label>
              <Form.Control 
                type="number"
                placeholder="Ingrese precio del producto"
                {...register("price",{required: true})}              
              />
              {errors.price && <span>Error de input</span>}
          </Form.Group>
          <Form.Group className="mb-3">
            <Form.Label>Descripcion del producto</Form.Label>
              <Form.Control 
                type="text"
                placeholder="Ingrese una descripcion del producto"
                {...register("description",{required: true})}              
              />
              {errors.desciption && <span>Error de input</span>}
          </Form.Group>
          <Form.Group className="mb-3">
            <Form.Label>Cantidad del producto</Form.Label>
              <Form.Control 
                type="text"
                placeholder="Ingrese el nombre y apellido"
                {...register("stock",{required: true})}              
              />
              {errors.stock && <span>Error de input</span>}
          </Form.Group>
          <Form.Group className="mb-3">
            <Form.Label>Categoria del producto</Form.Label>
              <Form.Select
                  {...register("category",{required: true})}
              >
                {categories.map(category => (
                    <option key={category.id} value={category.id}>{category.category_name}</option>
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
            <button className="btn btn-danger rounded-0 ms-1" type="button" onClick={deleteProduct}>
              <HiOutlineTrash className="m-1"/> Eliminar
            </button>
          }
        </form>
      </Container>
        
    )
}

export default ProductForm