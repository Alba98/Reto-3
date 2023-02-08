interface PersonaFormData {
    nombre: string;
    ape1: string;
    ape2: string;
    dni: string;
    email: string;
    telefono: string;
    id_grado: number;
    curso: string;
  }
  
  function validatePersonaFormData(data: PersonaFormData) {
    const errors: { [key: string]: string } = {};
  
    const nameRegex = /^[a-zA-ZÀ-ÿ\s]{3,}$/;
    if (!nameRegex.test(data.nombre)) {
      errors.nombre = "El nombre debe tener al menos 3 caracteres y contener solo letras";
    }
  
    const apeRegex = /^[a-zA-ZÀ-ÿ\s]{3,}$/;
    if (!apeRegex.test(data.ape1)) {
      errors.ape1 = "El primer apellido debe tener al menos 3 caracteres y contener solo letras";
    }
    if (!apeRegex.test(data.ape2)) {
      errors.ape2 = "El segundo apellido debe tener al menos 3 caracteres y contener solo letras";
    }
  
    const dniRegex = /^\d{8}[A-Za-z]$/;
    if (!dniRegex.test(data.dni)) {
      errors.dni = "El DNI debe tener 8 dígitos seguidos de una letra";
    }
  
    const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    if (!emailRegex.test(data.email)) {
      errors.email = "Introduce una dirección de correo electrónico válida";
    }
  
    const phoneRegex = /^[6789]\d{8}$/;
    if (!phoneRegex.test(data.telefono)) {
      errors.telefono = "El número de teléfono debe empezar por 6, 7, 8 o 9 y tener 9 dígitos";
    }
  
    if (data.id_grado === undefined || data.id_grado === null) {
      errors.id_grado = "Selecciona un grado";
    }
  
    if (!data.curso) {
      errors.curso = "Selecciona un curso";
    }
  
    return errors;
  }  