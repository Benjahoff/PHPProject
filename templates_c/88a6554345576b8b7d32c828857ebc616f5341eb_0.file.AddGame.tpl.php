<?php
/* Smarty version 3.1.33, created on 2019-10-28 03:57:18
  from 'F:\Program Files\XAMPP\htdocs\benja\tetocaavos\templates\AddGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db6590e0a54f4_66215008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88a6554345576b8b7d32c828857ebc616f5341eb' => 
    array (
      0 => 'F:\\Program Files\\XAMPP\\htdocs\\benja\\tetocaavos\\templates\\AddGame.tpl',
      1 => 1572231256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5db6590e0a54f4_66215008 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
