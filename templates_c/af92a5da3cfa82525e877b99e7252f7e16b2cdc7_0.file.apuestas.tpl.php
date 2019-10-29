<?php
/* Smarty version 3.1.33, created on 2019-10-29 14:54:25
  from 'C:\xampp\htdocs\Web2\chiripas\tetocaavos\templates\apuestas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db844915ec262_29109982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af92a5da3cfa82525e877b99e7252f7e16b2cdc7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\chiripas\\tetocaavos\\templates\\apuestas.tpl',
      1 => 1572357242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5db844915ec262_29109982 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['apuestas']->value, 'apuesta');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['apuesta']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['apuesta']->value->id_apuesta;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['apuesta']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['apuesta']->value->fecha;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['apuesta']->value->monto;?>
</td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
