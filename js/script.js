let nama = "Aldi";
let umur = 17; 
let lulus = true; 
let kelas = "XI-PPLG-1";
let hobi = ["coding", "gaming", "olahraga"]; // Array
let biodata = { nama: "Tony", usia: 60, kota: "Jakarta" }; // Object


document.getElementById("nama").innerText = "Nama: " + nama;
document.getElementById("umur").innerText = "Umur: " + umur;
document.getElementById("lulus").innerText = "Lulus: " + (lulus ? "Ya" : "Tidak");
document.getElementById("kelas").innerText = "Kelas: " + kelas;



// Perulangan for
for (let i = 1; i <= 5; i++) {
    console.log("Perulangan ke-" + i);
}

// Perulangan while
let j = 1;
while (j <= 5) {
    console.log("While ke-" + j);
    j++;
}

let T = 1;
do {
    console.log("Do-while ke-" + T);
    T++;
} while (T <= 5);


console.log("Angka genap dengan do-while:");
let angka2 = 0;
do {
    console.log(angka2);
    angka2 += 2;
} while (angka2 <= 10);

