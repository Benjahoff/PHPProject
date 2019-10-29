{include "templates/header.tpl"}

<table>
    <thead>
        <th>
            <td>Id Apuesta</td>
            <td>Nombre del Juego</td>
            <td>Fecha</td>
            <td>Monto</td>
        </th>
    </thead>
    <tbody>
        {foreach $apuestas as $apuesta}
            <tr>
                <td>{apuesta->id_apuesta}</td>
                <td>{apuesta->nombre}</td>
                <td>{apuesta->fecha}</td>
                <td>{apuesta->monto}</td>
            </tr>
        {/foreach}
    </tbody>
</table>

{include "templates/footer.tpl"}