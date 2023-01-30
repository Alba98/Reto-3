class navItem extends HTMLElement {

    constructor () {
        super();
        // Nuevo arbol DOM
        // this.attachShadow({mode: 'open'});
        // Crea el elemento
        this.name = this.getAttribute("name");
        this.icon = this.getAttribute("icon");
        this.route = this.getAttribute("link");
      
        this.innerHTML = `
                            @if (Route::has('`+this.name+`'))
                                <li class="nav-item">
                                    <a href="`+this.route+`" class="nav-link px-sm-0 px-2 text-white nav_link" aria-current="page">
                                        <i class="fs-4 bi-`+this.icon+` nav_icon"></i>
                                        <span class="ms-1 d-none d-sm-inline nav_name">`+this.name+`</span>
                                    </a>
                                </li>
                            @endif
                        `    
                        
                        
        // this.innerHTML = `<ul>
        //                     @if (Route::has('`+this.name+`'))
        //                         <li class="nav-item">
        //                             <a href="{{ route('`+this.name+`') }}" class="nav-link px-sm-0 px-2 text-white nav_link active" aria-current="page">
        //                                 <i class="fs-4 bi-`+this.icon+` nav_icon"></i>
        //                                 <span class="ms-1 d-none d-sm-inline nav_name">`+this.name+`</span>
        //                             </a>
        //                         </li>
        //                     @endif
        //                  </ul>
        //                 `      
    }

    connectedCallback () {
        // Metodo que se ejecuta cuando el elemento es a˜nadido a un documento
          
    }

    disconnectedCallback () {
        // Metodo que se ejecuta cuando el elemento es borrado en un documento

        let copia = document.importNode(this.p.content ,true)
        // Se añade a este arbol DOM
        this.shadowRoot.appendChild(copia);
    }

    static get observedAttributes () {
        // return [/* array con el nombre de los atributos . */];

        //  Se le dice al navegador que cuando cambie uno de estos atributos
        // nos avise para que se ejecute el m´etodo attributeChangeCallback

        return ['name', 'icon'];
    }

    attributeChangedCallback (name , oldValue , newValue) {
        // Se ejecuta cuando se modifican los atributos que observamos con el
        // metodo anterior. Los par´ametros son nombre del atributo, valor
        // viejo y nuevo valor.
    }

    adoptedCallback () {
        // Se ejecuta cuando un elemento es movido a un nuevo documento
    }

// Los metodos que nosotros decidamos .
}


// Nombre de la etiqueta y nombre de la clase
window.customElements.define("nav-item", navItem );