$(".lh-index-addPic").on("change", ".lh-hidden-file", function() {
	var a = window.URL || window.webkitURL;
	var img, file;
	file = this.files[0];
	img = new Image();
	img.src = a.createObjectURL(file);
	img.onload = function() {
		if(Math.ceil(c.size / 1024 / 1024) > 2) {
			$(".msgtc").fadeIn("fast");
			$(".msgtc p").text("图片大小不大于2M！");
			$(".lh-hidden-file").remove();
			$(".lh-index-addPic").append("<input type='file' class='lh-hidden-file' accept='image/*'>");
			return
		} else {
			$(".lh-index-addPic").ajaxSubmit({
				type: "POST",
				dataType: "JSON",
				url: "http://file.jxdqzb.com/image/upload",
				async: false,
				data: {
					photo: $(".lh-index-addPic").serialize(),
					project: "",
					path: "",
					rule: "",
					thumb: 1
				},
				success: function(res) {
					if(res.status == 200) {
						$(".lh-index-addPic img").remove();
						$("<img class='thumbImg' src='http://file.jxdqzb.com/" + d.data[0].thumb + "'>").insertBefore($(".lh-index-addPic")[0].childNodes[1]);
					} else {
						window.alert('网络原因');
					}
				}
			})
		}
	}
});