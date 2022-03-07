function kosong1() {
    let frm = document.getElementById("formulir");
    frm.a1.value = "";
}

function kosong2() {
    let frm = document.getElementById("formulir");
    frm.a2.value = "";
}

function plus() {
    let frm = document.getElementById("formulir");
    let numb1 = parseFloat(frm.a1.value);
    let numb2 = parseFloat(frm.a2.value);

    if (isNaN(numb1) || numb1 == '') {
        alert ("Angka 1 Tidak Valid");
    } else if (isNaN(numb2) || numb2 == '') {
        alert ("Angka 2 Tidak Valid");
    } else {
        total = numb1 + numb2;
        frm.hasil.value = total;
    }
}

function minus() {
    let frm = document.getElementById("formulir");
    let numb1 = parseFloat(frm.a1.value);
    let numb2 = parseFloat(frm.a2.value);

    if (isNaN(numb1) || numb1 == '') {
        alert ("Angka 1 Tidak Valid");
    } else if (isNaN(numb2) || numb2 == '') {
        alert ("Angka 2 Tidak Valid");
    } else {
        total = numb1 - numb2;
        frm.hasil.value = total;
    }
}

function multiplied() {
    let frm = document.getElementById("formulir");
    let numb1 = parseFloat(frm.a1.value);
    let numb2 = parseFloat(frm.a2.value);

    if (isNaN(numb1) || numb1 == '') {
        alert ("Angka 1 Tidak Valid");
    } else if (isNaN(numb2) || numb2 == '') {
        alert ("Angka 2 Tidak Valid");
    } else {
        total = numb1 * numb2;
        frm.hasil.value = total;
    }
}

function distributed() {
    let frm = document.getElementById("formulir");
    let numb1 = parseFloat(frm.a1.value);
    let numb2 = parseFloat(frm.a2.value);

    if (isNaN(numb1) || numb1 == '') {
        alert ("Angka 1 Tidak Valid");
    } else if (isNaN(numb2) || numb2 == '') {
        alert ("Angka 2 Tidak Valid");
    } else {
        total = numb1 / numb2;
        frm.hasil.value = total;
    }
}

function pangkat() {
    let frm = document.getElementById("formulir");
    let numb1 = parseFloat(frm.a1.value);
    let numb2 = parseFloat(frm.a2.value);

    if (isNaN(numb1) || numb1 == '') {
        alert ("Angka 1 Tidak Valid");
    } else if (isNaN(numb2) || numb2 == '') {
        alert ("Angka 2 Tidak Valid");
    } else {
        total = numb1 ** numb2;
        frm.hasil.value = total;
    }
}

function cancel() {
    let frm = document.getElementById("formulir");
    frm.a1.value = "Masukkan Angka 1";
    frm.a2.value = "Masukkan Angka 2";
    frm.hasil.value = "0";
}