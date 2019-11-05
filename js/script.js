// console.log('ok');

//Kita ambil elemen2 yang dibutuhkan

var keyword 		= document.getElementById('keyword');
var tombolCari 		= document.getElementById('tombol-cari');

var container 		= document.getElementById('container');

// tombolCari.addEventListener('click', function(){
// 	alert('berhasil');
// });


//Tambahkan event ketika keyword ditulis

keyword.addEventListener('keyup', function(){
	//ambil apapun value nya pakai :
	// console.log(keyword.value);

	//KITA BUAT OBJEK AJAX
	var xhr 	= new XMLHttpRequest();

	// cek kesiapan ajax
	xhr.onreadystatechange = function(){
		//4 berarti ready
		if ( xhr.readyState == 4 && xhr.status == 200) {
			// console.log(xhr.responseText);  
			// container.innerHTML = xhr.responseText;
			container.innerHTML = xhr.responseText;
		}
	}

	//eksekusi ajax
	// (method nya mau apa ? GET , sumbernya , mau sinkronus atau asinkronus )
	xhr.open('GET', 'ajax/pembayaran_data.php?keyword=' + keyword.value, true);
	xhr.send();
});
