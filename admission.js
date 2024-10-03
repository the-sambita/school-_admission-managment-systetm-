const chooseFile = document.getElementById("choose-file");
const imgPreview = document.getElementById("img-preview");

chooseFile.addEventListener("change", function () {
  getImgData();
});

function getImgData() {
  const files = chooseFile.files[0];
  if (files) {
    const fileReader = new FileReader();
    fileReader.readAsDataURL(files);
    fileReader.addEventListener("load", function () {
      imgPreview.style.display = "block";
      imgPreview.innerHTML = '<img src="' + this.result + '" />';
    });
  }
}
const chooseSign = document.getElementById("choose-sign");
const signPreview = document.getElementById("sign-preview");

chooseSign.addEventListener("change", function () {
  getSignData();
});

function getSignData() {
  const files = chooseSign.files[0];
  if (files) {
    const fileReader = new FileReader();
    fileReader.readAsDataURL(files);
    fileReader.addEventListener("load", function () {
      signPreview.style.display = "block";
      signPreview.innerHTML = '<img src="' + this.result + '" />';
    });
  }
}