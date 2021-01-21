		window.addEventListener("load",()=>{
		document.getElementById('btn_registrar').addEventListener("click",()=>{

			let ap=document.getElementById('apellidos');
			let nm=document.getElementById('nombres');
			let tl=document.getElementById('correo');
			let cr=document.getElementById('telefono');
			if(ap.value.trim().length>5 ){
				// alert('nombres correctos');
			}else{

			document.getElementById('msj_apellidos').innerHTML='Error: debe escribir minimo 6 caracteres';
			document.getElementById('msj_apellidos').className='text-danger';
			}
			if(nm.value.trim().length>5){
				// alert('apellidos correctos');
			}else{
			document.getElementById('msj_nombres').innerHTML='Error: debe escribir minimo 6 caracteres';
			document.getElementById('msj_nombres').className='text-danger';				
			}			
			if(cr.value.trim().length>6){
				// alert('correo correcto');
			}else{
			document.getElementById('msj_correo').innerHTML='Error: debe escribir minimo 6 caracteres';
			document.getElementById('msj_correo').className='text-danger';				
			}			
			if(tl.value.trim().length>9){
				// alert('telefono correcto');
			}else{
			document.getElementById('msj_telefono').innerHTML='Error: debe escribir minimo 10 caracteres';
			document.getElementById('msj_telefono').className='text-danger';				
			}
			alert('Mision cumplida')
		})
			

	});
