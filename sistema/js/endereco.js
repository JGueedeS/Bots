const addressForm = document.querySelector("#address-form");
const cepInput = document.querySelector("#cep");
const addressInput = document.querySelector("#address");
const cityInput = document.querySelector("#city");
const neighborhoodInput = document.querySelector("#neighborhood");
const regionInput = document.querySelector("#region");
const formInputs = document.querySelectorAll("[data-input]");
const message = document.querySelectorAll("#message");
const closeButton = document.querySelector("#close-message");

// Validate CEP Input
cepInput.addEventListener("keypress", (e) => {
  const onlyNumbers = /[0-9]|\./;
  const key = String.fromCharCode(e.keyCode);

  console.log(key);

  console.log(onlyNumbers.test(key));

  // allow only numbers
  if (!onlyNumbers.test(key)) {
    e.preventDefault();
    return;
  }
});

// Event to get address
cepInput.addEventListener("keyup", (e) => {
  const inputValue = e.target.value;

  // Check if we have a valid CEP
  if (inputValue.length === 8) {
    getAddress(inputValue);
  } else {
    resetForm();
  }
});

// Get address from API
const getAddress = async (cep) => {
  toggleLoader();

  cepInput.blur();

  const apiUrl = `https://viacep.com.br/ws/${cep}/json/`;

  try {
    const response = await fetch(apiUrl);
    const data = await response.json();

    console.log(data);

    // Show error and reset form if CEP is invalid
    if (data.erro) {
      toggleDisabled();
      resetForm();
      toggleLoader();
      toggleMessage("CEP inválido, tente novamente.");
      return;
    }

    // Activate disabled attribute if form is empty
    if (addressInput.value === "") {
      toggleDisabled();
    }

    addressInput.value = data.logradouro;
    cityInput.value = data.localidade;
    neighborhoodInput.value = data.bairro;
    regionInput.value = data.uf;

    toggleLoader();
  } catch (error) {
    console.log(error);
    resetForm();
    toggleLoader();
    toggleMessage("Erro ao buscar o endereço, tente novamente mais tarde.");
  }
};

// Reset form inputs
const resetForm = () => {
  formInputs.forEach((input) => {
    input.value = "";
  });
};

// Add or remove disabled attribute
const toggleDisabled = () => {
  if (regionInput.hasAttribute("disabled")) {
    formInputs.forEach((input) => {
      input.removeAttribute("disabled");
    });
  } else {
    formInputs.forEach((input) => {
      input.setAttribute("disabled", "disabled");
    });
  }
};

// Show or hide loader
const toggleLoader = () => {
  const fadeElement = document.querySelector("#fade");
  const loaderElement = document.querySelector("#loader");

  fadeElement.classList.toggle("hide");
  loaderElement.classList.toggle("hide");
};

// Show or hide message
const toggleMessage = (msg) => {
  const fadeElement = document.querySelector("#fade");
  const messageElement = document.querySelector("#message");

  const messageTextElement = document.querySelector("#message p");

  messageTextElement.innerText = msg;

  fadeElement.classList.toggle("hide");
  messageElement.classList.toggle("hide");
};

// Close message modal
closeButton.addEventListener("click", () => toggleMessage());

// Save address
addressForm.addEventListener("submit", (e) => {
  e.preventDefault();

  toggleLoader();

  setTimeout(() => {
    toggleLoader();

    toggleMessage("Endereço salvo com sucesso!");

    resetForm();

    toggleDisabled();
  }, 1000);
});
