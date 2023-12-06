/*
Template Name: e-VIVAS - Aproximando e Projetando Sonhos
Author: Themesbrand
Website: https://Themesbrand.com/
Contact: Themesbrand@gmail.com
File: Email summernote Js File
*/

ClassicEditor
    .create( document.querySelector( '#email-editor' ) )
    .then( function(editor) {
        editor.ui.view.editable.element.style.height = '200px';
    })
    .catch( function(error) {
        console.error( error );
    });