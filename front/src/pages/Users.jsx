import React from "react";
import axios from 'axios'
import api from '../commons/api'
function saludar () {
    axios.get(api.baseURL + '/users/getUsers').then(({ data }) => {
        console.log(data)
    })
}
const Users = () => {
    return(
        <div>
            <button onClick={saludar}>Enviar</button>
        </div>
    )
}

export default Users