const elementCep = document.getElementById("cep");
const elementCity = document.getElementById("city");
const elementState = document.getElementById("uf");

async function handleAddress() {
        const response = await fetch(`https://viacep.com.br/ws/${elementCep.value}/json/`)
        const data = await response.json();

        elementCity.value = data.localidade
        elementState.value = data.uf
}

elementCep.addEventListener('change', handleAddress)