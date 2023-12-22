const keyword = document.getElementById('keyword');
const container = document.getElementById('container');

keyword.addEventListener('keyup', function () {
    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange =function () {
        if(xhr.status == 200 && xhr.readyState == 4) {
            container.innerHTML = xhr.responseText;
        }
    };

    xhr.open('GET', `ajax/mahasiswa.php?keyword=${keyword.value}`, true);

    xhr.send();
});