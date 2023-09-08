<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<div class="element"></div>
<script type="module">
    import { Editor } from 'https://esm.sh/@tiptap/core'
    import StarterKit from 'https://esm.sh/@tiptap/starter-kit'
    const editor = new Editor({
        element: document.querySelector('#mytextarea'),
        extensions: [
            StarterKit,
        ],
        content: '<p>xx</p>',
    })
</script>
<textarea id="mytextarea">Hello, World!</textarea>
</body>
</html>
<?php /**PATH C:\xampp81\htdocs\2023\enrique\resources\views/alpine.blade.php ENDPATH**/ ?>