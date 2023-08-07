<div class="card">
	<div class="card-header">
		Paparan Rol

		<a href="<?= PORTAL ?>settings/rols/list" class="btn btn-sm btn-primary"> 
			<span class="fa fa-arrow-left"></span> Kembali 
		</a>
	</div>	

	<div class="card-body">
		<?php

			$r = roles::getBy(["r_id" => url::get(3)]);

			if(count($r) > 0){
				$r = $r[0];
		?>
		
		<form action="" method="POST">
			<div class="row">
				<div class="col-md-6">

					Nama:
					<input type="text" class="form-control" placeholder="Name" name="name" value="<?= $r->r_name ?>" disabled/>

					<div class="row">
						<div class="col-md-4">

							Status:
							<select class="form-control" name="status" disabled>
								<option value="0" <?= $r->r_status ? "selected" : "" ?>>Tidak Aktif</option> 
                                <option value="1" <?= $r->r_status ? "selected" : "" ?>>Aktif</option>
							</select><br />
						</div>
					</div>
				</div>
			</div>
		</form>
		<?php
			}
			else{
				new Alert("Error", "Tiada Maklumat Dijumpai.");
			}
		?>
	</div>
</div>