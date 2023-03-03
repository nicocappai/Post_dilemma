// setTimeout:
let loading = document.querySelector('#loading');
let pageContent = document.querySelector('#pageContent');

setTimeout(() => {
    loading.classList.add('d-none');
    pageContent.classList.remove('d-none');
}, 1000);