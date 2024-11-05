<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post | Create</title>
    <x-head></x-head>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>
    <style>
    .ql-editor {
        height: 600px;
    }
    
    </style>
</head>
<body>
    <x-header></x-header>
    <div class="w-full flex justify-center py-4">
        <div class="w-[60%]">
            <form action="../new" method="post" id="form-blog" class="flex flex-col gap-2 w-full">
                @csrf
                <div class="w-full">
                    <input type="text" name="title" id="title" class="outline-none border border-gray-300 p-2 text-2xl font-bold w-full placeholder:italic" placeholder="Write your title here...">
                </div>
                <div class="w-full">
                    <input type="hidden" id="content" name="content" value="{{ $post->content }}">
                    <div id="editor"></div>
                </div>
                <div class="w-full flex justify-center">
                    <button type="submit" id="save" class="p-2 bg-gray-600 text-white rounded hover:opacity-75">Create</button>
                </div>
            </form>
        </div>
    </div>

    <script>

    const contentInput = document.getElementById('content');

    const toolbar = [
        
        [{'header':['1','2','3']},{size: []}],
        ['bold', 'italic', 'underline', 'strike', 'blockquote'],
        [{'list': 'ordered'}, {'list': 'bullet'}, 
        {'indent': '-1'}, {'indent': '+1'}],
        [{'direction':'rtl'}],
        [{'align':[]}],
        [{'color':[]},{'background':[]}],
        ['link', 'image', 'video'],
        ['clean']
    ];

    const quill = new Quill('#editor',{
        theme: 'snow',
        modules: {
            toolbar
        },
        placeholder: 'Write your content here...'
    })


    quill.on('text-change', function(delta, oldDelta, source) {
        contentInput.value = quill.root.innerHTML;
    });

    /** Save Post */
    const form = document.getElementById('form-blog');
    const saveBtn = document.getElementById('save');
    const title = document.getElementById('title');
    const content = document.getElementById('content');

    saveBtn.addEventListener('click', function(e){
        e.preventDefault();
        if(title.value.trim() === '' || content.value.trim() === ''){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Title and Content cannot be empty!',
            });
            return;
        }
        form.submit();
    });

    </script>
</body>
</html>