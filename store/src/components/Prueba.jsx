import {useEffect} from "react";
import axios from "axios";

const Prueba = () => {
    const getList = () => {
        axios.get('http://127.0.0.1:8000/api/v1/employees').then((value) => 
          console.log(value)
        )};
      
    
      useEffect(()=>{
        getList();
      })
    return (
           
           <h1>testeo</h1>
    );
};
export default Prueba;