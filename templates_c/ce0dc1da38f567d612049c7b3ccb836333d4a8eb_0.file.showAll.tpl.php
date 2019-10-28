<?php
/* Smarty version 3.1.33, created on 2019-10-28 03:57:15
  from 'F:\Program Files\XAMPP\htdocs\benja\tetocaavos\templates\showAll.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db6590ba97a98_16464553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce0dc1da38f567d612049c7b3ccb836333d4a8eb' => 
    array (
      0 => 'F:\\Program Files\\XAMPP\\htdocs\\benja\\tetocaavos\\templates\\showAll.tpl',
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
function content_5db6590ba97a98_16464553 (Smarty_Internal_Template $_smarty_tpl) {
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
