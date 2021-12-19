</div>

<!-- BEGIN: Page content-->
<div>
	<h2 class="text-center">
		General Registration Statistics
	</h2>
	<div class="row">
		<div class="col-lg-2  col-sm-12">
			<div class="card">
				<div class="card-body">
					<h5 class="box-title text-center">Total Delegates</h5>
					<div class="row">
						<div class="col text-center">
							<div class="easypie" data-percent="<?=(($total_del/1000)*100)?>" data-bar-color="#00bcd4" data-size="110" data-line-width="8"><span class="easypie-data text-info" style="font-size:32px;"><?= ($total_del) ?></span></div>
							<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Overall</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6  col-sm-12">
			<div class="card">
				<div class="card-body">
					<h5 class="box-title text-center">Total By Zone</h5>
					<div class="row">
						<div class="col-md-2 col-sm-4 text-center">
							<div class="easypie" data-percent="<?=(($remo/300)*100)?>" data-bar-color="#00bcd4" data-size="110" data-line-width="8"><span class="easypie-data text-info" style="font-size:32px;"><?=($remo) ?></span></div>
							<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal"> <a href="<?= base_url('admin/zone?zid=1') ?>">Remo</a> </h6>
						</div>
						<div class="col-md-2 col-sm-4 text-center">
							<div class="easypie" data-percent="<?=(($egba/300)*100)?>" data-bar-color="#2949ef" data-size="110" data-line-width="8"><span class="easypie-data text-primary" style="font-size:32px;"><?=($egba) ?></span></div>
							<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal"><a href="<?= base_url('admin/zone?zid=2') ?>">Egba</a>
							</h6>
						</div>
						<div class="col-md-2 col-sm-4 text-center">
							<div class="easypie" data-percent="<?=(($ijebu/300)*100)?>" data-bar-color="#00bcd4" data-size="110" data-line-width="8"><span class="easypie-data text-info" style="font-size:32px;"><?=($ijebu) ?></span></div>
							<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal"><a href="<?= base_url('admin/zone?zid=3') ?>">Ijebu</a></h6>
						</div>
						<div class="col-md-2 col-sm-4 text-center">
							<div class="easypie" data-percent="<?=(($aoo/100)*100)?>" data-bar-color="#2949ef" data-size="110" data-line-width="8"><span class="easypie-data text-primary" style="font-size:32px;"><?=($aoo) ?></span></div>
							<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal"><a href="<?= base_url('admin/zone?zid=4') ?>">Ado Odo</a>
							</h6>
						</div>
						<div class="col-md-2 col-sm-4 text-center">
							<div class="easypie" data-percent="<?=(($others/100)*100)?>" data-bar-color="#ee1021" data-size="110" data-line-width="8"><span class="easypie-data text-primary" style="font-size:32px;"><?=($others) ?></span></div>
							<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal"><a href="<?= base_url('admin/zone?zid=4') ?>">Others</a>
							</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card">
				<div class="card-body">
					<h5 class="box-title text-center">Total By Gender</h5>
					<div class="row">
						<div class="col text-center">
							<div class="easypie" data-percent="<?=(($male/400)*100)?>" data-bar-color="#00bcd4" data-size="110" data-line-width="8"><span class="easypie-data text-info" style="font-size:32px;"><?=($male) ?></span></div>
							<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Male</h6>
						</div>
						<div class="col text-center">
							<div class="easypie" data-percent="<?=(($male/600)*100)?>" data-bar-color="#2949ef" data-size="110" data-line-width="8"><span class="easypie-data text-primary" style="font-size:32px;"><?=($female) ?></span></div>
							<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Female
							</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<h5 class="box-title text-center">Total By Category</h5>
					<div class="row">
						<div class="col text-center">
							<div class="easypie" data-percent="<?=(($psec/50)*100)?>" data-bar-color="#00bcd4" data-size="110" data-line-width="8"><span class="easypie-data text-info" style="font-size:32px;"><?=($psec) ?></span></div>
							<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Primary Sch.</h6>
						</div>
						<div class="col text-center">
							<div class="easypie" data-percent="<?=(($jsec/150)*100)?>" data-bar-color="#00bcd4" data-size="110" data-line-width="8"><span class="easypie-data text-info" style="font-size:32px;"><?=($jsec) ?></span></div>
							<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Junior Sec.</h6>
						</div>
						<div class="col text-center">
							<div class="easypie" data-percent="<?=(($ssec/150)*100)?>" data-bar-color="#00bcd4" data-size="110" data-line-width="8"><span class="easypie-data text-info" style="font-size:32px;"><?=($ssec) ?></span></div>
							<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Senior Sec.</h6>
						</div>
						<div class="col text-center">
							<div class="easypie" data-percent="<?=(($sch_leaver/150)*100)?>" data-bar-color="#00bcd4" data-size="110" data-line-width="8"><span class="easypie-data text-info" style="font-size:32px;"><?=($sch_leaver) ?></span></div>
							<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">School Leaver</h6>
						</div>
						<div class="col text-center">
							<div class="easypie" data-percent="<?=(($hi/300)*100)?>" data-bar-color="#2949ef" data-size="110" data-line-width="8"><span class="easypie-data text-primary" style="font-size:32px;"><?=($hi) ?></span></div>
							<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Higher Institution
							</h6>
						</div>
						<div class="col text-center">
							<div class="easypie" data-percent="<?=(($workers/500)*100)?>" data-bar-color="#2949ef" data-size="110" data-line-width="8"><span class="easypie-data text-primary" style="font-size:32px;"><?=($workers) ?></span></div>
							<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Workers
							</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <h2 class="text-center btn-block">
		<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#Electronic_reg" aria-expanded="false" aria-controls="Electronic_reg">
			Electronic Registration
		</button>
	</h2>
	<div class="collapse" id="Electronic_reg">
		<div class="row">
			<div class="col-lg-2  col-sm-12">
				<div class="card">
					<div class="card-body">
						<h5 class="box-title text-center">Total Delegates</h5>
						<div class="row">
							<div class="col text-center">
								<div class="easypie" data-percent="99" data-bar-color="#00bcd4" data-size="110" data-line-width="8"><span class="easypie-data text-info" style="font-size:32px;"></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Overall</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6  col-sm-12">
				<div class="card">
					<div class="card-body">
						<h5 class="box-title text-center">Total By Zone</h5>
						<div class="row">
							<div class="col-md-3 col-sm-4 text-center">
								<div class="easypie" data-percent="0" data-bar-color="#00bcd4" data-size="110" data-line-width="8"><span class="easypie-data text-info" style="font-size:32px;"></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Remo</h6>
							</div>
							<div class="col-md-3 col-sm-4 text-center">
								<div class="easypie" data-percent="0" data-bar-color="#2949ef" data-size="110" data-line-width="8"><span class="easypie-data text-primary" style="font-size:32px;"></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Egba
								</h6>
							</div>
							<div class="col-md-3 col-sm-4 text-center">
								<div class="easypie" data-percent="0" data-bar-color="#00bcd4" data-size="110" data-line-width="8"><span class="easypie-data text-info" style="font-size:32px;"></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Ijebu</h6>
							</div>
							<div class="col-md-3 col-sm-4 text-center">
								<div class="easypie" data-percent="0" data-bar-color="#2949ef" data-size="110" data-line-width="8"><span class="easypie-data text-primary" style="font-size:32px;"></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Ado Odo
								</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card">
					<div class="card-body">
						<h5 class="box-title text-center">Total By Gender</h5>
						<div class="row">
							<div class="col text-center">
								<div class="easypie" data-percent="0" data-bar-color="#00bcd4" data-size="110" data-line-width="8"><span class="easypie-data text-info" style="font-size:32px;"></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Male</h6>
							</div>
							<div class="col text-center">
								<div class="easypie" data-percent="0" data-bar-color="#2949ef" data-size="110" data-line-width="8"><span class="easypie-data text-primary" style="font-size:32px;"></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Female
								</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="box-title text-center">Total By Category</h5>
						<div class="row">
							<div class="col text-center">
								<div class="easypie" data-percent="0" data-bar-color="#00bcd4" data-size="110" data-line-width="8"><span class="easypie-data text-info" style="font-size:32px;"></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Secondary Sch.</h6>
							</div>
							<div class="col text-center">
								<div class="easypie" data-percent="0" data-bar-color="#00bcd4" data-size="110" data-line-width="8"><span class="easypie-data text-info" style="font-size:32px;"></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">School Leaver</h6>
							</div>
							<div class="col text-center">
								<div class="easypie" data-percent="0" data-bar-color="#2949ef" data-size="110" data-line-width="8"><span class="easypie-data text-primary" style="font-size:32px;"></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Higher Institution
								</h6>
							</div>
							<div class="col text-center">
								<div class="easypie" data-percent="0" data-bar-color="#2949ef" data-size="110" data-line-width="8"><span class="easypie-data text-primary" style="font-size:32px;"></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Workers
								</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<h2 class="text-center btn-block">
		<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#Manual_reg" aria-expanded="false" aria-controls="Manual_reg">
			Manual Registration
		</button>
	</h2>
	<div class="collapse" id="Manual_reg">
		<div class="row">
			<div class="col-lg-2  col-sm-12">
				<div class="card">
					<div class="card-body">
						<h5 class="box-title text-center">Total Manual Delegates</h5>
						<div class="row">
							<div class="col text-center">
								<div class="easypie" data-percent="99" data-bar-color="#00bcd4" data-size="110" data-line-width="8"><span class="easypie-data text-info" style="font-size:32px;"></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Manual</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6  col-sm-12">
				<div class="card">
					<div class="card-body">
						<h5 class="box-title text-center">Total By Zone</h5>
						<div class="row">
							<div class="col-md-3 col-sm-4 text-center">
								<div class="easypie" data-percent="0" data-bar-color="#00bcd4" data-size="110" data-line-width="8"><span class="easypie-data text-info" style="font-size:32px;"></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Remo</h6>
							</div>
							<div class="col-md-3 col-sm-4 text-center">
								<div class="easypie" data-percent="0" data-bar-color="#2949ef" data-size="110" data-line-width="8"><span class="easypie-data text-primary" style="font-size:32px;"></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Egba
								</h6>
							</div>
							<div class="col-md-3 col-sm-4 text-center">
								<div class="easypie" data-percent="0" data-bar-color="#00bcd4" data-size="110" data-line-width="8"><span class="easypie-data text-info" style="font-size:32px;"></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Ijebu</h6>
							</div>
							<div class="col-md-3 col-sm-4 text-center">
								<div class="easypie" data-percent="0" data-bar-color="#2949ef" data-size="110" data-line-width="8"><span class="easypie-data text-primary" style="font-size:32px;"></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Ado Odo
								</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card">
					<div class="card-body">
						<h5 class="box-title text-center">Total By Gender</h5>
						<div class="row">
							<div class="col text-center">
								<div class="easypie" data-percent="0" data-bar-color="#00bcd4" data-size="110" data-line-width="8"><span class="easypie-data text-info" style="font-size:32px;"></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Male</h6>
							</div>
							<div class="col text-center">
								<div class="easypie" data-percent="0" data-bar-color="#2949ef" data-size="110" data-line-width="8"><span class="easypie-data text-primary" style="font-size:32px;"></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Female
								</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="box-title text-center">Total By Category</h5>
						<div class="row">
							<div class="col text-center">
								<div class="easypie" data-percent="0" data-bar-color="#00bcd4" data-size="110" data-line-width="8"><span class="easypie-data text-info" style="font-size:32px;">sec ?></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Secondary Sch.</h6>
							</div>
							<div class="col text-center">
								<div class="easypie" data-percent="0" data-bar-color="#00bcd4" data-size="110" data-line-width="8"><span class="easypie-data text-info" style="font-size:32px;">sch_leaver ?></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">School Leaver</h6>
							</div>
							<div class="col text-center">
								<div class="easypie" data-percent="0" data-bar-color="#2949ef" data-size="110" data-line-width="8"><span class="easypie-data text-primary" style="font-size:32px;">hi ?></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Higher Institution
								</h6>
							</div>
							<div class="col text-center">
								<div class="easypie" data-percent="0" data-bar-color="#2949ef" data-size="110" data-line-width="8"><span class="easypie-data text-primary" style="font-size:32px;">workers ?></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">Workers
								</h6>
							</div>
							<div class="col text-center">
								<div class="easypie" data-percent="0" data-bar-color="#2949ef" data-size="110" data-line-width="8"><span class="easypie-data text-primary" style="font-size:32px;">nocat ?></span></div>
								<h6 class="mb-0 mt-3 font-15 text-muted font-weight-normal">No Category
								</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
</div>
</div>

</div>
<!-- END: Page content-->

<!-- BEGIN: Page backdrops-->
<div class="sidenav-backdrop backdrop"></div>
<div class="preloader-backdrop">
	<div class="page-preloader">Loading</div>
</div><!-- END: Page backdrops-->
