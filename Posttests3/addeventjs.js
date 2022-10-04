const button = document.getElementById('lihat_selengkapnya');
button.addEventListener("click", function showInfo(){
    const lihat = document.getElementById('selengkapnya1');
    if(lihat.style.display == 'none'){
        lihat.style.display = 'block';
    }else{
        lihat.style.display = 'none';
    }
});
const button1 = document.getElementById('lihat_selengkapnya2');
button1.addEventListener("click", function showInfo(){
    const lihat = document.getElementById('selengkapnya2');
    if(lihat.style.display == 'none'){
        lihat.style.display = 'block';
    }else{
        lihat.style.display = 'none';
    }
});

const button2 = document.getElementById('lihat_selengkapnya3');
button2.addEventListener("click", function showInfo(){
    const lihat = document.getElementById('selengkapnya3');
    if(lihat.style.display == 'none'){
        lihat.style.display = 'block';
    }else{
        lihat.style.display = 'none';
    }
});