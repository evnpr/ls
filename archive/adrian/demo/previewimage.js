
     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
				reader.readAsDataURL(input.files[0]);
                reader.onload = function (e) {
                     input.parentNode.parentNode.childNodes[1].childNodes[1].setAttribute('src', e.target.result);						
                };
				
                
            }
        }