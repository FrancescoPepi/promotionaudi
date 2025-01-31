class MainBody extends HTMLElement {
    connectedCallback() {
        fetch('component/mainBody.html')
            .then(response => response.text())
            .then(data => {
                this.innerHTML = data;
            })
            .catch(error => console.error('Errore nel caricamento:', error));
    }
}

// Definisci il nuovo tag HTML <main-body>
customElements.define('main-body', MainBody);
