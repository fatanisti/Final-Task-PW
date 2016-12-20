<footer class="container-fluid text-center footer navbar-static-bottom" id="footer">
  <p>&copy Kelompok 7 Pemrograman Web 2016 Teknik Informatika Unpad</p>
</footer>

<script>
	function onLoad() {
		if (document.body.offsetHeight < $(window).height()) {
			document.getElementById('footer').style.bottom = 0;
			document.getElementById('footer').style.position = "absolute";
		} else {
			document.getElementById('footer').style.position = "static";
		}
	}
</script>

</body>
</html>
