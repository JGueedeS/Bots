function updateExchangeRates() {
  fetch('https://api.exchangerate-api.com/v4/latest/USD')
    .then(response => response.json())
    .then(data => {
      const rates = data.rates;

      const currenciesToShow = ['GBP', 'USD', 'JPY', 'EUR'];

      currenciesToShow.forEach(currency => {
        const rate = rates[currency];
        const rateBRL = rates['BRL'] / rate;

        const currencyElement = document.querySelector(`[data-id="${currency}"]`);
        currencyElement.textContent = rateBRL.toFixed(2);
      });
    })
    .catch(error => {
      console.log('Erro ao obter os dados de cotação:', error);
    });
}

// Chamar a função para atualizar as taxas de câmbio ao carregar a página
updateExchangeRates();
