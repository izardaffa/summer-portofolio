function generateResponse() {
  let message = document.getElementById('message');
  let response = document.getElementById('response');

  fetch('response.php', {
    method: 'post',
    body: JSON.stringify({
      text: message.value,
    }),
  })
    .then((res) => res.text())
    .then((res) => {
      response.innerHTML = res;
    });
}