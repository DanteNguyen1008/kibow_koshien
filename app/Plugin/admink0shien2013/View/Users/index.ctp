<table class="data_list">
	<tr>
		<td>Number</td>
		<td>ID</td>
		<td>SNS ID</td>
		<td>SNS type</td>
		<td>Balance</td>
		<td>Delete</td>
	</tr>
<?php 
$i = 1;
foreach ($users as $user) {?>
	<tr>
		<td><?=$i?></td>
		<td><?=$user['User']['user_id']?></td>
		<td><a href="#"><?=$user['User']['sns_account']?></a></td>
		<td><?=$user['User']['sns_type']?></td>
		<td><?=$user['User']['balance']?></td>
		<td><?=$this->Html->link('Delete', array('controller' => 'Users', 'action' => 'delete', $user['User']['sns_account'], $user['User']['sns_type']))?></td>
	</tr>
<?$i++;}?>
</table>