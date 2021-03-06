	<div class="col-sm-12  col-md-12 main"> 
		<div class="row">
			<a href="<?=base_url()?>categories/create_categories" class="btn btn-primary" data-toggle="mainmodal"><?=$this->lang->line('application_create_category');?></a>
		</div>
		<div class="row">
		<div class="table-head"> <?=$this->lang->line('application_categories');?></div>
		<div class="table-div">
		<table class="data table" id="items" rel="<?=base_url()?>" cellspacing="0" cellpadding="0">
		<thead>
			<th><?=$this->lang->line('application_name');?></th>
			<th><?=$this->lang->line('application_action');?></th>
		</thead>
		<?php foreach ($categories as $value):?>

		<tr id="<?=$value->id;?>" >
			<td><i class="<?=$value->icon?>"></i> <?=$value->name;?></td>
			<td class="option" width="8%">
				        <button type="button" class="btn-option delete po" data-toggle="popover" data-placement="left" data-content="<a class='btn btn-danger po-delete ajax-silent' href='<?=base_url()?>categories/delete_categories/<?=$value->id;?>'><?=$this->lang->line('application_yes_im_sure');?></a> <button class='btn po-close'><?=$this->lang->line('application_no');?></button> <input type='hidden' name='td-id' class='id' value='<?=$value->id;?>'>" data-original-title="<b><?=$this->lang->line('application_really_delete');?></b>"><i class="fa fa-times"></i></button>
				        <a href="<?=base_url()?>categories/update_categories/<?=$value->id;?>" class="btn-option" data-toggle="mainmodal"><i class="fa fa-cog"></i></a>
			</td>
		</tr>

		<?php endforeach;?>
	 	</table>
	 	</div>
	 	</div>
	 	<br clear="all">
		
	</div><!--FIM CATEGORIAS-->


	<div class="col-sm-12  col-md-12 main"> <!-- INICO SUBCATEGORIAS -->
		<div class="row">
			<a href="<?=base_url()?>categories/create_subcategories" class="btn btn-primary" data-toggle="mainmodal"><?=$this->lang->line('application_create_subcategory');?></a>
		</div>
		<div class="row">
		<div class="table-head"> <?=$this->lang->line('application_subcategories');?></div>
		<div class="table-div">
		<table class="data table" id="items" rel="<?=base_url()?>" cellspacing="0" cellpadding="0">
		<thead>
			<th><?=$this->lang->line('application_name');?></th>
			<th class="hidden-xs"><?=$this->lang->line('application_category');?></th>
			<th><?=$this->lang->line('application_action');?></th>
		</thead>
		<?php foreach ($subcategories as $value):?>

		<tr id="<?=$value->id;?>" >
			<td  width="8%"> <i class="<?=$value->icon?>"></i> <?=$value->name;?></td>
			<td class="hidden-xs" >
				<span class="label label-info"><?=$value->namecategory;?></span>
			</td>
			<td class="option" width="8%">
				        <button type="button" class="btn-option delete po" data-toggle="popover" data-placement="left" data-content="<a class='btn btn-danger po-delete ajax-silent' href='<?=base_url()?>categories/delete_subcategories/<?=$value->id;?>'><?=$this->lang->line('application_yes_im_sure');?></a> <button class='btn po-close'><?=$this->lang->line('application_no');?></button> <input type='hidden' name='td-id' class='id' value='<?=$value->id;?>'>" data-original-title="<b><?=$this->lang->line('application_really_delete');?></b>"><i class="fa fa-times"></i></button>
				        <a href="<?=base_url()?>categories/update_subcategories/<?=$value->id;?>" class="btn-option" data-toggle="mainmodal"><i class="fa fa-cog"></i></a>
			</td>
		</tr>

		<?php endforeach;?>
	 	</table>
	 	</div>
	 	</div>
	 	<br clear="all">
		
	</div>