import './bootstrap';
import Dropzone from 'dropzone';

const dropzone = new Dropzone("#dropzone", {
    dictDefaultMessage: "Arrastra tu imagen o haz click para subirla",
    maxFiles: 1,
    addRemoveLinks: true,
    acceptedFiles: ".png,.jpg,.jpeg,.gif",
    dictRemoveFile: "Eliminar",
    maxFilesize: 5,
    uploadMultiple: false,

    init: function() {
        if(document.querySelector('[name="image"]').value.trim()) {
            const img = {}
            img.size = 1234
            img.name = document.querySelector('[name="image"]').value
            this.options.addedfile.call(this, img)
            this.options.thumbnail.call(this, img, `/uploads/${img.name}`)
            img.previewElement.classList.add('dz-success')
            img.previewElement.classList.add('dz-complete')
        }
    }
})

dropzone.on('success', (file, response) => {
    //console.log(file)
    console.log(response.image)
    document.querySelector('[name="image"]').value = response.image
})

dropzone.on('removedfile', () => {
    console.log('Archivo eliminado')

})

dropzone.on('removedfile', () => {
    document.querySelector('[name="image"]').value = ''
})