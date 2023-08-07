<div class="card">
    <div class="card-header">
		<span class="fa fa-edit"></span> Edit Jabatan

        <a href="<?= PORTAL ?>settings/jabatan/" class="btn btn-sm btn-primary">
			Kembali
		</a>
    </div>

    <div class="card-body">
    	<?php
    		$dep = departments::getBy(["d_id" => url::get(3)]);
    	?>

    	<form action="" method="POST">
			<div class="row">
				<div class="col-md-6">
					Nama Jabatan:
					<input type="text" class="form-control" name="d_name" placeholder="Nama Jabatan" value="<?= $dep[0]->d_name ?>" /><br />
				</div>
				
				<div class="col-md-6">
					Status:
					<select class="form-control" name="d_status">
						<option value="1" <?=  $dep[0]->d_status == 1 ? "selected" : "" ?>>Aktif</option>
						<option value="0" <?=  $dep[0]->d_status == 0 ? "selected" : "" ?>>Tidak Aktif</option>
					</select>
				</div>
				
				<div class="col-md-6">
					Code:
					<input type="text" class="form-control" name="d_code" value="<?= $dep[0]->d_code ?>" /><br />
				</div>
				
				<div class="col-md-12 text-center">
				<?php
					Controller::form("jabatan", [
						"action"	=> "edit"
					]);
				?>
					<button class="btn btn-sm btn-primary">
						Simpan Maklumat
					</button>	
				</div>
			</div>
		</form>
	</div>
</div>