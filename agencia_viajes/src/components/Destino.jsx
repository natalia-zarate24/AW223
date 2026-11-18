import { useState } from "react";

export default function Destino({ imagen, nombre, pais, precio, detalles, onAgregarFavorito}) {
    const[mostrar,setMostrar] = useState(false);
    return (
        <div className="tarjeta">
            <img src={imagen} alt={nombre}></img>
            <h2>{nombre}</h2>
            <h4>{pais}</h4>
            <strong>Desde: {precio}</strong>

            { mostrar &&
                <>
                <p>{detalles}</p>
                </>
            }

            <button onClick={onAgregarFavorito}>Agregar a favoritos</button>
            <button onClick={() => setMostrar(!mostrar)}>Ver Detalles</button>
        </div>
    );
}