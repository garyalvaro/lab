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
            text: 'Anda berhasil menambahkan 1 kelas.',
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
