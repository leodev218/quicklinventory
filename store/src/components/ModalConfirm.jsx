import { Button, Modal } from "react-bootstrap"

// eslint-disable-next-line react/prop-types
function ModalConfirm ({confirmModal, handleClose, handleConfirm,message}) {
    return (
        <Modal show={confirmModal} onHide={handleClose}>
            <Modal.Header></Modal.Header>
            <Modal.Body>{message}</Modal.Body>
            <Modal.Footer>
                <Button variant="secondary" onClick={(handleClose)}>
                    Cancelar
                </Button>            
                <Button variant="primary" onClick={handleConfirm}>
                    Confirmar
                </Button>
            </Modal.Footer>
        </Modal>
    )
}
export default ModalConfirm