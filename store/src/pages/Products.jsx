import { Container } from "react-bootstrap"
import ProductList from "../components/ProductList"
function Products () {
    

    return (
        <>
            <Container>
               <h1>Products</h1>
                <ProductList/>
            </Container>
        </>
    )
}
export default Products