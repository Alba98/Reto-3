/**
 * Se define un objeto formData con los campos que necesita el formulario, 
 * un objeto validationRules con las expresiones regulares para validar cada campo, y una 
 * función validateForm que recorre el objeto formData y valida cada campo con su regla correspondiente en validationRules. 
 * Finalmente, se define la función submitForm que se ejecutará cuando se haga submit en el 
 * formulario, que valida los datos antes de enviarlos y muestra un error si algún campo no es válido.
 */




interface FormData {
    nombre: string;
    cif: string;
    direccion: string;
  }
  
  const formData: FormData = new FormData();

  
  const validationRules = {
    nombre: /^[a-zA-Z\s]{2,100}$/,
    cif: /^[A-Za-z]{1}[0-9]{7}[A-Za-z]{1}$/,
    direccion: /^[a-zA-Z0-9\s,.'-]{2,200}$/
  };
  
  function validateForm(formData: FormData, validationRules: any) {
    let isValid = true;
    
    for (const field in formData) {
      if (formData.hasOwnProperty(field)) {
        if (!validationRules[field].test(formData.get(field))){
          isValid = false;
          break;
        }
      }
    }
    return isValid;
  }