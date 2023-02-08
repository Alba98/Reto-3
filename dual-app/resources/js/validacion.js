
var darAltaAlumno = document.getElementById("darAltaAlumno");
if(darAltaAlumno) 
    darAltaAlumno.addEventListener("click",  (e) => {
        e.preventDefault();
        var form = document.getElementById('alumnoForm');
        if(form) {
          var iNombre = form.getElementById("nombre");
          var iApe1 = form.getElementById("ape1");
          var iApe2 = form.getElementById("ape2");
          var iDNI = form.getElementById("dni");
          var iEmail = form.getElementById("email");
          var iTelefono = form.getElementById("telefono");

          var formData = validateAlumnoFormData(iNombre.value, iApe1.value, iApe2.value,
            iDNI.value, iEmail.value, iTelefono.value)
          const errors = validateForm(formData);
        
          if(errors){
            if(form) form.submit();
          }else{
            //   Display errors in fields
          }
        }
      });

var darAltaCoord = document.getElementById("darAltaCoord");
  if(darAltaCoord) 
    darAltaCoord.addEventListener("click",  (e) => {
          e.preventDefault();
          var form = document.getElementById('coordinadorForm');
          if(form) {
            var iNombre = form.getElementById("nombre");
            var iApe1 = form.getElementById("ape1");
            var iApe2 = form.getElementById("ape2");
            var iDNI = form.getElementById("dni");
            var iEmail = form.getElementById("email");
            var iTelefono = form.getElementById("telefono");

            var formData = PersonaFormData(iNombre.value, iApe1.value, iApe2.value,
              iDNI.value, iEmail.value, iTelefono.value)
            const errors = validatePersonaFormData(formData);
            
            if(!errors){
              if(form) form.submit();
            }else{
              //   Display errors in fields
            }
          }
        });


var darAltaCoord = document.getElementById("darAltaCoord");
if(darAltaCoord) 
  darAltaCoord.addEventListener("click",  (e) => {
        e.preventDefault();
        var form = document.getElementById('coordinadorForm');
        if(form) {
          var iNombre = form.getElementById("nombre");
          var iApe1 = form.getElementById("ape1");
          var iApe2 = form.getElementById("ape2");
          var iDNI = form.getElementById("dni");
          var iEmail = form.getElementById("email");
          var iTelefono = form.getElementById("telefono");

          var formData = PersonaFormData(iNombre.value, iApe1.value, iApe2.value,
            iDNI.value, iEmail.value, iTelefono.value)
          const errors = validatePersonaFormData(formData);
          
          if(!errors){
            if(form) form.submit();
          }else{
            //   Display errors in fields
          }
        }
    });

var darAltaTemp = document.getElementById("darAltaTemp");
if(darAltaTemp) 
  darAltaTemp.addEventListener("click",  (e) => {
        e.preventDefault();
        var form = document.getElementById('tEmpForm');
        if(form) {
          var iNombre = form.getElementById("nombre");
          var iApe1 = form.getElementById("ape1");
          var iApe2 = form.getElementById("ape2");
          var iDNI = form.getElementById("dni");
          var iEmail = form.getElementById("email");
          var iTelefono = form.getElementById("telefono");

          var formData = PersonaFormData(iNombre.value, iApe1.value, iApe2.value,
            iDNI.value, iEmail.value, iTelefono.value)
          const errors = validatePersonaFormData(formData);
          
          if(!errors){
            if(form) form.submit();
          }else{
            //   Display errors in fields
          }
        }
    });

var darAltaTuni = document.getElementById("darAltaTuni");
if(darAltaTuni) 
  darAltaTuni.addEventListener("click",  (e) => {
        e.preventDefault();
        var form = document.getElementById('tUniForm');
        if(form) {
          var iNombre = form.getElementById("nombre");
          var iApe1 = form.getElementById("ape1");
          var iApe2 = form.getElementById("ape2");
          var iDNI = form.getElementById("dni");
          var iEmail = form.getElementById("email");
          var iTelefono = form.getElementById("telefono");

          var formData = PersonaFormData(iNombre.value, iApe1.value, iApe2.value,
            iDNI.value, iEmail.value, iTelefono.value)
          const errors = validatePersonaFormData(formData);
          
          if(!errors){
            if(form) form.submit();
          }else{
            //   Display errors in fields
          }
        }
    });

var darAltaEmp = document.getElementById("darAltaEmp");
if(darAltaEmp) 
darAltaEmp.addEventListener("click",  (e) => {
        e.preventDefault();
        var form = document.getElementById('empForm');
        if(form) {
          var iNombre = form.getElementById("nombre");
          var iCif = form.getElementById("cif");
          var iDireccion = form.getElementById("direccion");

          var formData = PersonaFormData(iNombre.value, iCif.value, iDireccion.value)
          const isValid = validatePersonaFormData(formData);
          
          if(isValid){
            if(form) form.submit();
          }else{
            //   Display errors in fields
          }
        }
    });