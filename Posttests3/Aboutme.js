var html = $("html")
$(function darkmode() {
    const element = document.getElementById("myDIV");
    const coba1 = document.querySelectorAll("a[target]");
    const color_toggel = document.getElementById("toggelid")
    const sirce = document.getElementById("circelid");
    
    $(".toggle").click(function() {
        if (html.hasClass("dark-mode")) {
            element.className = "semua";
            html.removeClass("dark-mode");
            color_toggel.style.backgroundColor = 'black';
            sirce.style.background = "white";
            for (let i = 0; i < coba1.length; i++) {
                coba1[i].style.color = "rgb(15, 23, 39)";
              }
            
            
            
        }
        else {
            html.addClass("dark-mode");
            element.className = "semua1";
            for (let i = 0; i < coba1.length; i++) {
                coba1[i].style.color = "white";
              }
            color_toggel.style.backgroundColor = 'white'
            sirce.style.background = "black";
        }
    })
})
        
// // Fungsi jika local storage memiliki key "dark-mode" dengan value "true" :
// if (localStorage.getItem("dark-mode") == "true") {
// 	$(" html").addClass("dark-mode");
// };

// alert('Selamat datang');
//     var lagi = true;

//     while (lagi === true){
//         var nama = prompt('Input Nama');
//         alert('Haii ' + nama);

//         lagi = confirm('Coba lagi?')
//     }