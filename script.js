window.addEventListener('DOMContentLoaded', () => {
    fetch('get-updates.php')
        .then(response => response.json())
        .then(data => {
            const updatesDiv = document.getElementById('updates');
            data.forEach(update => {
                const p = document.createElement('p');
                p.textContent = `${update.activity} - ${update.date}`;
                updatesDiv.appendChild(p);
            });
        })
        .catch(error => console.error('Error fetching updates:', error));
});
