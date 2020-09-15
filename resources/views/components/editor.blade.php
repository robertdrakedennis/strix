<div id="editor"></div>

@once
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
@endPush
@endOnce

@push('scripts')
    <script>
        var editor = new EditorJS({
            holder: 'editor',
            onChange: function() {
                editor.save().then((savedData) => {
                    console.log(JSON.stringify(savedData));

                    document.getElementById("input").value = JSON.stringify(savedData);
                });
            }
        });
    </script>
@endpush
