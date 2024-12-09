import { useState,useEffect } from "react"
import productService from "../service/productService"
import ProductCard from "./ProductCard"
import { Row } from "react-bootstrap"

function ProductList () {
    const responsive = "col-sm-12 col-md-4 col-lg-3"
    const [products,setProducts] = useState([])
    const loadTask = async  () => {
        try {
            const res = await productService.obtenerTodas([])
            setProducts(res.data)    
        } catch (error) {
            console.error("Error al optener los datos de productos ",error)
        }  
    }

    useEffect(()=>{
        loadTask()
    },[])

    return (
        <>
            <Row>
                {products.map((product) => (
                   <div key={product.id} className={responsive}>
                        <ProductCard          
                           product = {product}
                        />
                   </div>
                ))}    
            </Row>
        </>
    )
}

export default ProductList