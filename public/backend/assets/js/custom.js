/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

// Modal Peserta
for (let i = 1; i <= 5; i++) {
  $("#pop" + i).on("click", function() {
     $('#imagePreview').attr('src', $('#foto' + i).attr('src')); // here asign the image to the modal when the user click the enlarge link
     $('#modalImg').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
  });
}

// Modal Peserta Cadangan
$("#pop").on("click", function() {
   $('#imagePreview').attr('src', $('#foto').attr('src')); // here asign the image to the modal when the user click the enlarge link
   $('#modalImg').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
});

// Modal Bukti Pembayaran
$("#popBukti").on("click", function() {
   $('#imagePreview').attr('src', $('#bukti').attr('src')); // here asign the image to the modal when the user click the enlarge link
   $('#modalImg').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
});

// Modal Foto Maba
for (let i = 1; i <= 2; i++) {
  $("#imgMaba" + i).on("click", function() {
     $('#imagePreview').attr('src', $('#foto' + i).attr('src')); // here asign the image to the modal when the user click the enlarge link
     $('#modalImg').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
  });
}

// Reset Summernote
// $('#summernote-simple').summernote('code', '');