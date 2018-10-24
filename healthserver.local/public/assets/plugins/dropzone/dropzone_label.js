
   $(document).ready(function () {
        $("#id_dropzone").on("click",function(){
           
        });

        $("#image").on("change", function(){ 
        	var files = !!this.files ? this.files : []; 

        	if (!files.length || !window.FileReader) return; // Check if File is selected, or no FileReader support 
        	if (/^image/.test( files[0].type)){ 
        	// Allow only image upload 
        		var ReaderObj = new FileReader(); 
        	// Create instance of the FileReader 
        		ReaderObj.readAsDataURL(files[0]); 
        	// read the file uploaded 
        		ReaderObj.onloadend = function(){ 
        	// set uploaded image data as background of div 
        		$("#id_dropzone").css("background-image", "url("+this.result+")"); } }else{ alert("Upload an image"); 
        	} 
    	});

   });