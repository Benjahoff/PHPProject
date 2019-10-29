<?php
/* Smarty version 3.1.33, created on 2019-10-29 14:32:38
  from 'C:\xampp\htdocs\Web2\chiripas\tetocaavos\templates\AddGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db83f7665aed0_19051897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39287e7ce98a2031ca0f7c16dd4832d30638d6d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\chiripas\\tetocaavos\\templates\\AddGame.tpl',
      1 => 1572354442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5db83f7665aed0_19051897 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="confirmarjuego" method="POST">
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
