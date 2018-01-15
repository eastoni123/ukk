</div><!-- END CONTAINER -->
<footer class="page-footer blue">
	<div class="footer-copyright">
		<div class="container">
			© 2017 MESENJASA Copyright ESEMKA UTAS
		</div>
	</div>
</footer>
<!-- JAVASCRIPT -->
<script type="text/javascript" src="../../component/js/jquery.min.js"></script>
<script type="text/javascript" src="../../component/js/materialize.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".view-profile").click(function(){
			var nama = $(this).attr('nama');
			var foto = $(this).attr('photo');
			var alamat = $(this).attr('alamat');
			var pass = $(this).attr('pass');

			$(".nama_lengkap").text(nama);
			$(".photo-profile").attr("src","../dist/img/"+foto);
			$(".alamat").text(alamat);
			$(".password").text(pass);
		});
	});
</script>
<script type="text/javascript" src="../../component/js/global.js"></script>

</body>
</html>