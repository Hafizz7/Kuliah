function turun(obj) {
    obj.innerHTML = "Membaca buku untuk pertama kalinya seperti berkenalan dengan seorang teman baru; membacanya untuk kedua kali seperti bertemu dengan teman lama";
  }
  
  function naik(obj) {
    obj.innerHTML="Padahal, buku bukan hanya memberikan ilmu baru bagi para pembacanya. Namun, buku juga dapat menurunkan stres, kecemasan, dan depresi hingga meningkatkan kepercayaan diri dari pembacanya sendiri.";
  }
var html = $("html")
$(function darkmode() {
    const element = document.getElementById("myDIV");
    const jaring = document.getElementById("seller");
    const topseller2 = document.getElementById('seller2');
    const coba1 = document.querySelectorAll("a[target]");
    const lagi = document.querySelectorAll('div.flex-buku-populer');
    const color_toggel1 = document.getElementById("toggelid");
    const sirce1 = document.getElementById("circelid");
    const cobalagi = document.getElementById('color_txt');
    $(".toggle").click(function() {
        if (html.hasClass("dark-mode")) {
            html.removeClass("dark-mode");
            element.className = "semua";
            jaring.style.backgroundColor = '#5a53c5';
            topseller2.style.backgroundColor = '#5a53c5';
            color_toggel1.style.backgroundColor = 'black';
            sirce1.style.background = "white";
            // coba1.style.color = 'rgb(15, 23, 39)';
            for (let i = 0; i < coba1.length; i++) {
                coba1[i].style.color = "rgb(15, 23, 39)";
              }
            cobalagi.style.color = 'black';
        }
        else {
            html.addClass("dark-mode");
            element.className = "semua1";
            jaring.style.backgroundColor = '#242424';
            topseller2.style.backgroundColor = '#242424';
            color_toggel1.style.backgroundColor = 'white'
            cobalagi.style.color = 'white   ';
            sirce1.style.background = "black";
            for (let i = 0; i < coba1.length; i++) {
                coba1[i].style.color = "white";
              }
            document.querySelector("a.ul.navbar").style.color = "blue";
            lagi.style.backgroundColor = 'red';
            
        }
    })
    cobalagi.addEventListener("mouseleave", function showInfo(){
        cobalagi.style.color = 'black';
    })
    cobalagi.addEventListener("mouseenter", function showInfo(){
        cobalagi.style.color = 'white';
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