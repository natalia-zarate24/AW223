import { useState } from "react";
import "./Destino.css"

export default function Destino({ imagen, nombre, pais, precio, detalles, onCambiarFavorito}) {
    const[mostrar,setMostrar] = useState(false);
    const [esFavorito, setEsFavorito] = useState(false);

    const manejarFavorito = () => {
        setEsFavorito(!esFavorito);
        onCambiarFavorito(!esFavorito);
    }
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
                <button className="btn-fav" onClick={ manejarFavorito }>
                    {esFavorito ? "Agregado a favoritos" : "Agregar a Favoritos"}
                </button>
                <button className="btn-detalles" onClick={() => setMostrar(!mostrar)}>Ver Detalles</button>
            </div>
        </div>
    );
}