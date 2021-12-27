document.querySelector('#image').addEventListener('change', function () {
    var img = document.createElement('img');
    var link = document.createElement('a');
    link.setAttribute('style', 'display: none;');
    img.width = 100;
    img.height = 100;
    img.src = URL.createObjectURL(this.files[0]);
    document.querySelector('#img').appendChild(img);
});