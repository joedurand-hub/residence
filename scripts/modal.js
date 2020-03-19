function ampliarImagen(img, modalId, modalImageId, captionId) {
  let modal = document.getElementById(modalId);
  let modalImg = document.getElementById(modalImageId);
  let caption = document.getElementById(captionId);
  let cerrar = document.getElementsByClassName("close")[0];

  console.log(this);

  modal.style.display = "block";
  modalImg.src = img.src
  caption.innerHTML = this.alt

  cerrar.onclick = function() {
    console.log("Debería cerrar...");
    modal.style.display = "none";
  }
}
