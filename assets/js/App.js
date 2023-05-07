const elementCep = document.getElementById("cep");
const elementCity = document.getElementById("city");
const elementState = document.getElementById("uf");
const btnSearchCEP = document.getElementById("btnSearchCEP");

async function handleAddress() {
        const response = await fetch(`https://viacep.com.br/ws/${elementCep.value}/json/`)
        const data = await response.json();

        elementCity.value = data.localidade
        elementState.value = data.uf
}

btnSearchCEP.addEventListener('click', handleAddress)