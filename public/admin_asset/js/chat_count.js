function updateMessageCount(count) {
    const messageCountEl = document.querySelector('#message-count');
    messageCountEl.textContent = count;
    messageCountEl.style.display = count > 0 ? 'inline-block' : 'none';
    }

    setInterval(() => {
    fetch('/profile/new-messages')
        .then(response => response.json())
        .then(data => updateMessageCount(data.count))
        .catch(error => console.error(error));
    }, 5000);