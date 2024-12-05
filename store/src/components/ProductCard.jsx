import { Card } from "react-bootstrap"

/* eslint-disable react/prop-types */
function ProductCard ({ product: {product_name="",brand="",description="",price="",stock=""}}) {
    
    return (
        <Card className="p-2 mb-1 rounded-0" style={{ width: '18rem' }}>
            <h1>{brand}</h1>
            <h2>{product_name}</h2>
            <h2>{description}</h2>
            <h3>$ {price}</h3>
            <h2>{stock}</h2>
        </Card>
   )
}
export default ProductCard