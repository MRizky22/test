const deleteMod = document.getElementById('deleteMod')
const confirm = document.getElementById('confirm')

deleteMod.addEventListener('shown.bs.modal', () => {
  confirm.focus()
})
