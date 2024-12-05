import {useState,useEffect } from "react"
import productService from "../service/productService"
import ProductCard from "./ProductCard"

function ProductList () {

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
            {products.map((product) => (
                <ProductCard 
                   key={product.id}
                   product = {product}
                />
            ))}
        </>
        
    )
}

export default ProductList