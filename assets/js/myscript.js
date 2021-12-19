$('input[name="photo"]').change(function(e) {
    // console.log(e.target.files[0]);
    let image = URL.createObjectURL(e.target.files[0]);
    $('#load').attr('src', image);
});
// Menu 

