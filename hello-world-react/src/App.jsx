import { useState } from 'react'
import reactLogo from './assets/react.svg'
import Yuuka from './assets/yuuka.jpg'
import Flandre from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'

function App() {
  const [count, setCount] = useState(0)

  return (
    <>
      <div style={{textAlign: "center", marginTop: "100px"}}>
        <img id="gambar" src={Yuuka} style={{width: "300px", height: "300px", borderRadius: "300px"}}></img>
        <h1>ReactJS and Vite</h1>
        <p>
          Halaman ini dibuat oleh Aldebaran Sabian Fatihah dari kelas 2-RPB
        </p>
        <button style={{marginRight: "10px"}} onClick={() => window.location = "https://globalsumudflotilla.org"}>Klik saya jika anda ingin membantu</button>
        <button onClick={() => window.alert("Klik saya untuk meledakkan bom")}>Klik Saya</button>
      </div>
    </>
  )
}

export default App
