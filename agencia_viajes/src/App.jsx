import { useState } from 'react'
import Destino from "./components/Destino";
import "./App.css"

import tokio from "./assets/tokio.png";
import seoul from "./assets/seoul.png";
import france from "./assets/france.png";
import brugge from "./assets/brugge.png";
import amsterdam from "./assets/amsterdam.png";

const destinos = [
  { id: 1, 
    imagen: tokio, 
    nombre: "Tokio", 
    pais:"Japón", 
    precio:"$30,000", 
    detalles: "Incluye vuelo + hotel, también puedes encontrar paquetes que incluyan asistencia, traslado desde el aeropuerto y actividades."
  },

  { id: 2, 
    imagen: seoul, 
    nombre: "Seúl", 
    pais:"Corea", 
    precio:"$29,000", 
    detalles: "Incluye vuelo + hotel, también puedes encontrar paquetes que incluyan asistencia, traslado desde el aeropuerto y actividades."
  },

  { id: 3, 
    imagen: france, 
    nombre: "Paris", 
    pais:"Francia", 
    precio:"$15,000", 
    detalles: "Incluye vuelo + hotel, también puedes encontrar paquetes que incluyan asistencia, traslado desde el aeropuerto y actividades."
  },
  { id: 4, 
    imagen: brugge, 
    nombre: "Bruselas", 
    pais:"Bélgica", 
    precio:"$13,000", 
    detalles: "Incluye vuelo + hotel, también puedes encontrar paquetes que incluyan asistencia, traslado desde el aeropuerto y actividades."
  },

  { id: 5, 
    imagen: amsterdam, 
    nombre: "Ámsterdam", 
    pais:"Países Bajos", 
    precio:"$16,000", 
    detalles: "Incluye vuelo + hotel, también puedes encontrar paquetes que incluyan asistencia, traslado desde el aeropuerto y actividades."
  },

]

function App() {
  const [favoritos, setFavoritos] = useState(0);
  const agregarFavorito = () => setFavoritos(favoritos + 1);
  const [busqueda, setBusqueda] = useState("");

  const destinosFiltrados = destinos.filter((d) => 
    d.nombre.toLowerCase().includes(busqueda.toLowerCase())
  );

  return (
    <main className = "contenedor">
      <div className='tarjeta-titulo'>
        <h1>Descubre tu próximo destino</h1>
        <p>Explora lugares increibles y planea tus proximas vacaciones</p>
      </div>

      <div className='tarjeta-favs'>
        <h2>Destinos favoritos: {favoritos}</h2>
        <p>Tu proxima aventura comienza aqui</p>
      </div>

      <div  className='tarjeta-buscar'>
        <h2>Explora destinos turisticos</h2>
        <form action="" method="GET" className='buscador'>
          <input type="text" name="buscador" value={busqueda} onChange={(e) => setBusqueda(e.target.value)}placeholder="Busca tu destino..."></input>
        </form>
      </div>

      <div className='lista-destinos'>
        {destinosFiltrados.map((d) => (
          <Destino
            key={d.id}
            imagen={d.imagen}
            nombre={d.nombre}
            pais={d.pais}
            precio={d.precio}
            detalles={d.detalles}
            onAgregarFavorito={agregarFavorito}
          />
        ))}
      </div>
        {/*<Destino
          imagen={tokio}
          nombre="Tokio"
          pais="Japón"
          precio="$30,000"
          detalles="Incluye vuelo + hotel, también puedes encontrar paquetes que incluyan asistencia, traslado desde el aeropuerto y actividades."
          onAgregarFavorito={agregarFavorito}
        />

        <Destino
          imagen={seoul}
          nombre="Seoul"
          pais="Corea"
          precio="$29,000"
          detalles="Incluye vuelo + hotel, también puedes encontrar paquetes que incluyan asistencia, traslado desde el aeropuerto y actividades."
          onAgregarFavorito={agregarFavorito}
        />

        <Destino
          imagen={france}
          nombre="Francia"
          pais="Paris"
          precio="$15,000"
          detalles="Incluye vuelo + hotel, también puedes encontrar paquetes que incluyan asistencia, traslado desde el aeropuerto y actividades."
          onAgregarFavorito={agregarFavorito}
        />

        <Destino
          imagen={brugge}
          nombre="Bruselas"
          pais="Bélgica"
          precio="$13,000"
          detalles="Incluye vuelo + hotel, también puedes encontrar paquetes que incluyan asistencia, traslado desde el aeropuerto y actividades."
          onAgregarFavorito={agregarFavorito}
        />

        <Destino
          imagen={amsterdam}
          nombre="Amsterdam"
          pais="Paises Bajos"
          precio="$14,000"
          detalles="Incluye vuelo + hotel, también puedes encontrar paquetes que incluyan asistencia, traslado desde el aeropuerto y actividades."
          onAgregarFavorito={agregarFavorito}
        />*/}
      

    </main>
  );
}

export default App
