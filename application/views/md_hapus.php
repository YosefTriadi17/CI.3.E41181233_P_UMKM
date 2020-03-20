<?php foreach($id as $i){ ?> <!-- ubah variabel user ke u -->
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post"> <!-- form action -->
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="id" value="<?php echo $i->id ?>"> <!-- data id database type hidden -->
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td> <!-- tombol simpan type submit -->
			</tr>
		</table>
	</form>	
	<?php } ?>