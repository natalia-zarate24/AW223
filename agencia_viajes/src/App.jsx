import { useState } from 'react'
import Destino from "./components/Destino";
import "./components/Destino.css"

import tokio from "./assets/tokio.png";
import seoul from "./assets/seoul.png";
import france from "./assets/france.png";
import brugge from "./assets/brugge.png";
import amsterdam from "./assets/amsterdam.png";

function App() {
  const [favoritos, setFavoritos] = useState(0);
  const agregarFavorito = () => setFavoritos(favoritos + 1);

  return (
    <main className = "contenedor">
      <h1>Descubre tu próximo destino</h1>
      <p>Explora lugares increibles y planea tus proximas vacaciones</p>

      <h2>Destinos favoritos: {favoritos}</h2>
      <p>Tu proxima aventura comienza aqui</p>

      <h2>Explora destinos turisticos</h2>
      <form action="" method="GET">
        <input type="text" name="buscador" placeholder="Busca tu destino..."></input>
        <input type="submit" value="Buscar"></input>
      </form>

      <Destino
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
      />

    </main>
  );
}

export default App
