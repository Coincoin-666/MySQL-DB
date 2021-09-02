// Toast Boostrap qui marche mais qui se barre pas

var toastElList = [].slice.call(document.querySelectorAll('.toast'))
var toastList = toastElList.map(function (toastEl) {
  return new bootstrap.Toast(toastEl, option)
});

var toastModif = document.getElementById('toastModif')
toastModif.addEventListener('show.bs.toast', function () {
  toastModif.show('true');
  toastModif.animation('true');
  toastModif.autohide('true');
  toastModif.delay('6666')
});
