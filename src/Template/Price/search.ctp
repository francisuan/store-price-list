<?php
$this->assign('title','Store Price List');
$this->start('extra-styles');
?>
<style tyle="text/css">
	#price_list{
		margin-top:15px;
	}
</style>
<?php
$this->end();
?>
<?php echo $this->Form->create(); ?>
<div class="input-group input-group-lg">
  <span class="input-group-addon" id="sizing-addon1">Search</span>
  <input id="search_item" type="text" class="form-control" placeholder="item" aria-describedby="sizing-addon1">
  <span class="input-group-btn">
	<button id="search_button" class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span> Search</button>
  </span>
</div>
<?php echo $this->Form->end(); ?>
<div id="price_list" class="price_list_output"></div>
<?php 
$this->start('extra-javascript');
?>
<script type="text/javascript">
$(function(){
	$('#search_item').focus();
	$('#search_button').click(function(e){
		e.preventDefault();
		var item_searched = $('#search_item').val();
		$.ajax({
			url:'/items/search',
			type: 'POST',
			data:{
				q:item_searched
			},
			success: function(data){
				$('.price_list_output').html(data);
			}
		});
	});
	$('#search_item').keypress(function(e){
		if ( e.which == 13 ){
			e.preventDefault();
			$('#search_button').trigger('click');
		}
	});
});
</script>
<?php
$this->end();
?>