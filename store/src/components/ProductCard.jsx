import { Card,Button } from "react-bootstrap"
import logo from "../assets/3.png"
import { useNavigate } from "react-router-dom"

/* eslint-disable react/prop-types */
function ProductCard ({ product: {id="",product_name="",brand="",description="",price="",stock=""}}) {
    const navigate = useNavigate()

    return (
        <Card className="p-1 mb-1 rounded-0"
              onClick={()=>{navigate(`/products/${id}`)}}>
            <Card.Img src={logo} className="card-img"/>
                <h2>{product_name}</h2>
                <h3>{brand}</h3>
                <p>{description}</p>
                <p>Precio: ${price}</p>
                <p>Cantidad: {stock}</p>
            <Card.Footer>
                <Button className="rounded-0">Editar</Button>
            </Card.Footer>
        </Card>
    )
}
export default ProductCard