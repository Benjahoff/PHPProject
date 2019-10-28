{include "templates/header.tpl"}
<form action="agregarJuego/" method="POST">
                <table class="table table-dark">
                    <thead>
                        <th>
                            <label for="nombre">Nombre</label>
                        </th>
                        <th>
                            <label for="cantidad de jugadores">cantidad de jugadores</label>
                        </th>
                        <th>
                            <label for="Es un juego de cartas?">Es un juego de cartas?</label>
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" name="nombre">
                            </td>
                            <td>
                                <input type="text" name="cantidad">
                            </td>
                            <td>
                                <input type="text" name="cartas">
                            </td>
                            <td>
                            <button type="submit">Agregar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
{include "templates/footer.tpl"}