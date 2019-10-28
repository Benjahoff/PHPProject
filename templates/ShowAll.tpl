{include "templates/header.tpl"}
<table>
    <tbody>
        <tr>
                {foreach $juegos as $juego}
                    <td>
                        {$juego->nombre}
                        {$juego->cantidad_jugadores}
                        {$juego->juego_de_cartas}
                    </td>
                {/foreach}
                </select>
            </td>
            <td>
            <a href="agregarJuego">Agregar Juego</a>
            </td>
        </tr>
    </tbody>
</table>
{include "templates/footer.tpl"}