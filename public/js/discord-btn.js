let click = false;

document.querySelector('#discord-btn').addEventListener('click', () => {
    if (click) {
        return;
    }
    click = true;
    document.querySelector('#to-unhide').style.display = 'block';
});

document.querySelector('#submit-btn').addEventListener('click', (event) => {
    if(!click) {
        event.preventDefault();
    }
});
