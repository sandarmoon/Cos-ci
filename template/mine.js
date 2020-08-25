$(document).ready(function(){
	$('.brand-edit').click(function(e){
		console.log(window.location.origin);
		e.preventDefault();
		
		baseurl=$(this).data('base');
		console.log(baseurl);
		// $.get("<?php echo site_url('brand/edit') ?>"+id,function(res){
		// 	console.log(res);
		// })
		$.ajax({
			url:baseurl,
			method:'GET',
			success:function(res){
				if(res){
					var arr=JSON.parse(res);
					$('#edit-form input[name="name"]').val(arr.name);
					$('#edit-form input[name="oldLogo"]').val(arr.logo);
					$('#edit-form input[name="oldid"]').val(arr.id);
					$('#edit-form img').attr('src',arr.logo);
				}
			}
		})
	})
})