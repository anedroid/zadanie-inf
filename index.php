<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<title>Wiktor Osmoła - zadanie</title>
</head>
<body>
	<p id=p1>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas orci sapien, posuere tristique velit vel, tempus iaculis turpis. Donec maximus at justo a semper. Praesent blandit tincidunt felis at fringilla. Nulla quis neque a dui tempus rhoncus vel quis metus. Proin et ultrices massa. Suspendisse luctus ullamcorper gravida. Etiam eros ipsum, porttitor vel tempus in, dapibus in eros.</p>
	<p id=p2 class=pb>Etiam metus libero, interdum ut ipsum eget, sollicitudin hendrerit libero. Aenean ut magna sit amet turpis ornare aliquet ac et libero. Aenean vitae scelerisque orci. Aliquam vitae sollicitudin massa. Proin sed ante bibendum purus mattis iaculis nec eu tortor. Nullam congue sollicitudin tristique. Nam dictum lacus non tellus dictum, quis luctus nunc suscipit. Pellentesque sed faucibus tellus. Mauris nisi sem, rhoncus vitae massa nec, condimentum semper arcu. Suspendisse metus justo, fermentum sit amet nunc molestie, ullamcorper facilisis orci. Nulla tincidunt, nulla vitae mattis tempor, nunc mauris maximus risus, et dapibus quam odio ut sem. Vivamus sapien lorem, lacinia et turpis id, mattis porttitor nisi. Nam et lorem ultrices urna dapibus gravida in at justo. Aenean vulputate dapibus lacinia.</p>
	<p id=p3 class="pa pb">In aliquet quam a interdum feugiat. Vestibulum imperdiet erat eu sodales convallis. Nulla fermentum commodo risus, tristique venenatis lectus accumsan sed. Maecenas vel turpis ac turpis placerat convallis. Etiam interdum erat in urna hendrerit, sit amet porta ipsum lobortis. Nulla lobortis tempus massa, a vehicula velit scelerisque ac. Duis rutrum turpis sit amet sapien volutpat, nec bibendum sem dictum.</p>
	<p class=pa>Proin in luctus est. Curabitur ullamcorper, mauris ut porttitor imperdiet, velit est viverra augue, ac tincidunt quam erat vitae tellus. Vestibulum ut rhoncus arcu. Nunc ultricies pellentesque nisi condimentum egestas. Nulla sed lorem sed ex placerat rutrum. Curabitur odio ante, feugiat eu odio eget, eleifend hendrerit lacus. Nam rutrum tellus lorem, in tincidunt libero euismod ut.</p>
<script>
	document.querySelectorAll(".pa").forEach(function(el) {
		el.style.background = "#FF4";
	});
	document.querySelectorAll(".pb").forEach(function(el) {
		el.style.border = "3px dashed #F00";
	});
	document.querySelectorAll("#p1,#p2,#p3").forEach(function(el) {
		el.style.fontStyle = "italic";
	});
	document.querySelector(".pa.pb").addEventListener("click",function() {
		this.innerText = "Nam viverra tellus sapien, vitae blandit risus semper vel. Integer aliquam eu justo vel vestibulum. Vivamus vitae lacus eu justo gravida malesuada eget ut quam. Curabitur vel laoreet justo, in porta sem. Fusce tristique enim diam, at congue lectus ullamcorper et. Donec ornare mi finibus sem vulputate laoreet. Fusce posuere et tellus ac sodales. Nulla placerat massa et ex posuere sagittis. Nunc efficitur pharetra velit, quis cursus dolor tristique sed. Suspendisse eget neque eu ligula fringilla accumsan et id metus. Sed sollicitudin mollis mattis. Cras vitae molestie est. Pellentesque a tincidunt risus. Etiam dictum elit nunc, id sagittis mauris fermentum in.";
	});
</script>
</body>
</html>