<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('js\ckeditor.js') }}"></script>
</head>
<body>
     <textarea name="editor1" id="editor1" rows="10" cols="80">
           
     </textarea>
     <script>
    ClassicEditor
    .create( document.querySelector( '#editor1' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
</script>
</body>
</html>