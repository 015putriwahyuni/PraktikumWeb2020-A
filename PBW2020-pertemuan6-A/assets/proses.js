let input1DOM = document.getElementById("input1") /* untuk mengambil id yang ada pada id file html (input1) dan disimpan dalam variabel  input1DOM*/
let input2DOM = document.getElementById("input2") /* untuk mengambil id yang ada pada id file html (input2) dan disimpan dalam variabel input2DOM*/

function kali(){ /* membuat fungsi untuk proses perkalian*/
    let hasilnya= input1DOM.value * input2DOM.value /*melakukan perhitungan perkalian dengan mengalikan nilai yang telah diinput dan disimpan di variabel hasinya*/
    document.getElementById('hasil').value = hasilnya /*mengambil nilai yang telah dihitung*/
}

function tambah(){  /* membuat fungsi untuk proses tambah*/
    let hasilnya= parseInt(input1DOM.value) + parseInt(input2DOM.value) /*melakukan perhitungan penambahan dengan mengalikan nilai yang telah diinput dan disimpan di variabel hasinya*/
    document.getElementById('hasil').value = hasilnya /*mengambil nilai yang telah dihitung*/
}

function kurang(){  /* membuat fungsi untuk proses pengurangan*/
    let hasilnya= parseInt(input1DOM.value) - parseInt(input2DOM.value) /*melakukan perhitungan pengurangan dengan mengalikan nilai yang telah diinput dan disimpan di variabel hasinya*/
    document.getElementById('hasil').value = hasilnya /*mengambil nilai yang telah dihitung*/
}

function bagi(){  /* membuat fungsi untuk proses pembagian*/
    let hasilnya= parseInt(input1DOM.value) / parseInt(input2DOM.value) /*melakukan perhitungan pembagian dengan mengalikan nilai yang telah diinput dan disimpan di variabel hasinya*/
    document.getElementById('hasil').value = hasilnya /*mengambil nilai yang telah dihitung*/
}

function myFunction(){  /* membuat fungsi untuk proses reset*/
    document.getElementById("myForm").reset(); 
}

