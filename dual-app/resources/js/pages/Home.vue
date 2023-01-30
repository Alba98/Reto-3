<template>
   <div><button @click = "ruta">Boton que lleva al home.blade</button></div>
</template>
<script>
    export default {
      methods: {
            ruta(){
                window.location.href = "home";
                
            }
        },
    }

</script>
