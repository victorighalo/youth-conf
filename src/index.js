
import html2canvas from 'html2canvas';
var node = document.getElementById('frame_container');
var url = './../process.php';
var image_avatar = document.getElementById('avatar');
var download_container = document.getElementById('download_container');
var blocker = document.getElementById('blocker');

image_avatar.addEventListener('input', function(e){
    blocker.classList.remove('hide');  
var myImage = new Image();
myImage.src = e.target.files[0];
var formData = new FormData();
formData.append('files', e.target.files[0]);
fetch(url, {
    method: 'POST',
    body: formData
})
.then(function(response) {
    return response.json();
  })
  .then(function(myJson) {
    blocker.classList.add('hide');
    myImage.src = "uploads/"+myJson.filename;
    document.getElementById('avatar_container').innerHTML = ""
    document.getElementById('avatar_container').appendChild(myImage);
html2canvas(node, {
    // allowTaint: true,
    // foreignObjectRendering: true
}).then(canvas => {
    var link = document.createElement("a");
    document.body.appendChild(link);
    link.download = "nobs_poster.jpg";
    link.href = canvas.toDataURL();
    link.target = '_blank';
    link.innerText = 'Download'
    download_container.style.display = "block";
    download_container.innerHTML = "";
    download_container.append(link)
    // link.click();
});
});


})

