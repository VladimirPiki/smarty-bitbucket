<?php
/* Smarty version 4.2.0, created on 2022-09-28 18:34:23
  from 'D:\xampp\htdocs\SmartyPHPFCJM\demo\templates\details_uprava.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6334778f2449e1_77051545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e02a3b48c38f37e53801ec2ef46bf86e30314fd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\SmartyPHPFCJM\\demo\\templates\\details_uprava.tpl',
      1 => 1664379306,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6334778f2449e1_77051545 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="myViewCover22">
  <h3 class="text-center">
    Стручен штаб
  </h3>
  <div class="alert alert-success" >
    Успешно ги внесовте податоците!
  </div>
  <div class="alert alert-danger" >
    Ве молиме пополнете го правилно формуларот!
  </div>
  <form name="myForm">
    <div class="mb-3">
      <label for="dres_id" class="form-label">dres_id</label>
      <span class="alert alert-danger">Внесете име со најмалце 1 бројка!!!</span>
          <select class="form-control myInputDetails" id="dres_id" name="dres_id" >
            <option class="text-light" value="">Изберете опции</option>
            <option class="text-light"  value="" >
              
            </option>
          </select>
    </div>
      <div class="mb-3">
        <label for="zalaganje" class="form-label">zalaganje</label>
        <select class="form-control myInputDetails" name="zalaganje" id="zalaganje" placeholder="Внесете го залагањето на управата во клубот">
          <option value="">Choose option</option>
          <option name="zalaganje" id="zalaganje" >nedovolno</option>
          <option name="zalaganje" id="zalaganje">dovolno</option>
          <option name="zalaganje" id="zalaganje">istaknato</option>
        </select>
      </div>
      <div class="mb-3">
          <label for="rabotna_ocenka" class="form-label">rabotna_ocenka</label>
          <select class="form-control myInputDetails" name="rabotna_ocenka" id="rabotna_ocenka"  placeholder="несете ја работната оценка на управата во клубот">
            <option value="">Choose option</option>
            <option name="rabotna_ocenka" id="rabotna_ocenka" >1</option>
            <option name="rabotna_ocenka" id="rabotna_ocenka" >2</option>
            <option name="rabotna_ocenka" id="rabotna_ocenka" >3</option>
            <option name="rabotna_ocenka" id="rabotna_ocenka">4</option>
            <option name="rabotna_ocenka" id="rabotna_ocenka">5</option>
          </select>
      </div>
      <button type="button" class="btn myBtn mb-5">Save</button>
    </form>
</div><?php }
}
