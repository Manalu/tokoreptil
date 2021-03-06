
{result}
	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
						<div class="item-slick3" data-thumb="{base_url(assets/foto_barang/{gambar1_barang})}">
							<div class="wrap-pic-w">
								<img src="{base_url(assets/foto_barang/{gambar1_barang})}" alt="IMG-PRODUCT">
							</div>
						</div>

						<div class="item-slick3" data-thumb="{base_url(assets/foto_barang/{gambar2_barang})}">
							<div class="wrap-pic-w">
								<img src="{base_url(assets/foto_barang/{gambar2_barang})}" alt="IMG-PRODUCT">
							</div>
						</div>

						<div class="item-slick3" data-thumb="{base_url(assets/foto_barang/{gambar3_barang})}">
							<div class="wrap-pic-w">
								<img src="{base_url(assets/foto_barang/{gambar3_barang})}" alt="IMG-PRODUCT">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					<!-- <?php echo $result['nama_barang']; ?> -->
					{nama_barang}
				</h4>

				<span class="m-text17">
					
					Rp.{harga_barang},-
				</span>

				<p class="s-text8 p-t-10">
					Penjual : {nama_personal}
				</p>

				<p class="s-text8 p-t-10">
					<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><span class="fa fa-phone"></span> Phone </button>
				</p>
				<div class="modal" id="myModal">
				    <div class="modal-dialog">
				      <div class="modal-content">

				        <!-- Modal body -->
				        <div class="modal-body">
				          Nomor Penjual
				          {hp_personal}
				        </div>
				        
				        <!-- Modal footer -->
				        <div class="modal-footer">
				          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				        </div>
				        
				      </div>
				    </div>
				</div>

				<!--  -->
				<div class="p-t-33 p-b-60">
					<!-- <div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
							Nomor Handphone
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							{hp_personal}
						</div>
					</div> -->

					<div class="flex-m flex-w">
						

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fas fa-thumbs-up"></i>
							</button> -->
							
							
						</div>
					</div>
					<br>
					<div class="flex-m flex-w">
						<div class="s-text15 w-size15 t-center">
							Lokasi
						</div>

						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							{nama_kabupaten}
						</div>
					</div>
				</div>

				<div class="p-b-45">
					<span class="s-text8 m-r-35">Id Barang: {id_barang}</span>
					<span class="s-text8">Kategori Barang: {nama_kategori}</span>&nbsp;
					
					<div class="modal" id="myModal">
					    <div class="modal-dialog">
					      <div class="modal-content">

					        <!-- Modal body -->
					        <div class="modal-body">
					          Nomor Penjual
					          {hp_personal}
					        </div>
					        
					        <!-- Modal footer -->
					        <div class="modal-footer">
					          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					        </div>
					        
					      </div>
					    </div>
					</div>
				</div>

				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Deskripsi
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							{keterangan_barang}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
{/result}