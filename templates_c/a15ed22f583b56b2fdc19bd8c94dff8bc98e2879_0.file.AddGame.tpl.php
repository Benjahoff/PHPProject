<?php
/* Smarty version 3.1.33, created on 2019-10-28 03:48:12
  from 'C:\xampp\htdocs\Web2\chiripas\templates\AddGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db656ec2e60d6_43034312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a15ed22f583b56b2fdc19bd8c94dff8bc98e2879' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\chiripas\\templates\\AddGame.tpl',
      1 => 1572230765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5db656ec2e60d6_43034312 (Smarty_Internal_Template $_smarty_tpl) {
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
