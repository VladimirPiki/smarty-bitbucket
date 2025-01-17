<?php
/* Smarty version 4.2.0, created on 2022-09-19 18:03:09
  from 'D:\xampp\htdocs\smarty-bitbucket\demo\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_632892bdc46ab3_21317779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '249711bd8eff1b0b07199525fb9a77bed72816fd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smarty-bitbucket\\demo\\templates\\index.tpl',
      1 => 1663603387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_632892bdc46ab3_21317779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

<div class="container-fluid p-5 myBg text-white text-center">
  <h1><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['fullName']->value ?? '', 'UTF-8');?>
</h1>
  <p>Football club Jeni Maale Bitola</p> 
</div>

    <nav class="navbar navbar-expand-sm  navbar-dark sticky-top">
        <div class="container-fluid">
                    <a href="#!main"><img src="assets/img/profilna nova.jpg" alt="Avatar Logo" style="width:40px;" class="rounded-pill"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar ">
                        <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#!main"><i class="fa-solid fa-house fa-2x" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Тим</a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#!igrachi">Играчи</a></li></li>
                            <hr>
                            <li><a class="dropdown-item" href="#!uprava">Стручен штаб</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Натпреварување</a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#!natprevaruvanje">Натпреварување</a></li>
                            <hr>
                            <li><a class="dropdown-item" href="#!sostav">Состав</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">"Тумбе кафе"</a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item"  href="#!stadion">Стадион</a></li>
                            <hr>
                            <li><a class="dropdown-item"  href="#!publika">Публика</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Трансфери</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#!income">Играчи кој доаѓаат</a></li>
                                <hr>
                                <li><a class="dropdown-item" href="#!outcome">Играчи кој заминуваат од клубот</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#!main"><img src="assets/img/Kojot.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill"></a>
                        </li>
                        </ul>
            </div>
        </div>
    </nav>

<div class="col-sm-12">
     <h3>Играчи</h3>
    <div class="table-responsive">

    <table class="table table-striped">
        <thead>
            <tr>
                <th>dres_id</th>
                <th>
                    <input type="text" name="searchByName" id="searchByName" ng-model="searchByName" placeholder="Пребарај по име на играчот" class="ng-pristine ng-untouched ng-valid ng-empty">
                </th>
                <th>
                    <input type="text" name="searchByLastName" id="searchByLastName" ng-model="searchByLastName" placeholder="Пребарај по презиме на играчот" class="ng-pristine ng-untouched ng-valid ng-empty">
                </th>
                <th>
                    <input type="text" name="searchByPosition" id="searchByPosition" ng-model="searchByPosition" placeholder="Пребарај по позиција на играчот" class="ng-pristine ng-untouched ng-valid ng-empty">
                </th>
                <th>
                    <input type="text" name="searchByYear" id="searchByYear" ng-model="searchByYear" placeholder="Пребарај по години на играчот" class="ng-pristine ng-untouched ng-valid ng-empty">
                </th>
                <th>
                    <input type="text" name="searchBySalary" id="searchBySalary" ng-model="searchBySalary" placeholder="Пребарај по месечно плата во денари на играчот" class="ng-pristine ng-untouched ng-valid ng-empty">
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" id="searchByIncomeId" name="searchByIncomeId" ng-model="searchByIncomeId">
                        <option value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: incomes in income --><option ng-repeat="incomes in income" value="1" class="ng-binding ng-scope">
                            1 || Stojan || Dimov || Center Forward
                        </option><!-- end ngRepeat: incomes in income --><option ng-repeat="incomes in income" value="2" class="ng-binding ng-scope">
                            2 || Trajan || Rizovski || Left Back
                        </option><!-- end ngRepeat: incomes in income --><option ng-repeat="incomes in income" value="3" class="ng-binding ng-scope">
                            3 || Mice || Gacov || Right Back
                        </option><!-- end ngRepeat: incomes in income --><option ng-repeat="incomes in income" value="4" class="ng-binding ng-scope">
                            4 || Najdo || Sikijovski || Right Winger
                        </option><!-- end ngRepeat: incomes in income --><option ng-repeat="incomes in income" value="5" class="ng-binding ng-scope">
                            5 || Borche || Stojanoski || Left Winger
                        </option><!-- end ngRepeat: incomes in income --><option ng-repeat="incomes in income" value="6" class="ng-binding ng-scope">
                            6 || Boro || Stojanov || Center Midfielder
                        </option><!-- end ngRepeat: incomes in income --><option ng-repeat="incomes in income" value="72" class="ng-binding ng-scope">
                            72 || Darko || Krstevski || Left back
                        </option><!-- end ngRepeat: incomes in income --><option ng-repeat="incomes in income" value="74" class="ng-binding ng-scope">
                            74 || Vlado || Pavlov || Coach
                        </option><!-- end ngRepeat: incomes in income -->
                    </select>
                </th>
                <th><i class="fa-solid fa-pen"></i>edit</th>
                <th><i class="fa-solid fa-trash-can"></i>delete</th>
            </tr>
        </thead>

        <tbody>
        <?php
$__section_igrachi_position_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['igrachi']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_igrachi_position_0_total = $__section_igrachi_position_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_igrachi_position'] = new Smarty_Variable(array());
if ($__section_igrachi_position_0_total !== 0) {
for ($__section_igrachi_position_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index'] = 0; $__section_igrachi_position_0_iteration <= $__section_igrachi_position_0_total; $__section_igrachi_position_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index']++){
?>
            <tr class="ng-scope">
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['igrachi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index'] : null)]['dres_id'];?>
 </td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['igrachi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index'] : null)]['ime_igrachi'];?>
</td>
                <td class="ng-binding"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['igrachi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index'] : null)]['prezime_igrachi'] ?? '', 'UTF-8');?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['igrachi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index'] : null)]['pozicija_igrachi'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['igrachi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index'] : null)]['godini_igrachi'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['igrachi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index'] : null)]['plata_denari'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['igrachi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index'] : null)]['income_id'];?>
 </td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['igrachi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index'] : null)]['ime_income'];?>
</td>
                <td class="ng-binding"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['igrachi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index'] : null)]['prezime_income'] ?? '', 'UTF-8');?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['igrachi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index'] : null)]['pozicija_income'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['igrachi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index'] : null)]['godini_income'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['igrachi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index'] : null)]['klub'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['igrachi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index'] : null)]['iznos_denari'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['igrachi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index'] : null)]['ime_income'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['igrachi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index'] : null)]['prezime_income'];?>
 </td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['igrachi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index'] : null)]['pozicija_income'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['igrachi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index'] : null)]['godini_income'];?>
</td>
                <td class="ng-binding"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['igrachi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index'] : null)]['ime_igrachi'] ?? '', 'UTF-8');?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['igrachi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index'] : null)]['prezime_igrachi'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['igrachi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index'] : null)]['pozicija_igrachi'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['igrachi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_igrachi_position']->value['index'] : null)]['godini_igrachi'];?>
</td>
                <td class="text-center ng-binding">  <br>  <br> </td>
                <td title="Edit"><i class="fa-solid fa-pen"></i></td>
                <td title="Delete 2 || Blagojche Popovski">
                   <button type="button" class="btn myBtn" data-bs-toggle="modal" data-bs-target="#myModal" ng-click="passPosition($index)"> <i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>
        <?php
}
}
?>
    </table>
    </div>
</div>


<div class="col-sm-12">
    <h3>Натпреварување</h3>
<div class="table-responsive ng-scope">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>kolo_id</th>
                <th>
                    <input type="text" name="searchByDatum" id="searchByDatum" ng-model="searchByDatum" placeholder="Пребарај по датум на натпреварот" class="ng-pristine ng-untouched ng-valid ng-empty">
                </th>
                <th>
                    <input type="text" name="searchByProtivnik" id="searchByProtivnik" ng-model="searchByProtivnik" placeholder="Пребарај по противник на натпреварот" class="ng-pristine ng-untouched ng-valid ng-empty">
                </th>
                <th>
                    <input type="text" name="searchByRezultat" id="searchByRezultat" ng-model="searchByRezultat" placeholder="Пребарај по резултат на натпреварот" class="ng-pristine ng-untouched ng-valid ng-empty">
                </th>
                <th>
                    <input type="text" name="searchByMesto" id="searchByMesto" ng-model="searchByMesto" placeholder="Пребарај по место на натпреварот" class="ng-pristine ng-untouched ng-valid ng-empty">
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" id="searchBySostavId" name="searchBySostavId" ng-model="searchBySostavId">
                        <option href="#" value="">Изберете опции</option>
                        <!-- ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="1" class="ng-binding ng-scope">
                            1 kolo || 2021-09-05 17:00:00
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="2" class="ng-binding ng-scope">
                            2 kolo || 2021-09-12 17:00:00
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="3" class="ng-binding ng-scope">
                            3 kolo || 2021-09-19 16:00:00
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="4" class="ng-binding ng-scope">
                            4 kolo || 2021-09-26 16:00:00
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="5" class="ng-binding ng-scope">
                            5 kolo || 2021-10-03 15:00:00
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="6" class="ng-binding ng-scope">
                            6 kolo || 2021-10-10 15:00:00
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="7" class="ng-binding ng-scope">
                            7 kolo || 2021-10-17 14:00:00
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="8" class="ng-binding ng-scope">
                            8 kolo || 2021-10-24 13:30:00
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="9" class="ng-binding ng-scope">
                            9 kolo || 2021-10-31 13:30:00
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="10" class="ng-binding ng-scope">
                            10 kolo || 2022-02-27 13:00:00
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="11" class="ng-binding ng-scope">
                            11 kolo || 2022-03-06 14:00:00
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="12" class="ng-binding ng-scope">
                            12 kolo || 2022-03-13 14:30:00
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="13" class="ng-binding ng-scope">
                            13 kolo || 2022-03-20 15:00:00
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="14" class="ng-binding ng-scope">
                            14 kolo || 2022-03-27 15:00:00
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="15" class="ng-binding ng-scope">
                            15 kolo || 2022-04-03 15:30:00
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="16" class="ng-binding ng-scope">
                            16 kolo || 2022-04-10 16:00:00
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="17" class="ng-binding ng-scope">
                            17 kolo || 2022-04-17 16:00:00
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="18" class="ng-binding ng-scope">
                            18 kolo || 2022-04-24 16:00:00
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="19" class="ng-binding ng-scope">
                            19 kolo || 2022-05-01 17:00:00
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="20" class="ng-binding ng-scope">
                            20 kolo || 2022-05-15 17:00:00
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="" class="ng-binding ng-scope">
                             kolo || 
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="" class="ng-binding ng-scope">
                             kolo || 
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="" class="ng-binding ng-scope">
                             kolo || 
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="" class="ng-binding ng-scope">
                             kolo || 
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="" class="ng-binding ng-scope">
                             kolo || 
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="" class="ng-binding ng-scope">
                             kolo || 
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="" class="ng-binding ng-scope">
                             kolo || 
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="" class="ng-binding ng-scope">
                             kolo || 
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="" class="ng-binding ng-scope">
                             kolo || 
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="" class="ng-binding ng-scope">
                             kolo || 
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="" class="ng-binding ng-scope">
                             kolo || 
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="" class="ng-binding ng-scope">
                             kolo || 
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="" class="ng-binding ng-scope">
                             kolo || 
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="" class="ng-binding ng-scope">
                             kolo || 
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="" class="ng-binding ng-scope">
                             kolo || 
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="" class="ng-binding ng-scope">
                             kolo || 
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="" class="ng-binding ng-scope">
                             kolo || 
                        </option><!-- end ngRepeat: sostavi in sostav --><option ng-repeat="sostavi in sostav" value="" class="ng-binding ng-scope" selected="selected">
                             kolo || 
                        </option><!-- end ngRepeat: sostavi in sostav -->
                    </select>
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" id="searchByStadionId" name="searchByStadionId" ng-model="searchByStadionId">
                        <option href="#" value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: stadioni in stadion --><option ng-repeat="stadioni in stadion" value="0" class="ng-binding ng-scope">
                            Гостински || Гостински ||  0  kapacitet
                        </option><!-- end ngRepeat: stadioni in stadion --><option ng-repeat="stadioni in stadion" value="1" class="ng-binding ng-scope">
                            Tumbe Kafe || Ulica Tumbe kafe bb ||  7000  kapacitet
                        </option><!-- end ngRepeat: stadioni in stadion --><option ng-repeat="stadioni in stadion" value="2" class="ng-binding ng-scope">
                            Petar Miloshevski || Ulica 16ta bb ||  5000  kapacitet
                        </option><!-- end ngRepeat: stadioni in stadion --><option ng-repeat="stadioni in stadion" value="3" class="ng-binding ng-scope">
                            Pavel Shatev || Setaliste bb ||  2980  kapacitet
                        </option><!-- end ngRepeat: stadioni in stadion --><option ng-repeat="stadioni in stadion" value="4" class="ng-binding ng-scope">
                            Kjumurno || Setaliste bb ||  1564  kapacitet
                        </option><!-- end ngRepeat: stadioni in stadion --><option ng-repeat="stadioni in stadion" value="5" class="ng-binding ng-scope">
                            Pomoshno 1 || Ulica Tumbe kafe bb ||  635  kapacitet
                        </option><!-- end ngRepeat: stadioni in stadion --><option ng-repeat="stadioni in stadion" value="6" class="ng-binding ng-scope">
                            FFM || Kiril i Metodij bb ||  295  kapacitet
                        </option><!-- end ngRepeat: stadioni in stadion -->
                    </select>
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" id="searchByDatumId" name="searchByDatumId" ng-model="searchByDatumId">
                        <option href="#" value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: publiki in publika --><option ng-repeat="publiki in publika" value="0000-00-00" class="ng-binding ng-scope">
                            0000-00-00 ||  0000-00-00 home audience ||  away audience
                        </option><!-- end ngRepeat: publiki in publika --><option ng-repeat="publiki in publika" value="2021-09-05" class="ng-binding ng-scope">
                            2021-09-05 ||  2021-09-05 home audience || 124 away audience
                        </option><!-- end ngRepeat: publiki in publika --><option ng-repeat="publiki in publika" value="2021-09-19" class="ng-binding ng-scope">
                            2021-09-19 ||  2021-09-19 home audience || 0 away audience
                        </option><!-- end ngRepeat: publiki in publika --><option ng-repeat="publiki in publika" value="2021-10-03" class="ng-binding ng-scope">
                            2021-10-03 ||  2021-10-03 home audience || 211 away audience
                        </option><!-- end ngRepeat: publiki in publika --><option ng-repeat="publiki in publika" value="2021-10-17" class="ng-binding ng-scope">
                            2021-10-17 ||  2021-10-17 home audience || 40 away audience
                        </option><!-- end ngRepeat: publiki in publika --><option ng-repeat="publiki in publika" value="2021-10-31" class="ng-binding ng-scope">
                            2021-10-31 ||  2021-10-31 home audience || 200 away audience
                        </option><!-- end ngRepeat: publiki in publika --><option ng-repeat="publiki in publika" value="2022-03-06" class="ng-binding ng-scope">
                            2022-03-06 ||  2022-03-06 home audience || 0 away audience
                        </option><!-- end ngRepeat: publiki in publika --><option ng-repeat="publiki in publika" value="2022-03-20" class="ng-binding ng-scope">
                            2022-03-20 ||  2022-03-20 home audience || 0 away audience
                        </option><!-- end ngRepeat: publiki in publika --><option ng-repeat="publiki in publika" value="2022-04-03" class="ng-binding ng-scope">
                            2022-04-03 ||  2022-04-03 home audience || 50 away audience
                        </option><!-- end ngRepeat: publiki in publika --><option ng-repeat="publiki in publika" value="2022-04-17" class="ng-binding ng-scope">
                            2022-04-17 ||  2022-04-17 home audience || 450 away audience
                        </option><!-- end ngRepeat: publiki in publika --><option ng-repeat="publiki in publika" value="2022-05-01" class="ng-binding ng-scope">
                            2022-05-01 ||  2022-05-01 home audience || 34 away audience
                        </option><!-- end ngRepeat: publiki in publika --><option ng-repeat="publiki in publika" value="2022-05-04" class="ng-binding ng-scope">
                            2022-05-04 ||  2022-05-04 home audience || 10 away audience
                        </option><!-- end ngRepeat: publiki in publika --><option ng-repeat="publiki in publika" value="2022-05-15" class="ng-binding ng-scope">
                            2022-05-15 ||  2022-05-15 home audience || 674 away audience
                        </option><!-- end ngRepeat: publiki in publika -->
                    </select>
                </th>
                <th><i class="fa-solid fa-pen"></i>edit</th>
                <th><i class="fa-solid fa-trash-can"></i>delete</th>
            </tr>
        </thead>

        <tbody>
         <?php
$__section_natprevaruvanje_position_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['natprevaruvanje']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_natprevaruvanje_position_1_total = $__section_natprevaruvanje_position_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position'] = new Smarty_Variable(array());
if ($__section_natprevaruvanje_position_1_total !== 0) {
for ($__section_natprevaruvanje_position_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index'] = 0; $__section_natprevaruvanje_position_1_iteration <= $__section_natprevaruvanje_position_1_total; $__section_natprevaruvanje_position_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index']++){
?>
            <tr class="ng-scope">
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['natprevaruvanje']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index'] : null)]['kolo_id'];?>
 </td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['natprevaruvanje']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index'] : null)]['datum'];?>
</td>
                <td class="ng-binding"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['natprevaruvanje']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index'] : null)]['protivnik'] ?? '', 'UTF-8');?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['natprevaruvanje']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index'] : null)]['rezultat'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['natprevaruvanje']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index'] : null)]['mesto'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['natprevaruvanje']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index'] : null)]['sostav_id'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['natprevaruvanje']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index'] : null)]['stadion_id'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['natprevaruvanje']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index'] : null)]['ime'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['natprevaruvanje']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index'] : null)]['adresa'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['natprevaruvanje']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index'] : null)]['kapacitet'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['natprevaruvanje']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index'] : null)]['datum_id'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['natprevaruvanje']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index'] : null)]['domashna'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['natprevaruvanje']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index'] : null)]['gostinska'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['natprevaruvanje']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_natprevaruvanje_position']->value['index'] : null)]['karti_rasprodadeni'];?>
</td>
                <td class="text-center ng-binding">  <br>  <br> </td>
                <td title="Edit"><i class="fa-solid fa-pen"></i></td>
                <td title="Delete">
                   <button type="button" class="btn myBtn" data-bs-toggle="modal" data-bs-target="#myModal" ng-click="passPosition($index)"> <i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>
        <?php
}
}
?>
        </tbody>
    </table>
</div>
</div>

<div class="col-sm-12">
<h3>Состав</h3>
<div class="table-responsive ng-scope">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>sostav_id</th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="searchByDatum" id="searchByDatum" ng-model="searchByDatum">
                        <option value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: natprevar in natprevaruvanje --><option ng-repeat="natprevar in natprevaruvanje" value="2021-09-05 17:00:00" class="ng-binding ng-scope">
                            1 коло  ||   2021-09-05 17:00:00
                        </option><!-- end ngRepeat: natprevar in natprevaruvanje --><option ng-repeat="natprevar in natprevaruvanje" value="2021-09-12 17:00:00" class="ng-binding ng-scope">
                            2 коло  ||   2021-09-12 17:00:00
                        </option><!-- end ngRepeat: natprevar in natprevaruvanje --><option ng-repeat="natprevar in natprevaruvanje" value="2021-09-19 16:00:00" class="ng-binding ng-scope">
                            3 коло  ||   2021-09-19 16:00:00
                        </option><!-- end ngRepeat: natprevar in natprevaruvanje --><option ng-repeat="natprevar in natprevaruvanje" value="2021-09-26 16:00:00" class="ng-binding ng-scope">
                            4 коло  ||   2021-09-26 16:00:00
                        </option><!-- end ngRepeat: natprevar in natprevaruvanje --><option ng-repeat="natprevar in natprevaruvanje" value="2021-10-03 15:00:00" class="ng-binding ng-scope">
                            5 коло  ||   2021-10-03 15:00:00
                        </option><!-- end ngRepeat: natprevar in natprevaruvanje --><option ng-repeat="natprevar in natprevaruvanje" value="2021-10-10 15:00:00" class="ng-binding ng-scope">
                            6 коло  ||   2021-10-10 15:00:00
                        </option><!-- end ngRepeat: natprevar in natprevaruvanje --><option ng-repeat="natprevar in natprevaruvanje" value="2021-10-17 14:00:00" class="ng-binding ng-scope">
                            7 коло  ||   2021-10-17 14:00:00
                        </option><!-- end ngRepeat: natprevar in natprevaruvanje --><option ng-repeat="natprevar in natprevaruvanje" value="2021-10-24 13:30:00" class="ng-binding ng-scope">
                            8 коло  ||   2021-10-24 13:30:00
                        </option><!-- end ngRepeat: natprevar in natprevaruvanje --><option ng-repeat="natprevar in natprevaruvanje" value="2021-10-31 13:30:00" class="ng-binding ng-scope">
                            9 коло  ||   2021-10-31 13:30:00
                        </option><!-- end ngRepeat: natprevar in natprevaruvanje --><option ng-repeat="natprevar in natprevaruvanje" value="2022-02-27 13:00:00" class="ng-binding ng-scope">
                            10 коло  ||   2022-02-27 13:00:00
                        </option><!-- end ngRepeat: natprevar in natprevaruvanje --><option ng-repeat="natprevar in natprevaruvanje" value="2022-03-06 14:00:00" class="ng-binding ng-scope">
                            11 коло  ||   2022-03-06 14:00:00
                        </option><!-- end ngRepeat: natprevar in natprevaruvanje --><option ng-repeat="natprevar in natprevaruvanje" value="2022-03-13 14:30:00" class="ng-binding ng-scope">
                            12 коло  ||   2022-03-13 14:30:00
                        </option><!-- end ngRepeat: natprevar in natprevaruvanje --><option ng-repeat="natprevar in natprevaruvanje" value="2022-03-20 15:00:00" class="ng-binding ng-scope">
                            13 коло  ||   2022-03-20 15:00:00
                        </option><!-- end ngRepeat: natprevar in natprevaruvanje --><option ng-repeat="natprevar in natprevaruvanje" value="2022-03-27 15:00:00" class="ng-binding ng-scope">
                            14 коло  ||   2022-03-27 15:00:00
                        </option><!-- end ngRepeat: natprevar in natprevaruvanje --><option ng-repeat="natprevar in natprevaruvanje" value="2022-04-03 15:30:00" class="ng-binding ng-scope">
                            15 коло  ||   2022-04-03 15:30:00
                        </option><!-- end ngRepeat: natprevar in natprevaruvanje --><option ng-repeat="natprevar in natprevaruvanje" value="2022-04-10 16:00:00" class="ng-binding ng-scope">
                            16 коло  ||   2022-04-10 16:00:00
                        </option><!-- end ngRepeat: natprevar in natprevaruvanje --><option ng-repeat="natprevar in natprevaruvanje" value="2022-04-17 16:00:00" class="ng-binding ng-scope">
                            17 коло  ||   2022-04-17 16:00:00
                        </option><!-- end ngRepeat: natprevar in natprevaruvanje --><option ng-repeat="natprevar in natprevaruvanje" value="2022-04-24 16:00:00" class="ng-binding ng-scope">
                            18 коло  ||   2022-04-24 16:00:00
                        </option><!-- end ngRepeat: natprevar in natprevaruvanje --><option ng-repeat="natprevar in natprevaruvanje" value="2022-05-01 17:00:00" class="ng-binding ng-scope">
                            19 коло  ||   2022-05-01 17:00:00
                        </option><!-- end ngRepeat: natprevar in natprevaruvanje --><option ng-repeat="natprevar in natprevaruvanje" value="2022-05-15 17:00:00" class="ng-binding ng-scope">
                            20 коло  ||   2022-05-15 17:00:00
                        </option><!-- end ngRepeat: natprevar in natprevaruvanje -->
                    </select>
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="searchByCoach" id="searchByCoach" ng-model="searchByCoach">
                        <option value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="1" class="ng-binding ng-scope">
                            1  || Goalkeeper || Mice  Dimov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="2" class="ng-binding ng-scope">
                            2  || Centre Back || Blagojche  Popovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="3" class="ng-binding ng-scope">
                            3  || Left Back || Andrej  Nedelkovski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="4" class="ng-binding ng-scope">
                            4  || Right Back || Darko  Joshevski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="5" class="ng-binding ng-scope">
                            5  || Centre Back || Hristian  Risteski || 1999
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="6" class="ng-binding ng-scope">
                            6  || Defensive Midfielder || Vladimir  Krsteski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="7" class="ng-binding ng-scope">
                            7  || Center Midfielder || Kire  Lazarov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="8" class="ng-binding ng-scope">
                            8  || Attacking Midfilder || Darko  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="9" class="ng-binding ng-scope">
                            9  || Center Forward || Borche  Manevski || 1988
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="10" class="ng-binding ng-scope">
                            10  || Left Forward || Darko  Krstevski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="11" class="ng-binding ng-scope">
                            11  || Right Forward || Andrej  Markovski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="12" class="ng-binding ng-scope">
                            12  || Goalkeeper || Aleksandar  Markoski || 2001
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="13" class="ng-binding ng-scope">
                            13  || Left Back || Nikola  Piskacev || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="14" class="ng-binding ng-scope">
                            14  || Centre Back || Jove  Nikolov || 2008
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="15" class="ng-binding ng-scope">
                            15  || Right Back || Jove  Nikolovski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="16" class="ng-binding ng-scope">
                            16  || Defensive Midfielder || Mile  Poposki || 1982
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="17" class="ng-binding ng-scope">
                            17  || Center Midfielder || Jorgo  Popovski || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="18" class="ng-binding ng-scope">
                            18  || Attacking Midfielder || Jordan  Mitev || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="19" class="ng-binding ng-scope">
                            19  || Goalkeeper || Antimon  Krsteski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="20" class="ng-binding ng-scope">
                            20  || Center Forward || Cristiano  Ronaldo || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="21" class="ng-binding ng-scope">
                            21  || Left Forward || Vlade  Krstevski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="22" class="ng-binding ng-scope">
                            22  || Centre Back || Deni  Popovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="23" class="ng-binding ng-scope">
                            23  || Right Forward || Hristijan  Dragarski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="24" class="ng-binding ng-scope">
                            24  || Physiotherapist || Darko  Joshev || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="25" class="ng-binding ng-scope">
                            25  || Condition Coach || Hristi  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="26" class="ng-binding ng-scope">
                            26  || Deputy Coach || Viktor  Koteski || 1979
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="27" class="ng-binding ng-scope">
                            27  || Coach || Stefan  Ristevski || 1977
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="28" class="ng-binding ng-scope">
                            28  || Sports Director || Darko  Risteski || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="30" class="ng-binding ng-scope">
                            30  || Left Back || Trajan  Rizovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="31" class="ng-binding ng-scope">
                            31  || Right Winger || Najdo  Sikijovski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="33" class="ng-binding ng-scope">
                            33  || Left Winger || Borche  Stojanovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="34" class="ng-binding ng-scope">
                            34  || Center Midfielder || Boro  Stojanov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="69" class="ng-binding ng-scope">
                            69  || Director || Vladimir  Krstevski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="77" class="ng-binding ng-scope">
                            77  || Right Back || Mice  Gacov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="78" class="ng-binding ng-scope">
                            78  || Left back || Darko  Krstevski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="79" class="ng-binding ng-scope">
                            79  || Center back || Hristijan  Ristevski || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="83" class="ng-binding ng-scope">
                            83  || Center Forward || Stojan  Dimov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="93" class="ng-binding ng-scope">
                            93  || Coach || Vlado  Pavlov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi -->
                    </select>
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="searchByGK" id="searchByGK" ng-model="searchByGK">
                        <option value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="1" class="ng-binding ng-scope">
                            1  ||    Goalkeeper || Mice  Dimov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="2" class="ng-binding ng-scope">
                            2  ||    Centre Back || Blagojche  Popovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="3" class="ng-binding ng-scope">
                            3  ||    Left Back || Andrej  Nedelkovski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="4" class="ng-binding ng-scope">
                            4  ||    Right Back || Darko  Joshevski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="5" class="ng-binding ng-scope">
                            5  ||    Centre Back || Hristian  Risteski || 1999
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="6" class="ng-binding ng-scope">
                            6  ||    Defensive Midfielder || Vladimir  Krsteski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="7" class="ng-binding ng-scope">
                            7  ||    Center Midfielder || Kire  Lazarov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="8" class="ng-binding ng-scope">
                            8  ||    Attacking Midfilder || Darko  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="9" class="ng-binding ng-scope">
                            9  ||    Center Forward || Borche  Manevski || 1988
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="10" class="ng-binding ng-scope">
                            10  ||    Left Forward || Darko  Krstevski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="11" class="ng-binding ng-scope">
                            11  ||    Right Forward || Andrej  Markovski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="12" class="ng-binding ng-scope">
                            12  ||    Goalkeeper || Aleksandar  Markoski || 2001
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="13" class="ng-binding ng-scope">
                            13  ||    Left Back || Nikola  Piskacev || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="14" class="ng-binding ng-scope">
                            14  ||    Centre Back || Jove  Nikolov || 2008
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="15" class="ng-binding ng-scope">
                            15  ||    Right Back || Jove  Nikolovski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="16" class="ng-binding ng-scope">
                            16  ||    Defensive Midfielder || Mile  Poposki || 1982
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="17" class="ng-binding ng-scope">
                            17  ||    Center Midfielder || Jorgo  Popovski || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="18" class="ng-binding ng-scope">
                            18  ||    Attacking Midfielder || Jordan  Mitev || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="19" class="ng-binding ng-scope">
                            19  ||    Goalkeeper || Antimon  Krsteski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="20" class="ng-binding ng-scope">
                            20  ||    Center Forward || Cristiano  Ronaldo || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="21" class="ng-binding ng-scope">
                            21  ||    Left Forward || Vlade  Krstevski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="22" class="ng-binding ng-scope">
                            22  ||    Centre Back || Deni  Popovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="23" class="ng-binding ng-scope">
                            23  ||    Right Forward || Hristijan  Dragarski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="24" class="ng-binding ng-scope">
                            24  ||    Physiotherapist || Darko  Joshev || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="25" class="ng-binding ng-scope">
                            25  ||    Condition Coach || Hristi  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="26" class="ng-binding ng-scope">
                            26  ||    Deputy Coach || Viktor  Koteski || 1979
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="27" class="ng-binding ng-scope">
                            27  ||    Coach || Stefan  Ristevski || 1977
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="28" class="ng-binding ng-scope">
                            28  ||    Sports Director || Darko  Risteski || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="30" class="ng-binding ng-scope">
                            30  ||    Left Back || Trajan  Rizovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="31" class="ng-binding ng-scope">
                            31  ||    Right Winger || Najdo  Sikijovski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="33" class="ng-binding ng-scope">
                            33  ||    Left Winger || Borche  Stojanovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="34" class="ng-binding ng-scope">
                            34  ||    Center Midfielder || Boro  Stojanov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="69" class="ng-binding ng-scope">
                            69  ||    Director || Vladimir  Krstevski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="77" class="ng-binding ng-scope">
                            77  ||    Right Back || Mice  Gacov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="78" class="ng-binding ng-scope">
                            78  ||    Left back || Darko  Krstevski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="79" class="ng-binding ng-scope">
                            79  ||    Center back || Hristijan  Ristevski || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="83" class="ng-binding ng-scope">
                            83  ||    Center Forward || Stojan  Dimov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="93" class="ng-binding ng-scope">
                            93  ||    Coach || Vlado  Pavlov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi -->
                    </select>
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="searchByCB1" id="searchByCB1" ng-model="searchByCB1">
                        <option value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="1" class="ng-binding ng-scope">
                            1  ||    Goalkeeper || Mice  Dimov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="2" class="ng-binding ng-scope">
                            2  ||    Centre Back || Blagojche  Popovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="3" class="ng-binding ng-scope">
                            3  ||    Left Back || Andrej  Nedelkovski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="4" class="ng-binding ng-scope">
                            4  ||    Right Back || Darko  Joshevski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="5" class="ng-binding ng-scope">
                            5  ||    Centre Back || Hristian  Risteski || 1999
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="6" class="ng-binding ng-scope">
                            6  ||    Defensive Midfielder || Vladimir  Krsteski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="7" class="ng-binding ng-scope">
                            7  ||    Center Midfielder || Kire  Lazarov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="8" class="ng-binding ng-scope">
                            8  ||    Attacking Midfilder || Darko  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="9" class="ng-binding ng-scope">
                            9  ||    Center Forward || Borche  Manevski || 1988
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="10" class="ng-binding ng-scope">
                            10  ||    Left Forward || Darko  Krstevski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="11" class="ng-binding ng-scope">
                            11  ||    Right Forward || Andrej  Markovski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="12" class="ng-binding ng-scope">
                            12  ||    Goalkeeper || Aleksandar  Markoski || 2001
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="13" class="ng-binding ng-scope">
                            13  ||    Left Back || Nikola  Piskacev || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="14" class="ng-binding ng-scope">
                            14  ||    Centre Back || Jove  Nikolov || 2008
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="15" class="ng-binding ng-scope">
                            15  ||    Right Back || Jove  Nikolovski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="16" class="ng-binding ng-scope">
                            16  ||    Defensive Midfielder || Mile  Poposki || 1982
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="17" class="ng-binding ng-scope">
                            17  ||    Center Midfielder || Jorgo  Popovski || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="18" class="ng-binding ng-scope">
                            18  ||    Attacking Midfielder || Jordan  Mitev || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="19" class="ng-binding ng-scope">
                            19  ||    Goalkeeper || Antimon  Krsteski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="20" class="ng-binding ng-scope">
                            20  ||    Center Forward || Cristiano  Ronaldo || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="21" class="ng-binding ng-scope">
                            21  ||    Left Forward || Vlade  Krstevski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="22" class="ng-binding ng-scope">
                            22  ||    Centre Back || Deni  Popovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="23" class="ng-binding ng-scope">
                            23  ||    Right Forward || Hristijan  Dragarski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="24" class="ng-binding ng-scope">
                            24  ||    Physiotherapist || Darko  Joshev || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="25" class="ng-binding ng-scope">
                            25  ||    Condition Coach || Hristi  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="26" class="ng-binding ng-scope">
                            26  ||    Deputy Coach || Viktor  Koteski || 1979
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="27" class="ng-binding ng-scope">
                            27  ||    Coach || Stefan  Ristevski || 1977
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="28" class="ng-binding ng-scope">
                            28  ||    Sports Director || Darko  Risteski || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="30" class="ng-binding ng-scope">
                            30  ||    Left Back || Trajan  Rizovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="31" class="ng-binding ng-scope">
                            31  ||    Right Winger || Najdo  Sikijovski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="33" class="ng-binding ng-scope">
                            33  ||    Left Winger || Borche  Stojanovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="34" class="ng-binding ng-scope">
                            34  ||    Center Midfielder || Boro  Stojanov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="69" class="ng-binding ng-scope">
                            69  ||    Director || Vladimir  Krstevski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="77" class="ng-binding ng-scope">
                            77  ||    Right Back || Mice  Gacov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="78" class="ng-binding ng-scope">
                            78  ||    Left back || Darko  Krstevski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="79" class="ng-binding ng-scope">
                            79  ||    Center back || Hristijan  Ristevski || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="83" class="ng-binding ng-scope">
                            83  ||    Center Forward || Stojan  Dimov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="93" class="ng-binding ng-scope">
                            93  ||    Coach || Vlado  Pavlov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi -->
                    </select>
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="searchByCB2" id="searchByCB2" ng-model="searchByCB2">
                        <option value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="1" class="ng-binding ng-scope">
                            1  ||    Goalkeeper || Mice  Dimov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="2" class="ng-binding ng-scope">
                            2  ||    Centre Back || Blagojche  Popovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="3" class="ng-binding ng-scope">
                            3  ||    Left Back || Andrej  Nedelkovski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="4" class="ng-binding ng-scope">
                            4  ||    Right Back || Darko  Joshevski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="5" class="ng-binding ng-scope">
                            5  ||    Centre Back || Hristian  Risteski || 1999
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="6" class="ng-binding ng-scope">
                            6  ||    Defensive Midfielder || Vladimir  Krsteski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="7" class="ng-binding ng-scope">
                            7  ||    Center Midfielder || Kire  Lazarov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="8" class="ng-binding ng-scope">
                            8  ||    Attacking Midfilder || Darko  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="9" class="ng-binding ng-scope">
                            9  ||    Center Forward || Borche  Manevski || 1988
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="10" class="ng-binding ng-scope">
                            10  ||    Left Forward || Darko  Krstevski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="11" class="ng-binding ng-scope">
                            11  ||    Right Forward || Andrej  Markovski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="12" class="ng-binding ng-scope">
                            12  ||    Goalkeeper || Aleksandar  Markoski || 2001
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="13" class="ng-binding ng-scope">
                            13  ||    Left Back || Nikola  Piskacev || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="14" class="ng-binding ng-scope">
                            14  ||    Centre Back || Jove  Nikolov || 2008
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="15" class="ng-binding ng-scope">
                            15  ||    Right Back || Jove  Nikolovski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="16" class="ng-binding ng-scope">
                            16  ||    Defensive Midfielder || Mile  Poposki || 1982
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="17" class="ng-binding ng-scope">
                            17  ||    Center Midfielder || Jorgo  Popovski || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="18" class="ng-binding ng-scope">
                            18  ||    Attacking Midfielder || Jordan  Mitev || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="19" class="ng-binding ng-scope">
                            19  ||    Goalkeeper || Antimon  Krsteski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="20" class="ng-binding ng-scope">
                            20  ||    Center Forward || Cristiano  Ronaldo || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="21" class="ng-binding ng-scope">
                            21  ||    Left Forward || Vlade  Krstevski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="22" class="ng-binding ng-scope">
                            22  ||    Centre Back || Deni  Popovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="23" class="ng-binding ng-scope">
                            23  ||    Right Forward || Hristijan  Dragarski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="24" class="ng-binding ng-scope">
                            24  ||    Physiotherapist || Darko  Joshev || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="25" class="ng-binding ng-scope">
                            25  ||    Condition Coach || Hristi  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="26" class="ng-binding ng-scope">
                            26  ||    Deputy Coach || Viktor  Koteski || 1979
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="27" class="ng-binding ng-scope">
                            27  ||    Coach || Stefan  Ristevski || 1977
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="28" class="ng-binding ng-scope">
                            28  ||    Sports Director || Darko  Risteski || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="30" class="ng-binding ng-scope">
                            30  ||    Left Back || Trajan  Rizovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="31" class="ng-binding ng-scope">
                            31  ||    Right Winger || Najdo  Sikijovski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="33" class="ng-binding ng-scope">
                            33  ||    Left Winger || Borche  Stojanovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="34" class="ng-binding ng-scope">
                            34  ||    Center Midfielder || Boro  Stojanov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="69" class="ng-binding ng-scope">
                            69  ||    Director || Vladimir  Krstevski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="77" class="ng-binding ng-scope">
                            77  ||    Right Back || Mice  Gacov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="78" class="ng-binding ng-scope">
                            78  ||    Left back || Darko  Krstevski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="79" class="ng-binding ng-scope">
                            79  ||    Center back || Hristijan  Ristevski || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="83" class="ng-binding ng-scope">
                            83  ||    Center Forward || Stojan  Dimov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="93" class="ng-binding ng-scope">
                            93  ||    Coach || Vlado  Pavlov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi -->
                    </select>
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="searchByRB" id="searchByRB" ng-model="searchByRB">
                        <option value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="1" class="ng-binding ng-scope">
                            1  ||    Goalkeeper || Mice  Dimov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="2" class="ng-binding ng-scope">
                            2  ||    Centre Back || Blagojche  Popovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="3" class="ng-binding ng-scope">
                            3  ||    Left Back || Andrej  Nedelkovski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="4" class="ng-binding ng-scope">
                            4  ||    Right Back || Darko  Joshevski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="5" class="ng-binding ng-scope">
                            5  ||    Centre Back || Hristian  Risteski || 1999
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="6" class="ng-binding ng-scope">
                            6  ||    Defensive Midfielder || Vladimir  Krsteski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="7" class="ng-binding ng-scope">
                            7  ||    Center Midfielder || Kire  Lazarov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="8" class="ng-binding ng-scope">
                            8  ||    Attacking Midfilder || Darko  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="9" class="ng-binding ng-scope">
                            9  ||    Center Forward || Borche  Manevski || 1988
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="10" class="ng-binding ng-scope">
                            10  ||    Left Forward || Darko  Krstevski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="11" class="ng-binding ng-scope">
                            11  ||    Right Forward || Andrej  Markovski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="12" class="ng-binding ng-scope">
                            12  ||    Goalkeeper || Aleksandar  Markoski || 2001
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="13" class="ng-binding ng-scope">
                            13  ||    Left Back || Nikola  Piskacev || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="14" class="ng-binding ng-scope">
                            14  ||    Centre Back || Jove  Nikolov || 2008
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="15" class="ng-binding ng-scope">
                            15  ||    Right Back || Jove  Nikolovski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="16" class="ng-binding ng-scope">
                            16  ||    Defensive Midfielder || Mile  Poposki || 1982
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="17" class="ng-binding ng-scope">
                            17  ||    Center Midfielder || Jorgo  Popovski || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="18" class="ng-binding ng-scope">
                            18  ||    Attacking Midfielder || Jordan  Mitev || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="19" class="ng-binding ng-scope">
                            19  ||    Goalkeeper || Antimon  Krsteski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="20" class="ng-binding ng-scope">
                            20  ||    Center Forward || Cristiano  Ronaldo || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="21" class="ng-binding ng-scope">
                            21  ||    Left Forward || Vlade  Krstevski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="22" class="ng-binding ng-scope">
                            22  ||    Centre Back || Deni  Popovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="23" class="ng-binding ng-scope">
                            23  ||    Right Forward || Hristijan  Dragarski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="24" class="ng-binding ng-scope">
                            24  ||    Physiotherapist || Darko  Joshev || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="25" class="ng-binding ng-scope">
                            25  ||    Condition Coach || Hristi  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="26" class="ng-binding ng-scope">
                            26  ||    Deputy Coach || Viktor  Koteski || 1979
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="27" class="ng-binding ng-scope">
                            27  ||    Coach || Stefan  Ristevski || 1977
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="28" class="ng-binding ng-scope">
                            28  ||    Sports Director || Darko  Risteski || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="30" class="ng-binding ng-scope">
                            30  ||    Left Back || Trajan  Rizovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="31" class="ng-binding ng-scope">
                            31  ||    Right Winger || Najdo  Sikijovski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="33" class="ng-binding ng-scope">
                            33  ||    Left Winger || Borche  Stojanovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="34" class="ng-binding ng-scope">
                            34  ||    Center Midfielder || Boro  Stojanov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="69" class="ng-binding ng-scope">
                            69  ||    Director || Vladimir  Krstevski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="77" class="ng-binding ng-scope">
                            77  ||    Right Back || Mice  Gacov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="78" class="ng-binding ng-scope">
                            78  ||    Left back || Darko  Krstevski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="79" class="ng-binding ng-scope">
                            79  ||    Center back || Hristijan  Ristevski || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="83" class="ng-binding ng-scope">
                            83  ||    Center Forward || Stojan  Dimov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="93" class="ng-binding ng-scope">
                            93  ||    Coach || Vlado  Pavlov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi -->
                    </select>
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="searchByLB" id="searchByLB" ng-model="searchByLB">
                        <option value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="1" class="ng-binding ng-scope">
                            1  ||  Goalkeeper || Mice  Dimov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="2" class="ng-binding ng-scope">
                            2  ||  Centre Back || Blagojche  Popovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="3" class="ng-binding ng-scope">
                            3  ||  Left Back || Andrej  Nedelkovski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="4" class="ng-binding ng-scope">
                            4  ||  Right Back || Darko  Joshevski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="5" class="ng-binding ng-scope">
                            5  ||  Centre Back || Hristian  Risteski || 1999
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="6" class="ng-binding ng-scope">
                            6  ||  Defensive Midfielder || Vladimir  Krsteski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="7" class="ng-binding ng-scope">
                            7  ||  Center Midfielder || Kire  Lazarov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="8" class="ng-binding ng-scope">
                            8  ||  Attacking Midfilder || Darko  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="9" class="ng-binding ng-scope">
                            9  ||  Center Forward || Borche  Manevski || 1988
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="10" class="ng-binding ng-scope">
                            10  ||  Left Forward || Darko  Krstevski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="11" class="ng-binding ng-scope">
                            11  ||  Right Forward || Andrej  Markovski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="12" class="ng-binding ng-scope">
                            12  ||  Goalkeeper || Aleksandar  Markoski || 2001
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="13" class="ng-binding ng-scope">
                            13  ||  Left Back || Nikola  Piskacev || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="14" class="ng-binding ng-scope">
                            14  ||  Centre Back || Jove  Nikolov || 2008
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="15" class="ng-binding ng-scope">
                            15  ||  Right Back || Jove  Nikolovski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="16" class="ng-binding ng-scope">
                            16  ||  Defensive Midfielder || Mile  Poposki || 1982
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="17" class="ng-binding ng-scope">
                            17  ||  Center Midfielder || Jorgo  Popovski || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="18" class="ng-binding ng-scope">
                            18  ||  Attacking Midfielder || Jordan  Mitev || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="19" class="ng-binding ng-scope">
                            19  ||  Goalkeeper || Antimon  Krsteski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="20" class="ng-binding ng-scope">
                            20  ||  Center Forward || Cristiano  Ronaldo || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="21" class="ng-binding ng-scope">
                            21  ||  Left Forward || Vlade  Krstevski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="22" class="ng-binding ng-scope">
                            22  ||  Centre Back || Deni  Popovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="23" class="ng-binding ng-scope">
                            23  ||  Right Forward || Hristijan  Dragarski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="24" class="ng-binding ng-scope">
                            24  ||  Physiotherapist || Darko  Joshev || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="25" class="ng-binding ng-scope">
                            25  ||  Condition Coach || Hristi  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="26" class="ng-binding ng-scope">
                            26  ||  Deputy Coach || Viktor  Koteski || 1979
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="27" class="ng-binding ng-scope">
                            27  ||  Coach || Stefan  Ristevski || 1977
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="28" class="ng-binding ng-scope">
                            28  ||  Sports Director || Darko  Risteski || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="30" class="ng-binding ng-scope">
                            30  ||  Left Back || Trajan  Rizovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="31" class="ng-binding ng-scope">
                            31  ||  Right Winger || Najdo  Sikijovski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="33" class="ng-binding ng-scope">
                            33  ||  Left Winger || Borche  Stojanovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="34" class="ng-binding ng-scope">
                            34  ||  Center Midfielder || Boro  Stojanov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="69" class="ng-binding ng-scope">
                            69  ||  Director || Vladimir  Krstevski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="77" class="ng-binding ng-scope">
                            77  ||  Right Back || Mice  Gacov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="78" class="ng-binding ng-scope">
                            78  ||  Left back || Darko  Krstevski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="79" class="ng-binding ng-scope">
                            79  ||  Center back || Hristijan  Ristevski || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="83" class="ng-binding ng-scope">
                            83  ||  Center Forward || Stojan  Dimov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="93" class="ng-binding ng-scope">
                            93  ||  Coach || Vlado  Pavlov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi -->
                    </select>
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="searchByDMF" id="searchByDMF" ng-model="searchByDMF">
                        <option value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="1" class="ng-binding ng-scope">
                            1  ||   Goalkeeper || Mice  Dimov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="2" class="ng-binding ng-scope">
                            2  ||   Centre Back || Blagojche  Popovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="3" class="ng-binding ng-scope">
                            3  ||   Left Back || Andrej  Nedelkovski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="4" class="ng-binding ng-scope">
                            4  ||   Right Back || Darko  Joshevski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="5" class="ng-binding ng-scope">
                            5  ||   Centre Back || Hristian  Risteski || 1999
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="6" class="ng-binding ng-scope">
                            6  ||   Defensive Midfielder || Vladimir  Krsteski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="7" class="ng-binding ng-scope">
                            7  ||   Center Midfielder || Kire  Lazarov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="8" class="ng-binding ng-scope">
                            8  ||   Attacking Midfilder || Darko  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="9" class="ng-binding ng-scope">
                            9  ||   Center Forward || Borche  Manevski || 1988
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="10" class="ng-binding ng-scope">
                            10  ||   Left Forward || Darko  Krstevski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="11" class="ng-binding ng-scope">
                            11  ||   Right Forward || Andrej  Markovski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="12" class="ng-binding ng-scope">
                            12  ||   Goalkeeper || Aleksandar  Markoski || 2001
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="13" class="ng-binding ng-scope">
                            13  ||   Left Back || Nikola  Piskacev || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="14" class="ng-binding ng-scope">
                            14  ||   Centre Back || Jove  Nikolov || 2008
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="15" class="ng-binding ng-scope">
                            15  ||   Right Back || Jove  Nikolovski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="16" class="ng-binding ng-scope">
                            16  ||   Defensive Midfielder || Mile  Poposki || 1982
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="17" class="ng-binding ng-scope">
                            17  ||   Center Midfielder || Jorgo  Popovski || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="18" class="ng-binding ng-scope">
                            18  ||   Attacking Midfielder || Jordan  Mitev || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="19" class="ng-binding ng-scope">
                            19  ||   Goalkeeper || Antimon  Krsteski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="20" class="ng-binding ng-scope">
                            20  ||   Center Forward || Cristiano  Ronaldo || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="21" class="ng-binding ng-scope">
                            21  ||   Left Forward || Vlade  Krstevski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="22" class="ng-binding ng-scope">
                            22  ||   Centre Back || Deni  Popovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="23" class="ng-binding ng-scope">
                            23  ||   Right Forward || Hristijan  Dragarski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="24" class="ng-binding ng-scope">
                            24  ||   Physiotherapist || Darko  Joshev || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="25" class="ng-binding ng-scope">
                            25  ||   Condition Coach || Hristi  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="26" class="ng-binding ng-scope">
                            26  ||   Deputy Coach || Viktor  Koteski || 1979
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="27" class="ng-binding ng-scope">
                            27  ||   Coach || Stefan  Ristevski || 1977
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="28" class="ng-binding ng-scope">
                            28  ||   Sports Director || Darko  Risteski || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="30" class="ng-binding ng-scope">
                            30  ||   Left Back || Trajan  Rizovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="31" class="ng-binding ng-scope">
                            31  ||   Right Winger || Najdo  Sikijovski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="33" class="ng-binding ng-scope">
                            33  ||   Left Winger || Borche  Stojanovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="34" class="ng-binding ng-scope">
                            34  ||   Center Midfielder || Boro  Stojanov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="69" class="ng-binding ng-scope">
                            69  ||   Director || Vladimir  Krstevski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="77" class="ng-binding ng-scope">
                            77  ||   Right Back || Mice  Gacov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="78" class="ng-binding ng-scope">
                            78  ||   Left back || Darko  Krstevski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="79" class="ng-binding ng-scope">
                            79  ||   Center back || Hristijan  Ristevski || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="83" class="ng-binding ng-scope">
                            83  ||   Center Forward || Stojan  Dimov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="93" class="ng-binding ng-scope">
                            93  ||   Coach || Vlado  Pavlov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi -->
                    </select>
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="searchByCMF" id="searchByCMF" ng-model="searchByCMF">
                        <option value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="1" class="ng-binding ng-scope">
                            1  ||   Goalkeeper || Mice  Dimov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="2" class="ng-binding ng-scope">
                            2  ||   Centre Back || Blagojche  Popovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="3" class="ng-binding ng-scope">
                            3  ||   Left Back || Andrej  Nedelkovski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="4" class="ng-binding ng-scope">
                            4  ||   Right Back || Darko  Joshevski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="5" class="ng-binding ng-scope">
                            5  ||   Centre Back || Hristian  Risteski || 1999
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="6" class="ng-binding ng-scope">
                            6  ||   Defensive Midfielder || Vladimir  Krsteski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="7" class="ng-binding ng-scope">
                            7  ||   Center Midfielder || Kire  Lazarov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="8" class="ng-binding ng-scope">
                            8  ||   Attacking Midfilder || Darko  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="9" class="ng-binding ng-scope">
                            9  ||   Center Forward || Borche  Manevski || 1988
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="10" class="ng-binding ng-scope">
                            10  ||   Left Forward || Darko  Krstevski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="11" class="ng-binding ng-scope">
                            11  ||   Right Forward || Andrej  Markovski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="12" class="ng-binding ng-scope">
                            12  ||   Goalkeeper || Aleksandar  Markoski || 2001
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="13" class="ng-binding ng-scope">
                            13  ||   Left Back || Nikola  Piskacev || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="14" class="ng-binding ng-scope">
                            14  ||   Centre Back || Jove  Nikolov || 2008
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="15" class="ng-binding ng-scope">
                            15  ||   Right Back || Jove  Nikolovski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="16" class="ng-binding ng-scope">
                            16  ||   Defensive Midfielder || Mile  Poposki || 1982
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="17" class="ng-binding ng-scope">
                            17  ||   Center Midfielder || Jorgo  Popovski || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="18" class="ng-binding ng-scope">
                            18  ||   Attacking Midfielder || Jordan  Mitev || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="19" class="ng-binding ng-scope">
                            19  ||   Goalkeeper || Antimon  Krsteski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="20" class="ng-binding ng-scope">
                            20  ||   Center Forward || Cristiano  Ronaldo || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="21" class="ng-binding ng-scope">
                            21  ||   Left Forward || Vlade  Krstevski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="22" class="ng-binding ng-scope">
                            22  ||   Centre Back || Deni  Popovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="23" class="ng-binding ng-scope">
                            23  ||   Right Forward || Hristijan  Dragarski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="24" class="ng-binding ng-scope">
                            24  ||   Physiotherapist || Darko  Joshev || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="25" class="ng-binding ng-scope">
                            25  ||   Condition Coach || Hristi  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="26" class="ng-binding ng-scope">
                            26  ||   Deputy Coach || Viktor  Koteski || 1979
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="27" class="ng-binding ng-scope">
                            27  ||   Coach || Stefan  Ristevski || 1977
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="28" class="ng-binding ng-scope">
                            28  ||   Sports Director || Darko  Risteski || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="30" class="ng-binding ng-scope">
                            30  ||   Left Back || Trajan  Rizovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="31" class="ng-binding ng-scope">
                            31  ||   Right Winger || Najdo  Sikijovski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="33" class="ng-binding ng-scope">
                            33  ||   Left Winger || Borche  Stojanovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="34" class="ng-binding ng-scope">
                            34  ||   Center Midfielder || Boro  Stojanov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="69" class="ng-binding ng-scope">
                            69  ||   Director || Vladimir  Krstevski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="77" class="ng-binding ng-scope">
                            77  ||   Right Back || Mice  Gacov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="78" class="ng-binding ng-scope">
                            78  ||   Left back || Darko  Krstevski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="79" class="ng-binding ng-scope">
                            79  ||   Center back || Hristijan  Ristevski || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="83" class="ng-binding ng-scope">
                            83  ||   Center Forward || Stojan  Dimov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="93" class="ng-binding ng-scope">
                            93  ||   Coach || Vlado  Pavlov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi -->
                    </select>
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="searchByAMF" id="searchByAMF" ng-model="searchByAMF">
                        <option value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="1" class="ng-binding ng-scope">
                            1  ||    Goalkeeper || Mice  Dimov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="2" class="ng-binding ng-scope">
                            2  ||    Centre Back || Blagojche  Popovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="3" class="ng-binding ng-scope">
                            3  ||    Left Back || Andrej  Nedelkovski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="4" class="ng-binding ng-scope">
                            4  ||    Right Back || Darko  Joshevski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="5" class="ng-binding ng-scope">
                            5  ||    Centre Back || Hristian  Risteski || 1999
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="6" class="ng-binding ng-scope">
                            6  ||    Defensive Midfielder || Vladimir  Krsteski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="7" class="ng-binding ng-scope">
                            7  ||    Center Midfielder || Kire  Lazarov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="8" class="ng-binding ng-scope">
                            8  ||    Attacking Midfilder || Darko  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="9" class="ng-binding ng-scope">
                            9  ||    Center Forward || Borche  Manevski || 1988
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="10" class="ng-binding ng-scope">
                            10  ||    Left Forward || Darko  Krstevski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="11" class="ng-binding ng-scope">
                            11  ||    Right Forward || Andrej  Markovski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="12" class="ng-binding ng-scope">
                            12  ||    Goalkeeper || Aleksandar  Markoski || 2001
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="13" class="ng-binding ng-scope">
                            13  ||    Left Back || Nikola  Piskacev || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="14" class="ng-binding ng-scope">
                            14  ||    Centre Back || Jove  Nikolov || 2008
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="15" class="ng-binding ng-scope">
                            15  ||    Right Back || Jove  Nikolovski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="16" class="ng-binding ng-scope">
                            16  ||    Defensive Midfielder || Mile  Poposki || 1982
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="17" class="ng-binding ng-scope">
                            17  ||    Center Midfielder || Jorgo  Popovski || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="18" class="ng-binding ng-scope">
                            18  ||    Attacking Midfielder || Jordan  Mitev || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="19" class="ng-binding ng-scope">
                            19  ||    Goalkeeper || Antimon  Krsteski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="20" class="ng-binding ng-scope">
                            20  ||    Center Forward || Cristiano  Ronaldo || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="21" class="ng-binding ng-scope">
                            21  ||    Left Forward || Vlade  Krstevski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="22" class="ng-binding ng-scope">
                            22  ||    Centre Back || Deni  Popovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="23" class="ng-binding ng-scope">
                            23  ||    Right Forward || Hristijan  Dragarski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="24" class="ng-binding ng-scope">
                            24  ||    Physiotherapist || Darko  Joshev || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="25" class="ng-binding ng-scope">
                            25  ||    Condition Coach || Hristi  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="26" class="ng-binding ng-scope">
                            26  ||    Deputy Coach || Viktor  Koteski || 1979
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="27" class="ng-binding ng-scope">
                            27  ||    Coach || Stefan  Ristevski || 1977
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="28" class="ng-binding ng-scope">
                            28  ||    Sports Director || Darko  Risteski || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="30" class="ng-binding ng-scope">
                            30  ||    Left Back || Trajan  Rizovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="31" class="ng-binding ng-scope">
                            31  ||    Right Winger || Najdo  Sikijovski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="33" class="ng-binding ng-scope">
                            33  ||    Left Winger || Borche  Stojanovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="34" class="ng-binding ng-scope">
                            34  ||    Center Midfielder || Boro  Stojanov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="69" class="ng-binding ng-scope">
                            69  ||    Director || Vladimir  Krstevski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="77" class="ng-binding ng-scope">
                            77  ||    Right Back || Mice  Gacov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="78" class="ng-binding ng-scope">
                            78  ||    Left back || Darko  Krstevski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="79" class="ng-binding ng-scope">
                            79  ||    Center back || Hristijan  Ristevski || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="83" class="ng-binding ng-scope">
                            83  ||    Center Forward || Stojan  Dimov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="93" class="ng-binding ng-scope">
                            93  ||    Coach || Vlado  Pavlov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi -->
                    </select>
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="searchByRWF" id="searchByRWF" ng-model="searchByRWF">
                        <option value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="1" class="ng-binding ng-scope">
                            1  ||   Goalkeeper || Mice  Dimov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="2" class="ng-binding ng-scope">
                            2  ||   Centre Back || Blagojche  Popovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="3" class="ng-binding ng-scope">
                            3  ||   Left Back || Andrej  Nedelkovski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="4" class="ng-binding ng-scope">
                            4  ||   Right Back || Darko  Joshevski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="5" class="ng-binding ng-scope">
                            5  ||   Centre Back || Hristian  Risteski || 1999
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="6" class="ng-binding ng-scope">
                            6  ||   Defensive Midfielder || Vladimir  Krsteski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="7" class="ng-binding ng-scope">
                            7  ||   Center Midfielder || Kire  Lazarov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="8" class="ng-binding ng-scope">
                            8  ||   Attacking Midfilder || Darko  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="9" class="ng-binding ng-scope">
                            9  ||   Center Forward || Borche  Manevski || 1988
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="10" class="ng-binding ng-scope">
                            10  ||   Left Forward || Darko  Krstevski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="11" class="ng-binding ng-scope">
                            11  ||   Right Forward || Andrej  Markovski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="12" class="ng-binding ng-scope">
                            12  ||   Goalkeeper || Aleksandar  Markoski || 2001
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="13" class="ng-binding ng-scope">
                            13  ||   Left Back || Nikola  Piskacev || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="14" class="ng-binding ng-scope">
                            14  ||   Centre Back || Jove  Nikolov || 2008
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="15" class="ng-binding ng-scope">
                            15  ||   Right Back || Jove  Nikolovski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="16" class="ng-binding ng-scope">
                            16  ||   Defensive Midfielder || Mile  Poposki || 1982
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="17" class="ng-binding ng-scope">
                            17  ||   Center Midfielder || Jorgo  Popovski || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="18" class="ng-binding ng-scope">
                            18  ||   Attacking Midfielder || Jordan  Mitev || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="19" class="ng-binding ng-scope">
                            19  ||   Goalkeeper || Antimon  Krsteski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="20" class="ng-binding ng-scope">
                            20  ||   Center Forward || Cristiano  Ronaldo || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="21" class="ng-binding ng-scope">
                            21  ||   Left Forward || Vlade  Krstevski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="22" class="ng-binding ng-scope">
                            22  ||   Centre Back || Deni  Popovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="23" class="ng-binding ng-scope">
                            23  ||   Right Forward || Hristijan  Dragarski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="24" class="ng-binding ng-scope">
                            24  ||   Physiotherapist || Darko  Joshev || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="25" class="ng-binding ng-scope">
                            25  ||   Condition Coach || Hristi  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="26" class="ng-binding ng-scope">
                            26  ||   Deputy Coach || Viktor  Koteski || 1979
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="27" class="ng-binding ng-scope">
                            27  ||   Coach || Stefan  Ristevski || 1977
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="28" class="ng-binding ng-scope">
                            28  ||   Sports Director || Darko  Risteski || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="30" class="ng-binding ng-scope">
                            30  ||   Left Back || Trajan  Rizovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="31" class="ng-binding ng-scope">
                            31  ||   Right Winger || Najdo  Sikijovski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="33" class="ng-binding ng-scope">
                            33  ||   Left Winger || Borche  Stojanovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="34" class="ng-binding ng-scope">
                            34  ||   Center Midfielder || Boro  Stojanov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="69" class="ng-binding ng-scope">
                            69  ||   Director || Vladimir  Krstevski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="77" class="ng-binding ng-scope">
                            77  ||   Right Back || Mice  Gacov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="78" class="ng-binding ng-scope">
                            78  ||   Left back || Darko  Krstevski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="79" class="ng-binding ng-scope">
                            79  ||   Center back || Hristijan  Ristevski || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="83" class="ng-binding ng-scope">
                            83  ||   Center Forward || Stojan  Dimov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="93" class="ng-binding ng-scope">
                            93  ||   Coach || Vlado  Pavlov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi -->
                    </select>
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="searchByLWF" id="searchByLWF" ng-model="searchByLWF">
                        <option value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="1" class="ng-binding ng-scope">
                            1  ||   Goalkeeper || Mice  Dimov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="2" class="ng-binding ng-scope">
                            2  ||   Centre Back || Blagojche  Popovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="3" class="ng-binding ng-scope">
                            3  ||   Left Back || Andrej  Nedelkovski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="4" class="ng-binding ng-scope">
                            4  ||   Right Back || Darko  Joshevski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="5" class="ng-binding ng-scope">
                            5  ||   Centre Back || Hristian  Risteski || 1999
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="6" class="ng-binding ng-scope">
                            6  ||   Defensive Midfielder || Vladimir  Krsteski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="7" class="ng-binding ng-scope">
                            7  ||   Center Midfielder || Kire  Lazarov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="8" class="ng-binding ng-scope">
                            8  ||   Attacking Midfilder || Darko  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="9" class="ng-binding ng-scope">
                            9  ||   Center Forward || Borche  Manevski || 1988
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="10" class="ng-binding ng-scope">
                            10  ||   Left Forward || Darko  Krstevski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="11" class="ng-binding ng-scope">
                            11  ||   Right Forward || Andrej  Markovski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="12" class="ng-binding ng-scope">
                            12  ||   Goalkeeper || Aleksandar  Markoski || 2001
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="13" class="ng-binding ng-scope">
                            13  ||   Left Back || Nikola  Piskacev || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="14" class="ng-binding ng-scope">
                            14  ||   Centre Back || Jove  Nikolov || 2008
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="15" class="ng-binding ng-scope">
                            15  ||   Right Back || Jove  Nikolovski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="16" class="ng-binding ng-scope">
                            16  ||   Defensive Midfielder || Mile  Poposki || 1982
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="17" class="ng-binding ng-scope">
                            17  ||   Center Midfielder || Jorgo  Popovski || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="18" class="ng-binding ng-scope">
                            18  ||   Attacking Midfielder || Jordan  Mitev || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="19" class="ng-binding ng-scope">
                            19  ||   Goalkeeper || Antimon  Krsteski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="20" class="ng-binding ng-scope">
                            20  ||   Center Forward || Cristiano  Ronaldo || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="21" class="ng-binding ng-scope">
                            21  ||   Left Forward || Vlade  Krstevski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="22" class="ng-binding ng-scope">
                            22  ||   Centre Back || Deni  Popovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="23" class="ng-binding ng-scope">
                            23  ||   Right Forward || Hristijan  Dragarski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="24" class="ng-binding ng-scope">
                            24  ||   Physiotherapist || Darko  Joshev || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="25" class="ng-binding ng-scope">
                            25  ||   Condition Coach || Hristi  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="26" class="ng-binding ng-scope">
                            26  ||   Deputy Coach || Viktor  Koteski || 1979
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="27" class="ng-binding ng-scope">
                            27  ||   Coach || Stefan  Ristevski || 1977
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="28" class="ng-binding ng-scope">
                            28  ||   Sports Director || Darko  Risteski || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="30" class="ng-binding ng-scope">
                            30  ||   Left Back || Trajan  Rizovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="31" class="ng-binding ng-scope">
                            31  ||   Right Winger || Najdo  Sikijovski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="33" class="ng-binding ng-scope">
                            33  ||   Left Winger || Borche  Stojanovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="34" class="ng-binding ng-scope">
                            34  ||   Center Midfielder || Boro  Stojanov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="69" class="ng-binding ng-scope">
                            69  ||   Director || Vladimir  Krstevski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="77" class="ng-binding ng-scope">
                            77  ||   Right Back || Mice  Gacov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="78" class="ng-binding ng-scope">
                            78  ||   Left back || Darko  Krstevski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="79" class="ng-binding ng-scope">
                            79  ||   Center back || Hristijan  Ristevski || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="83" class="ng-binding ng-scope">
                            83  ||   Center Forward || Stojan  Dimov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="93" class="ng-binding ng-scope">
                            93  ||   Coach || Vlado  Pavlov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi -->
                    </select>
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="searchByCF" id="searchByCF" ng-model="searchByCF">
                        <option value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="1" class="ng-binding ng-scope">
                            1  ||   Goalkeeper || Mice  Dimov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="2" class="ng-binding ng-scope">
                            2  ||   Centre Back || Blagojche  Popovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="3" class="ng-binding ng-scope">
                            3  ||   Left Back || Andrej  Nedelkovski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="4" class="ng-binding ng-scope">
                            4  ||   Right Back || Darko  Joshevski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="5" class="ng-binding ng-scope">
                            5  ||   Centre Back || Hristian  Risteski || 1999
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="6" class="ng-binding ng-scope">
                            6  ||   Defensive Midfielder || Vladimir  Krsteski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="7" class="ng-binding ng-scope">
                            7  ||   Center Midfielder || Kire  Lazarov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="8" class="ng-binding ng-scope">
                            8  ||   Attacking Midfilder || Darko  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="9" class="ng-binding ng-scope">
                            9  ||   Center Forward || Borche  Manevski || 1988
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="10" class="ng-binding ng-scope">
                            10  ||   Left Forward || Darko  Krstevski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="11" class="ng-binding ng-scope">
                            11  ||   Right Forward || Andrej  Markovski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="12" class="ng-binding ng-scope">
                            12  ||   Goalkeeper || Aleksandar  Markoski || 2001
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="13" class="ng-binding ng-scope">
                            13  ||   Left Back || Nikola  Piskacev || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="14" class="ng-binding ng-scope">
                            14  ||   Centre Back || Jove  Nikolov || 2008
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="15" class="ng-binding ng-scope">
                            15  ||   Right Back || Jove  Nikolovski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="16" class="ng-binding ng-scope">
                            16  ||   Defensive Midfielder || Mile  Poposki || 1982
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="17" class="ng-binding ng-scope">
                            17  ||   Center Midfielder || Jorgo  Popovski || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="18" class="ng-binding ng-scope">
                            18  ||   Attacking Midfielder || Jordan  Mitev || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="19" class="ng-binding ng-scope">
                            19  ||   Goalkeeper || Antimon  Krsteski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="20" class="ng-binding ng-scope">
                            20  ||   Center Forward || Cristiano  Ronaldo || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="21" class="ng-binding ng-scope">
                            21  ||   Left Forward || Vlade  Krstevski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="22" class="ng-binding ng-scope">
                            22  ||   Centre Back || Deni  Popovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="23" class="ng-binding ng-scope">
                            23  ||   Right Forward || Hristijan  Dragarski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="24" class="ng-binding ng-scope">
                            24  ||   Physiotherapist || Darko  Joshev || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="25" class="ng-binding ng-scope">
                            25  ||   Condition Coach || Hristi  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="26" class="ng-binding ng-scope">
                            26  ||   Deputy Coach || Viktor  Koteski || 1979
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="27" class="ng-binding ng-scope">
                            27  ||   Coach || Stefan  Ristevski || 1977
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="28" class="ng-binding ng-scope">
                            28  ||   Sports Director || Darko  Risteski || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="30" class="ng-binding ng-scope">
                            30  ||   Left Back || Trajan  Rizovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="31" class="ng-binding ng-scope">
                            31  ||   Right Winger || Najdo  Sikijovski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="33" class="ng-binding ng-scope">
                            33  ||   Left Winger || Borche  Stojanovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="34" class="ng-binding ng-scope">
                            34  ||   Center Midfielder || Boro  Stojanov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="69" class="ng-binding ng-scope">
                            69  ||   Director || Vladimir  Krstevski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="77" class="ng-binding ng-scope">
                            77  ||   Right Back || Mice  Gacov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="78" class="ng-binding ng-scope">
                            78  ||   Left back || Darko  Krstevski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="79" class="ng-binding ng-scope">
                            79  ||   Center back || Hristijan  Ristevski || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="83" class="ng-binding ng-scope">
                            83  ||   Center Forward || Stojan  Dimov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="93" class="ng-binding ng-scope">
                            93  ||   Coach || Vlado  Pavlov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi -->
                    </select>
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="searchByReserve1" id="searchByReserve1" ng-model="searchByReserve1">
                        <option value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="1" class="ng-binding ng-scope">
                            1  ||   Goalkeeper || Mice  Dimov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="2" class="ng-binding ng-scope">
                            2  ||   Centre Back || Blagojche  Popovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="3" class="ng-binding ng-scope">
                            3  ||   Left Back || Andrej  Nedelkovski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="4" class="ng-binding ng-scope">
                            4  ||   Right Back || Darko  Joshevski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="5" class="ng-binding ng-scope">
                            5  ||   Centre Back || Hristian  Risteski || 1999
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="6" class="ng-binding ng-scope">
                            6  ||   Defensive Midfielder || Vladimir  Krsteski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="7" class="ng-binding ng-scope">
                            7  ||   Center Midfielder || Kire  Lazarov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="8" class="ng-binding ng-scope">
                            8  ||   Attacking Midfilder || Darko  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="9" class="ng-binding ng-scope">
                            9  ||   Center Forward || Borche  Manevski || 1988
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="10" class="ng-binding ng-scope">
                            10  ||   Left Forward || Darko  Krstevski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="11" class="ng-binding ng-scope">
                            11  ||   Right Forward || Andrej  Markovski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="12" class="ng-binding ng-scope">
                            12  ||   Goalkeeper || Aleksandar  Markoski || 2001
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="13" class="ng-binding ng-scope">
                            13  ||   Left Back || Nikola  Piskacev || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="14" class="ng-binding ng-scope">
                            14  ||   Centre Back || Jove  Nikolov || 2008
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="15" class="ng-binding ng-scope">
                            15  ||   Right Back || Jove  Nikolovski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="16" class="ng-binding ng-scope">
                            16  ||   Defensive Midfielder || Mile  Poposki || 1982
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="17" class="ng-binding ng-scope">
                            17  ||   Center Midfielder || Jorgo  Popovski || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="18" class="ng-binding ng-scope">
                            18  ||   Attacking Midfielder || Jordan  Mitev || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="19" class="ng-binding ng-scope">
                            19  ||   Goalkeeper || Antimon  Krsteski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="20" class="ng-binding ng-scope">
                            20  ||   Center Forward || Cristiano  Ronaldo || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="21" class="ng-binding ng-scope">
                            21  ||   Left Forward || Vlade  Krstevski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="22" class="ng-binding ng-scope">
                            22  ||   Centre Back || Deni  Popovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="23" class="ng-binding ng-scope">
                            23  ||   Right Forward || Hristijan  Dragarski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="24" class="ng-binding ng-scope">
                            24  ||   Physiotherapist || Darko  Joshev || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="25" class="ng-binding ng-scope">
                            25  ||   Condition Coach || Hristi  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="26" class="ng-binding ng-scope">
                            26  ||   Deputy Coach || Viktor  Koteski || 1979
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="27" class="ng-binding ng-scope">
                            27  ||   Coach || Stefan  Ristevski || 1977
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="28" class="ng-binding ng-scope">
                            28  ||   Sports Director || Darko  Risteski || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="30" class="ng-binding ng-scope">
                            30  ||   Left Back || Trajan  Rizovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="31" class="ng-binding ng-scope">
                            31  ||   Right Winger || Najdo  Sikijovski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="33" class="ng-binding ng-scope">
                            33  ||   Left Winger || Borche  Stojanovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="34" class="ng-binding ng-scope">
                            34  ||   Center Midfielder || Boro  Stojanov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="69" class="ng-binding ng-scope">
                            69  ||   Director || Vladimir  Krstevski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="77" class="ng-binding ng-scope">
                            77  ||   Right Back || Mice  Gacov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="78" class="ng-binding ng-scope">
                            78  ||   Left back || Darko  Krstevski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="79" class="ng-binding ng-scope">
                            79  ||   Center back || Hristijan  Ristevski || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="83" class="ng-binding ng-scope">
                            83  ||   Center Forward || Stojan  Dimov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="93" class="ng-binding ng-scope">
                            93  ||   Coach || Vlado  Pavlov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi -->
                    </select>
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="searchByReserve2" id="searchByReserve2" ng-model="searchByReserve2">
                        <option value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="1" class="ng-binding ng-scope">
                            1  ||   Goalkeeper || Mice  Dimov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="2" class="ng-binding ng-scope">
                            2  ||   Centre Back || Blagojche  Popovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="3" class="ng-binding ng-scope">
                            3  ||   Left Back || Andrej  Nedelkovski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="4" class="ng-binding ng-scope">
                            4  ||   Right Back || Darko  Joshevski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="5" class="ng-binding ng-scope">
                            5  ||   Centre Back || Hristian  Risteski || 1999
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="6" class="ng-binding ng-scope">
                            6  ||   Defensive Midfielder || Vladimir  Krsteski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="7" class="ng-binding ng-scope">
                            7  ||   Center Midfielder || Kire  Lazarov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="8" class="ng-binding ng-scope">
                            8  ||   Attacking Midfilder || Darko  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="9" class="ng-binding ng-scope">
                            9  ||   Center Forward || Borche  Manevski || 1988
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="10" class="ng-binding ng-scope">
                            10  ||   Left Forward || Darko  Krstevski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="11" class="ng-binding ng-scope">
                            11  ||   Right Forward || Andrej  Markovski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="12" class="ng-binding ng-scope">
                            12  ||   Goalkeeper || Aleksandar  Markoski || 2001
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="13" class="ng-binding ng-scope">
                            13  ||   Left Back || Nikola  Piskacev || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="14" class="ng-binding ng-scope">
                            14  ||   Centre Back || Jove  Nikolov || 2008
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="15" class="ng-binding ng-scope">
                            15  ||   Right Back || Jove  Nikolovski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="16" class="ng-binding ng-scope">
                            16  ||   Defensive Midfielder || Mile  Poposki || 1982
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="17" class="ng-binding ng-scope">
                            17  ||   Center Midfielder || Jorgo  Popovski || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="18" class="ng-binding ng-scope">
                            18  ||   Attacking Midfielder || Jordan  Mitev || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="19" class="ng-binding ng-scope">
                            19  ||   Goalkeeper || Antimon  Krsteski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="20" class="ng-binding ng-scope">
                            20  ||   Center Forward || Cristiano  Ronaldo || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="21" class="ng-binding ng-scope">
                            21  ||   Left Forward || Vlade  Krstevski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="22" class="ng-binding ng-scope">
                            22  ||   Centre Back || Deni  Popovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="23" class="ng-binding ng-scope">
                            23  ||   Right Forward || Hristijan  Dragarski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="24" class="ng-binding ng-scope">
                            24  ||   Physiotherapist || Darko  Joshev || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="25" class="ng-binding ng-scope">
                            25  ||   Condition Coach || Hristi  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="26" class="ng-binding ng-scope">
                            26  ||   Deputy Coach || Viktor  Koteski || 1979
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="27" class="ng-binding ng-scope">
                            27  ||   Coach || Stefan  Ristevski || 1977
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="28" class="ng-binding ng-scope">
                            28  ||   Sports Director || Darko  Risteski || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="30" class="ng-binding ng-scope">
                            30  ||   Left Back || Trajan  Rizovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="31" class="ng-binding ng-scope">
                            31  ||   Right Winger || Najdo  Sikijovski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="33" class="ng-binding ng-scope">
                            33  ||   Left Winger || Borche  Stojanovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="34" class="ng-binding ng-scope">
                            34  ||   Center Midfielder || Boro  Stojanov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="69" class="ng-binding ng-scope">
                            69  ||   Director || Vladimir  Krstevski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="77" class="ng-binding ng-scope">
                            77  ||   Right Back || Mice  Gacov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="78" class="ng-binding ng-scope">
                            78  ||   Left back || Darko  Krstevski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="79" class="ng-binding ng-scope">
                            79  ||   Center back || Hristijan  Ristevski || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="83" class="ng-binding ng-scope">
                            83  ||   Center Forward || Stojan  Dimov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="93" class="ng-binding ng-scope">
                            93  ||   Coach || Vlado  Pavlov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi -->
                    </select>
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="searchByReserve3" id="searchByReserve3" ng-model="searchByReserve3">
                        <option value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="1" class="ng-binding ng-scope">
                            1  ||  Goalkeeper || Mice  Dimov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="2" class="ng-binding ng-scope">
                            2  ||  Centre Back || Blagojche  Popovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="3" class="ng-binding ng-scope">
                            3  ||  Left Back || Andrej  Nedelkovski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="4" class="ng-binding ng-scope">
                            4  ||  Right Back || Darko  Joshevski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="5" class="ng-binding ng-scope">
                            5  ||  Centre Back || Hristian  Risteski || 1999
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="6" class="ng-binding ng-scope">
                            6  ||  Defensive Midfielder || Vladimir  Krsteski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="7" class="ng-binding ng-scope">
                            7  ||  Center Midfielder || Kire  Lazarov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="8" class="ng-binding ng-scope">
                            8  ||  Attacking Midfilder || Darko  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="9" class="ng-binding ng-scope">
                            9  ||  Center Forward || Borche  Manevski || 1988
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="10" class="ng-binding ng-scope">
                            10  ||  Left Forward || Darko  Krstevski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="11" class="ng-binding ng-scope">
                            11  ||  Right Forward || Andrej  Markovski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="12" class="ng-binding ng-scope">
                            12  ||  Goalkeeper || Aleksandar  Markoski || 2001
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="13" class="ng-binding ng-scope">
                            13  ||  Left Back || Nikola  Piskacev || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="14" class="ng-binding ng-scope">
                            14  ||  Centre Back || Jove  Nikolov || 2008
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="15" class="ng-binding ng-scope">
                            15  ||  Right Back || Jove  Nikolovski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="16" class="ng-binding ng-scope">
                            16  ||  Defensive Midfielder || Mile  Poposki || 1982
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="17" class="ng-binding ng-scope">
                            17  ||  Center Midfielder || Jorgo  Popovski || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="18" class="ng-binding ng-scope">
                            18  ||  Attacking Midfielder || Jordan  Mitev || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="19" class="ng-binding ng-scope">
                            19  ||  Goalkeeper || Antimon  Krsteski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="20" class="ng-binding ng-scope">
                            20  ||  Center Forward || Cristiano  Ronaldo || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="21" class="ng-binding ng-scope">
                            21  ||  Left Forward || Vlade  Krstevski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="22" class="ng-binding ng-scope">
                            22  ||  Centre Back || Deni  Popovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="23" class="ng-binding ng-scope">
                            23  ||  Right Forward || Hristijan  Dragarski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="24" class="ng-binding ng-scope">
                            24  ||  Physiotherapist || Darko  Joshev || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="25" class="ng-binding ng-scope">
                            25  ||  Condition Coach || Hristi  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="26" class="ng-binding ng-scope">
                            26  ||  Deputy Coach || Viktor  Koteski || 1979
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="27" class="ng-binding ng-scope">
                            27  ||  Coach || Stefan  Ristevski || 1977
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="28" class="ng-binding ng-scope">
                            28  ||  Sports Director || Darko  Risteski || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="30" class="ng-binding ng-scope">
                            30  ||  Left Back || Trajan  Rizovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="31" class="ng-binding ng-scope">
                            31  ||  Right Winger || Najdo  Sikijovski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="33" class="ng-binding ng-scope">
                            33  ||  Left Winger || Borche  Stojanovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="34" class="ng-binding ng-scope">
                            34  ||  Center Midfielder || Boro  Stojanov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="69" class="ng-binding ng-scope">
                            69  ||  Director || Vladimir  Krstevski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="77" class="ng-binding ng-scope">
                            77  ||  Right Back || Mice  Gacov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="78" class="ng-binding ng-scope">
                            78  ||  Left back || Darko  Krstevski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="79" class="ng-binding ng-scope">
                            79  ||  Center back || Hristijan  Ristevski || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="83" class="ng-binding ng-scope">
                            83  ||  Center Forward || Stojan  Dimov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="93" class="ng-binding ng-scope">
                            93  ||  Coach || Vlado  Pavlov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi -->
                    </select>
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="searchByReserve4" id="searchByReserve4" ng-model="searchByReserve4">
                        <option value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="1" class="ng-binding ng-scope">
                            1  ||   Goalkeeper || Mice  Dimov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="2" class="ng-binding ng-scope">
                            2  ||   Centre Back || Blagojche  Popovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="3" class="ng-binding ng-scope">
                            3  ||   Left Back || Andrej  Nedelkovski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="4" class="ng-binding ng-scope">
                            4  ||   Right Back || Darko  Joshevski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="5" class="ng-binding ng-scope">
                            5  ||   Centre Back || Hristian  Risteski || 1999
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="6" class="ng-binding ng-scope">
                            6  ||   Defensive Midfielder || Vladimir  Krsteski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="7" class="ng-binding ng-scope">
                            7  ||   Center Midfielder || Kire  Lazarov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="8" class="ng-binding ng-scope">
                            8  ||   Attacking Midfilder || Darko  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="9" class="ng-binding ng-scope">
                            9  ||   Center Forward || Borche  Manevski || 1988
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="10" class="ng-binding ng-scope">
                            10  ||   Left Forward || Darko  Krstevski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="11" class="ng-binding ng-scope">
                            11  ||   Right Forward || Andrej  Markovski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="12" class="ng-binding ng-scope">
                            12  ||   Goalkeeper || Aleksandar  Markoski || 2001
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="13" class="ng-binding ng-scope">
                            13  ||   Left Back || Nikola  Piskacev || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="14" class="ng-binding ng-scope">
                            14  ||   Centre Back || Jove  Nikolov || 2008
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="15" class="ng-binding ng-scope">
                            15  ||   Right Back || Jove  Nikolovski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="16" class="ng-binding ng-scope">
                            16  ||   Defensive Midfielder || Mile  Poposki || 1982
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="17" class="ng-binding ng-scope">
                            17  ||   Center Midfielder || Jorgo  Popovski || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="18" class="ng-binding ng-scope">
                            18  ||   Attacking Midfielder || Jordan  Mitev || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="19" class="ng-binding ng-scope">
                            19  ||   Goalkeeper || Antimon  Krsteski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="20" class="ng-binding ng-scope">
                            20  ||   Center Forward || Cristiano  Ronaldo || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="21" class="ng-binding ng-scope">
                            21  ||   Left Forward || Vlade  Krstevski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="22" class="ng-binding ng-scope">
                            22  ||   Centre Back || Deni  Popovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="23" class="ng-binding ng-scope">
                            23  ||   Right Forward || Hristijan  Dragarski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="24" class="ng-binding ng-scope">
                            24  ||   Physiotherapist || Darko  Joshev || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="25" class="ng-binding ng-scope">
                            25  ||   Condition Coach || Hristi  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="26" class="ng-binding ng-scope">
                            26  ||   Deputy Coach || Viktor  Koteski || 1979
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="27" class="ng-binding ng-scope">
                            27  ||   Coach || Stefan  Ristevski || 1977
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="28" class="ng-binding ng-scope">
                            28  ||   Sports Director || Darko  Risteski || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="30" class="ng-binding ng-scope">
                            30  ||   Left Back || Trajan  Rizovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="31" class="ng-binding ng-scope">
                            31  ||   Right Winger || Najdo  Sikijovski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="33" class="ng-binding ng-scope">
                            33  ||   Left Winger || Borche  Stojanovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="34" class="ng-binding ng-scope">
                            34  ||   Center Midfielder || Boro  Stojanov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="69" class="ng-binding ng-scope">
                            69  ||   Director || Vladimir  Krstevski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="77" class="ng-binding ng-scope">
                            77  ||   Right Back || Mice  Gacov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="78" class="ng-binding ng-scope">
                            78  ||   Left back || Darko  Krstevski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="79" class="ng-binding ng-scope">
                            79  ||   Center back || Hristijan  Ristevski || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="83" class="ng-binding ng-scope">
                            83  ||   Center Forward || Stojan  Dimov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="93" class="ng-binding ng-scope">
                            93  ||   Coach || Vlado  Pavlov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi -->
                    </select>
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="searchByReserve5" id="searchByReserve5" ng-model="searchByReserve5">
                        <option value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="1" class="ng-binding ng-scope">
                            1  ||   Goalkeeper || Mice  Dimov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="2" class="ng-binding ng-scope">
                            2  ||   Centre Back || Blagojche  Popovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="3" class="ng-binding ng-scope">
                            3  ||   Left Back || Andrej  Nedelkovski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="4" class="ng-binding ng-scope">
                            4  ||   Right Back || Darko  Joshevski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="5" class="ng-binding ng-scope">
                            5  ||   Centre Back || Hristian  Risteski || 1999
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="6" class="ng-binding ng-scope">
                            6  ||   Defensive Midfielder || Vladimir  Krsteski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="7" class="ng-binding ng-scope">
                            7  ||   Center Midfielder || Kire  Lazarov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="8" class="ng-binding ng-scope">
                            8  ||   Attacking Midfilder || Darko  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="9" class="ng-binding ng-scope">
                            9  ||   Center Forward || Borche  Manevski || 1988
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="10" class="ng-binding ng-scope">
                            10  ||   Left Forward || Darko  Krstevski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="11" class="ng-binding ng-scope">
                            11  ||   Right Forward || Andrej  Markovski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="12" class="ng-binding ng-scope">
                            12  ||   Goalkeeper || Aleksandar  Markoski || 2001
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="13" class="ng-binding ng-scope">
                            13  ||   Left Back || Nikola  Piskacev || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="14" class="ng-binding ng-scope">
                            14  ||   Centre Back || Jove  Nikolov || 2008
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="15" class="ng-binding ng-scope">
                            15  ||   Right Back || Jove  Nikolovski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="16" class="ng-binding ng-scope">
                            16  ||   Defensive Midfielder || Mile  Poposki || 1982
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="17" class="ng-binding ng-scope">
                            17  ||   Center Midfielder || Jorgo  Popovski || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="18" class="ng-binding ng-scope">
                            18  ||   Attacking Midfielder || Jordan  Mitev || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="19" class="ng-binding ng-scope">
                            19  ||   Goalkeeper || Antimon  Krsteski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="20" class="ng-binding ng-scope">
                            20  ||   Center Forward || Cristiano  Ronaldo || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="21" class="ng-binding ng-scope">
                            21  ||   Left Forward || Vlade  Krstevski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="22" class="ng-binding ng-scope">
                            22  ||   Centre Back || Deni  Popovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="23" class="ng-binding ng-scope">
                            23  ||   Right Forward || Hristijan  Dragarski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="24" class="ng-binding ng-scope">
                            24  ||   Physiotherapist || Darko  Joshev || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="25" class="ng-binding ng-scope">
                            25  ||   Condition Coach || Hristi  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="26" class="ng-binding ng-scope">
                            26  ||   Deputy Coach || Viktor  Koteski || 1979
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="27" class="ng-binding ng-scope">
                            27  ||   Coach || Stefan  Ristevski || 1977
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="28" class="ng-binding ng-scope">
                            28  ||   Sports Director || Darko  Risteski || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="30" class="ng-binding ng-scope">
                            30  ||   Left Back || Trajan  Rizovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="31" class="ng-binding ng-scope">
                            31  ||   Right Winger || Najdo  Sikijovski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="33" class="ng-binding ng-scope">
                            33  ||   Left Winger || Borche  Stojanovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="34" class="ng-binding ng-scope">
                            34  ||   Center Midfielder || Boro  Stojanov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="69" class="ng-binding ng-scope">
                            69  ||   Director || Vladimir  Krstevski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="77" class="ng-binding ng-scope">
                            77  ||   Right Back || Mice  Gacov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="78" class="ng-binding ng-scope">
                            78  ||   Left back || Darko  Krstevski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="79" class="ng-binding ng-scope">
                            79  ||   Center back || Hristijan  Ristevski || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="83" class="ng-binding ng-scope">
                            83  ||   Center Forward || Stojan  Dimov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="93" class="ng-binding ng-scope">
                            93  ||   Coach || Vlado  Pavlov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi -->
                    </select>
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="searchByReserve6" id="searchByReserve6" ng-model="searchByReserve6">
                        <option value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="1" class="ng-binding ng-scope">
                            1  ||   Goalkeeper || Mice  Dimov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="2" class="ng-binding ng-scope">
                            2  ||   Centre Back || Blagojche  Popovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="3" class="ng-binding ng-scope">
                            3  ||   Left Back || Andrej  Nedelkovski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="4" class="ng-binding ng-scope">
                            4  ||   Right Back || Darko  Joshevski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="5" class="ng-binding ng-scope">
                            5  ||   Centre Back || Hristian  Risteski || 1999
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="6" class="ng-binding ng-scope">
                            6  ||   Defensive Midfielder || Vladimir  Krsteski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="7" class="ng-binding ng-scope">
                            7  ||   Center Midfielder || Kire  Lazarov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="8" class="ng-binding ng-scope">
                            8  ||   Attacking Midfilder || Darko  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="9" class="ng-binding ng-scope">
                            9  ||   Center Forward || Borche  Manevski || 1988
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="10" class="ng-binding ng-scope">
                            10  ||   Left Forward || Darko  Krstevski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="11" class="ng-binding ng-scope">
                            11  ||   Right Forward || Andrej  Markovski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="12" class="ng-binding ng-scope">
                            12  ||   Goalkeeper || Aleksandar  Markoski || 2001
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="13" class="ng-binding ng-scope">
                            13  ||   Left Back || Nikola  Piskacev || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="14" class="ng-binding ng-scope">
                            14  ||   Centre Back || Jove  Nikolov || 2008
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="15" class="ng-binding ng-scope">
                            15  ||   Right Back || Jove  Nikolovski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="16" class="ng-binding ng-scope">
                            16  ||   Defensive Midfielder || Mile  Poposki || 1982
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="17" class="ng-binding ng-scope">
                            17  ||   Center Midfielder || Jorgo  Popovski || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="18" class="ng-binding ng-scope">
                            18  ||   Attacking Midfielder || Jordan  Mitev || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="19" class="ng-binding ng-scope">
                            19  ||   Goalkeeper || Antimon  Krsteski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="20" class="ng-binding ng-scope">
                            20  ||   Center Forward || Cristiano  Ronaldo || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="21" class="ng-binding ng-scope">
                            21  ||   Left Forward || Vlade  Krstevski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="22" class="ng-binding ng-scope">
                            22  ||   Centre Back || Deni  Popovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="23" class="ng-binding ng-scope">
                            23  ||   Right Forward || Hristijan  Dragarski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="24" class="ng-binding ng-scope">
                            24  ||   Physiotherapist || Darko  Joshev || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="25" class="ng-binding ng-scope">
                            25  ||   Condition Coach || Hristi  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="26" class="ng-binding ng-scope">
                            26  ||   Deputy Coach || Viktor  Koteski || 1979
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="27" class="ng-binding ng-scope">
                            27  ||   Coach || Stefan  Ristevski || 1977
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="28" class="ng-binding ng-scope">
                            28  ||   Sports Director || Darko  Risteski || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="30" class="ng-binding ng-scope">
                            30  ||   Left Back || Trajan  Rizovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="31" class="ng-binding ng-scope">
                            31  ||   Right Winger || Najdo  Sikijovski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="33" class="ng-binding ng-scope">
                            33  ||   Left Winger || Borche  Stojanovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="34" class="ng-binding ng-scope">
                            34  ||   Center Midfielder || Boro  Stojanov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="69" class="ng-binding ng-scope">
                            69  ||   Director || Vladimir  Krstevski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="77" class="ng-binding ng-scope">
                            77  ||   Right Back || Mice  Gacov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="78" class="ng-binding ng-scope">
                            78  ||   Left back || Darko  Krstevski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="79" class="ng-binding ng-scope">
                            79  ||   Center back || Hristijan  Ristevski || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="83" class="ng-binding ng-scope">
                            83  ||   Center Forward || Stojan  Dimov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="93" class="ng-binding ng-scope">
                            93  ||   Coach || Vlado  Pavlov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi -->
                    </select>
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" name="searchByReserve7" id="searchByReserve7" ng-model="searchByReserve7">
                        <option value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="1" class="ng-binding ng-scope">
                            1  ||    Goalkeeper || Mice  Dimov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="2" class="ng-binding ng-scope">
                            2  ||    Centre Back || Blagojche  Popovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="3" class="ng-binding ng-scope">
                            3  ||    Left Back || Andrej  Nedelkovski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="4" class="ng-binding ng-scope">
                            4  ||    Right Back || Darko  Joshevski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="5" class="ng-binding ng-scope">
                            5  ||    Centre Back || Hristian  Risteski || 1999
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="6" class="ng-binding ng-scope">
                            6  ||    Defensive Midfielder || Vladimir  Krsteski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="7" class="ng-binding ng-scope">
                            7  ||    Center Midfielder || Kire  Lazarov || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="8" class="ng-binding ng-scope">
                            8  ||    Attacking Midfilder || Darko  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="9" class="ng-binding ng-scope">
                            9  ||    Center Forward || Borche  Manevski || 1988
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="10" class="ng-binding ng-scope">
                            10  ||    Left Forward || Darko  Krstevski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="11" class="ng-binding ng-scope">
                            11  ||    Right Forward || Andrej  Markovski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="12" class="ng-binding ng-scope">
                            12  ||    Goalkeeper || Aleksandar  Markoski || 2001
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="13" class="ng-binding ng-scope">
                            13  ||    Left Back || Nikola  Piskacev || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="14" class="ng-binding ng-scope">
                            14  ||    Centre Back || Jove  Nikolov || 2008
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="15" class="ng-binding ng-scope">
                            15  ||    Right Back || Jove  Nikolovski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="16" class="ng-binding ng-scope">
                            16  ||    Defensive Midfielder || Mile  Poposki || 1982
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="17" class="ng-binding ng-scope">
                            17  ||    Center Midfielder || Jorgo  Popovski || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="18" class="ng-binding ng-scope">
                            18  ||    Attacking Midfielder || Jordan  Mitev || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="19" class="ng-binding ng-scope">
                            19  ||    Goalkeeper || Antimon  Krsteski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="20" class="ng-binding ng-scope">
                            20  ||    Center Forward || Cristiano  Ronaldo || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="21" class="ng-binding ng-scope">
                            21  ||    Left Forward || Vlade  Krstevski || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="22" class="ng-binding ng-scope">
                            22  ||    Centre Back || Deni  Popovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="23" class="ng-binding ng-scope">
                            23  ||    Right Forward || Hristijan  Dragarski || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="24" class="ng-binding ng-scope">
                            24  ||    Physiotherapist || Darko  Joshev || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="25" class="ng-binding ng-scope">
                            25  ||    Condition Coach || Hristi  Risteski || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="26" class="ng-binding ng-scope">
                            26  ||    Deputy Coach || Viktor  Koteski || 1979
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="27" class="ng-binding ng-scope">
                            27  ||    Coach || Stefan  Ristevski || 1977
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="28" class="ng-binding ng-scope">
                            28  ||    Sports Director || Darko  Risteski || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="30" class="ng-binding ng-scope">
                            30  ||    Left Back || Trajan  Rizovski || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="31" class="ng-binding ng-scope">
                            31  ||    Right Winger || Najdo  Sikijovski || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="33" class="ng-binding ng-scope">
                            33  ||    Left Winger || Borche  Stojanovski || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="34" class="ng-binding ng-scope">
                            34  ||    Center Midfielder || Boro  Stojanov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="69" class="ng-binding ng-scope">
                            69  ||    Director || Vladimir  Krstevski || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="77" class="ng-binding ng-scope">
                            77  ||    Right Back || Mice  Gacov || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="78" class="ng-binding ng-scope">
                            78  ||    Left back || Darko  Krstevski || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="79" class="ng-binding ng-scope">
                            79  ||    Center back || Hristijan  Ristevski || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="83" class="ng-binding ng-scope">
                            83  ||    Center Forward || Stojan  Dimov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="93" class="ng-binding ng-scope">
                            93  ||    Coach || Vlado  Pavlov || 1990
                        </option><!-- end ngRepeat: igrac in igrachi -->
                    </select>
                </th>
                <th><i class="fa-solid fa-pen"></i>edit</th>
                <th><i class="fa-solid fa-trash-can"></i>delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
$__section_sostav_position_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['sostav']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sostav_position_2_total = $__section_sostav_position_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sostav_position'] = new Smarty_Variable(array());
if ($__section_sostav_position_2_total !== 0) {
for ($__section_sostav_position_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] = 0; $__section_sostav_position_2_iteration <= $__section_sostav_position_2_total; $__section_sostav_position_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']++){
?>
            <tr class="ng-scope">
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['sostav_id'];?>
 </td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['datum_sostav'];?>
</td>
                <td class="ng-binding"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['coach'] ?? '', 'UTF-8');?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['goalkeeper'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['centre_back1'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['centre_back2'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['right_back'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['left_back'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['defensive_midfielder'];?>
 </td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['center_midfielder'];?>
</td>
                <td class="ng-binding"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['attacking_midfielder'] ?? '', 'UTF-8');?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['right_forward'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['left_forward'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['center_forward'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['reserve1'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['reserve2'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['reserve3'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['reserve4'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['reserve5'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['reserve6'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['reserve7'];?>
</td>
                <td class="ng-binding"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['dres_id'] ?? '', 'UTF-8');?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['ime'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['prezime'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['pozicija'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['godini'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['plata_denari'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['income_id'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['ime'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['prezime'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['pozicija'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['sostav']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sostav_position']->value['index'] : null)]['godini'];?>
</td>
                <td class="text-center ng-binding">  <br>  <br> </td>
                <td title="Edit"><i class="fa-solid fa-pen"></i></td>
                <td title="Delete">
                   <button type="button" class="btn myBtn" data-bs-toggle="modal" data-bs-target="#myModal" ng-click="passPosition($index)"> <i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>
        <?php
}
}
?>

        </tbody>

    </table>
</div>
</div>

<div class="col-sm-12">
      <h3>Стадион</h3>
        <div class="table-responsive ng-scope">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>stadion_id</th>
                        <th>
                            <input type="text" name="searchByIme" id="searchByIme" ng-model="searchByIme" placeholder="Пребарај по име на стадионот" class="ng-pristine ng-untouched ng-valid ng-empty">
                        </th>
                        <th>
                            <input type="text" name="searchByAdresa" id="searchByAdresa" ng-model="searchByAdresa" placeholder="Пребарај по адреса на стадионот" class="ng-pristine ng-untouched ng-valid ng-empty">
                        </th>
                        <th>
                            <input type="number" name="searchByKapacitet" id="searchByKapacitet" ng-model="searchByKapacitet" placeholder="Пребарај по капацитет на стадионот" class="ng-pristine ng-untouched ng-valid ng-empty">
                        </th>
                        <th><i class="fa-solid fa-pen"></i>edit</th>
                        <th><i class="fa-solid fa-trash-can"></i>delete</th>
                    </tr>
                </thead>
                <tbody>
            <?php
$__section_stadion_position_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['stadion']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_stadion_position_3_total = $__section_stadion_position_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_stadion_position'] = new Smarty_Variable(array());
if ($__section_stadion_position_3_total !== 0) {
for ($__section_stadion_position_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_stadion_position']->value['index'] = 0; $__section_stadion_position_3_iteration <= $__section_stadion_position_3_total; $__section_stadion_position_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_stadion_position']->value['index']++){
?>
            <tr class="ng-scope">
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['stadion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_stadion_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_stadion_position']->value['index'] : null)]['stadion_id'];?>
 </td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['stadion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_stadion_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_stadion_position']->value['index'] : null)]['ime'];?>
</td>
                <td class="ng-binding"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['stadion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_stadion_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_stadion_position']->value['index'] : null)]['adresa'] ?? '', 'UTF-8');?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['stadion']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_stadion_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_stadion_position']->value['index'] : null)]['kapacitet'];?>
</td>
                <td class="text-center ng-binding">  <br>  <br> </td>
                <td title="Edit"><i class="fa-solid fa-pen"></i></td>
                <td title="Delete">
                   <button type="button" class="btn myBtn" data-bs-toggle="modal" data-bs-target="#myModal" ng-click="passPosition($index)"> <i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>
                </tbody>
            <?php
}
}
?>
                </tbody>

            </table>
        </div>
</div>

<div class="col-sm-12">
        <div ng-view="" class="ng-scope"><h3 class="ng-scope">Публика</h3></div>
        <div class="table-responsive ng-scope">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>datum_id</th>
                        <th>
                            <input type="number" name="searchByDomashna" id="searchByDomashna" ng-model="searchByDomashna" placeholder="Пребарај број на домашна публика на натпреварот" class="ng-pristine ng-untouched ng-valid ng-empty">
                        </th>
                        <th>
                            <input type="number" name="searchByGostinska" id="searchByGostinska" ng-model="searchByGostinska" placeholder="Пребарај број на гостинска публика на натпреварот" class="ng-pristine ng-untouched ng-valid ng-empty">
                        </th>
                        <th>
                            <input type="number" name="searchByKartiRasprodadeni" id="searchByKartiRasprodadeni" ng-model="searchByKartiRasprodadeni" placeholder="Пребарај број на распродадени карти на натпреварот" class="ng-pristine ng-untouched ng-valid ng-empty">
                        </th>
                        <th><i class="fa-solid fa-pen"></i>edit</th>
                        <th><i class="fa-solid fa-trash-can"></i>delete</th>
                    </tr>
                </thead>
                <tbody>
            <?php
$__section_publika_position_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['publika']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_publika_position_4_total = $__section_publika_position_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_publika_position'] = new Smarty_Variable(array());
if ($__section_publika_position_4_total !== 0) {
for ($__section_publika_position_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_publika_position']->value['index'] = 0; $__section_publika_position_4_iteration <= $__section_publika_position_4_total; $__section_publika_position_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_publika_position']->value['index']++){
?>
            <tr class="ng-scope">
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['publika']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_publika_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_publika_position']->value['index'] : null)]['datum_id'];?>
 </td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['publika']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_publika_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_publika_position']->value['index'] : null)]['domashna'];?>
</td>
                <td class="ng-binding"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['publika']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_publika_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_publika_position']->value['index'] : null)]['gostinska'] ?? '', 'UTF-8');?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['publika']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_publika_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_publika_position']->value['index'] : null)]['karti_rasprodadeni'];?>
</td>
                <td class="text-center ng-binding">  <br>  <br> </td>
                <td title="Edit"><i class="fa-solid fa-pen"></i></td>
                <td title="Delete">
                   <button type="button" class="btn myBtn" data-bs-toggle="modal" data-bs-target="#myModal" ng-click="passPosition($index)"> <i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>
                </tbody>
            <?php
}
}
?>
            </table>
        </div>
</div>


<div class="col-sm-12">
<div ng-view="" class="ng-scope"><h3 class="ng-scope">Трансфери кој доааѓат</h3>
<div class="table-responsive ng-scope">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>income_id</th>
                    <th>
                        <input type="text" name="searchByName" id="searchByName" ng-model="searchByName" placeholder="Пребарај по име на играчот" class="ng-pristine ng-untouched ng-valid ng-empty">
                    </th>
                    <th>
                        <input type="text" name="searchByLastName" id="searchByLastName" ng-model="searchByLastName" placeholder="Пребарај по презиме на играчот" class="ng-pristine ng-untouched ng-valid ng-empty">
                    </th>
                    <th>
                        <input type="text" name="searchByPosition" id="searchByPosition" ng-model="searchByPosition" placeholder="Пребарај по позиција на играчот" class="ng-pristine ng-untouched ng-valid ng-empty">
                    </th>
                    <th>
                        <input type="text" name="searchByYear" id="searchByYear" ng-model="searchByYear" placeholder="Пребарај по години на играчот" class="ng-pristine ng-untouched ng-valid ng-empty">
                    </th>
                    <th>
                        <input type="text" name="searchByClub" id="searchByClub" ng-model="searchByClub" placeholder="Пребарај по името на клубот" class="ng-pristine ng-untouched ng-valid ng-empty">
                    </th>
                    <th>
                        <input type="text" name="searchByIznosDenari" id="searchByIznosDenari" ng-model="searchByIznosDenari" placeholder="Пребарај по износот на трансферот во денари" class="ng-pristine ng-untouched ng-valid ng-empty">
                    </th>
                    <th><i class="fa-solid fa-pen"></i>edit</th>
                    <th><i class="fa-solid fa-trash-can"></i>delete</th>
                </tr>
            </thead>
            <tbody>

        <?php
$__section_income_position_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['income']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_income_position_5_total = $__section_income_position_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_income_position'] = new Smarty_Variable(array());
if ($__section_income_position_5_total !== 0) {
for ($__section_income_position_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_income_position']->value['index'] = 0; $__section_income_position_5_iteration <= $__section_income_position_5_total; $__section_income_position_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_income_position']->value['index']++){
?>
            <tr class="ng-scope">
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['income']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_income_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_income_position']->value['index'] : null)]['income_id'];?>
 </td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['income']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_income_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_income_position']->value['index'] : null)]['ime'];?>
</td>
                <td class="ng-binding"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['income']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_income_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_income_position']->value['index'] : null)]['prezime'] ?? '', 'UTF-8');?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['income']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_income_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_income_position']->value['index'] : null)]['pozicija'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['income']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_income_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_income_position']->value['index'] : null)]['godini'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['income']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_income_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_income_position']->value['index'] : null)]['klub'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['income']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_income_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_income_position']->value['index'] : null)]['iznos_denari'];?>
</td>
                <td class="text-center ng-binding">  <br>  <br> </td>
                <td title="Edit"><i class="fa-solid fa-pen"></i></td>
                <td title="Delete 2 || Blagojche Popovski">
                   <button type="button" class="btn myBtn" data-bs-toggle="modal" data-bs-target="#myModal" ng-click="passPosition($index)"> <i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>
        <?php
}
}
?>

            </tbody>
    
        </table>
    </div>

</div>

<div class="col-sm-12">
<div ng-view="" class="ng-scope"><h3 class="ng-scope">Трансфери кој заминуваат</h3>
<div class="table-responsive ng-scope">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>outcome_id</th>
                <th>
                    <input type="text" name="searchByKlub" id="searchByKlub" ng-model="searchByKlub" placeholder="Пребарај по името на клубот" class="ng-pristine ng-untouched ng-valid ng-empty">
                </th>
                <th>
                    <input type="text" name="searchByIznosDenari" id="searchByIznosDenari" ng-model="searchByIznosDenari" placeholder="Пребарај по износот на трансферот во денари" class="ng-pristine ng-untouched ng-valid ng-empty">
                </th>
                <th>
                    <select class="form-control ng-pristine ng-untouched ng-valid ng-empty" id="searchByDresId" name="searchByDresId" ng-model="searchByDresId">
                        <option value="" selected="selected">Изберете опции</option>
                        <!-- ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="1" class="ng-binding ng-scope">
                            1 || Mice  Dimov || Goalkeeper || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="2" class="ng-binding ng-scope">
                            2 || Blagojche  Popovski || Centre Back || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="3" class="ng-binding ng-scope">
                            3 || Andrej  Nedelkovski || Left Back || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="4" class="ng-binding ng-scope">
                            4 || Darko  Joshevski || Right Back || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="5" class="ng-binding ng-scope">
                            5 || Hristian  Risteski || Centre Back || 1999
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="6" class="ng-binding ng-scope">
                            6 || Vladimir  Krsteski || Defensive Midfielder || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="7" class="ng-binding ng-scope">
                            7 || Kire  Lazarov || Center Midfielder || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="8" class="ng-binding ng-scope">
                            8 || Darko  Risteski || Attacking Midfilder || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="9" class="ng-binding ng-scope">
                            9 || Borche  Manevski || Center Forward || 1988
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="10" class="ng-binding ng-scope">
                            10 || Darko  Krstevski || Left Forward || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="11" class="ng-binding ng-scope">
                            11 || Andrej  Markovski || Right Forward || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="12" class="ng-binding ng-scope">
                            12 || Aleksandar  Markoski || Goalkeeper || 2001
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="13" class="ng-binding ng-scope">
                            13 || Nikola  Piskacev || Left Back || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="14" class="ng-binding ng-scope">
                            14 || Jove  Nikolov || Centre Back || 2008
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="15" class="ng-binding ng-scope">
                            15 || Jove  Nikolovski || Right Back || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="16" class="ng-binding ng-scope">
                            16 || Mile  Poposki || Defensive Midfielder || 1982
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="17" class="ng-binding ng-scope">
                            17 || Jorgo  Popovski || Center Midfielder || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="18" class="ng-binding ng-scope">
                            18 || Jordan  Mitev || Attacking Midfielder || 1985
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="19" class="ng-binding ng-scope">
                            19 || Antimon  Krsteski || Goalkeeper || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="20" class="ng-binding ng-scope">
                            20 || Cristiano  Ronaldo || Center Forward || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="21" class="ng-binding ng-scope">
                            21 || Vlade  Krstevski || Left Forward || 1997
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="22" class="ng-binding ng-scope">
                            22 || Deni  Popovski || Centre Back || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="23" class="ng-binding ng-scope">
                            23 || Hristijan  Dragarski || Right Forward || 1991
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="24" class="ng-binding ng-scope">
                            24 || Darko  Joshev || Physiotherapist || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="25" class="ng-binding ng-scope">
                            25 || Hristi  Risteski || Condition Coach || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="26" class="ng-binding ng-scope">
                            26 || Viktor  Koteski || Deputy Coach || 1979
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="27" class="ng-binding ng-scope">
                            27 || Stefan  Ristevski || Coach || 1977
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="28" class="ng-binding ng-scope">
                            28 || Darko  Risteski || Sports Director || 1980
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="30" class="ng-binding ng-scope">
                            30 || Trajan  Rizovski || Left Back || 1995
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="31" class="ng-binding ng-scope">
                            31 || Najdo  Sikijovski || Right Winger || 2006
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="33" class="ng-binding ng-scope">
                            33 || Borche  Stojanovski || Left Winger || 2007
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="34" class="ng-binding ng-scope">
                            34 || Boro  Stojanov || Center Midfielder || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="69" class="ng-binding ng-scope">
                            69 || Vladimir  Krstevski || Director || 1967
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="77" class="ng-binding ng-scope">
                            77 || Mice  Gacov || Right Back || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="78" class="ng-binding ng-scope">
                            78 || Darko  Krstevski || Left back || 2000
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="79" class="ng-binding ng-scope">
                            79 || Hristijan  Ristevski || Center back || 1998
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="83" class="ng-binding ng-scope">
                            83 || Stojan  Dimov || Center Forward || 1990
                        </option><!-- end ngRepeat: igrac in igrachi --><option ng-repeat="igrac in igrachi" value="93" class="ng-binding ng-scope">
                            93 || Vlado  Pavlov || Coach || 1990
                        </option><!-- end ngRepeat: igrac in igrachi -->
                    </select>
                </th>
                <th><i class="fa-solid fa-pen"></i>edit</th>
                <th><i class="fa-solid fa-trash-can"></i>delete</th>
            </tr>
        </thead>

        <tbody>
        <?php
$__section_outcome_position_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['outcome']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_outcome_position_6_total = $__section_outcome_position_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_outcome_position'] = new Smarty_Variable(array());
if ($__section_outcome_position_6_total !== 0) {
for ($__section_outcome_position_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_outcome_position']->value['index'] = 0; $__section_outcome_position_6_iteration <= $__section_outcome_position_6_total; $__section_outcome_position_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_outcome_position']->value['index']++){
?>
            <tr class="ng-scope">
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['outcome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outcome_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outcome_position']->value['index'] : null)]['outcome_id'];?>
 </td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['outcome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outcome_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outcome_position']->value['index'] : null)]['klub'];?>
</td>
                <td class="ng-binding"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['outcome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outcome_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outcome_position']->value['index'] : null)]['iznos_denari'] ?? '', 'UTF-8');?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['outcome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outcome_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outcome_position']->value['index'] : null)]['dres_id'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['outcome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outcome_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outcome_position']->value['index'] : null)]['ime'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['outcome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outcome_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outcome_position']->value['index'] : null)]['prezime'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['outcome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outcome_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outcome_position']->value['index'] : null)]['pozicija'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['outcome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outcome_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outcome_position']->value['index'] : null)]['godini'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['outcome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outcome_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outcome_position']->value['index'] : null)]['plata_denari'];?>
</td>
                <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['outcome']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outcome_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outcome_position']->value['index'] : null)]['income_id'];?>
</td>
                <td class="text-center ng-binding">  <br>  <br> </td>
                <td title="Edit"><i class="fa-solid fa-pen"></i></td>
                <td title="Delete">
                   <button type="button" class="btn myBtn" data-bs-toggle="modal" data-bs-target="#myModal" ng-click="passPosition($index)"> <i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>
        <?php
}
}
?>

        </tbody>

    </table>
</div>

</div>

<div class="col-sm-12">
    <div class="table-responsive myView">
        <h3 class="text-center">Стручен штаб</h3>
        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <th>
                        Број на членот
                    </th>
                    <th>
                        <select class="form-control text-center" name="searchByZalaganje" id="searchByZalaganje" ng-model="searchByZalaganje">
                            <option value="">Залагање во клубот</option>
                            <option>nedovolno</option>
                            <option >dovolno</option>
                            <option >istaknato</option>
                        </select>
                    </th>
                    <th>
                        <select class="form-control text-center" name="searchByRabotnaOcenka" id="searchByRabotnaOcenka" ng-model="searchByRabotnaOcenka">
                            <option value="">Работна оценка</option>
                            <option>1</option>
                            <option >2</option>
                            <option >3</option>
                            <option >4</option>
                            <option >5</option>
                        </select>
                    </th>
                    <th><i class="fa-solid fa-pen"></i>edit</th>
                    <th><i class="fa-solid fa-trash-can"></i>delete</th>
                </tr>
            </thead>
            <?php
$__section_uprava_position_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['uprava']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_uprava_position_7_total = $__section_uprava_position_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_uprava_position'] = new Smarty_Variable(array());
if ($__section_uprava_position_7_total !== 0) {
for ($__section_uprava_position_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_uprava_position']->value['index'] = 0; $__section_uprava_position_7_iteration <= $__section_uprava_position_7_total; $__section_uprava_position_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_uprava_position']->value['index']++){
?>
            <tbody>
                <tr class="ng-scope">
                    <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['uprava']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_uprava_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_uprava_position']->value['index'] : null)]['dres_id'];?>
</td>
                    <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['uprava']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_uprava_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_uprava_position']->value['index'] : null)]['zalaganje'];?>
</td>
                    <td class="ng-binding"><?php echo $_smarty_tpl->tpl_vars['uprava']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_uprava_position']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_uprava_position']->value['index'] : null)]['rabotna_ocenka'];?>
</td>
                    <td title="Edit "><i class="fa-solid fa-pen"></i></td>
                    <td title="Delete">
                        <button type="button" class="btn myBtn" data-bs-toggle="modal" data-bs-target="#myModal" ng-click="passPosition($index)"> <i class="fa-solid fa-trash-can"></i></button>
                    </td>
                </tr>
            </tbody>
            <?php
}
}
?>
        </table>
    </div>
</div>



An example of a section loop:

    <?php
$__section_outer_8_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['FirstName']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_outer_8_total = $__section_outer_8_loop;
$_smarty_tpl->tpl_vars['__smarty_section_outer'] = new Smarty_Variable(array());
if ($__section_outer_8_total !== 0) {
for ($__section_outer_8_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] = 0; $__section_outer_8_iteration <= $__section_outer_8_total; $__section_outer_8_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum'] = $__section_outer_8_iteration;
?>
        <?php if ((1 & (isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null) / 2)) {?>
            <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum'] : null);?>
 . <?php echo $_smarty_tpl->tpl_vars['FirstName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null)];?>
 <?php echo $_smarty_tpl->tpl_vars['LastName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null)];?>

        <?php } else { ?>
            <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['rownum'] : null);?>
 * <?php echo $_smarty_tpl->tpl_vars['FirstName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null)];?>
 <?php echo $_smarty_tpl->tpl_vars['LastName']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_outer']->value['index'] : null)];?>

        <?php }?>
        <?php }} else {
 ?>
        none
    <?php
}
?>

    An example of section looped key values:

    <?php
$__section_sec1_9_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['contacts']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sec1_9_total = $__section_sec1_9_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sec1'] = new Smarty_Variable(array());
if ($__section_sec1_9_total !== 0) {
for ($__section_sec1_9_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] = 0; $__section_sec1_9_iteration <= $__section_sec1_9_total; $__section_sec1_9_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']++){
?>
        phone: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['phone'];?>

        <br>

            fax: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['fax'];?>

        <br>

            cell: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sec1']->value['index'] : null)]['cell'];?>

        <br>
    <?php
}
}
?>
    <p>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
