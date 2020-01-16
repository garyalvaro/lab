function berhasil(){
        $.toast({
            heading: 'Welcomeeee',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'success',
            hideAfter: 3000,
            stack: 6
        });
}

$(document).ready(function () {
"use strict";
    $(".tst1").on("click", function () {
        $.toast({
            heading: 'Welcome to my Elite admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3000,
            stack: 6
        });
    });
    
    $(".tst2").on("click", function () {
        $.toast({
            heading: 'Welcome to my Elite admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'warning',
            hideAfter: 3500,
            stack: 6
        });

    });
    
    $(".tst3").on("click", function () {
        $.toast({
            heading: 'Welcome to my Elite admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'success',
            hideAfter: 3500,
            stack: 6
        });
    });
    
    $(".login-success").show(function(){
        $.toast({
            heading: 'Login Berhasil',
            text: 'Anda sudah berhasil masuk.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'success',
            hideAfter: 3500,
            stack: 6
        });
    });
    
    $(".add-success").show(function(){
        $.toast({
            heading: 'Kelas Berhasil Ditambahkan.',
            text: 'Anda berhasil menambahkan kelas.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'success',
            hideAfter: 3500,
            stack: 6
        });
    });

    $(".add-successs").show(function(){
        $.toast({
            heading: 'Mahasiswa Berhasil Ditambahkan ke dalam Kelas.',
            text: 'Anda berhasil menambahkan mahasiswa.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'success',
            hideAfter: 3500,
            stack: 6
        });
    });
    
    $(".add-failed").show(function(){
        $.toast({
            heading: 'Kelas Gagal Ditambahkan.',
            text: 'Kelas nampaknya sudah ada.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'error',
            hideAfter: 5000,
            stack: 6
        });
    });
    
    $(".add-failed2").show(function(){
        $.toast({
            heading: 'Kelas Gagal Ditambahkan.',
            text: 'Kelas nampaknya sudah ada atau kode kelas Anda salah.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'error',
            hideAfter: 5000,
            stack: 6
        });
    });
    
    $(".add_jadwal_success").show(function(){
        $.toast({
            heading: 'Jadwal Berhasil Ditambahkan.',
            text: 'Anda berhasil memasukkan kelas di jadwal.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'success',
            hideAfter: 3500,
            stack: 6
        });
    });
    
    $(".add_jadwal_failed").show(function(){
        $.toast({
            heading: 'Jadwal Gagal Ditambahkan.',
            text: 'Coba ulangi lagi.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'error',
            hideAfter: 5000,
            stack: 6
        });
    });
    
    $(".delete_success").show(function(){
        $.toast({
            heading: 'Data Berhasil Dihapus.',
            text: 'Anda berhasil menghapus user.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'success',
            hideAfter: 3500,
            stack: 6
        });
    });
    
    $(".edit_success").show(function(){
        $.toast({
            heading: 'Update Berhasil.',
            text: 'Satu data user berhasil di-update.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'success',
            hideAfter: 3500,
            stack: 6
        });
    });
    
    $(".rekrut_success").show(function(){
        $.toast({
            heading: 'Pendaftaran Berhasil!',
            text: 'Terima kasih calon aslab, semoga diterima.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'success',
            hideAfter: 3500,
            stack: 6
        });
    });
    
    $(".ganti_level0").show(function(){
        $.toast({
            heading: 'PERUBAHAN LEVEL',
            text: 'Anda login sebagai <b><i>Mahasiswa</i></b> sekarang.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 4500,
            stack: 6
        });
    });
    
    $(".ganti_level1").show(function(){
        $.toast({
            heading: 'PERUBAHAN LEVEL',
            text: 'Anda login sebagai <b><i>Aslab</i></b> sekarang.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 4500,
            stack: 6
        });
    });
    
    $(".ganti_level2").show(function(){
        $.toast({
            heading: 'PERUBAHAN LEVEL',
            text: 'Anda login sebagai <b><i>BPH</i></b> sekarang.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 4500,
            stack: 6
        });
    });

    $(".tst4").on("click", function () {
        $.toast({
            heading: 'Welcome to my Elite admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'error',
            hideAfter: 3500

        });

    });


});
