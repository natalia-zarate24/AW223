import { useState } from "react";
import "./Destino.css"

export default function Destino({ imagen, nombre, pais, precio, detalles, onAgregarFavorito}) {
    const[mostrar,setMostrar] = useState(false);
    return (
        <div className="tarjeta">
            <img src={imagen} alt={nombre}></img>
            <h3>{nombre}</h3>
            <h4>{pais}</h4>
            <h5>Desde: {precio} MXN</h5>

            { mostrar &&
                <>
                <p>{detalles}</p>
                </>
            }
            <div className="botones">
                <button className="btn-fav" onClick={onAgregarFavorito}>Agregar a favoritos</button>
                <button className="btn-detalles" onClick={() => setMostrar(!mostrar)}>Ver Detalles</button>
            </div>
        </div>
    );
}