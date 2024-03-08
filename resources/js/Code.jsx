import React from "react";
import {createRoot} from "react-dom/client";
export default function Code(){
    return (
        <h1>Hola desde react</h1>
    )
}

if (document.getElementById("codereact")){
    createRoot(document.getElementById("codereact").render(<Code />));
}
