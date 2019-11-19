

<div class="clearfix"></div>
</div>
<script src="views/web/js/jquery.min.js" type="text/javascript" ></script>
<script src="views/web/js/bootstrap.min.js" type="text/javascript" ></script>
<script src="views/web/js/wow.min.js" type="text/javascript"></script>
<script src="views/web/js/slick.min.js" type="text/javascript" ></script>
<script src="views/web/js/magiczoomplus.js"></script>
<script src="views/web/js/main.js" type="text/javascript" ></script>
<script>
	$(document).ready(function(e){
		wow = new WOW(
		{
			animateClass: 'animated',
			offset:       0,
			callback:     function(box) {
				console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
			}
		}
		);
		wow.init();
	});
</script>
</body>
</html>