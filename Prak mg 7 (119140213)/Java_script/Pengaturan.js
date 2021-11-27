$(document).ready(function(){
	var dataHasil = 0;
	bacaData();

	$('.btn-tambah').click(function(){
		tambah();
	});
	
	$('.btn-batal').click(function(){
		bacaData();
		reset();
	});

	$('.btn-ubah').click(function(){
		ubahData(dataHasil);
	});

	function bacaData(){
		$('.targetData').html('');

		$('.btn-tambah').show();
		$('.btn-ubah').hide();
		$('.btn-batal').hide();
		$.ajax({
			type : 'GET',
			url : 'php/ambil data.php',
			dataType : 'JSON',
			success : function(response){
				var i;
				var data = '';
				for( i=0; i<response.length; i++ ){
					data +=
					`
					<tr>
					<td style="text-align: center;">`+(i+1)+`</td>
					<td>`+response[i].nama+`</td>
					<td style="text-align: center;">`+response[i].nim+`</td>
					<td style="text-align: center;">`+response[i].prodi+`</td>
					<td style="text-align: center;">`+response[i].angkatan+`</td>
					<td style="text-align: center;">
						<button class='btn-edit' id='`+response[i].nim+`'>Edit</button>
						<button class='btn-delete' id='`+response[i].nim+`'>Hapus</button>
					</td>
					</tr>

					`
				}
				$('.targetData').append(data);

				$('.btn-edit').click(function(){
					getSingleData($(this).attr('id'));
				})

				$('.btn-delete').click(function(){
					deleteData($(this).attr('id'));
				})
			}
		})
	}


	function tambah(){
		var nim = $('.number_nim').val();
		var nama = $('.nama').val();
		var prodi = $('.prodi').val();
		var angkatan = $('.number_angkatan').val();
		$.ajax({
			type : 'POST',
			url : 'php/tambah.php',
			data : 'nim='+nim+'&nama='+nama+'&prodi='+prodi+'&angkatan='+angkatan,
			dataType : 'JSON',
			success : function(response){
				if(response.status == '1'){
					bacaData();
					reset();
				}else{
					alert(response.msg);
					bacaData();
					reset();
				}

			}
		})
	}

	function getSingleData(x){
		$.ajax({
			type : 'POST',
			url : 'php/ambil satu data.php',
			data : 'id='+x,
			dataType : 'JSON',
			success : function(response){
				dataHasil = response.nim;
				$('.number_nim').val(response.nim);
				$('.nama').val(response.nama);
				$('.prodi').val(response.prodi);
				$('.number_angkatan').val(response.angkatan);

				$('.btn-tambah').hide();
				$('.btn-ubah').show();
				$('.btn-batal').show();
	
			}
		})
	}

	function ubahData(x){
		var id = x;
		var nim = $('.number_nim').val();
		var nama = $('.nama').val();
		var prodi = $('.prodi').val();
		var angkatan = $('.number_angkatan').val();
		$.ajax({
			type : 'POST',
			url : 'php/edit.php',
			data : 'id='+id+'&nim='+nim+'&nama='+nama+'&prodi='+prodi+'&angkatan='+angkatan,
			success : function(response){
				bacaData();
				reset();
			}
		})
	}

	function deleteData(x){
		$.ajax({
			type : 'POST',
			url : 'php/hapus.php',
			data : 'nim='+x,
			dataType : 'JSON',
			success : function(response){
				if(response.status == '1'){
					bacaData();
					reset();
				}else{
					alert(response.msg);
					bacaData();
					reset();
				}
			}
		})
	}

	function reset(){
		$('.number_nim').val('');
		$('.nama').val('');
		$('.prodi').val('');
		$('.number_angkatan').val('');
	}


});