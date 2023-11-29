const dropContainer = document.getElementById("add-files")
const dropContainer2 = document.getElementById("add-files2")
const dropContainer3 = document.getElementById("add-files3")
const fileInput = document.getElementById("images")

dropContainer.addEventListener("dragover", (e) => {
  // prevent default to allow drop
  e.preventDefault()
}, false)

dropContainer.addEventListener("dragenter", () => {
  dropContainer.classList.add("drag-active")
})

dropContainer.addEventListener("dragleave", () => {
  dropContainer.classList.remove("drag-active")
})

dropContainer.addEventListener("drop", (e) => {
  e.preventDefault()
  dropContainer.classList.remove("drag-active")
  fileInput.files = e.dataTransfer.files
})

if (!!dropContainer2) {
  dropContainer2.addEventListener("dragover", (e) => {
    // prevent default to allow drop
    e.preventDefault()
  }, false)
  
  dropContainer2.addEventListener("dragenter", () => {
    dropContainer2.classList.add("drag-active")
  })
  
  dropContainer2.addEventListener("dragleave", () => {
    dropContainer2.classList.remove("drag-active")
  })
  
  dropContainer2.addEventListener("drop", (e) => {
    e.preventDefault()
    dropContainer2.classList.remove("drag-active")
    fileInput.files = e.dataTransfer.files
  })
}

if (!!dropContainer3) {
  dropContainer3.addEventListener("dragover", (e) => {
    // prevent default to allow drop
    e.preventDefault()
  }, false)
  
  dropContainer3.addEventListener("dragenter", () => {
    dropContainer3.classList.add("drag-active")
  })
  
  dropContainer3.addEventListener("dragleave", () => {
    dropContainer3.classList.remove("drag-active")
  })
  
  dropContainer3.addEventListener("drop", (e) => {
    e.preventDefault()
    dropContainer3.classList.remove("drag-active")
    fileInput.files = e.dataTransfer.files
  })
}