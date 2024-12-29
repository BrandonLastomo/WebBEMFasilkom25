<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

	<div class="container">
		<div class="copyright text-start">
			<div class="row mt-5">
				<div class="col-md-5">
					<h4 class="mb-3">BEM Fasilkom UNSIKA</h4>
					<h5>Sekretariat</h5>
					<p>Universitas Singaperbangsa Karawang,<br> Jl. HS. Ronggowaluyo, Telukjambe Timur,<br> Karawang 41361</p>
					<h4 class="mb-3">Follow Us</h4>
					<div class="social-links mb-3">
						<a href="https://www.facebook.com/bemfasilkomusk" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
						<a href="https://www.instagram.com/bemfasilkomunsika/" target="_blank" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
					</div>
				</div>
				<div class="col-md-4">
					<h4 class="mb-3">Informasi</h4>
					<div class="informasi mb-3">
						<a href="{{ route('news') }}">Fasilkom News</a>
						{{-- <a href="{{ route('fasilkom-cup') }}">Fasilkom Cup</a> --}}
						<a href="{{ route('apr') }}">Advocacy Progress Report</a>
						<a href="{{ route('lpj') }}">LPJ Online</a>
					</div>
				</div>
				<div class="col-md-2">
					<h4 class="mb-3">Lainnya</h4>
					<div class="other">
						<a href="{{ route('kontak') }}">Kontak</a>
						<a href="{{ route('visimisi') }}">Tentang Kami</a>
						<a href="https://forms.gle/Q4Eme4W4As8H6KQn7">Kritik & Saran Depelopment Web</a>
					</div>
				</div>
			</div>
			<div class="row text-center mt-3">
				<div class="col-md mt-3">
					{{-- <p>Hak Cipta  BEM Fasilkom UNSIKA {{env('KABINET_TAHUN');}}<br>Departemen Pengembangan Teknologi Informasi</p> --}}
          <p>Copyright &#169; {{env('KABINET_TAHUN');}} Departemen Pengembangan Teknologi Informasi <br> BEM Fasilkom UNSIKA {{env('KABINET_TAHUN');}}</p>
				</div>
			</div>
		</div>
	</div>

</footer>
<!-- End Footer -->