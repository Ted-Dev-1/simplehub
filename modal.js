// Get modal element and image elements
const modal = document.getElementById("imageModal");
const profilePic = document.getElementById("profilePic");
const modalImg = document.getElementById("modalImage");
const captionText = document.getElementById("caption");
const closeBtn = document.querySelector(".close");

// When the profile picture is clicked, open the modal and display the image
profilePic.addEventListener("click", function () {
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerText = this.alt;
});

// When the close button is clicked, hide the modal
closeBtn.addEventListener("click", function () {
  modal.style.display = "none";
});
