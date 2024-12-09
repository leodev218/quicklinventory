import { Container, Nav, Button } from "react-bootstrap"
import { HiOutlinePlusSm } from "react-icons/hi"
import { Link } from "react-router-dom"
import ProductList from "../components/ProductList"

function Products () {
    
    return (
        <>
            <Container>
                <h1>Products</h1>
                    <Nav.Link>
                        <Button as={Link} to={"/products-add"} className="rounded-0 mt-1 mb-1 border-0" variant="primary">
                            <HiOutlinePlusSm className="mb-1"/> Agregar producto
                        </Button>
                    </Nav.Link>
                <ProductList/>
            </Container>
        </>
    )
}
export default Products