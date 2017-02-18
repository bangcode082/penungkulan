<footer id="footer"><!--Footer-->
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="companyinfo">
						<h2><span>Keburusan</span>-Store</h2>
						<a href="#" class="btn btn-warning">Tentang Kami</a>
						@if($contact!=null)
						<p style="margin-top: 20px"><strong>Alamat : {{$contact->address}}<br>No Hp : {{$contact->phonenumber}}</strong></p>
						@endif
					</div>
				</div>
				<div class="col-sm-5">
					<div align="center" style=" color: #B4B1AB; margin-top: 120px;">
						<p >Copyright © 2017 Keburusan Store.</p>
						<p >Support By KKN UII 54</p>
						<p >Created by Bangcode</p>
					</div>				
				</div>
				<div class="col-sm-4">
				<div style="margin-top: 40px">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15815.609358979309!2d109.80618631304148!3d-7.693629410825721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7ac70470091c95%3A0xe07bbbb1d87c9782!2sKeburusan%2C+Pituruh%2C+Purworejo+Regency%2C+Central+Java!5e0!3m2!1sen!2sid!4v1487262353440" width="400" height="200" frameborder="0" style="border:0" allowfullscreen>

						</iframe>
					</div>
					{{-- <div class="address" style="height: 200px;">
						<img src="{{asset('client/images/home/map.png')}}" alt="" />

						<p><strong>Alamat:<br> Desa Keburusan, Kecamatan Pituruh, Purworejo<br><br>
						No Hp CS: 080000000 (Kades) </strong></p>
					</div> --}}
				</div>
			</div>
		</div>
	</div>


{{-- 
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<p class="pull-left">Copyright © 2017 Keburusan Store.</p>
				<p class="pull-right">Support By <span><a target="_blank" href="#">KKN UII Angk-54</a></span></p>
			</div>
		</div>
	</div> --}}

</footer><!--/Footer-->