document.getElementById('upload-text').addEventListener('click', function() {
    document.getElementById('file-input').click();
});

document.getElementById('file-input').addEventListener('change', function() {
    if (this.files && this.files[0]) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            document.querySelector('.foto').style.backgroundImage = `url(${e.target.result})`;
        }
        
        reader.readAsDataURL(this.files[0]);
    }
});
