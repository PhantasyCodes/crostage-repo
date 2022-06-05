document.querySelectorAll(".drop-zone-input").forEach(inputElement => {
    const dropZoneElement = inputElement.closest(".drop-box");

    dropZoneElement.addEventListener("click", e => {
        inputElement.click();
    })

    inputElement.addEventListener("change", e => {
        if (inputElement.files.length) {
            updateOverlay(dropZoneElement, inputElement.files[0]);
        }
    })

    dropZoneElement.addEventListener("dragover", e => {
        e.preventDefault();
        dropZoneElement.classList.add("drop-box-over");
    });

    ["dragleave", "dragend"].forEach(type => {
        dropZoneElement.addEventListener(type, e=> {
            dropZoneElement.classList.remove("drop-box-over")
        })
    });

    dropZoneElement.addEventListener("drop", e => {
        e.preventDefault();
        if(e.dataTransfer.files.length) {
            inputElement.files = e.dataTransfer.files;
            updateOverlay(dropZoneElement, e.dataTransfer.files[0]);
        }

        dropZoneElement.classList.remove("drop-box-over");
    });
    });

    function updateOverlay(dropZoneElement, file) {
        let overlayElement = dropZoneElement.querySelector(".drop-box-overlay");

        if (dropZoneElement.querySelector(".drop-box-prompt")) {
            dropZoneElement.querySelector(".drop-box-prompt").remove();
        }

        if (!overlayElement) {
            overlayElement = document.createElement("div");
            overlayElement.classList.add("drop-box-overlay");
            dropZoneElement.appendChild(overlayElement);
        }

        if (file.type.startsWith("image/")) {
            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = () => {
                overlayElement.style.backgroundImage = `url('${ reader.result }')`;
            }
        }
    }