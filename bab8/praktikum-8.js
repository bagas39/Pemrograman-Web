function tampilkanUcapan() {
    let elemenUcapan = document.getElementById('teksUcapan');
    let waktuSekarang = new Date();
    let jam = waktuSekarang.getHours(); 

    if (jam >= 0 && jam < 11) {
        elemenUcapan.innerHTML = "SELAMAT PAGI";
    } 
    else if (jam >= 11 && jam < 14) {
        elemenUcapan.innerHTML = "SELAMAT SIANG";
    } 
    else if (jam >= 14 && jam < 18) {
        elemenUcapan.innerHTML = "SELAMAT SORE";
    } 
    else if (jam >= 18 && jam <= 23) {
        elemenUcapan.innerHTML = "SELAMAT PETANG";
    }
}

tampilkanUcapan();