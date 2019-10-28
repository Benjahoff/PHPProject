<?php
/* Smarty version 3.1.33, created on 2019-10-28 03:48:11
  from 'C:\xampp\htdocs\Web2\chiripas\templates\showAll.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db656eb263d99_17657929',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf1c89e91570e37941bdbd329c2516fdc5549a66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\chiripas\\templates\\showAll.tpl',
      1 => 1572230888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5db656eb263d99_17657929 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table>
    <tbody>
        <tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
?>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['juego']->value->nombre;?>

                        <?php echo $_smarty_tpl->tpl_vars['juego']->value->cantidad_jugadores;?>

                        <?php echo $_smarty_tpl->tpl_vars['juego']->value->juego_de_cartas;?>

                    </td>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </td>
            <td>
            <a href="agregarJuego">Agregar Juego</a>
            </td>
        </tr>
    </tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
