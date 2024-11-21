import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'
import axios from "axios";
//import Prueba from './components/Prueba'

function App() {
  const [count, setCount] = useState(0)
  const getEmployees = async () => {
    try {
      const url = "http://127.0.0.1:8000/api/v1/";
      const response = await axios.get(url);
      console.log(response);
    } catch (error) {
      console.log(error);
    }
  }

  return (
    <>
      <div>
        <a href="https://vite.dev" target="_blank">
          <img src={viteLogo} className="logo" alt="Vite logo" />
        </a>
        <a href="https://react.dev" target="_blank">
          <img src={reactLogo} className="logo react" alt="React logo" />
        </a>
      </div>
      <h1>Vite + React</h1>
      <div className="card">
        <button onClick={() => setCount((count) => count + 1)}>
          count is {count}
        </button>
        <button onClick={getEmployees}>
          get employees
        </button>
        <p>
          Edit <code>src/App.jsx</code> and save to test HMR
        </p>
      
      </div>
      <p className="read-the-docs">
        Click on the Vite and React logos to learn more
      </p>
      
    </>
  )

}
export default App;
