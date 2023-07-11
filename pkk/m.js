const mymodal = new bootstrap.modal('#pesan')
document.querySelector('.btn-close').addEventListener('click',() => {
  mymodal.hide();
});